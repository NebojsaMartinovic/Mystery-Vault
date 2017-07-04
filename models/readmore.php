<?php 
class ReadModel extends Model{
	public function Index(){
	//pomocu superglobalne $_GET prihvatamo prosledjeni parametar iz url-a i radimo upit u bazu
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		//upit iz tabele images
		$this->query("SELECT * FROM images WHERE img_id = {$id}");
		$rows = $this->resultSet();
		//upit iz tabele comments
		$this->query("SELECT * FROM comments WHERE comm_id = {$id}");
		$row = $this->single();
		//dobijeni rezultat iz upita smestamo u sesiju
		if ($row) {
			$_SESSION['name'] = $row['name'];
			$_SESSION['comment'] = $row['comment'];
		}
		
		//proveravamo da li je forma submitovana i zatim radimo upit u bazu i redirektujemo korisnika
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if(isset($post['submit'])) {
			$this->query("INSERT INTO comments (name,comment,comm_id) VALUES (:name, :comment, :comm_id)");
			$this->bind(':name',$post['name']);
			$this->bind(':comment',$post['comment']);
			$this->bind(':comm_id',$_GET['id']);
			$this->execute();
			//verify
			if ($this->lastInsertId()) {
				//redirect
				header('Location: '.ROOT_URL);
			}
		}

		return $rows;
		}

	}
	
}		


 ?>
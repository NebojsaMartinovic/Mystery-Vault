<?php 
class ReadModel extends Model{
	public function Index(){
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$this->query("SELECT * FROM images WHERE img_id = {$id}");
		$rows = $this->resultSet();
		$this->query("SELECT * FROM comments WHERE comm_id = {$id}");
		$row = $this->single();
		if ($row) {
			$_SESSION['name'] = $row['name'];
			$_SESSION['comment'] = $row['comment'];
		}
		

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
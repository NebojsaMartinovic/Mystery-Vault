<?php 
class ShareModel extends Model{
	//u ovom slucaju nam metoda pokazuje sve postove iz tabele shares po datumu kreiranja u opadajucem redu
	public function Index(){
		$this->query('SELECT * FROM shares ORDER BY create_date DESC');
		$rows = $this->resultSet();
		$this->query("SELECT * FROM shares,users WHERE shares.user_id = users.id");
		$rows = $this->resultSet();

		return $rows;
	}
	//metoda koja 
	public function Add(){
		//filter_input_array kupi sve vrednosti iz inputa i cisti ih, input_post je tip koji se ocekuje a         //filter_sanitize_string skida sve tagove
		//sanitize post
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		//ako je forma poslata proveravamo uneta polja da li su prazna,ako jesu izbacujemo poruku, a ako nisu vrsimo upit u bazu i unos unetih podataka
		if ($post['submit']) {
			if ($post['title'] == '' || $post['body'] == '') {
				Messages::setMsg('Please fill in all fields!','error');
				return;
			}
			//insert into mysql
			$this->query('INSERT INTO shares (title, body, user_id) VALUES (:title, :body, :user_id)');
			$this->bind(':title', $post['title']);
			$this->bind(':body', $post['body']);
			$this->bind(':user_id', $post['id']);
			$this->execute();

			//verify
			if ($this->lastInsertId()) {
				//redirect
				header('Location: '.ROOT_URL.'shares');
			}
		}
		return;
	}
}


 ?>

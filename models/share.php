<?php 
class ShareModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM shares ORDER BY create_date DESC');
		$rows = $this->resultSet();
		return $rows;
	}
	public function Add(){
		//sanitize post
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if ($post['submit']) {
			if ($post['title'] == '' || $post['body'] == '') {
				Messages::setMsg('Please fill in all fields!','error');
				return;
			}
			//insert into mysql
			$this->query('INSERT INTO shares (title, body, user_id) VALUES (:title, :body, :user_id)');
			$this->bind(':title', $post['title']);
			$this->bind(':body', $post['body']);
			$this->bind(':user_id', 1);
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

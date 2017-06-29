<?php 
class AdminModel extends Model{
		public function Index(){
			return;
		}
	    public function Duser(){
			$this->query("SELECT * FROM users");
			$rows = $this->resultSet();
			

			if (isset($_POST['deleted_user'])) {
				$this->query("DELETE FROM users WHERE id = ".$_POST['deleted']);
				$row = $this->single();
				if ($row) {
					
				}
				header('Location: '.ROOT_URL.'admin/duser');
			}

			return $rows;
		}
	    public function Euser(){
			$this->query("SELECT * FROM users");
			$rows = $this->resultSet();

			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$password = md5($post['password'] . 'somestring');
			if (isset($post['edited_user'])) {
				$this->query("UPDATE users SET name = :name, email = :email, password = :password WHERE id = ".$post['edited']);
				$this->bind(':name', $post['name']);
				$this->bind(':email', $post['email']);
				$this->bind(':password', $password);
				$this->execute();
				if ($this->lastInsertId()) {
				//redirect
				
			}
			header('Location: '.ROOT_URL.'admin/euser');
				
			}

			return $rows;
		}
		public function Dshare(){
			$this->query("SELECT * FROM shares");
			$rows = $this->resultSet();
			

			if (isset($_POST['deleted_share'])) {
				$this->query("DELETE FROM shares WHERE id = ".$_POST['deleted_s']);
				$row = $this->single();
				if ($row) {
					
				}
				header('Location: '.ROOT_URL.'admin/dshare');
			}

			return $rows;
		}
		public function Eshare(){
			$this->query("SELECT * FROM shares");
			$rows = $this->resultSet();
			
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			if (isset($post['edited_share'])) {
				$this->query("UPDATE shares SET title = :title, body = :body, user_id = :user_id WHERE id = ".$post['edited_s']);
				$this->bind(':title', $post['title']);
				$this->bind(':body', $post['body']);
				$this->bind(':user_id', $post['user_id']);
				$this->execute();
				if ($this->lastInsertId()) {
				//redirect
				
			}
			header('Location: '.ROOT_URL.'admin/eshare');
				
			}

			return $rows;
		}
		public function Dmessage(){
			$this->query("SELECT * FROM messages");
			$rows = $this->resultSet();
			

			if (isset($_POST['deleted_msg'])) {
				$this->query("DELETE FROM messages WHERE id = ".$_POST['deleted_m']);
				$row = $this->single();
				if ($row) {
					
				}
				header('Location: '.ROOT_URL.'admin/dmessage');
			}

			return $rows;
		}
		public function Emessage(){
			$this->query("SELECT * FROM messages");
			$rows = $this->resultSet();
			
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			if (isset($post['edited_msg'])) {
				$this->query("UPDATE messages SET name = :name, title = :title, email = :email, body = :body, user_id = :user_id WHERE id = ".$post['edited_m']);
				$this->bind(':name', $post['name']);
				$this->bind(':title', $post['title']);
				$this->bind(':email', $post['email']);
				$this->bind(':body', $post['body']);
				$this->bind(':user_id', $post['user_id']);
				$this->execute();
				if ($this->lastInsertId()) {
				//redirect
				
			}
			header('Location: '.ROOT_URL.'admin/emessage');
				
			}

			return $rows;
		}
		public function Dcomment(){
			$this->query("SELECT * FROM comments");
			$rows = $this->resultSet();
			

			if (isset($_POST['deleted_com'])) {
				$this->query("DELETE FROM comments WHERE id = ".$_POST['deleted_c']);
				$row = $this->single();
				if ($row) {
					
				}
				header('Location: '.ROOT_URL.'admin/dcomment');
			}

			return $rows;
		}
		public function Ecomment(){
			$this->query("SELECT * FROM comments");
			$rows = $this->resultSet();
			
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			if (isset($post['edited_com'])) {
				$this->query("UPDATE comments SET name = :name, comment = :comment, comm_id = :comm_id WHERE id = ".$post['edited_c']);
				$this->bind(':name', $post['name']);
				$this->bind(':comment', $post['comment']);
				$this->bind(':comm_id', $post['comm_id']);
				$this->execute();
				if ($this->lastInsertId()) {
				//redirect
				
			}
			header('Location: '.ROOT_URL.'admin/ecomment');
				
			}

			return $rows;
		}
		public function Aimage(){
		//sanitize post
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if (isset($post['submit'])) {
			if ($_FILES['img_name']['name']!= '') {
			$image = $_FILES['img_name'];
			$name = $image['name'];
			$nameArray = explode('.', $name);
			$fileName = $nameArray[0];
			$fileExt = $nameArray[1];
			$mime = explode('/', $image['type']);
			$mimeType = $mime[0];
			$mimeExt = $mime[1];
			$tmpLoc = $image['tmp_name'];
			$fileSize = $image['size'];
			$allowed = array('png','jpg','jpeg','gif');
			$uploadName = $fileName.'.'.$fileExt;
			$uploadPath = ROOT_URL.'images/aimage/'.$uploadName;
			$dbpath = $uploadName;
			if ($mimeType != 'image') {
				Messages::setMsg('The file must be an image!','error');
				return;
			}
			if (!in_array($fileExt, $allowed)) {
				Messages::setMsg('The file extension must be png,jpg,jpeg or gif.!','error');
				return;
			}
			if ($fileSize > 15000000) {
				Messages::setMsg('The file size must be under 15MB!','error');
				return;
			}
			if ($fileExt != $mimeExt && ($mimeExt == 'jpeg' && $fileExt != 'jpg')) {
				Messages::setMsg('File extension does not match the file!','error');
				return;
			}
		}
			
			//insert into mysql
			$this->query('INSERT INTO images (img_title, img_intro, img_body, img_name, img_id, cat_title, cat_id) VALUES (:img_title, :img_intro, :img_body, :img_name, :img_id, :cat_title, :cat_id)');
			$this->bind(':img_title', $post['img_title']);
			$this->bind(':img_intro', $post['img_intro']);
			$this->bind(':img_body', $post['img_body']);
			$this->bind(':img_name', $dbpath);
			$this->bind(':img_id', $post['img_id']);
			$this->bind(':cat_title', $post['cat_title']);
			$this->bind(':cat_id', $post['cat_id']);
			$this->execute();
			//verify
			if ($this->lastInsertId()) {
				//redirect
				header('Location: '.ROOT_URL.'admin/aimage');
			}
		}
		return;
	}
		public function Eimage(){
			$this->query("SELECT * FROM images");
			$rows = $this->resultSet();
			
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			if (isset($post['edit_i'])) {
				if ($_FILES['img_name']['name']!= '') {
				$image = $_FILES['img_name'];
				$name = $image['name'];
				$nameArray = explode('.', $name);
				$fileName = $nameArray[0];
				$fileExt = $nameArray[1];
				$mime = explode('/', $image['type']);
				$mimeType = $mime[0];
				$mimeExt = $mime[1];
				$tmpLoc = $image['tmp_name'];
				$fileSize = $image['size'];
				$allowed = array('png','jpg','jpeg','gif');
				$uploadName = $fileName.'.'.$fileExt;
				$uploadPath = ROOT_URL.'images/aimage/'.$uploadName;
				$dbpath = $uploadName;
				if ($mimeType != 'image') {
					Messages::setMsg('The file must be an image!','error');
					return;
				}
				if (!in_array($fileExt, $allowed)) {
					Messages::setMsg('The file extension must be png,jpg,jpeg or gif.!','error');
					return;
				}
				if ($fileSize > 15000000) {
					Messages::setMsg('The file size must be under 15MB!','error');
					return;
				}
				if ($fileExt != $mimeExt && ($mimeExt == 'jpeg' && $fileExt != 'jpg')) {
					Messages::setMsg('File extension does not match the file!','error');
					return;
				}
		}
				$this->query("UPDATE images SET img_title = :img_title, img_intro = :img_intro, img_id = :img_id, img_name = :img_name, cat_title = :cat_title, cat_id = :cat_id WHERE id_image = ".$post['edit']);
				$this->bind(':img_title', $post['img_title']);
				$this->bind(':img_intro', $post['img_intro']);
				$this->bind(':img_id', $post['img_id']);
				$this->bind(':img_name', $dbpath);
				$this->bind(':cat_title', $post['cat_title']);
				$this->bind(':cat_id', $post['cat_id']);
				$this->execute();
				
				if ($this->lastInsertId()) {
				//redirect
				
			}
			header('Location: '.ROOT_URL.'admin/eimage');
				
			}

			return $rows;
		}
		public function Dimage(){
			$this->query("SELECT * FROM images");
			$rows = $this->resultSet();
			

			if (isset($_POST['delete_i'])) {
				$this->query("DELETE FROM images WHERE id_image = ".$_POST['delete']);
				$row = $this->single();
				if ($row) {
					
				}
				header('Location: '.ROOT_URL.'admin/dimage');
			}

			return $rows;
		}


}
	

 ?>
<?php 
class AdminModel extends Model{
		//vracamo bazni pogled sa navigacijskim linkovima i videom kao pozadinom
		public function Index(){
			return;
		}
		//metoda koja brise korisnika
	    public function Duser(){
	    	//vrsimo upit u bazu iz tabele users poredjane u opadajucem nizu
			$this->query("SELECT * FROM users ORDER BY admin DESC");
			$rows = $this->resultSet();
			
			//proveravamo da li je setovana superglobalna post sa parametrom deleted_user iz forme
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
	    	//metoda koja vraca sve rezultate iz baze iz tabele users kako bi ppolja forme bila popunjena podacima iz baze podataka
			$this->query("SELECT * FROM users ORDER BY admin DESC");
			$rows = $this->resultSet();

			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		

			//proveravamo da li je uneseno bilo sta u polje forme sa nazivom password i ako nije ne ubacuje se nista u tabelu, ako jeste hashujemo password
			if (empty($post['password'])) {
				$this->query("SELECT password FROM users WHERE id = ".$post['btn']);
				$row = $this->single();
				$password = $row['password'];
			}else{
				$password = md5($post['password'] . 'somestring');
			}
			//ako je forma submitovana updatujemo podatke iz tabele sa novo unesenim podacima
			if (isset($post['submit'])) {	
				$this->query("UPDATE users SET name = :name, email = :email, password = :password, admin = :admin  WHERE id = ".$post['btn']);
				$this->bind(':name', $post['name']);
				$this->bind(':email', $post['email']);
				$this->bind(':admin', $post['admin']);
				$this->bind(':password', $password);
				$this->execute();
				//posto ne radimo klasicnu redirekciju putem php-a moramo uraditi jos jedan upit kako bi se prikazali promenjeni podaci u tabeli(unos novih podataka se vrsi ajaxom)
				if ($post['btn']) {
					$this->query("SELECT * FROM users ORDER BY admin DESC");
					$rows = $this->resultSet();
				}
				
				/*if ($this->lastInsertId()) {
				//redirect
				
			}
			header('Location: '.ROOT_URL.'admin/euser');
			*/	
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
			//upit koji donosi sve rezultate radi popunjavanja forme
			$this->query("SELECT * FROM shares");
			$rows = $this->resultSet();
			//ukoliko je tabela submitovana vrsimo upit u bazu i zatim redirektujemo korisnika
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
			//upit koji donosi sve rezultate iz tabele messages radi popunjavanja forme
			$this->query("SELECT * FROM messages");
			$rows = $this->resultSet();
			
			//ako je submitovana forma brise se poruka sa id iz baze jednakim onom iz forme
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
		//proveravamo da li je submitovana forma
		if (isset($post['submit'])) {
			//ako je submitovana forma proveravamo da li je uploadovan fajl(slika) kroz formu
			if ($_FILES['img_name']['name']!= '') {
			$image = $_FILES['img_name'];//smestamo uneseni fajl u varijablu
			$name = $image['name'];//smestamo naziv unesenog fajla u varijablu
			$nameArray = explode('.', $name);//razbijamo naziv unesenog fajla po tacki kao separatoru
			$fileName = $nameArray[0];//smestamo naziv fajla iz niza $_FILES u varijablu
			$fileExt = $nameArray[1];//smestamo ekstenziju fajla iz niza $_FILES u varijablu
			$mime = explode('/', $image['type']);//razbijamo mime tip podatka po forward slash i smestamo u varijablu
			$mimeType = $mime[0];//smestamo prvi deo u varijablu
			$mimeExt = $mime[1];//smestamo drugi deo u varijablu
			$tmpLoc = $image['tmp_name'];//smestamo privremenu lokaciju fajla u varijablu
			$fileSize = $image['size'];//smestamo velicinu fajla u varijablu
			$allowed = array('png','jpg','jpeg','gif');//smestamo dozvoljene tipove podatka za upload u niz
			$uploadName = $fileName.'.'.$fileExt;//definisemo kako ce se zvati fajl koji uploadujemo
			$uploadPath = ROOT_URL.'images/aimage/'.$uploadName;//putanja gde cemo smestati fajlove na kompjuteru
			$dbpath = $uploadName;//naziv fajla u bazi podataka
			if ($mimeType != 'image') {//proveravamo da li je mime tip image
				Messages::setMsg('The file must be an image!','error');
				return;
			}
			if (!in_array($fileExt, $allowed)) {//proveravamo da li je ekstenzija fajla u skladu sa dozvoljenim iz niza
				Messages::setMsg('The file extension must be png,jpg,jpeg or gif.!','error');
				return;
			}
			if ($fileSize > 15000000) {//proveravamo velicinu fajla
				Messages::setMsg('The file size must be under 15MB!','error');
				return;
			}
			if ($fileExt != $mimeExt && ($mimeExt == 'jpeg' && $fileExt != 'jpg')) {//proveravamo da li se ekstenzija fajla poklapa sa mime tipom
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
			//proveravamo da li je submitovana forma
			if (isset($post['edit_i'])) {
			//proveravamo da li je unos fajla prazan i ako jeste prikazujemo sliku iz baze koja vec postoji
			if (empty($_FILES['img_name']['name'])) {
				$this->query("SELECT img_name FROM images WHERE id_image = ".$post['edit']);
				$row = $this->single();
				$dbpath = $row['img_name'];
				//ako postoji unos novog fajla ponavljamo korake iz Aimage metode
			}else{
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
<?php 
class UserModel extends Model{
	//metoda za registraciju novih korisnika
	public function register(){
		//sanitize post
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		//prosledjeni password hashujemo pomocu md5 sa dodatkom somestring koji se lepi na md5hash
		$password = md5($post['password'] . 'somestring');
		//proveravamo prazna polja u unosu i ako jesu prikazujemo poruku
		if ($post) {
			if ($post['name'] == '' || $post['email'] == '' || $post['password'] == '') {
				Messages::setMsg('Please fill in all fields!','error');
				return;
			}
			//posle provera i hashovanja passworda radimo upit u bazu i redirektujemo korisnika
			//insert into mysql
			$this->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->execute();
			//verify
			if ($this->lastInsertId()) {
				//redirect
				header('Location: '.ROOT_URL.'users/login');
			}
		}
		return;
	}
	public function login(){
		//metoda koja loguje korisnika ukoliko se unsesni podaci iz tabele i postojeci podaci u bazi podudaraju
			//sanitize post
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$password = md5($post['password'] . 'somestring');
		

		if ($post['submit']) {
			//compare login
			//ako se poklapaju podaci iz upita vrsimo upit u bazu
			$this->query('SELECT * FROM users WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);

			//ako je kolona admin jednaka 1 dodeljujemo u sesiju koja ce nam sluziti za proveru da li je korisnik admin.Ako jeste otvara mu se u navigaciji link ka admin dashboardu
			$row = $this->single();
			if($row['admin']==1){
				$_SESSION['admin'] = $row['admin'];
			}

			if ($row) {
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
						'id' => $row['id'],
						'name' => $row['name'],
						'email' => $row['email']

					);

				header('Location: '.ROOT_URL.'shares');
			}else{
				Messages::setMsg('Incorrect Login','error');
			}
		}
		return;
	
	
	}
}


 ?>
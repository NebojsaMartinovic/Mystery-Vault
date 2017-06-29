<?php 
class ContactModel extends Model{
	public function Index(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if ($post['submit']) {
			if ($post['name'] == '' || $post['title'] == '' || $post['email'] == '' || $post['body'] == '') {
				Messages::setMsg('Please fill in all fields!','error');
				return;
			}
			 $email = trim($post['email']);
	        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	          Messages::setMsg('You must enter a valid email!','error');
	          return;
		      }else{
		      	/*to send email on localhost you need to change settings in php.ini(SMTP=smtp.gmail.com
				smtp_port=587
				sendmail_from = my-gmail-id@gmail.com
				sendmail_path = "\"C:\wamp\www\sendmail\sendmail.exe\" -t")
				*/
		      	//mail("martinovn1975@gmail.com", "Contact from the site", $post['body'], "From: $email\r\n");
		      }
		     
			//insert into mysql
			$this->query('INSERT INTO messages (name, title, email, body, user_id) VALUES (:name, :title, :email, :body, :user_id)');
			$this->bind(':name', $post['name']);
			$this->bind(':title', $post['title']);
			$this->bind(':email', $post['email']);
			$this->bind(':body', $post['body']);
			$this->bind(':user_id', 1);
			$this->execute();
		    //verify
			if ($this->lastInsertId()) {
				Messages::setMsg('Your message has been sent!','success');
		      	return;
				//redirect
				header('Location: '.ROOT_URL.'contact');
			}
		}
	return;
	}
}


?>
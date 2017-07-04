<?php 
//klasa sa statickim metodama koje se mogu pozivati bez instanciranja same klase kojoj pripadaju
class Messages{
	//u ovoj metodi setujemo poruku koja ce po prosledjenom parametru izbacivati poruku
	public static function setMsg($text,$type){
		if ($type == 'error') {
			$_SESSION['errorMsg'] = $text;
		}else{
			$_SESSION['successMsg'] = $text;
		}
	}
	//metoda koja prikazuje poruku na mestu poziva
	public static function display(){
		if (isset($_SESSION['errorMsg'])) {
			echo "<div class='error'>".$_SESSION['errorMsg']."</div>";
			unset($_SESSION['errorMsg']);
		}
		if (isset($_SESSION['successMsg'])) {
			echo "<div class='success'>".$_SESSION['successMsg']."</div>";
			unset($_SESSION['successMsg']);
		}
	}
}


 ?>
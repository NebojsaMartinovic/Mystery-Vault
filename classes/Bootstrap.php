<?php
//Klasa Bootstrap je klasa koja procesuira zahteve korisnika kroz url.Usmerava request po zadatim parametrima,
//kao get parametar za kontroler,akciju(metod) i id
class Bootstrap{
	private $controller;
	private $action;
	private $request;
//konstruktor prihvata zahtev kao request iz url i pokrece se automatski kada instanciramo klasu
//dodeljujemo vrednost poslatog zahteva varijabli request koju smo definisali kao private
//zatim proveravamo kontroler i ako je prazan ucitavamo 'home' kontroler a ako nije upucujemo ga na ubacen kontroller
//isto radimo i za metod
	public function __construct($request){
		$this->request = $request;
		if ($this->request['controller'] == '') {
			$this->controller = 'home';
		}else{
			$this->controller = $this->request['controller'];
		} 
		if ($this->request['action'] == '') {
			$this->action = 'index';
		}else{
			$this->action = $this->request['action'];
		}

	}
//proveravamo da li je kontroler koji smo dobili kroz url klasa pomocu metode class_exists()
//metoda class_parents vraca roditeljsku klasu date klase
//metodom in_array proveravamo da li metod postoji u nizu i ako postoji instanciramo novi kontroler sa novom metodom
	public function createController(){
		//check class
		if (class_exists($this->controller)) {
			$parents = class_parents($this->controller);
			//check extend
			if (in_array("Controller", $parents)) {
				if (method_exists($this->controller, $this->action)) {
					return new $this->controller($this->action, $this->request);
				}else{
					//method does not exist
					echo "<h1>Method does not exist</h1>";
					return;
				}
			}else{
				//base controller does not exist
					echo "<h1>Base controller not found</h1>";
					return;
			}
		}
		else{
			//controller class does not exist
					echo "<h1>Controller class does not exist</h1>";
					return;
		}
	}
}



 ?>
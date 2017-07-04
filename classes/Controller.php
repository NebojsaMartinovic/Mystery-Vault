<?php 
//pravimo apstraktnu klasu koju necemo instancirati vec cemo je samo koristiti kao sablon za druge klase
//svaki novi kontroler koji napravimo ce naslediti ovu klasu
abstract class Controller{
	protected $request;
	protected $action;

	public function __construct($action, $request){
		$this->action = $action;
		$this->request = $request;
	}

	public function executeAction(){
		return $this->{$this->action}();
	}
//metod returnView omogucava da dodelimo novi view u kontroler, pravimo novi custom view i smestamo ga u folder koji mora imati isto ime kao i klasa a zatim ga pozivamo ovom metodom
	protected function returnView($viewmodel, $fullview){
		$view = 'views/'. get_class($this). '/' . $this->action . '.php';
		if ($fullview) {
			require 'views/main.php';
		}else{
			require $view;
		}
	}
}



 ?>
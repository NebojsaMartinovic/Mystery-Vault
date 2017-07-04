<?php 
//pravimo novi kontroler koji nasledjuje klasu Controller.metod Index cemo koristiti na svakoj strani gde zelimo da prikazemo sadrzaj pocetne strane, true je za $fullview koji je main.php
//iz home modela preko ovog kontrolera vracamo pogled sa upitom iz baze iz modela
class Home extends Controller{
	protected function Index(){
		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->Index(), true);
	}
	
}


 ?>
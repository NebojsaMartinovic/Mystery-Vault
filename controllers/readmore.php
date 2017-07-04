<?php 
class Readmore extends Controller{
	protected function Index(){
		$viewmodel = new ReadModel();
		$this->returnView($viewmodel->Index(), true);
	}

}


 ?>
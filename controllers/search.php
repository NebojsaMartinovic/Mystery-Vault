<?php 
class Search extends Controller{
	protected function Index(){
		$viewmodel = new SearchModel();
		$this->returnView($viewmodel->Index(), true);
	}
}


 ?>
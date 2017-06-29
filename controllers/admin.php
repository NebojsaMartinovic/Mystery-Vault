<?php 
class Admin extends Controller{
	protected function Index(){
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->Index(), true);
	}
	protected function Duser(){
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->Duser(), true);
	}
	protected function Euser(){
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->Euser(), true);
	}
	protected function Dshare(){
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->Dshare(), true);
	}
	protected function Eshare(){
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->Eshare(), true);
	}
	protected function Dmessage(){
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->Dmessage(), true);
	}
	protected function Emessage(){
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->Emessage(), true);
	}
	protected function Dcomment(){
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->Dcomment(), true);
	}
	protected function Ecomment(){
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->Ecomment(), true);
	}
	protected function Aimage(){
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->Aimage(), true);
	}
	protected function Eimage(){
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->Eimage(), true);
	}
	protected function Dimage(){
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->Dimage(), true);
	}

	

	protected function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		//redirect
		header('Location: '.ROOT_URL);
	}
}


 ?>
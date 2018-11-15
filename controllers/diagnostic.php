<?php
class diagnostic extends Controller{
	protected function index(){
		
		$viewmodel = new DiagnosticModel();
		$this->returnViewDG($viewmodel->index(), true);
	}
	protected function search(){
		
		$viewmodel = new DiagnosticModel();
		$this->returnViewDG($viewmodel->search(), true);
	}


	protected function register(){
		$viewmodel = new DiagnosticModel();
		$this->returnViewDG($viewmodel->register(), true);
	}

	protected function login(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		//session_destroy();
		//session_start();
		$viewmodel = new DiagnosticModel();
		$this->returnViewDG($viewmodel->login(), true);
	}

	protected function profile(){
		
		
		if(isset($_SESSION['dg_is_logged_in'])){
			$viewmodel = new DiagnosticModel();		
			$this->returnViewDG($viewmodel->profile(), true);	 	
	 	}else{
	 		header('Location: '.ROOT_URL. "diagnostic/login");
	 	}
	 	return;
		

	}
	protected function records(){
		
		
		if(isset($_SESSION['dg_is_logged_in'])){
			$viewmodel = new DiagnosticModel();		
			$this->returnViewDG($viewmodel->records(), true);	 	
	 	}else{
	 		header('Location: '.ROOT_URL. "diagnostic/login");
	 	}
	 	return;
		

	}
	protected function logout(){
		unset($_SESSION['dg_is_logged_in']);
		unset($_SESSION['dg_data']);
		session_destroy();
		// Redirect
		header('Location: '.ROOT_URL."diagnostic/index");
	}
}
?>
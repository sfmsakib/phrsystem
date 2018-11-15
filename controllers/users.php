<?php
class users extends Controller{
	protected function register(){
		$viewmodel = new UsersModel();
		$this->returnView($viewmodel->register(), true);
	}

	protected function login(){
		unset($_SESSION['dg_is_logged_in']);
		unset($_SESSION['dg_data']);
		
		$viewmodel = new UsersModel();
		$this->returnView($viewmodel->login(), true);
	}

	protected function profile(){
		
		
		if(isset($_SESSION['is_logged_in'])){
			$viewmodel = new UsersModel();		
			$this->returnView($viewmodel->profile(), true);	 	
	 	}else{
	 		header('Location: '.ROOT_URL. "users/"."login");
	 	}
	 	return;
		

	}
	protected function record(){
		
		
		if(isset($_SESSION['is_logged_in'])){
			$viewmodel = new UsersModel();		
			$this->returnView($viewmodel->record(), true);	 	
	 	}else{
	 		header('Location: '.ROOT_URL. "users/"."login");
	 	}
	 	return;
		

	}
	protected function viewrecord(){
		
		
		if(isset($_SESSION['is_logged_in'])){
			$viewmodel = new UsersModel();		
			$this->returnView($viewmodel->viewrecord(), true);	 	
	 	}else{
	 		header('Location: '.ROOT_URL. "users/"."login");
	 	}
	 	return;
		

	}

	protected function bptable(){
		$viewmodel = new UsersModel();
		$this->returnView($viewmodel->tableview(), true);
	}
	protected function wttable(){
		$viewmodel = new UsersModel();
		$this->returnView($viewmodel->tableview(), true);
	}
	protected function httable(){
		$viewmodel = new UsersModel();
		$this->returnView($viewmodel->tableview(), true);
	}
	protected function dreg_login(){
		$viewmodel = new UsersModel();
		$this->returnView($viewmodel->dreg_login(), true);
		
	}


	protected function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		// Redirect
		header('Location: '.ROOT_URL);
	}
}
?>
<?php
class doctors extends Controller{
	protected function index(){
		
		$viewmodel = new DoctorsModel();
		$this->returnViewDR($viewmodel->index(), true);
	}
	protected function search(){
		
		$viewmodel = new DoctorsModel();
		$this->returnViewDR($viewmodel->search(), true);
	}


	protected function dlogin(){
		$viewmodel = new UsersModel();
		$this->returnViewDR($viewmodel->dlogin(), true);
		
	}

	protected function signup(){
	if (isset($_SESSION['dr_is_logged_in'])) {
	 		header('Location: '.ROOT_URL. "doctors/profile");
	}else{
		if(isset($_SESSION['is_logged_in'])){
			$viewmodel = new DoctorsModel();
			$this->returnViewDR($viewmodel->signup(), true); 	
	 	}else{
	 		header('Location: '.ROOT_URL. "doctors/dlogin");
	 	}
	}
		
	 	return;
	}

	protected function profile(){
		
		
		if(isset($_SESSION['is_logged_in'])){
			$viewmodel = new DoctorsModel();		
			$this->returnViewDR($viewmodel->profile(), true);	 	
	 	}else{
	 		header('Location: '.ROOT_URL. "users/login");
	 	}
	 	return;
		

	}
	protected function patientdata(){
		
		
		if(isset($_SESSION['patient_data_access'])){
			$viewmodel = new DoctorsModel();		
			$this->returnViewDR($viewmodel->patientdata(), true);	 	
	 	}else{
	 		header('Location: '.ROOT_URL. "doctors/profile");
	 	}
	 	return;
		

	}
	protected function patientrecords(){
		
		
		if(isset($_SESSION['patient_data_access'])){
			$viewmodel = new DoctorsModel();		
			$this->returnViewDR($viewmodel->patientrecords(), true);	 	
	 	}else{
	 		header('Location: '.ROOT_URL. "doctors/profile");
	 	}
	 	return;
		

	}
	protected function patviewrecords(){
		
		
		if(isset($_SESSION['patient_data_access'])){
			$viewmodel = new DoctorsModel();		
			$this->returnViewDR($viewmodel->patviewrecords(), true);	 	
	 	}else{
	 		header('Location: '.ROOT_URL. "doctors/profile");
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
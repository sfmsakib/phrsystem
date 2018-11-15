<?php
class input extends Controller{
	//protected function Index(){
	//	$viewmodel = new inputModel();
	//	$this->returnView($viewmodel->Index(), true);
	//}

	protected function bpinput(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/pleaselogin');
		}
		$viewmodel = new InputModel();
		$this->returnView($viewmodel->bpinput(), true);
	}
	protected function patbpinput(){
		if(!isset($_SESSION['patient_data_access'])){
			header('Location: '.ROOT_URL.'users/pleaselogin');
		}
		$viewmodel = new DoctorsModel();
		$this->returnViewDR($viewmodel->patbpinput(), true);
	}
	protected function wtinput(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/pleaselogin');
		}
		$viewmodel = new InputModel();
		$this->returnView($viewmodel->wtinput(), true);
	}
	protected function htinput(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/pleaselogin');
		}
		$viewmodel = new InputModel();
		$this->returnView($viewmodel->htinput(), true);
	}
	protected function addrecorduser(){
		if(isset($_SESSION['is_logged_in'])){
			$viewmodel = new InputModel();		
			$this->returnView($viewmodel->addrecorduser(), true);	 	
	 	}else{
	 		header('Location: '.ROOT_URL. "users/"."login");
	 	}
	 	return;
	}
	protected function addrecorddg(){
		
		
		if(isset($_SESSION['dg_is_logged_in'])){
			$viewmodel = new InputModel();		
			$this->returnViewDG($viewmodel->addrecorddg(), true);	 	
	 	}else{
	 		header('Location: '.ROOT_URL. "diagnostic/"."login");
	 	}
	 	return;
		

	}
	protected function addrecorddr(){
		
		
		if(isset($_SESSION['patient_data_access'])){
			$viewmodel = new InputModel();		
			$this->returnViewDR($viewmodel->addrecorddr(), true);	 	
	 	}else{
	 		header('Location: '.ROOT_URL. "doctors/"."profile");
	 	}
	 	return;
		

	}
	protected function updatepic(){
		
		
		if(isset($_SESSION['is_logged_in'])){
			$viewmodel = new InputModel();		
			$this->returnView($viewmodel->updatepic(), true);	 	
	 	}else{
	 		header('Location: '.ROOT_URL. "users/"."login");
	 	}
	 	return;
		

	}
}
?>
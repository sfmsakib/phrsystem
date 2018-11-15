<?php
class home extends Controller{
	protected function index(){
		
		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->index(), true);
	}
	protected function hcprovider(){
		
		$viewmodel = new HomeModel();
		$this->returnViewDG($viewmodel->index(), true);
	}
	protected function en(){
		
	}
}
?>
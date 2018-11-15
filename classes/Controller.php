<?php
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

	protected function returnView($viewmodel, $fullview){
		$boot = new Boot($_GET);
		$lang=$boot->language;
		//print_r($lang);
		if ($lang=='en') {
			$view = 'views/en/'. get_class($this). '/' . $this->action. '.php';
			if($fullview){
				require('views/en/main.php');
			} else {
				require($view);
			}	

		}elseif ($lang=='bn') {
			$view = 'views/bn/'. get_class($this). '/' . $this->action. '.php';
			if($fullview){
				require('views/bn/main.php');
			} else {
				require($view);
			}
		}else{
			echo "This Page is not found";
		}

	}
	protected function returnViewDG($viewmodel, $fullview){
			$boot = new Boot($_GET);
			$lang=$boot->language;

		if ($lang=='en') {		
				$view = 'views/en/'. get_class($this). '/' . $this->action. '.php';
				if($fullview){
					require('views/en/dgmain.php');
				} else {
					require($view);
				}
			
		}elseif ($lang=='bn') {
			$view = 'views/bn/'. get_class($this). '/' . $this->action. '.php';
				if($fullview){
					require('views/bn/dgmain.php');
				} else {
					require($view);
				}
		}else{
			echo "This Page is not found";
		}
	}
	protected function returnViewDR($viewmodel, $fullview){
			$boot = new Boot($_GET);
			$lang=$boot->language;

		if ($lang=='en') {		
				$view = 'views/en/'. get_class($this). '/' . $this->action. '.php';
				if($fullview){
					require('views/en/drmain.php');
				} else {
					require($view);
				}
			
		}elseif ($lang=='bn') {
			$view = 'views/bn/'. get_class($this). '/' . $this->action. '.php';
				if($fullview){
					require('views/bn/drmain.php');
				} else {
					require($view);
				}
		}else{
			echo "This Page is not found";
		}
	}
	protected function returnView1($viewmodel1, $fullview){
		$view = 'views/'. get_class($this). '/' . $this->action. '.php';
		$view1 = 'views/'. get_class($this). '/' . $this->action. '.php';

		if($fullview){
			require('views/main.php');
		} else {
			require($view);
		}
	}
}
?>
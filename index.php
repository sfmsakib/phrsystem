<?php
// Start Session
session_start();

// Include Config

require('classes/Messages.php');
require('classes/Boot.php');
require('classes/Controller.php');
require('classes/Model.php');
require('config.php');

require('controllers/home.php');
require('controllers/input.php');
require('controllers/users.php');
require('controllers/diagnostic.php');
require('controllers/doctors.php');

require('models/home.php');
require('models/input.php');
require('models/users.php');
require('models/diagnostic.php');
require('models/doctors.php');

	$boot = new Boot($_GET);	
	$controller = $boot->createController();
	if($controller){
		$controller->executeAction();
	}
//print_r($boot);		
//$lang=$boot->language;
//print_r($lang);
//if ($lang=='en'){	}
//} else{
//	echo "string";
//}

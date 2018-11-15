<?php
$boot = new Boot($_GET);
    $lang=$boot->language;
   // $controller=$boot->controller;
    //$action=$boot->action;
    //$id=$_GET['id'];
    //print_r($boot);

// Define DB Params
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "phr");

// Define URL
define("ROOT_PATH", "/phr/");
define("ROOT_URL", "http://localhost/phr/$lang/");
define("ROOT_URL_PREV", "http://localhost/phr/");
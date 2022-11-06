<?php
define('ROOTPATH',realpath(__DIR__.'/../'));
define('CURRENT_FOLDER_NAME',basename(realpath(__DIR__.'/../')));  // /VAR/WWW/HTML/TASK
// define('BASE_URL', '/'.CURRENT_FOLDER_NAMEROOT.'/');   // /TASK/  
// define('BASE_URL_CSS', '/'.CURRENT_FOLDER_NAME.'/css/');
// define('BASE_URL_IMG', '/'.CURRENT_FOLDER_NAME.'/images/');
// 


define('BASE_URL', 'http://localhost/dashboard/Task/');
define('BASE_URL_CSS', BASE_URL.'css/');
define('BASE_URL_IMG', BASE_URL.'images/');

// echo BASE_URL;
define('VIEW_PATH',ROOTPATH.'/views/');  //VAR/WWW/HTML/NEW FOLDER/TASK/VIEWS/
define('IMAGE_PATH',ROOTPATH.'/images/');
// echo VIEW_PATH;
define('CONTROLLER_PATH',ROOTPATH.'/contoller/');
define('MODEL_PATH',ROOTPATH.'/model/');
define('CONFIG_PATH',__dir__.'/');
define('ASSETS_PATH',__dir__.'/');
// define('MODEL_PATH',ROOTPATH.'MODEL/');


?>
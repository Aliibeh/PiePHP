<?php

function autoload($class){
	$class = str_replace('\\', '/', $class);
	if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/PiePHP/'. $class . '.php')){
		include_once($_SERVER['DOCUMENT_ROOT'] . '/PiePHP/'. $class . '.php');
	}
	
}
spl_autoload_register('autoload');
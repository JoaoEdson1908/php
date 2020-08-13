<?php

spl_autoload_register(function($class){
	if (file_exists("class" . DIRECTORY_SEPARATOR . $class . ".php")){
		require_once("class" . DIRECTORY_SEPARATOR . $class . ".php");
	}

});

?>
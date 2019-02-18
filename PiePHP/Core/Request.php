<?php

namespace Core;

class Request{
	
	public function secure(){
		foreach ($_POST as $value) {
			$value= trim($value);
			$value = htmlspecialchars($value);
			$value = stripslashes($value);
		}
	}
}
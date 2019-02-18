<?php

namespace Core;
use src\Model\TestModel;
use Core\ORM;

class Entity{

	public function read(){
		$user = new ORM();
		$user->read();
	}

}
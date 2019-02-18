<?php

namespace src\Controller;
use src\Model\TestModel;
use Core\Core;
use Core\Controller;
use \PDO;

class AppController extends Controller{

	public function registerAction(){
		$this->render('../User/register');
		$user = new TestModel();
		$user->read('users');
	}
}
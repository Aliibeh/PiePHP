<?php

namespace Core;
use Core\Core;
use Core\Database;
use \PDO;

class ORM{


	public function create($table, $fields){
		$data = implode(',', array_keys($fields));
		$values = implode(',', $fields);

		$req = Database::$bdd->prepare('INSERT INTO' . $table . '('.$data.')' . 'VALUES('.$values.')');
		$req->execute();
	}

	public function read(){
		$req = Database::$bdd->prepare('SELECT * FROM users');
		$req->execute();
	}

	public function update($table, $id, $fields){
		parent::update();
	}

	public function delete($table, $id){
		parent::delete();
	}

	public function find($table, $params=['WHERE'=>'1', 'ORDER BY'=>'id ASC', 'LIMIT'=>'']){

	}
}
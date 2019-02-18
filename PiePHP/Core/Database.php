<?php

namespace Core;
use \PDO;

class Database{

	public static $bdd;
	public static $dbHost = 'localhost';
	public static $dbName = 'piephp';
	public static $dbUser = 'root';
	public static $dbPass = '';

	public function __construct(){
		$bdd = new PDO('mysql:host='.self::$dbHost.';dbname='.self::$dbName, self::$dbUser, self::$dbPass);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		self::$bdd = $bdd;
	}
}
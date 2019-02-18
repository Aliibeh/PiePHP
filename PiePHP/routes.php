<?php

namespace Core;

// require_once $_SERVER['DOCUMENT_ROOT'] . '/PiePHP/Core/Router.php';

Router::connect('/PiePHP/user/register', ['controller'=>'user', 'action'=>'register']);
Router::connect('/PiePHP/user/login', ['controller'=>'user', 'action'=>'login']);
Router::connect('/PiePHP/user/index', ['controller'=>'user', 'action'=>'index']);
Router::connect('/PiePHP/user/index2', ['controller'=>'user', 'action'=>'index2']);
Router::connect('/PiePHP/user/profil', ['controller'=>'user', 'action'=>'profil']);
Router::connect('/PiePHP/user/delete', ['controller'=>'user', 'action'=>'delete']);
Router::connect('/PiePHP/user/update', ['controller'=>'user', 'action'=>'update']);
Router::connect('/PiePHP/user/index2', ['controller'=>'user', 'action'=>'index2']);
Router::connect('/PiePHP/user/histo', ['controller'=>'user', 'action'=>'histo']);
Router::connect('/PiePHP/user/add2', ['controller'=>'user', 'action'=>'add2']);
Router::connect('/PiePHP/user/genres', ['controller'=>'user', 'action'=>'genre']);
Router::connect('/PiePHP/user/add3', ['controller'=>'user', 'action'=>'add3']);

if(isset($_GET['id'])){
	$id = $_GET['id'];
	Router::connect('/PiePHP/user/update2?id=' . $id, ['controller'=>'user', 'action'=>'update2']);
	Router::connect('/PiePHP/user/add?id=' . $id, ['controller'=>'user', 'action'=>'add']);
	Router::connect('/PiePHP/user/delete2?id=' . $id, ['controller'=>'user', 'action'=>'delete2']);
	Router::connect('/PiePHP/user/delete3?id=' . $id, ['controller'=>'user', 'action'=>'delete3']);
	Router::connect('/PiePHP/user/deleteG?id=' . $id, ['controller'=>'user', 'action'=>'deleteg']);
	Router::connect('/PiePHP/user/updateg?id=' . $id, ['controller'=>'user', 'action'=>'updateg']);
	Router::connect('/PiePHP/user/show?id=' . $id, ['controller'=>'user', 'action'=>'show']);
}







Router::connect('/PiePHP/app/register', ['controller'=>'app', 'action'=>'register']);
Router::connect('/PiePHP/app/login', ['controller'=>'app', 'action'=>'login']);
Router::connect('/PiePHP/app/index', ['controller'=>'app', 'action'=>'index']);
Router::connect('/PiePHP/app/index2', ['controller'=>'app', 'action'=>'index2']);
Router::connect('/PiePHP/app/profil', ['controller'=>'app', 'action'=>'profil']);
Router::connect('/PiePHP/app/delete', ['controller'=>'app', 'action'=>'delete']);
Router::connect('/PiePHP/app/update', ['controller'=>'app', 'action'=>'update']);
Router::connect('/PiePHP/app/index2', ['controller'=>'app', 'action'=>'index2']);
Router::connect('/PiePHP/app/histo', ['controller'=>'app', 'action'=>'histo']);
Router::connect('/PiePHP/app/add2', ['controller'=>'app', 'action'=>'add2']);
Router::connect('/PiePHP/app/genres', ['controller'=>'app', 'action'=>'genre']);
Router::connect('/PiePHP/app/add3', ['controller'=>'app', 'action'=>'add3']);

if(isset($_GET['id'])){
	$id = $_GET['id'];
	Router::connect('/PiePHP/app/update2?id=' . $id, ['controller'=>'app', 'action'=>'update2']);
	Router::connect('/PiePHP/app/add?id=' . $id, ['controller'=>'app', 'action'=>'add']);
	Router::connect('/PiePHP/app/delete2?id=' . $id, ['controller'=>'app', 'action'=>'delete2']);
	Router::connect('/PiePHP/app/delete3?id=' . $id, ['controller'=>'app', 'action'=>'delete3']);
	Router::connect('/PiePHP/app/deleteG?id=' . $id, ['controller'=>'app', 'action'=>'deleteg']);
	Router::connect('/PiePHP/app/updateg?id=' . $id, ['controller'=>'app', 'action'=>'updateg']);
	Router::connect('/PiePHP/app/show?id=' . $id, ['controller'=>'app', 'action'=>'show']);
}
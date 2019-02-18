<?php

namespace src\Controller;
use src\Model\UserModel;
use Core\Core;
use Core\Controller;
use \PDO;

class UserController extends Controller{

	public $user;
	public $affich;

	public function registerAction(){
		if(!empty($_POST['email']) && !empty($_POST['password']) &&
			!empty($_POST['nom']) && !empty($_POST['prenom'])){

			$user = new UserModel();
			$user->create();
			$this->render('../Flash/success');
		}else{
			$this->render('register');
		}
	}

	public function loginAction(){
		if(!empty($_POST['email']) && !empty($_POST['password'])){
			$user = new UserModel();
			$user->read();
			$login = $user->req->fetch(PDO::FETCH_ASSOC);

			if($_POST['email'] === $login['email'] && $_POST['password'] ===
				$login['password']){

				session_start();
				$_SESSION = $login;
				$this->user = new UserModel();
				$this->user->read_all();
				$this->render('index');
			}else{
				$this->render('login');
				echo "<p id='err'>Identification incorrecte</p>";
			}
		}else{
			$this->render('login');
		}
	}

	public function indexAction(){
		$this->user = new UserModel();
		$this->user->read_all();
		if(session_start()){
			$this->render('index');
			if(isset($_POST['mov'])){
				$this->user->read_genre();
				$this->render('addMovie');
			}
			if(isset($_POST['genre'])){
				$this->render('addGenre');
			}
		}
	}

	public function index2Action(){
		$this->user = new UserModel();
		$this->user->read_all();
		$this->render('index');
	}

	public function profilAction(){
		$this->render('profil');
	}

	public function deleteAction(){
		session_start();
		$user = new UserModel();
		$user->delete();
		$this->render('register');
	}

	public function updateAction(){
		session_start();
		if(!empty($_POST['password']) && isset($_POST['mod'])){
			$user = new UserModel();
			$user->update();
			$this->render('login');
			echo "<p id='up'>Changements effectués, veuillez vous reconnecter.</p>";
		}else{
			$this->render('update');
		}
	}

	public function update2Action(){
		session_start();
		if(!empty($_POST['titre']) && !empty($_POST['resum'])){
			$user = new UserModel();
			$user->update2();
			$this->render('update2');
			echo "<p id='change'>Informations changées.</p>";
		}else{
			$this->render('update2');
		}
	}

	public function addAction(){
		session_start();
		$this->user = new UserModel();
		$this->user->add_histo();
		$this->user->read_all();
		$this->render('index');
	}

	public function histoAction(){
		session_start();
		$this->user = new UserModel();
		$this->user->read_histo();
		$this->render('histo');
	}

	public function delete2Action(){
		session_start();
		$this->user = new UserModel();
		$this->user->delete2();
		$this->user->read_histo();
		$this->render('histo');
	}

	public function add2Action(){
		if(isset($_POST['sel']) && !empty($_POST['titre']) && !empty($_POST['resum'])){
			$this->user = new UserModel();
			$this->user->add_movie();
			$this->user->read_all();
		}
		if(session_start()){
			$this->render('index');
		}
	}

	public function add3Action(){
		if(!empty($_POST['nomg'])){
			$this->user = new UserModel();
			$this->user->add_genre();
			$this->user->read_genre();
			$this->render('genres');
		}
	}

	public function delete3Action(){
		$this->user = new UserModel();
		$this->user->delete3();
		$this->user->read_all();
		if(session_start()){
			$this->render('index');
		}	
	}

	public function genreAction(){
		$this->user = new UserModel();
		$this->user->read_genre();
		$this->render('genres');
	}

	public function deletegAction(){
		$this->user = new UserModel();
		$this->user->deleteG();
		$this->user->read_genre();
		$this->render('genres');
	}

	public function updategAction(){
		session_start();
		if(!empty($_POST['nomg'])){
			$user = new UserModel();
			$user->updateg();
			$this->render('updateG');
			echo "<p id='change'>Informations changées.</p>";
		}else{
			$this->render('updateG');
		}
	}

	public function showAction(){
		$this->user = new UserModel();
		$this->user->read_all();
		if(session_start()){
			$this->render('show');
		}else{
			$this->render('show');
		}
	}
}
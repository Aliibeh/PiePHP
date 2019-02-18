<?php

namespace src\Model;
use Core\Database;

class UserModel extends Database{

	public $req;
	public $req2;

	public function __construct(){
		parent::__construct();
	}

	public function create(){
		$req = parent::$bdd->prepare('INSERT INTO users (email, password, nom, 
			prenom) VALUES (?,?,?,?)');
		$req->execute([$_POST['email'], $_POST['password'], $_POST['nom'],
			$_POST['prenom']]);
	}

	public function read(){
		$req = parent::$bdd->prepare('SELECT * FROM users
			WHERE email=?');
		$req->execute([$_POST['email']]);
		$this->req = $req;
	}

	public function update(){
		$req = parent::$bdd->prepare('UPDATE users SET password=? WHERE id=?');
		$req->execute([$_POST['password'], $_SESSION['id']]);
	}

	public function delete(){
		$req = parent::$bdd->prepare('DELETE FROM users WHERE id=?');
		$req->execute([$_SESSION['id']]);
	}

	public function read_all(){
		$req = parent::$bdd->prepare('SELECT titre, genre.nom, id_film, resum FROM film
			LEFT JOIN genre ON film.id_genre = genre.id_genre LIMIT 5');
		$req->execute();
		$this->req = $req;
	}

	public function update2(){
		$req = parent::$bdd->prepare('UPDATE film SET titre=?, resum=?
			WHERE id_film=?');
		$req->execute([$_POST['titre'], $_POST['resum'], $_GET['id']]);
	}

	public function add_histo(){
		$req = parent::$bdd->prepare('INSERT INTO histo(id_membre,
			id_film) VALUES(?,?)');
		$req->execute([$_SESSION['id'], $_GET['id']]);
		$this->req = $req;
	}

	public function read_histo(){
		$req = parent::$bdd->prepare('SELECT titre, histo.id_film, genre.nom FROM film LEFT JOIN
			histo ON histo.id_film = film.id_film LEFT JOIN genre ON film.id_genre = genre.id_genre
			WHERE histo.id_membre=? ORDER BY 
			histo.id_film ASC LIMIT 5');
		$req->execute([$_SESSION['id']]);
		$this->req = $req;
	}

	public function delete2(){
		$req = parent::$bdd->prepare('DELETE FROM histo WHERE id_film=?');
		$req->execute([$_GET['id']]);
	}

	public function add_movie(){
		$req = parent::$bdd->prepare('INSERT INTO film(titre, resum, id_genre)
			VALUES(?,?,?)');
		$req->execute([$_POST['titre'], $_POST['resum'], $_POST['sel']]);
		$this->req = $req;
	}
	
	public function add_genre(){
		$req = parent::$bdd->prepare('INSERT INTO genre(nom)
			VALUES(?)');
		$req->execute([$_POST['nomg']]);
	}

	public function read_genre(){
		$req = parent::$bdd->prepare('SELECT * FROM genre LIMIT 5');
		$req->execute();
		$this->req = $req;
	}

	public function delete3(){
		$req = parent::$bdd->prepare('DELETE FROM film WHERE id_film=?');
		$req->execute([$_GET['id']]);
	}

	public function deleteG(){
		$req = parent::$bdd->prepare('DELETE FROM genre WHERE id_genre=?');
		$req->execute([$_GET['id']]);
	}

	public function updateg(){
		$req = parent::$bdd->prepare('UPDATE genre SET nom=?
			WHERE id_genre=?');
		$req->execute([$_POST['nomg'], $_GET['id']]);
	}
}
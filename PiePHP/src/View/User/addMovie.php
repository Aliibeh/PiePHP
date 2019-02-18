<link rel="stylesheet" type="text/css" href="../webroot/css/update2.css">

<nav class="navbar navbar-expend-lg bg-dark">
	<div id="menu">
		<ul>
			<li id="pre"><?= $_SESSION['prenom']?> ▼
				<ul>
					<li><a href="index">Accueil</a></li>
					<li><a href="profil">Profil</a></li>
					<li><a href="histo">Historique</a></li>
					<li><a href="login">Deconnexion</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<h1 id="sess">My Cinema</h1>
</nav>

<h1 class="title2">Ajoutez un film.</h1>

<form method="POST" action="add2" class="d-flex justify-content-center">
	<div>
		<select class="form-control" name="sel">
			<?php while($affich = $this->user->req->fetch()){?>
				<option value=<?= $affich['id_genre']?>><?= $affich['id_genre'].'. '.$affich['nom']?></option>
			<?php }?>
		</select>
		<input type="text" name="titre" placeholder="Titre" class="form-control reg">
		<textarea class="form-control reg" name="resum" placeholder="Résumé"></textarea>
		<button type="submit" class="btn btn-dark reg">AJOUTER</button>
	</div>
</form>

<footer class="bg-dark">
	<a href="login">Contactez nous</a>
	<div class="soc">
		<a href="#"><img class="social icone" src="../webroot/assets/Images/facebook.svg" alt="#"></a>
		<a href="#" class="pad"><img class="social icone" src="../webroot/assets/Images/twitter.svg" alt="#"></a>
		<a href="#"><img class="social icone" src="../webroot/assets/Images/gmail.svg" alt="#"></a>
		<a href="#" class="pad"><img class="social icone" src="../webroot/assets/Images/mail.svg" alt="#"></a>
	</div>
</footer>
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

<h1 class="title">Modifiez les informations du genre.</h1>

<form method="POST" action="update2" class="d-flex justify-content-center">
	<div>
		<input type="text" name="nomg" placeholder="Nom" class="form-control">
		<button type="submit" class="btn btn-dark reg">MODIFIER</button>
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
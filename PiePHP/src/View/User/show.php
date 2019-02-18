<link rel="stylesheet" type="text/css" href="../webroot/css/index.css">

<?php if(isset($_SESSION) && !empty($_SESSION)){?>

	<nav class="navbar navbar-expend-lg bg-dark">
		<div id="menu">
			<ul>
				<li id="pre2"><?= $_SESSION['prenom']?> ▼
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

<?php }else{?>

	<nav class="navbar navbar-expend-lg bg-dark sessn">
		<h1 id="sessn">My Cinema</h1>
		<a href="login">Connexion</a>
		<a href="register">Inscription</a>
	</nav>

<?php }?>

<?php $affich = $this->user->req->fetch();?>

<div class="back">
	<p><?= $affich['resum']?></p>
</div>

<footer class="bg-dark">
	<a href="login">Contactez nous</a>
	<div class="soc">
		<a href="#"><img class="social icone" src="../webroot/assets/Images/facebook.svg" alt="#"></a>
		<a href="#" class="pad"><img class="social icone" src="../webroot/assets/Images/twitter.svg" alt="#"></a>
		<a href="#"><img class="social icone" src="../webroot/assets/Images/gmail.svg" alt="#"></a>
		<a href="#" class="pad"><img class="social icone" src="../webroot/assets/Images/mail.svg" alt="#"></a>
	</div>
</footer>
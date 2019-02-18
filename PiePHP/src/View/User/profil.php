<link rel="stylesheet" type="text/css" href="../webroot/css/profil.css">

<?php session_start()?>

<nav class="navbar navbar-expend-lg bg-dark">
	<div id="menu">
		<ul>
			<li id="pre"><?= $_SESSION['prenom']?> ▼
				<ul>
					<li><a href="index">Accueil</a></li>
					<li><a href="histo">Historique</a></li>
					<li><a href="login">Deconnexion</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<h1 id="sess">My Cinema</h1>
</nav>

<table class="table table-striped table-dark">
	<tbody>
		<tr>
			<th>NOM</th>
			<td><?= $_SESSION['nom']?></td>
		</tr>
		<tr>
			<th>PRENOM</th>
			<td><?= $_SESSION['prenom']?></td>
		</tr>

		<tr>
			<th>EMAIL</th>
			<td><?= $_SESSION['email']?></td>
		</tr>

		<tr>
			<th>MDP</th>
			<td><?= $_SESSION['password']?></td>
			<td><a href="update">Modifier</a></td>
		</tr>
	</tbody>
</table>

<a href="delete" class="delete">Supprimer ce compte</a>

<footer class="bg-dark">
	<a href="login">Contactez nous</a>
	<div class="soc">
		<a href="#"><img class="social icone" src="../webroot/assets/Images/facebook.svg" alt="#"></a>
		<a href="#" class="pad"><img class="social icone" src="../webroot/assets/Images/twitter.svg" alt="#"></a>
		<a href="#"><img class="social icone" src="../webroot/assets/Images/gmail.svg" alt="#"></a>
		<a href="#" class="pad"><img class="social icone" src="../webroot/assets/Images/mail.svg" alt="#"></a>
	</div>
</footer>
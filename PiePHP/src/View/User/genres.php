<link rel="stylesheet" type="text/css" href="../webroot/css/index.css">
<?php session_start()?>
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

<form method="POST" class="add" action="index">
	<label>Ajouter un genre</label>
	<button type="submit" class="btn btn-sm btn-danger" name="genre">+</button>
</form>

<table class="table table-striped table-dark">
	<thead>
		<tr>
			<th>NOM</th>
		</tr>
	</thead>

	<tbody>
		<?php while($affich = $this->user->req->fetch()){?>
			<tr>
				<td><?= $affich['nom']?></td>
				<td>
					<form method="POST" action="updateg?id=<?= $affich['id_genre']?>">
						<button type="submit" class="btn btn-success">MODIFIER</button>
					</form>
				</td>
				<td>
					<form method="POST" action="deleteG?id=<?= $affich['id_genre']?>">
						<button type="submit" class="btn btn-success">SUPPRIMER</button>
					</form>
				</td>
			</tr>
		<?php }?>
	</tbody>
</table>

<div>
	<ul class="pagination">
		<li class="page-item"><a href="" class="page-link">Précédent</a></li>
		<li class="page-item"><a href="" class="page-link">Suivant</a></li>
	</ul>
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
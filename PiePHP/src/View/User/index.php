<link rel="stylesheet" type="text/css" href="../webroot/css/index.css">

<?php if(isset($_SESSION) && !empty($_SESSION)){?>

	<nav class="navbar navbar-expend-lg bg-dark">
		<div id="menu">
			<ul>
				<li id="pre"><?= $_SESSION['prenom']?> ▼
					<ul>
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

<?php if(isset($_SESSION) && !empty($_SESSION)){?>

		<form method="POST" class="add" action="index">
			<label>Ajouter un film</label>
			<button type="submit" class="btn btn-sm btn-danger" name="mov">+</button>
		</form>

		<table class="table table-striped table-dark">
			<thead>
				<tr>
					<th>TITRES</th>
					<th>GENRES</th>
				</tr>
			</thead>

			<tbody>
				<?php while($affich = $this->user->req->fetch()){?>
				<tr>
					<td><a href="show?id=<?= $affich['id_film']?>"><?= $affich['titre']?></a></td>
					<td><?= $affich['nom']?></td>
					<td>
						<form method="POST" action="add?id=<?= $affich['id_film']?>">
							<button type="submit" class="btn btn-success">AJOUTER</button>
						</form>
					</td>
					<td>
						<form method="POST" action="update2?id=<?= $affich['id_film']?>">
							<button type="submit" class="btn btn-success">MODIFIER</button>
						</form>
					</td>
					<td>
						<form method="POST" action="delete3?id=<?= $affich['id_film']?>">
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
		<a href="genres" class="gg">Voir tous les genres >></a>
	<?php }else{?>
		<table class="table table-striped table-dark">
			<thead>
				<tr>
					<th>TITRES</th>
					<th>GENRES</th>
				</tr>
			</thead>
			<?php while($affich = $this->user->req->fetch()){?>
				<tr>
					<td><a href="#"><?= $affich['titre']?></a></td>
					<td><?= $affich['nom']?></td>
				</tr>
			<?php }?>
		</table>

		<div>
			<ul class="pagination">
				<li class="page-item"><a href="#" class="page-link">Précédent</a></li>
				<li class="page-item"><a href="#" class="page-link">Suivant</a></li>
			</ul>
		</div>
	<?php }?>


<footer class="bg-dark">
	<a href="login">Contactez nous</a>
	<div class="soc">
		<a href="#"><img class="social icone" src="../webroot/assets/Images/facebook.svg" alt="#"></a>
		<a href="#" class="pad"><img class="social icone" src="../webroot/assets/Images/twitter.svg" alt="#"></a>
		<a href="#"><img class="social icone" src="../webroot/assets/Images/gmail.svg" alt="#"></a>
		<a href="#" class="pad"><img class="social icone" src="../webroot/assets/Images/mail.svg" alt="#"></a>
	</div>
</footer>
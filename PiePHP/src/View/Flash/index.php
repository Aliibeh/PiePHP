<link rel="stylesheet" type="text/css" href="../webroot/css/register.css">

<h2 style="text-align: center;">Veuillez vous inscrire.</h2>

<div class="d-flex justify-content-center">
	<form method="POST" action="/PiePHP/user/index">
		<input type="text" name="nom" placeholder="Nom" class="form-control">
		<input type="text" name="prenom" placeholder="Prenom" class="form-control inp2">
		<input type="email" name="mail" placeholder="E-Mail" class="form-control inp2">
		<input type="password" name="pass" placeholder="Password" class="form-control inp2">
		<input type="submit" value="REGISTER" class="btn btn-dark btn-lg inp2">
	</form>
</div>

<div class="div2">
	<p>Déjà un compte? <a href="login">Connectez-vous!</a></p>
	<a href="show" class="a2">Passer cette étape</a>
</div>
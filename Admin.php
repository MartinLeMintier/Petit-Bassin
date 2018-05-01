<!DOCTYPE html>
<html>
<title>PloufBook</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="AdminDesign.css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="shortcut icon" href="images/logonew.png">



<body>

	<!-- Navbar -->
	<nav role="navigation" class="navbar navbar-reverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<img src="images/logonew.png" class="logo" alt="" />
				<a class="navbar-brand" href="#">PloufBook</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>

				</ul>
			</div>
		</div>
	</nav>

	<header class="header_pageAdmin">
		<div id="titre_page">

			<h1>Bienvenue Administrateur</h1>
		</div>

	</header>


	<div class="container-fluid2">
		<div class=" section1 text-center">
			<h2>Ajouter un Utilisateur</h2>
			<hr />
			
					<div class="main-login main-center">
						<form>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Entrez votre Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Pseudo</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Entrez votre pseudo"/>
								</div>
							</div>
						</div>

						

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Ajouter</button>
						</div>
						
					</form>
				
	</div>

</div>
</div>





</body>

</html>
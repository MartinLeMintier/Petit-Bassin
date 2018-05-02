
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PloufBook</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/logonew.png">

	<link rel="stylesheet" type="designConn.css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="designConn.css" /> 



	<!-- Website Font style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>



</head>




<body>
	<!-- Header with image -->
	<header class="header_accueil">
		<div id="titre_site">

			<h1>PloufBook</h1> </div>


			<div class="col-sm-12">

			<img id="image" src="images/logonew.png" class="img-responsive logo" alt="logo" />
			</div>


		</header>

		<div class="container">
			<div class="row main">			
					<div class="panel-heading">
						<div class="panel-title text-center">
							<div class="alert alert-danger">
								<strong>Attention!</strong> votre pseudo et la confirmation est différent
							</div>
							<div class="form-group ">
								<a href="Connexion.php"><button type="submit" class="btn btn-primary btn-lg btn-block login-button">Retour inscription/connexion</button></a>
							</div>
	               		<hr />
							<hr />
						</div>
					</div> 

					<div class="main-login main-center">
						<form method="GET" action="inscription.php" class="form-horizontal" method="post" action="#">

							<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Nom</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
										<input type="text" required class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
									</div>
								</div>
							</div>

							<div class="form-group">
							<label for="Surename" class="cols-sm-2 control-label">Prénom</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
										<input type="text" required class="form-control" name="Surename" id="Surename"  placeholder="Enter your Name"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="email" class="cols-sm-2 control-label">Email</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
										<input type="text" required class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="username" class="cols-sm-2 control-label">Pseudo</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></span>
										<input type="text" required class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
									</div>
								</div>
							</div>


							<div class="form-group">
								<label for="confirm" class="cols-sm-2 control-label">Confirmer Pseudo</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></span>
										<input type="text" required class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
									</div>
								</div>
							</div>

							<div class="form-group ">
								<button type="submit" class="btn btn-primary btn-lg btn-block login-button">S'inscire</button>
							</div>

						</form>
					</div>

				
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
	</html>
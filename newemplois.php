<!DOCTYPE html>
<html>
<head>
	<title>Proposer une nouvelle offre</title>
</head>
<body>

							<form method="GET" action="traitementemplois.php" class="form-horizontal" method="post" action="#">
							<div class="form-group">
								<label for="email" class="cols-sm-2 control-label">Entrez le titre et l'entreprise : </label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
										<input type="text" required class="form-control" name="name" id="name"  />
									</div>
								</div>
							</div>
	
							<div class="form-group">
								<label for="username" class="cols-sm-2 control-label">Entrez le numero de telephone du recruteur :</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></span>
										<input type="text" required class="form-control" name="tel" id="tel"  />
									</div>
								</div>
							</div>

							<div class="form-group ">
								<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Se connecter</button>
							</div>

						</form>





</body>
</html>
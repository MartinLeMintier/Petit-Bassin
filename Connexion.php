
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
		<link rel="shortcut icon" href="images/slip.jpg">

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

               <h1>PloufBook</h1>
               </div>
     <div id="image"><img src="images/slip.jpg" class="logo" alt="" /></div>
                

                
    

  
</header>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	                 <h3>Connexion</h3>
	               		
	               		<hr />
	               	</div>
	            </div> 

				<div class="main-login main-center">
					<form method="GET" action="traitementdebut.php" class="form-horizontal" method="post" action="#">
						
											<div class="ui-widget">
								<label>Type de compte : </label>
								<select name="choix" id="combobox">
									<option></option>
									<option value="Utilisateur">Utilisateur</option>
									<option value="Admin">Administrateur</option>
								   
							  </select>
							  </div>

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
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Se connecter</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>
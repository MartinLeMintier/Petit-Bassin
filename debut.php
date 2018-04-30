<html>
	<head>
		
	</head>
	
	<body>
		<form method="GET" action="traitementdebut.php">
			 Prenom : <br>
			 <input type="text" name="firstName"><br>
			 Nom : <br>
			 <input type="text" name="lastName"><br>
			 			 
			 adresse mail : <br>
			 <input type="text" name="adresse_mail"> <br>
			 
			 <p>
			 <label>Fonction</label>
				<select name="choix" id="choix">
				   <option value="administrateur">administrateur</option>
				   <option value="auteur">auteur</option>
				</select>
			</p>
				   
			 <input type="submit" value="Soumettre">
		</form>
	</body>
</html>
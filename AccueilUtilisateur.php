<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PloufBook</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="AccueilUtilisateurDesign.css" />
  <link rel="shortcut icon" href="images/logonew.png">

<script>
function AjouterCommentaire1(){
/*A remplacer par Session nom et prenom*/
 /* var NOM = $("#BDD").val(); */

  var COMMENTAIRE1 =$("#valeur1").val();
  /*alert(COMMENTAIRE);*/

   document.getElementById('myDiv1').innerHTML += '<div class="media"><div class="media-left"></div><div class="media-body"><h4 class="media-heading">Commentaire de <small><i>  BDD </i></small></h4><p>' + COMMENTAIRE1 +'</p></div></div></div></br> ';
            
            
}

function AjouterCommentaire2(){
/*A remplacer par Session nom et prenom*/
 /* var NOM = $("#BDD").val(); */

  var COMMENTAIRE2 =$("#valeur2").val();
  /*alert(COMMENTAIRE);*/

   document.getElementById('div2').innerHTML += '<div class="media"><div class="media-left"></div><div class="media-body"><h4 class="media-heading">Commentaire de <small><i>  BDD </i></small></h4><p>' + COMMENTAIRE2 +'</p></div></div></div></br> ';
            
            
}

function AjouterCommentaire3(){
/*A remplacer par Session nom et prenom*/
 /* var NOM = $("#BDD").val(); */

  var COMMENTAIRE3 =$("#valeur3").val();
  /*alert(COMMENTAIRE);*/

   document.getElementById('myDiv3').innerHTML += '<div class="media"><div class="media-left"></div><div class="media-body"><h4 class="media-heading">Commentaire de <small><i>  BDD </i></small></h4><p>' + COMMENTAIRE3 +'</p></div></div></div></br> ';
            
            
}

function AjouterCommentaire4(){
/*A remplacer par Session nom et prenom*/
 /* var NOM = $("#BDD").val(); */

  var COMMENTAIRE4 =$("#valeur4").val();
 /* alert(COMMENTAIRE);*/

   document.getElementById('myDiv4').innerHTML += '<div class="media"><div class="media-left"></div><div class="media-body"><h4 class="media-heading">Commentaire de <small><i>  BDD </i></small></h4><p>' + COMMENTAIRE4 +'</p></div></div></div></br> ';
            
            
}

</script>


</head>


<body>

  <!-- Navbar -->
  <nav role="navigation" class="navbar navbar-reverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <img src="images/logonew.png" class="logo" alt="" />
        <a class="navbar-brand" href="#">PloufBook</a>
      </div>

      <!-- Icone pour la deconnexion -->
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Connexion.php"><span class="glyphicon glyphicon-off"></span> Déconnexion</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><div class="col-md-4 col-md-offset-3">
            <form action="" class="search-form">
              <div class="form-group has-feedback">
                <label for="search" class="sr-only">Recherche</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="Rechercher...">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>  
            </form>
          </div></li>
        </ul>
        <!-- Icone pour la Notification -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Connexion.php"><span class="glyphicon glyphicon-bell"></span> Notifications</a></li>

        </ul>
        <!-- Icone pour la messagerie -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Connexion.php"><span class=" glyphicon glyphicon-envelope"></span> Messagerie</a></li>

        </ul>
        <!-- Icone pour la Mon reseau -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="reseau.php"><span class="glyphicon glyphicon-link"></span> Mon Réseau</a></li>

        </ul>

        <!-- Icone pour la Mon Profil -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Profil.php"><span class="glyphicon glyphicon-user"></span> Vous</a></li>

        </ul>
        <!-- Icone pour la acceuil -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="AccueilUtilisateur.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>

        </ul>



      </div>

      

      

    </div>
  </nav>
  
  <div class="container text-center">    
    <div class="row">
      <div class="col-sm-3 well">
        <div class="well">
          <p><a href="Profil.php">Mon Profil</a></p>

          <?php $t = $_SESSION['PP']; 

    echo '<img class="img-circle" src="images/' . $t . '" height="65" width="65" alt="Avatar">'; 
    ?>
         <!-- <img src="images/Utilisateur.png" class="img-circle" height="65" width="65" alt="Avatar">-->
        </div>
        <div class="well">
          <p><a href="#">Consulter les Offres d'Emplois</a></p>
          <p>
          </p>
        </div>


      </div>
      <div class="col-sm-7">

        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default text-left">
              <div class="panel-body">
                <input type="text" class="form-control"  placeholder="Que voulez-vous dire ?">
                <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-thumbs-up"></span> Aimer
                </button>     
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <div class="well" id="lala">
             <p>Nom Personne</p>
             <p> d'humeur : HUMEUR</p>
             <p> le : DATE </p>
           </div>
         </div>


         <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>

            <div class="panel-body">


            </div>
            <button type="button" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-thumbs-up"></span> Aimer
            </button>
            <button type="button" class="btn btn-info" data-toggle="modal" name="modal1" data-target="#myModal">commenter</button>
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Commentaire</h4>
                  </div>
                  <div class="modal-body">
                    <input type="text" id="valeur1" class="form-control">
                  </div>
                  <div class="modal-footer">
                    <button type="button" onclick="AjouterCommentaire1()" class="btn btn-default" data-dismiss="modal">Publier</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="myDiv1">
          
      </div>

</div>
</div>

      <div class="row">
        <div class="col-sm-3">

          <div class="well">
           <p>Nom Personne</p>
           <p> d'humeur : HUMEUR</p>
           <p> le : DATE </p>
         </div>
       </div>
       <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>

            <div class="panel-body">


            </div>
            <button type="button" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-thumbs-up"></span> Aimer
            </button>
            <a data-toggle="modal" data-target="#myModal2"><button type="button" class="btn btn-info">commenter</button></a>
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                  </div>
                  <div class="modal-body">
                    <input type="text" id="valeur2" class="form-control">
                  </div>
                  <div class="modal-footer">
                    <button type="button" onclick="AjouterCommentaire2()" class="btn btn-default" data-dismiss="modal">Publier</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="div2">
        
      </div>
    </div>

</div>

    <div class="row">
      <div class="col-sm-3">
        <div class="well">
         <p>Nom Personne</p>
         <p> d'humeur : HUMEUR</p>
         <p> le : DATE </p>
       </div>
     </div>
     <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>

            <div class="panel-body">


            </div>
            <button type="button" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-thumbs-up"></span> Aimer
            </button>
            <a data-toggle="modal" data-target="#myModal3"><button type="button" class="btn btn-info">commenter</button></a>
            <div class="modal fade" id="myModal3" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                  </div>
                  <div class="modal-body">
                    <input type="text" id="valeur3" class="form-control">
                  </div>
                  <div class="modal-footer">
                    <button type="button" onclick="AjouterCommentaire3()" class="btn btn-default" data-dismiss="modal">Publier</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="myDiv3">
          
      </div>
  </div>
  </div>


  <div class="row">
    <div class="col-sm-3">
      <div class="well">
       <p>Nom Personne</p>
       <p> d'humeur : HUMEUR</p>
       <p> le : DATE </p>
     </div>
   </div>
   <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>

            <div class="panel-body">


            </div>
            <button type="button" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-thumbs-up"></span> Aimer
            </button>
            <a data-toggle="modal" data-target="#myModal4"><button type="button" class="btn btn-info">commenter</button></a>
            <div class="modal fade" id="myModal4" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                  </div>
                  <div class="modal-body">
                    <input type="text" id="valeur4" class="form-control">
                  </div>
                  <div class="modal-footer">
                    <button type="button" onclick="AjouterCommentaire4()" class="btn btn-default" data-dismiss="modal">Publier</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="myDiv4">
          
      </div>
  </div>
</div>    
</div>

<div class="col-sm-2 well">
  <div class="thumbnail">
    <p>Mes Connaissances</p>
    <img src="images/réseau.jpg" alt="Paris" width="400" height="300">
    <br>
    <br>
    <a href="reseau.php#Reseau"<button class="btn btn-primary">Amis</button></a>
    <br>
    <br>
    <a href="reseau.php#Pro"<button class="btn btn-primary">Réseau</button></a>
  </div>   
  </div>   

</div>



</body>
</html>

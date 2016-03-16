<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Titre de la page</title>
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<?php
	$nom='';
  	include ('entete.php');
  	require 'php/connexionbdd.php';
  	if(!isset($_SESSION['U_Mail'])){
  		header('Location:connexion.php');
  	}
  	if(isset($_GET['id'])){
  		$sql = "SELECT * FROM utilisateur WHERE U_ID='{$_GET['id']}'";
  		$res = $bdd->query($sql);
  		$donnees = $res->fetch();
  		var_dump($donnees);
  		$nom=$donnees['U_Nom'];
  	}
  ?>
<body>	
<div class="container">
  <div class="panel panel-default col-lg-8 col-lg-offset-2" style="background-color:#d9edf7">
    <div class="col-lg-10 col-lg-offset-1">
      <h1> Inscription d'un nouvel utilisateur </h1>
      <form class="form-horizontal" method="POST" action="scriptinscription.php">

      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <div class="col-lg-6">
              <input class="form-control" id="U_Nom" required name="U_Nom" placeholder="Nom" type="text" value="<?= $nom ?>">
            </div>

            <div class="col-lg-6">
              <input class="form-control" id="U_Prenom" required name="U_Prenom" placeholder="Prenom" type="text">
            </div>
          </div>  
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <div class="col-lg-8">
              <input class="form-control" id="U_Mail" required name="U_Mail" placeholder="Email" type="mail">
            </div>
          
          <?php
          	
			require 'php/connexionbdd.php';
	        $sql = "SELECT U_Groupe FROM Utilisateur WHERE U_Mail = '{$_SESSION['U_Mail']}'";
	        $requete = $bdd -> prepare($sql);
	        $requete -> bindParam(':mail',$_SESSION['U_Mail']);
	        $requete -> execute();
	        $valeur=$requete->fetch();
            if($valeur['U_Groupe'] == 2 || $valeur['U_Groupe']==1){
      		  echo "<div class='col-lg-4'>";
           	  echo "<select class='form-control' id='select' name='U_Groupe'>";
          	  if ($valeur['U_Groupe']==1){
          	  	 echo "<option value='1'> Administrateur </option>";
          	  }	
              echo "<option value='2'> Enseignant </option>";
              echo "<option value='3'> Etudiant </option>";
              echo "</select>";
   		      echo "</div>";
			}
			
          ?>
         </div>
        </div>
      </div>
 		<div class="form-group">
          <div class="col-lg-12">
            <input class="form-control" required id="U_Adresse_1" name="U_Adresse_1" placeholder="Adresse 1" type="text">
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-12">
            <input class="form-control" id="U_Adresse_2"  name="U_Adresse_2" placeholder="Adresse 2" type="text">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <div class="col-lg-4">
                <input class="form-control" id="U_Ville" required name="U_Ville" placeholder="Ville" type="text">
              </div>

              <div class="col-lg-4">
                <input class="form-control" id="U_Code_Postal" required name="U_Code_Postal" placeholder="CP (62100, 59000, ...)" type="text">
              </div>

              <div class="col-lg-4">
                <select class="form-control" id="U_Pays" required name="U_Pays" placeholder="Pays" type="text">
                  <option> Pays </option>
                </select>
              </div>
            </div> 
          </div>
        </div> 

        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <div class="col-lg-6">
                <input class="form-control" id="U_Telephone_1" required name="U_Telephone_1" placeholder="Telephone" type="text">
              </div>

              <div class="col-lg-6">
                <input class="form-control" id="U_Telephone_2" required name="U_Telephone_2" placeholder="Mobile" type="text">
              </div>
            </div>     
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-6 col-lg-offset-3">
            <button type="submit" class=" col-lg-6 btn btn-success">Valider</button>
            <button type="reset" class="col-lg-6 btn btn-danger">Annuler</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>	
</html>
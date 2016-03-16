<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Titre de la page</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<?php
	include('entete.php');
	if(!isset($_POST['SEND'])){ 
		$ok=0;
		$erreur=0;
	}
	else $ok=1;
	if($ok){
		require 'php/connexionbdd.php';
		$sql = "SELECT * FROM utilisateur WHERE U_Mail = :email AND U_Mot_De_Passe= :mdp";
		$requete = $bdd->prepare($sql);
		
		$requete -> bindParam(':email', $_POST['user']);
		$requete -> bindParam(':mdp',$_POST['mdp']);
		$requete -> execute();
		$donnees=$requete -> fetchAll();
		if(isset($donnees[0]['U_Mail'])){
			$_SESSION['U_Mail']=$donnees[0]['U_Mail'];
			Header('Location:inscription_utilisateur.php');
		}else{
			$erreur=1;
		}
	}
	$ok=1;
?>

	<div class="container col-lg-4 col-lg-offset-4">
		<form class="form-horizontal" method="POST" action="connexion.php">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Connexion</h3>
				</div>
				<?php 
						if($erreur)echo "<span class='col-lg-8 col-lg-offset-2' style='color:red'>Erreur dans les identifiants</span>";
				?>
	
				<div class="panel-content" style="margin-top:30px">
					<div class="form-group">
						<div class="col-lg-8 col-lg-offset-2">
							<input class="form-control" id="inputEmail" placeholder="Email"type="text" name="user">
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-8 col-lg-offset-2">
							<input class="form-control" id="inputPassword" placeholder="Password" type="password" name="mdp">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-3">
							<button type="submit" class="btn btn-primary col-md-4" style="margin-right:10px" name="SEND">Submit</button>	
							<a href="#" class="btn btn-danger col-lg-4">Mot de passe oublie</a>					
						</div>
					</div>

				</div>
				
			</div>
		</form>
	</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
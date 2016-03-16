<?php
	require 'php/connexionbdd.php';
	$sql = "INSERT INTO UTILISATEUR (U_Nom,U_Prenom,U_Mail,U_Adresse_1,U_Adresse_2,U_Ville,U_Code_Postal,U_Pays,U_Telephone_1,U_Telephone_2,U_Groupe)
			VALUES (:nom,:prenom,:mail,:adr1,:adr2,:ville,:cp,:pays,:tel1,:tel2,:grp)";
	$requete = $bdd ->prepare($sql);
	$requete -> bindParam(':nom',$_POST['U_Nom'],PDO::PARAM_STR);
	$requete -> bindParam(':prenom',$_POST['U_Prenom'],PDO::PARAM_STR);
	$requete -> bindParam(':mail',$_POST['U_Mail'],PDO::PARAM_STR);
	$requete -> bindParam(':adr1',$_POST['U_Adresse_1'],PDO::PARAM_STR);
	$requete -> bindParam(':adr2',$_POST['U_Adresse_2'],PDO::PARAM_STR);
	$requete -> bindParam(':ville',$_POST['U_Ville'],PDO::PARAM_STR);
	$requete -> bindParam(':cp',$_POST['U_Code_Postal'],PDO::PARAM_STR);
	$requete -> bindParam(':pays',$_POST['U_Pays'],PDO::PARAM_STR);
	$requete -> bindParam(':tel1',$_POST['U_Telephone_1'],PDO::PARAM_INT);
	$requete -> bindParam(':tel2',$_POST['U_Telephone_2'],PDO::PARAM_INT);
	$requete -> bindParam(':grp',$_POST['U_Groupe'],PDO::PARAM_INT);
	$requete->execute();
	header("Location:inscription_utilisateur.php")
?>
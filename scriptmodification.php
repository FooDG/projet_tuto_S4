<?php
	require 'php/connexionbdd.php';
	$sql = "UPDATE UTILISATEUR SET U_Nom = :nom,U_Prenom = :prenom,U_Mail = :mail,U_Adresse_1 = :adr1,U_Adresse_2 = :adr2,U_Ville = :ville,U_Code_Postal = :cp,U_Pays = :pays,U_Telephone_1 = :tel1,U_Telephone_2 = :tel2,U_Groupe = :grp
			WHERE U_ID='{$_GET['id']}'";
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
	header('Location:scriptlisteutilisateur.php');
?>

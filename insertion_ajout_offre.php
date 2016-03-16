<?php 
	require 'php/connexionbdd.php';

	if (isset($_POST)){
		var_dump($_POST);
		$sql = "INSERT INTO Offre(0_Libelle,O_Description,O_Ville,O_Contact,O_Domaine) Values ";
		$sql .= ":O_Libelle,:O_Description,:O_Ville,:O_Contact,:O_Domaine);";
		
		$requete = $bdd ->prepare($sql);
		$requete->bindparam(':O_Libelle',$_POST['O_Libelle']);
		$requete->bindparam(':O_Description',$_POST['O_Description']);
		$requete->bindparam(':O_Ville',$_POST['O_Ville']);
		$requete->bindparam(':O_Contact',$_POST['O_Contact']);
		$requete->bindparam(':O_Domaine',$_POST['O_Domaine']);
		$requete->execute();
	};
 ?>
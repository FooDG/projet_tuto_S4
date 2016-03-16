<?php
	require 'php/connexionbdd.php';
	include('entete.php');
	if(!isset($_SESSION['U_Mail'])){
  		header('Location:connexion.php');
  	}
	if(isset($_GET['id'])){
		$sql = "DELETE FROM utilisateur WHERE U_ID = '{$_GET['id']}'";
		$bdd->query($sql);
	}
	$sql="SELECT * from utilisateur";
	echo "<table border='1px black solid'>";
		$premier =true;
	foreach($bdd->query($sql, PDO::FETCH_ASSOC) as $row){
		if($premier==true){
			$premier=false;
			foreach($row as $name=>$value){
				if(($name=="U_Nom")||($name=="U_Prenom")||($name=="U_Mail")){
					echo "<th>$name</th>";
				}
			}
		}
		echo "<tr>";
		foreach ($row as $name=>$value){
			if(($name=="U_Nom")||($name=="U_Prenom")||($name=="U_Mail")){
				echo "<td>$value</td>";
			}

		}
		echo "<td><a href='inscription_utilisateur.php?id={$row['U_ID']}'name='Modifier' value='{$row['U_ID']}' >Modifier</button></td>";
		echo "<td><a href='?id={$row['U_ID']}' name='Supprimer' value='{$row['U_ID']}' >Supprimer</button></td>";

		echo "</tr>";
	}
	echo "</table>";
?>
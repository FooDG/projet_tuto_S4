<?php
	require 'php/connexionbdd.php';
	$sql="SELECT * from utilisateur";
	echo "<table>";
	foreach($bdd->query($sql, PDO::FETCH_ASSOC) as $row){
		echo "<tr>";
		foreach ($row as $name=>$value){
			echo "<td>$value</td>";
		}
		echo "</tr>";
	}
?>
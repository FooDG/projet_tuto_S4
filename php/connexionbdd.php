<?php 
try{
	$bdd = new PDO("mysql:host=localhost;dbname=app'follow;charset=utf8", 'root', '');
} catch (PDOException $error) {
	die($error->getMessage());
}
?>
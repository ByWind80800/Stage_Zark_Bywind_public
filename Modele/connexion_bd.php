<?php
$serveur="localhost";
$user="root";
$pass="";
$base="freycenet";
try {
	$dbh = new PDO('mysql:host=localhost;dbname=freycenet',$user, $pass);
} catch (PDOExeption $e) {
	print "Erreur !:".$e->getMessage()."<br/>";
	die();
}
?>
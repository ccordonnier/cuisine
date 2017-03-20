<?php 
 // Script connexion.php utilisé pour la connexion à la BD 
 $host="db674017401.db.1and1.com"; // le chemin vers le serveur (localhost ou 127.0.0.1) 
 $db="db674017401"; // le nom de votre base de données. 
 $user="dbo674017401"; // nom d utilisateur pour se connecter 
 $passwd="Corentin1234."; // mot de passe de l utilisateur pour se connecter 
 try { 
 // On essaie de créer une instance de PDO. 
	$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $passwd,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
 } 
 catch(Exception $e) { 
 echo "Erreur : ".$e->getMessage()."
"; } 
 ?> 

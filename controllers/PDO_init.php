<?php
$db_host = 'localhost'; // IPv4 de la cible (localhost pour le meme ordinateur sur lequel PHP tourne)
$db_name = 'test';      // Nom de la base de donnée cible
$db_username = 'root';  // Nom de l'utilisateur enregistré sur le systeme de base de donnée a utiliser
$db_password = '';      // Mot de passe de cet utilisateur

$connection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
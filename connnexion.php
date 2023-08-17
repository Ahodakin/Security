<?php
//Connection au serveur

$serveur = 'localhost';
$user = 'root';
$password = '';
$dbname = 'secure_level_bdd';

$db = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$password);

?>
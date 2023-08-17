<?php
//Connection au serveur

$serveur = 'localhost';
$user = 'u700538637_reine';
$password = 'reinE12345';
$dbname = 'u700538637_security';

$db = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$password);

?>
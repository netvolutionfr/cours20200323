<?php
try {
    $bdd = new PDO('mysql:host=mysql;dbname=world_x;charset=utf8', 'root', 'root');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
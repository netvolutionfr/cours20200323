<?php
try {
    $bdd = new PDO('mysql:host=mysql;dbname=auth;charset=utf8', 'auth', '123456');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
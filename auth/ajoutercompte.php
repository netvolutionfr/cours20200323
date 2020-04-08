<?php
require_once('bdd_auth.php');

$sql = "INSERT INTO accounts (login, password, role) VALUES (:login, :password, 'user')";

$requete = $bdd->prepare($sql);

$requete->bindParam(':login', $_POST['login']);
$requete->bindParam(':password', password_hash($_POST['password'], PASSWORD_DEFAULT));

$requete->execute();

echo "Login créé";
echo "<br>";
echo "<a href=\"login.php\">Connexion</a>";
echo "<br>";

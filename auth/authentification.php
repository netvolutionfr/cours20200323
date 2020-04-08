<?php
session_start();
require_once('bdd_auth.php');

echo "Login saisi : " . $_POST['login'];
echo "<br>";
echo "Mot de passe saisi : " . $_POST['password'];
echo "<br>";
echo "Mot de passe chiffré : " . password_hash($_POST['password'], PASSWORD_DEFAULT);
echo "<br>";

$sql = "SELECT login, password, role FROM accounts WHERE login = ?";

$requete = $bdd->prepare($sql);
$requete->bindParam(1, $_POST['login']);
$requete->execute();

if ($data = $requete->fetch()) {
    echo "Mot de passe récupéré : " . $data['password'];
    echo "<br>";
    if (password_verify($_POST['password'], $data['password'])) {
        echo "Mot de passe OK";
        echo "<br>";
        $_SESSION['login'] = $data['login'];
        $_SESSION['role'] = $data['role'];
        echo "<a href=\"admin.php\">Page admin</a>";
    } else {
        echo "Mauvais mot de passe";
        echo "<br>";
    }
} else {
    echo "Non, il n'existe pas de compte avec cet email";
    echo "<br>";
}

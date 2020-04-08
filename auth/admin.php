<?php
session_start();

if (isset($_SESSION['login'])) {
    echo "Vous êtes identifié en tant que " . $_SESSION['login'] . ".";
    echo "<br>";
    echo "Vous avez les droits : " . $_SESSION['role'];
    echo "<br>";
    if ($_SESSION['role'] == "admin") {
        echo "Yeah, you're the king!";
        echo "<br>";
    }
    echo "<a href=\"logout.php\">Déconnexion</a>";
} else {
    echo "Vous n'êtes pas identifié...";
    echo "<br>";
    echo "<a href=\"login.php\">Connexion</a>";
}
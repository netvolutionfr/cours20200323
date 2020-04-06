<?php

require_once('bdd.php');

$sql = "SELECT Name FROM city WHERE CountryCode = 'FRA'";

$requete = $bdd->prepare($sql);
$requete->execute();

$villes_array = array();

while ($ville = $requete->fetch()) {
    $villes_array[] = $ville;
}

$ville_json = json_encode($villes_array);

header('Content-Type:application/json');
echo $ville_json;
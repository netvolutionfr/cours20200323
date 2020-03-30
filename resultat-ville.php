<?php
require_once('bdd.php');

$sql = "SELECT * FROM city WHERE Name=?";

$requete = $bdd->prepare($sql);
$requete->bindParam(1, $_GET['ville']);
$requete->execute();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ville</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Résultat de la recherche</h1>
    <?php
    if ($ville = $requete->fetch()) {
        $info = $ville['Info'];
        $info_objet = json_decode($info);
        $population = $info_objet->Population;
    ?>
    <h3><?php echo $ville['Name']; ?></h3>
        <p>Population : <?php echo $population; ?></p>
        <p>Pays : <?php echo $ville['CountryCode']; ?></p>
    <?php
    } else {
    ?>
    <h3>Aucun résultat...</h3>
    <?php
    }
    ?>
</div>
</body>
</html>
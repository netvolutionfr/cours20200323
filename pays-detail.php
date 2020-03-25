<?php
require_once("bdd.php");

$code_pays = $_GET['Code'];

$sql = 'SELECT Code, country.Name, city.Name as Capital, city.Info FROM country INNER JOIN city ON country.Capital = city.ID WHERE Code=?';
$reponse = $bdd->prepare($sql);
$reponse->bindParam(1, $code_pays);
$reponse->execute();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des pays</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    if ($donnees = $reponse->fetch()) {
    ?>
    <h2><?php echo $donnees['Name']; ?></h2>
    <p class="mb-1"><?php echo $donnees['Capital']; ?> (<?php
        $info = $donnees['Info'];
        $info_objet = json_decode($info);
        $population = $info_objet->Population;
        echo $population;
        ?> habitants)</p>
    </a>
    <ul>
        <?php
        $sql_villes = 'SELECT * FROM city WHERE CountryCode=?';
        $requete_villes = $bdd->prepare($sql_villes);
        $requete_villes->bindParam(1, $code_pays);
        $requete_villes->execute();
        ?>
        <?php
        while ($ville = $requete_villes->fetch()) {
            echo "<li>";
            echo $ville['Name'];
            $info_objet = json_decode($ville['Info']);
            $population = number_format($info_objet->Population, 0, ',', ' ');
            echo " ($population habitants)";
            echo "</li>";
        }
        }
        ?>
    </ul>
</div>
</div>
</body>
</html>
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
    <h2>Pays du monde</h2>
    <div class="list-group list-group-flush">
        <?php
        require_once("bdd.php");

        $sql = 'SELECT Code, country.Name, city.Name as Capital, city.Info FROM country INNER JOIN city ON country.Capital = city.ID';
        $reponse = $bdd->query($sql);

        while ($donnees = $reponse->fetch()) {
            ?>
        <a href="pays-detail.php?Code=<?php echo $donnees['Code']; ?>" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><?php echo $donnees['Name']; ?></h5>
            </div>
            <p class="mb-1"><?php echo $donnees['Capital']; ?> (<?php
            $info = $donnees['Info'];
            $info_objet = json_decode($info);
            $population = $info_objet->Population;
            echo $population;
                ?> habitants)</p>
        </a>
            <?php
        }
        ?>
    </div>
</div>
</body>
</html>
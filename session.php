<?php

session_start();

$_SESSION['ville'] = "Boulogne";

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titre</title>
</head>
<body>
<p>Ville : <?php echo $_SESSION['ville']; ?></p>
</body>
</html>

<?php
// Placer un cookie chez le client

setcookie('pseudo', 'StanWeb', time() + 365 * 24 * 3600, null, null, false, true);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie</title>
</head>
<body>
<p>Pseudo : <?php echo $_COOKIE['pseudo']; ?></p>
</body>
</html>

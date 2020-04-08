<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Créer un compte</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Création de compte</h2>
    <form action="ajoutercompte.php" method="post">
        <div class="form-group">
            <label for="login">Votre email</label>
            <input id="login" class="form-control" type="email" name="login">
        </div>
        <div class="form-group">
            <label for="password">Votre mot de passe</label>
            <input type="password" id="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Créer un compte</button>
    </form>
</div>
</body>
</html>
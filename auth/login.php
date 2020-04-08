<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Connexion</h2>
    <form action="authentification.php" method="post">
        <div class="form-group">
            <label for="login">Identifiant</label>
            <input id="login" class="form-control" type="email" name="login">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
    <a href="creationcompte.php">Créer un compte</a>
</div>
</body>
</html>
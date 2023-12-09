<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
</head>

<body>
    <?php include 'menu.php' ?>
    <form method="POST" action="/mvc-tp/user/change">
        <p>Prénom : <input type="text" name="prenom" /> -
            Nom : <input type="text" name="nom" /></p>
        <p>Email : <input type="email" name="email" /> Mot de passe : <input type="password" name="psd" /></p>
        <p>Adresse : <input type="text" name="adresse"></p>
        <button type="submit">Ajouter</button>
    </form>
</body>

</html>
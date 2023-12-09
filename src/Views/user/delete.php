<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un utilisateur</title>
</head>

<body>
    <?php include 'menu.php' ?>
    <form method="POST" action="">
        <p>Entrez l'adresse mail de l'utilisateur: <input type="email" name="email" /></p>
        <button onclick="deleteUser()" type="submit" value="delete">Supprimer</button>
    </form>
</body>

<script>

</script>

</html>
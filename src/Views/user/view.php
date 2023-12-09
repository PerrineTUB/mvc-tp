<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Details</title>
</head>

<body>
    <?php include 'menu.php' ?>
    <h1>User Details</h1>
    <div>
        <p>Prénom : <?= $user->prenom ?> - Nom : <?= $user->nom ?></p>
        <p>Email : <?= $user->email ?> - Adresse : <?= $user->adresse ?></p>
    </div>
    <blockquote>
        <p><?= $citation['quote'] ?></p>
        <footer>—<?= $citation['author']?></footer>
    </blockquote>
</body>

</html>
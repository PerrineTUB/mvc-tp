<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User List</title>
</head>

<body>
    <?php include 'menu.php' ?>
    <h1>User List</h1>
    <?php foreach ($users as $user) : ?>
        <div style="display:flex; align-items: center; gap: 10px;">
            <p>
                <?= $user->prenom ?>
                <?= $user->nom ?> (
                <?= $user->email ?>)<br />
                Habite au :
                <?= $user->adresse ?>
            </p>
            <form method="POST">
                <button onclick="deleteUser(<?= $user->id ?>)" style=" height: 25px;">Supprimer</button>
            </form>
            <button onclick="modifUser(<?= $user->id ?>)" value="modifier" style="height: 25px;">Modifier</button>
        </div>
    <?php endforeach; ?>
</body>

<script>
    /*
     * Test d'une requête Ajax en utilisant notre contrôleur (UserControlleur viewAllAjax)
     */
    //Creation d'un objet Header
    let headers = new Headers();

    let requestParams = {
        method: "GET",
        headers: headers,
        mode: "cors",
        cache: "default"
    };

    fetch("/mvc-tp/json", requestParams).
    then(function(response) {
        if (response.ok) {
            return response.json();
        }
    }).then(function(articles) {
        articles.forEach(function(article) {
            console.log(article);
        });
    });

    function deleteUser(id) {
        let data = new FormData();
        data.append('id', id);

        console.log(id);

        let requestParams = {
            method: "POST",
            headers: new Headers(),
            mode: "no-cors",
            cache: "default",
            body: data,
        };

        console.log(requestParams);

        fetch("/mvc-tp/user/delete", requestParams).
        then(function(response) {
            if (response.ok) {
                console.log('ok');
            }
        });
    }

    function modifUser(id) {
        console.log("modif user", id);
    }
</script>

</html>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require("./calcul.php");
    function welcome(string $firstName, string $lastName = "Chevalier")
    {
        return "Bienvenue $firstName $lastName";
    }

    function isConnected(string $user)
    {
        return $user ? true : false;
    }

    $firstName = "Thomas";

    $myWelcome = welcome($firstName);

    echo $myWelcome;


    if (isConnected($firstName)) {
        echo "$firstName est connecté";
    } else {
        echo "$firstName n'est pas connecté";
    }

    echo sum(5, 5);
    
    ?>

    <form action="./calcul.php" method="post">
        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" id="firstName" placeholder="Votre prénom"><br />
        <label for="lastName">Nom</label>
        <input type="text" name="lastName" id="lastName" placeholder="Votre nom">
        <input type="submit" value="Valider">
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <?php
    session_start();
    setcookie("age", $_POST["age"], time() + (86400 * 2));
    setcookie("prenom", $_POST["prenom"], time() + (86400 * 2));
    setcookie("nom", $_POST["nom"], time() + (86400 * 2));
    echo "Bravo {$_COOKIE['prenom']} {$_COOKIE['nom']} tu as {$_COOKIE['age']} ans";
    ?>

    <form method="POST">
        <br>
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom">
        <br>
        <label for="nom">nom:</label>
        <input type="text" id="nom" name="nom">
        <br>
        <label for="age">âge:</label>
        <input type="text" id="age" name="age">
        <input type="submit" value="submit">
        <a href="log_out.php">
        <input type="button" value="disconection"> 
        </a>
    </form>
</body>

</html>
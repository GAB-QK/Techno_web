<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>


<?php
    if ($_GET) {
        echo "Bonjour {$_GET['genre']} {$_GET['prenom']} {$_GET['nom']} vous avez {$_GET['age']} ans";
    }else{
    ?>
    <form method="get">
        <select name="genre" id="genre ">
            <nom>Genre</nom>
            <option valeur="monsieur">.M</option>
            <option valeur="mamdemoiselle">.Mme</option>
            <option valeur="Madame">.Me</option>
            <option valeur="other">Autre</option>
        </select>
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
        <br>

    </form>
    <?php 
    }
?>
</body>

</html>
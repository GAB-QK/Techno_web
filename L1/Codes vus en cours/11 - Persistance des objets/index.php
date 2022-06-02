<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    function loadClass(string $class)
    {
        require "./models/$class.php";
    }
    spl_autoload_register("loadClass");

    $donnees = [
        "id" => 1,
        "nom" => "Gandalf :)",
        "pv" => 100,
        "pm" => 80
    ];
    $gandalf = new Personnage($donnees);
    echo "<pre>";
    print_r($gandalf);
    echo "</pre>";
    ?>

    <a href="./create.php" class="btn btn-primary">Créer un personnage</a>
</body>

</html>
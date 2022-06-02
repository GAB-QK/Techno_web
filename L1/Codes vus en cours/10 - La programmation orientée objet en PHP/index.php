<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        function loadClass(string $class) {
            require "./models/$class.php";
        }
        spl_autoload_register("loadClass");

        $gandalf = new Mage("Gandalf", 100, 100, 20);
        $aragorn = new Personnage("Aragorn", 120, 50, 30);
        echo "<pre>";
        print_r($aragorn);
        echo "</pre>";
        $gandalf->attaquer($aragorn);

        echo "<pre>";
        print_r($aragorn);
        echo "</pre>";
    ?>
</body>

</html>
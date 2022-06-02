<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    function loadClass($class)
    {
        if (str_contains($class, "Manager")) {
            require "./controllers/$class.php";
        } else {
            require "./models/$class.php";
        }
    }
    spl_autoload_register("loadClass");

    if ($_POST) {
        $manager = new PersonnagesManager();

        $newPersonnage = new Personnage($_POST);
        $manager->add($newPersonnage);
    }
    ?>

    <form method="POST" class="container">
        <input type="text" name="nom" id="nom" class="form-control">
        <input type="number" name="pv" id="pv" class="form-control">
        <input type="number" name="pm" id="pm" class="form-control">
        <input type="submit" value="Valider" class="btn btn-primary">
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $integer = 102;
        $float = 10.3;
        $basic = 34;
        $num = 1.5;
        $test = 12;
        $bis = 5;
        $resultat = $test + $bis; 
        $rounded = round($num);
        $stringified = strval($basic);
        var_dump($integer);
        echo "<br>";
        var_dump($float);
        echo "<br>";
        echo $stringified;
        echo "<br>";
        echo $rounded;
        echo "<br>";
        echo $resultat;
    ?>
</body>
</html>
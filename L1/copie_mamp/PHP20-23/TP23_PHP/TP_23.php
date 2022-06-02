<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
     <form method="GET">
        <select name="Annee" id="annee ">
            <nom>Annee</nom>
            <option valeur="1999">1999</option>
            <option valeur="2000">2000</option>
            <option valeur="2001">2001</option>
            <option valeur="2002">2002</option>
        </select>
        <input type="submit" value="submit">
    </form>
    

    <?php
    function bissextiles($birthYear){
        $bisextileYears = array();
        for ($i = $birthYear; $i <= date("Y"); $i++) {
            if ($i % 4 == 0 || $i % 400 == 0) {
                array_push($bisextileYears, $i);
            }
        }
        $count = count($bisextileYears);
        echo "vous avez vécu $count bisextiles ";
        echo "<br>";
        foreach ($bisextileYears as $bisextileYear) {
            echo "$bisextileYear,  ";
        }
    }

    if ($_GET){
        bissextiles($_GET['Annee']);
    }

    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditionelles</title>
</head>
<body>
    <?php
        $test = 143;
        $bis = 219;
        if ($test > $bis) {
            echo " False";
        }
        $limit = 50;
        $score = 64;
        if ($score > $limit) {
            echo " ok good !";
        }
        else{
            echo " oh nooo...";
        }
        $password = "azerty";
        if (strlen($password) > 5 ){
            echo" the password ";
        }
        else{
            echo"le mot de passe est pas secure";
        }
        if ($score > $limit && strlen($password) > 5) {
            echo"everything is good!";
        }
        elseif($score > $limit || strlen($password) > 5) {
            echo"something is good";
        }
        else{
            echo"nothing is good";
        }
        $total = 0;
        $limit = 10;
        for ($i=0; $i < $limit; $i++) { 
            $total += $i;
        }
        echo $total;
        $sentence = "Hello hexagone !";
        echo "\n";
        for ($i = strlen($sentence) - 1; $i >= 0  ; $i--) { 
            echo $sentence[$i];
        }
        

     ?>
</body>
</html>
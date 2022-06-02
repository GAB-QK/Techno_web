<?php 
    require "./models/Person.php";
    require "./models/Femme.php";
    require "./models/Homme.php";
    $GAB = new Homme("GAB", "le bg", "777");
    $TOMs = new Femme("Thomas", "le noir", "4896");
    $GAB->print();
    echo "<br>";
    echo "<br>";
    $TOMs->print();
    echo "<br>";
    echo "le mariage la prison ";
    echo "<br>";
    echo "<br>";
    $GAB->marier($TOMs);
    $GAB->print();
    echo"<br>";
    echo "<br>";
    $TOMs->print();
    echo"<br>";
    echo "<br>";
    echo" le celibat : la delivrance ";
    $GAB->divorce($TOMs);
    $GAB->print();
    echo"<br>";
    $TOMs->print();


?>
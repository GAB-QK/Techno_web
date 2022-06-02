<?php 
    require "./models/StylizedString.php";
    require "./models/City.php";
    require "./models/Person.php";

    $string = new StylizedString();
    $city = new City("Paris", "Ile de france");
    $GAB = new Person("Gabriel", "Qaddaha", "Paris");
    $TOM = new Person("Tom's", "G", "je sais pas");

    echo $string->bold();
    echo "<br>";
    echo $string->italic();
    echo "<br>";
    echo $string->underline();
    echo "<br>";
    echo $string->uppercase();
    echo "<br>";
    echo $city->print();
    echo "<br>";
    print_r($GAB->getPersonne());
    foreach ($GAB->getPersonne() as $gab) {
        echo $gab;
    }
    echo"<br>";
    foreach ($TOM->getPersonne() as $tom) {
        echo $tom;
    }

?>
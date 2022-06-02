<?php

function bissextiles($birthYear)
{ 
    $bisextileYears = array();
    for ($i=$birthYear; $i <= date("Y") ; $i++) { 
        if ($i %4 == 0 || $i %400 == 0 ) {
            array_push($bisextileYears,$i);
        }
    }
    $count = count($bisextileYears);
    echo "vous avez vécu $count bisextiles ";
    echo "<br>";
    print_r($bisextileYears);
}

bissextiles(1999);

?>
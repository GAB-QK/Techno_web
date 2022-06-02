<?php 
    $tableau = array();
    for ($i=0; $i <= 20 ; $i++) { 
        $random = rand(1,100);
        array_push($tableau,$random);
    }
    print_r($tableau);
?>
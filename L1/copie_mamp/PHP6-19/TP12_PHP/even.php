<?php 
echo " les nomrbress paires attendues entre 0 et 10: ";
    for ($i=0; $i < 11 ; $i++) { 
        if ($i %2 == 0){
            echo $i;
        }
        elseif ($i ==9 ) {
            break;
        }
        else {
            echo", ";
        }
    }
    
?>
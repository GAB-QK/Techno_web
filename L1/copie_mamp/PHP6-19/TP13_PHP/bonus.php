<?php 
    $random = rand(1,6);
    echo $random;
    if ($random == 6) {
        echo " bravo tu as gagné";
    }
    else{
        echo " so close ";
    }

    $month = "Aout";
    switch($month){
        case 'decembre':
        case 'janvier':
        case 'novembre':
            echo "c'est  l'hiver";
            break;
        
        case 'juin':
        case 'juillet':
        case 'Aout' : 
            echo " c'est l'été";
            break;

        case 'fervier':
        case 'mars':
        case 'avril':
        case 'mai' : 
            echo "c'est le spring";
            break;
    }
?>
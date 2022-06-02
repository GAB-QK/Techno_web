<?php

function supp_double($n)
{
    $resultat = array_unique($n);
    print_r($resultat);
}
$tableau = array(1, 1, 2, 2, 2, 3, 4, 5, 6, 7, 8, 9, 10);
supp_double($tableau);

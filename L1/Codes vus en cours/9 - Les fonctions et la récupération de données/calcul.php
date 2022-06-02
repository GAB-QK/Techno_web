<?php

function sum(int $a, int $b)
{
    return $a + $b;
}

if ($_POST) {

    echo "Bonjour {$_POST["firstName"]} {$_POST["lastName"]} !";
}

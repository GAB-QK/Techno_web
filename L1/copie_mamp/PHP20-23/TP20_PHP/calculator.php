<?php
function add($a, $b)
{
    $resultat = $a + $b;
    return $resultat;
}
function substract($a, $b)
{
    $resultat = $a - $b;
    return $resultat;
}
function multiply($a, $b)
{
    $resultat = $a * $b;
    return $resultat;
}
function divide($a, $b)
{
    $resultat = $a / $b;
    return $resultat;
}
function modulo($a, $b)
{
    $resultat = $a % $b;
    return $resultat;
}
function display1($a, $b, $choix)
{
    if ($choix == "add") {
        echo "le resultat de l'addition de $a et $b est ";
        echo add($a, $b);
        echo "<br>";
    } elseif ($choix == "substract") {
        echo "le resultat de l'soustraction de $a et $b est ";
        echo substract($a, $b);
        echo "<br>";
    } elseif ($choix == "multiply") {
        echo "le resultat de la multiplication de $a et $b est ";
        echo multiply($a, $b);
        echo "<br>";
    } elseif ($choix == "divide") {
        echo "le resultat de la diviosion de $a et $b est ";
        echo divide($a, $b);
        echo "<br>";
    } elseif ($choix == "modulo") {
        echo "le resultat de le modulo de $a et $b est ";
        echo modulo($a, $b);
        echo "<br>";
    }
}

function display2($a, $b, $choix)
{
    switch ($choix) {
        case 'add':
            echo "le resultat de l'addition de $a et $b est ";
            echo add($a, $b);
           
            break;
        case 'subastract':
            echo "le resultat de l'addition de $a et $b est ";
            echo add($a, $b);

        case 'muliply':
            echo "le resultat de la multiplication de $a et $b est ";
            echo multiply($a, $b);

            break;
        case 'divide':
            echo "le resultat de la division de $a et $b est ";
            echo divide($a, $b);

            break;
        case 'modulo':
            echo "le resultat du modulo de $a et $b est ";
            echo modulo($a, $b);

            break;
        default:
            echo "faire un choix de l'operateur";
            break;
    }
    echo "<br>";
}

display2(678, 4567, "add");
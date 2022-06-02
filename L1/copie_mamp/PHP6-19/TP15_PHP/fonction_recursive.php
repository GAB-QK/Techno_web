<?php

function gabriel($n)
{
    if ($n == 0) {
        return;
    }
    echo $n;
    $n--;
    gabriel($n);
}

gabriel(10);
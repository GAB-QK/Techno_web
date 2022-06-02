<?php

class Mage extends Personnage
{
    private $mana;

    public function attaquer($perso)
    {
        parent::attaquer($perso);
        $this->lancerUnSort();
    }

    public function lancerUnSort()
    {
        echo "Le magien lance un sort !<br>";
    }
}

<?php

class Personnage
{
    // Attributs 
    private string $nom;
    private int $pv;
    private int $pm;
    private int $attaque;

    // Méthodes 
    public function __construct(string $nom, int $pv, int $pm, int $attaque)
    {
        $this->setNom($nom);
        $this->setPv($pv);
        $this->pm = $pm;
        $this->attaque = $attaque;
    }

    public function attaquer($perso)
    {
        echo "{$this->nom} attaque<br>";
        $perso->pv -= $this->attaque;
    }

    public function defendre()
    {
        echo "Le personnage se defend<br>";
    }

    public function getNom(): string
    {
        return $this->nom;
    }
    public function getPv(): string
    {
        return $this->pv;
    }

    public function setNom(string $nom): Personnage
    {
        $this->nom = $nom;
        return $this;
    }

    public function setPv(int $pv): Personnage
    {
        $this->pv = $pv;
        return $this;
    }

    public function getPm(): int
    {
        return $this->pm;
    }

    public function setPm(int $pm)
    {
        $this->pm = $pm;
        return $this;
    }

    public function getAttaque()
    {
        return $this->attaque;
    }

    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;
        return $this;
    }
}
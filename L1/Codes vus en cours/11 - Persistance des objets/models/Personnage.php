<?php

class Personnage
{
    // Attributs 
    private int $id;
    private string $nom;
    private int $pv;
    private int $pm;

    // Méthodes 
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = "set" . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
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
}

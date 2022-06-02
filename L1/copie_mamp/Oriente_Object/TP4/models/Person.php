<?php 
    class Person
    {
        private $prenom ;
        private $nom;
        private $age;

        public function __construct($prenom, $nom, $age) {
            $this->setPrenom($prenom);
            $this->setNom($nom);
            $this->setAge($age);
        }
        public function vieillir($age)
        {
            $this->age++;
        }
        public function getPrenom()
        {
            return $this->prenom;
        }
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }
        
        public function getNom()
        {
            return $this->nom;
        }
        public function setNom($nom)
        {
            $this->nom = $nom;
        }

        public function getAge()
        {
            return $this->age;
        }
        public function setAge($age)
        {
            $this->age = $age;
        }

        public function print()
        {
            echo " {$this->prenom}, {$this->nom}, {$this->age} ";
        }
        
    }
    
?>
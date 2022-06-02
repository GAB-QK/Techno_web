<?php 
    class City{
        private $name ;
        private $departement;

        public function __construct($name, $departement) {
            $this->setName($name);
            $this->setDepartement($departement);
        }

        public function print()
        {
            return "La ville {$this->name} est dans me departement {$this->departement}";
        }

        public function setName($name)
        {
            $this->name = $name;
        }
        public function setDepartement($departement)
        {
            $this->departement = $departement;
        }

        
    }

?>
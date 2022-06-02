<?php 
    class Person{
        private $firstName ;
        private $lastName;
        private $adress;

        public function __construct($firstName, $lastName, $adress) {
            $this->setFirstName($firstName);
            $this->setLastName($lastName);
            $this->setAdresse($adress);
        }

        public function print()
        {
            return "La ville {$this->name} est dans me departement {$this->departement}";
        }

        public function setFirstName($firstName)
        {
            $this->firstName = $firstName;
        }
        public function setLastName($lastName)
        {
            $this->lastName = $lastName;
        }
        public function setAdresse($adress)
        {
            $this->adress = $adress;
        }
        
        public function getPersonne()
        {
            return [$this->firstName, $this->lastName, $this->adress];
        }
    }

?>
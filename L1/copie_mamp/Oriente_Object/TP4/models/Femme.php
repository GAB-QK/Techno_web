<?php 
    class Femme extends Person 
    {
        private $estCelib = TRUE;
        private $husband;

        public function __construct($prenom, $nom, $age) {
            $this->setPrenom($prenom);
            $this->setNom($nom);
            $this->setAge($age);
        }
        public function setEstCelib($estCelib)
        {
            $this->estCelib = $estCelib;
        }

        public function getEpoux()
        {
            return $this->husband; 
        }
        public function setEpoux($newHusband)
        {
            $this->husband = $newHusband;
        }
        public function marier($homme)
        {
            $this->setEpoux($homme) ;
            $this->estCelib = FALSE;
            $homme->setEpouse($this) ;
            $homme->setEstCelib(FALSE);
        }
        public function divorce($homme)
        {
            $this->setEpoux(NULL) ;
            $this->estCelib = TRUE;
            $homme->setEpouse($this) ;
            $homme->setEstCelib(TRUE);
        }
        public function print()
        {
            Person :: print();
            if ($this->estCelib == TRUE) {
                echo"l'orienté objet c'est nul poour ça t'es celib cogno! ";
            }
            else{
                echo"est mariée à {$this->husband->getPrenom()}{$this->husband->getNom()}";
            }
        }

    }

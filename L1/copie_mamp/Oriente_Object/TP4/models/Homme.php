<?php 
    class Homme extends Person 
    {
        private $estCelib = TRUE;
        private $wife;

        public function __construct($prenom, $nom, $age) {
            $this->setPrenom($prenom);
            $this->setNom($nom);
            $this->setAge($age);
        }
        public function setEstCelib($estCelib)
        {
            $this->estCelib = $estCelib;
        }

        public function getEpouse()
        {
            return $this->wife; 
        }
        public function setEpouse($newWife)
        {
            $this->wife = $newWife;
        }
        public function marier($femme)
        {
            $this->setEpouse($femme) ;
            $this->estCelib = FALSE;
            $femme->setEpoux($this) ;
            $femme->setEstCelib(FALSE);
        }
        public function divorce($femme)
        {
            $this->setEpouse(NULL) ;
            $this->estCelib = TRUE;
            $femme->setEpoux($this) ;
            $femme->setEstCelib(TRUE);
        }
        public function print()
        {
            Person :: print();
            if ($this->estCelib == TRUE) {
                echo"l'orienté objet c'est nul poour ça t'es celib ! ";
            }
            else{
                echo"est marié à {$this->wife->getPrenom()}{$this->wife->getNom()}";
            }
        }
    }
    
?>
<?php
        class Equipe{
            private string $nom;
            private Pays $pays;
            private array $carrieres;
            
            
           

            public function __construct(string $nom, Pays $pays) {
                $this->nom = $nom;
                $this->pays = $pays;
                $this->pays->addClubs($this);
                $this->carrieres = [];
            }

            public function getNom() {
                return $this->nom;
            }

            public function getPays() {
                return $this->pays;
            }


            public function setNom($nom) {
                return $this->nom = $nom;
            }
        
            public function addEquipes( Carriere $carrieres){
                $this->carrieres[] = $carrieres;
            }

            public function getListCarriereClub(){
                   echo $this->nom;
                foreach($this->carrieres as $carriere){
                     $result = $carriere;
                }
                return $result;
            }


           public function __toString()
            {
                return $this;
            }


        }

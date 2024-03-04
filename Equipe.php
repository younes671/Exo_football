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

            public function getCarriereEquipe(){
                echo '<div class="carte-club">' . $this->nom;
                $result = "";
             foreach($this->carrieres as $carriere){
                  $result .= '<ul><li>' . $carriere->getJoueur() . "</li><li>" . $carriere->getSaison() . '</li></ul>';
             }
             return $result;
             echo "</div>";
         }


           public function __toString()
            {
                return $this->nom;
            }


        }

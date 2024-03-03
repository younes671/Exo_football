<?php
        class Equipe{
            private string $nom;
            private array $joueurs;
            private Pays $pays;
           

            public function __construct(string $nom, Pays $pays) {
                $this->nom = $nom;
                $this->pays = $pays;
                $this->pays->addClubs($this);
                $this->joueurs = [];
               

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

            public function addJoueur(Joueur $joueurs){
                $this->joueurs[] = $joueurs;
            }

            public function getJoueur()
            {
                foreach($this->joueurs as $joueur){
                    return $joueur;
                }
            }

            public function getDetailClubJoueur(){
                $detail = "<table border='1px'>
                                    <thead>
                                    <tr>
                                         <th>" . $this->nom . "</th>
                                         
                                    </tr>
                                    </thead>
                               <tbody>";
                foreach($this->joueurs as $joueur){
                     
                    $detail .= "<tr>
                    
                                    <td>" . $joueur->getPrenom() . " " . $joueur->getNom() . " " . $joueur->getSaison() .  "</td>
        
                                </tr>";
                        
                } 
                $detail .= "</tbody></table>"; 
                return $detail;
           }

        


           public function __toString()
            {
                return $this;
            }


        }

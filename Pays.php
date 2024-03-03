<?php  
        class Pays{
            private $nom;
            private array $clubs;
            private array $joueurs;
        

            public function __construct(string $nom) {
                $this->nom = $nom;

                $this->clubs = [];
                $this->joueurs = [];
            }

            public function getNom() {
                return $this->nom;
            }

            public function setNom($nom) {
                return $this->nom = $nom;
            }

            public function addClubs(Equipe $clubs){
                $this->clubs[] = $clubs;
            }

            public function addJoueurs(Joueur $joueurs){
                $this->joueurs[] = $joueurs;
            }

            public function getDetailClubPays(){
                $detail = "<table border='1px'>
                                    <thead>
                                    <tr>
                                         <th>" . $this->nom . "</th>
                                         
                                    </tr>
                                    </thead>
                               <tbody>";
                foreach($this->clubs as $club){
                     
                    $detail .= "<tr>
                    
                                    <td>" . $club->getNom() . "</td>
        
                                </tr>";
                        
                } 
                $detail .= "</tbody></table>"; 
                return $detail;
           }

           public function getlistJoueur(){
            foreach($this->joueurs as $joueur){
                $detail = $joueur->getPrenom() . " " . $joueur->getNom() . "<br>" . $this . " ";
               
                 
            }
           return $detail;
            
           }

           

            public function __toString()
            {
                return $this;
            }

        }
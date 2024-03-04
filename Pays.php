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
               echo '<div class="carte-pays">';
                $detail =    $this->nom;
                foreach($this->clubs as $club){
                    $detail .= '<ul><li>' . $club->getNom() . '</li></ul>';    
                   
               } 
                return $detail. "</div>";
           }

           public function getlistJoueur(){
            foreach($this->joueurs as $joueur){
                $detail = $joueur->getPrenom() . " " . $joueur->getNom() . "<br>" . $this . " ";
               
                 
            }
           return $detail;
            
           }

        //    public function getPlay(){
           
        //         foreach($this->joueurs as $joueur){
        //         echo $joueur; 
                    
        //         }
        //         return $joueur;
        //    }

           

            public function __toString()
            {
                return $this->nom;
            }

        }
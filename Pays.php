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

            public function getClubs(){
                if($this->clubs == 'France')
                foreach($this->clubs as $club){

                    return $this;
                    $club['nom'];
                }
            }

            public function __toString()
            {
                return $this;
            }

        }
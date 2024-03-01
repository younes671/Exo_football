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


        }

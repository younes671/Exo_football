<?php  
    class Carriere{
        private Equipe $club;
        private Joueur $joueur;
        private int $saison;

        public function __construct(int $saison, Equipe $club, Joueur $joueur)
        {
            $this->saison = $saison;
            $this->joueur = $joueur;
            $this->joueur->addJoueurs($this);
            $this->club = $club;
            $this->club->addEquipes($this);
        }

        public function getSaison() {
            return $this->saison;
        }

        public function getClub() {
            return $this->club;
        }

        public function getJoueur() {
            return $this->joueur;
        }

        public function setSaison($saison) {
            return $this->saison = $saison;
        }

        public function getListeClub(){
            return $this->getClub();
        }

        public function __toString()
        {
            return $this->saison;
        }

    }
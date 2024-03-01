<?php
        class Joueur{
                private string $nom;
                private string $prenom;
                private DateTime $date_naissance;
                private Pays $pays;
                private Equipe $equipe;
                private $annee_saison;


                public function __construct(string $nom, string $prenom, string $date_naissance, Pays $pays, Equipe $equipe, int $annee_saison) {
                    $this->nom = $nom;
                    $this->prenom = $prenom;
                    $this->date_naissance = new DateTime($date_naissance);
                    $this->pays = $pays;
                    $this->equipe = $equipe;
                    $this->annee_saison = $annee_saison;
                    $this->equipe->addJoueur($this);
                    $this->pays->addJoueurs($this);
                }

                public function getNom() {
                    return $this->nom;
                }

                public function getPrenom() {
                    return $this->prenom;
                }

                public function getDateNaissance() {
                    return $this->date_naissance;
                }

                public function getEquipe() {
                    return $this->date_naissance;
                }

                public function getSaison() {
                    return $this->date_naissance;
                }
    
                public function setNom($nom) {
                    return $this->nom = $nom;
                }

                public function setPrenom($prenom) {
                    return $this->prenom = $prenom;
                }

                public function setDateNaissance($date_naissance) {
                    return $this->date_naissance = $date_naissance;
                }

                public function setEquipe($equipe) {
                    return $this->equipe = $equipe;
                }

                public function setSaison($annee_saison) {
                    return $this->annee_saison = $annee_saison;
                }
        }
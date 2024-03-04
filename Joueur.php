<?php
        class Joueur{
                private string $nom;
                private string $prenom;
                private DateTime $date_naissance;
                private Pays $pays;
                private array $carrieres;

                
                
                


                public function __construct(string $nom, string $prenom, string $date_naissance, Pays $pays) {
                    $this->nom = $nom;
                    $this->prenom = $prenom;
                    $this->date_naissance = new DateTime($date_naissance);
                    $this->pays = $pays;
                    $this->pays->addJoueurs($this);
                    $this->carrieres = [];
                   
                    
                    
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

                public function getPays() {
                    return $this->pays;
                }

                public function getJoueur() {
                    return $this->pays;
                }
    
                public function setNom($nom) {
                    return $this->nom = $nom;
                }

                public function setPrenom($prenom) {
                    return $this->prenom = $prenom;
                }

                public function setJoueur($joueur) {
                    return $this->nom = $joueur;
                }

                public function setDateNaissance($date_naissance) {
                    return $this->date_naissance = $date_naissance;
                }
                
                public function addJoueurs( Carriere $carrieres){
                    $this->carrieres[] = $carrieres;
                }

                public function getCarriereJoueur(){
                    echo '<div class="carte-joueur">' . $this->prenom . " " . $this->nom;
                    $result = "";
                 foreach($this->carrieres as $carriere){
                      $result .= '<ul><li>' . $carriere->getClub() . "</li><li>" . $carriere->getSaison() . '</li></ul>';
                 }
                 return $result;
                 echo "</div>";
             }
 
               
                public function __toString()
                {
                    return $this->prenom." ".$this->nom;
                }
        }
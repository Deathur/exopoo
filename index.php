<?php

class Chien {  

    // Variable
    public $nom;
    public $race;


    // Construct
    public function __construct($nom, $race) {
        $this->nom = $nom;
        $this->race = $race;
    }

    // Getter
    public function getNom(){
        return $this->nom;
    }
    public function getRace(){
        return $this->race;
    }
    
    // Setter
    public function setNom($nom){
        return $this->nom = $nom;
    }  
    public function setRace($race){
        return $this->race = $race;
    }

    // Methode
    public function aboyer(){
        echo "Woof, je suis $this->nom";
    }
}
    $chien1 = new Chien("Rex", "Berger Allemand");
    var_dump($chien1);
    echo "<br>";
    $chien1->setNom("Max");
    $chien1->aboyer();
    echo "<br>";
    
    class Humain {
        public $genre;

        public function __construct($genre) {
            $this->genre = $genre;
        }
        public function getGenre(){
            return $this->genre;
        }
        public function setGenre($genre){
            return $this->genre = $genre;
        }

    }
    class Femme extends Humain{
        public function __construct() {
            $this->genre = "Femme";
        }
    }
    class Homme extends Humain{
        public function __construct() {
            $this->genre = "Homme";
        }
    }

    $femme = new Femme();
    var_dump($femme);
    echo "<br>";
    $homme = new Homme();
    var_dump($homme);
    ?>
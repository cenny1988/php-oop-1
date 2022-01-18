<?php
/**
     * DEFINIRE CLASSE Film:
     *      Attributi:
     *      - titolo
     *      - sottotiolo
     *      - regista
     * 
     *      Metodi:
     *      - costruttore che accetta titolo
     *      - getFullTitle: 
     *          Se sottotitolo presente:
     *            restituisce "titolo: sottotitolo" 
     *          Se sottotiolo assente:
     *            restituisce "titolo" 
     *      - __toString: 
     *          Se regista presente:
     *            restituisce "fullTitle | regista"
     *          Se regista assente:
     *            restituisce "fullTitle | ???"
     * 
     * UTILIZZO OGGETTI Film:
     * 
     *      Generare 3 istanze della classe Film:
     *      - uno con solo il titolo
     *      - uno con titolo e sottotitolo
     *      - uno con titolo, sottotiolo e regista
     * 
     *      Stampare tutti gli oggetti tramite toString (implicito)
     * 
     *  RISULTATO ATTESO:
     * 
     *      Matrix | ???
     *      Fantozzi 2: il ritorno di fantozzi | ???
     *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
*/
class Film {

    public $titolo;
    public $sottotitolo;
    public $regista;

    public function __construct($titolo) {

        $this -> titolo = $titolo;
    }

    public function getFullTitle(){

        // if($this -> sottotitolo != ""){
        //     return $this -> titolo . ": " . $this -> sottotitolo;
        // }else {
        //     return $this -> titolo;
        // }
        
        return $this -> titolo . (!$this -> sottotitolo ? '' : ": " . $this -> sottotitolo);
    }

    public function __toString(){

        // if($this -> regista != ""){
        //     return $this -> getFullTitle() . " | " . $this -> regista . "<br>";
        // }else {
        //     return $this -> getFullTitle() . " | ??? <br>";
        // }   
        
        return $this -> getFullTitle() . " | " . (!$this -> regista ? "???" : $this -> regista);
    }
}

$film1 = new Film("Matrix");
$film2 = new Film("Fantozzi 2");
$film3 = new Film("Peter Pan");

$film2 -> sottotitolo = "il ritorno di fantozzi";
$film3 -> sottotitolo = "il ritorno all'isola che non c'e'";
$film3 -> regista = "Robin Budd";

echo $film1 . "<br>";
echo $film2 . "<br>";
echo $film3 . "<br>";

?>
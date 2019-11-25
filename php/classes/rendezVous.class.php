<?php

class RendezVous {
    private $bdd;

    public function __construct(){
        $this->$bdd = new BDD();
    }

    public function listAll($idUser){
        $requete = "SELECT *, DATE_FORMAT(date, '%d/%m/%Y') as dateEu, DATE_FORMAT(start_hour, '%Hh%i') as hourEu, NOW() as thisDay FROM RendezVous WHERE user_id = ? ORDER BY date DESC LIMIT 10 ";
        return $this->$bdd->selectAll($requete, [$idUser]);
    }
    public function listAdmin($date){
        $requete = " SELECT *, DATE_FORMAT(date, '%d/%m/%Y') as dateEu, DATE_FORMAT(start_hour, '%Hh%i') as hourEu, NOW() as thisDay FROM RendezVous INNER JOIN User ON User.user_id = RendezVous.user_id WHERE date >= ? ORDER BY date, start_hour";
        return $this->$bdd->selectAll($requete,[$date]);
    }

}
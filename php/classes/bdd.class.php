<?php

class BDD {
    private $bdd;

    public function __construct (){
        $this->bdd = new PDO (
            'mysql:host=localhost;
            dbname=SiteNaturo;
            charset=utf8',
            'root',
            'root',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
            );
    }
    
    public function selectOne(string $sql, array $param = []){
        $requete = $this->bdd->prepare($sql);
        $requete->execute($param);
        return $requete->fetch();
    }

    public function selectAll(string $sql, array $param = []){
        $requete = $this->bdd->prepare($sql);
        $requete->execute($param);
        return $requete->fetchAll();
    }

    public function getLastId(){
        return $this->bdd->lastInsertId();
    }

    public function update(string $sql, array $param = []){
        $requete = $this->bdd->prepare($sql);
        $requete->execute($param);
    }
}
<?php
include 'classes/bdd.class.php';

$idUser= ($_GET['id']);

var_dump($_POST);
if (EMPTY($_POST)==FALSE) {

    $tab = $_POST;

    $maChaine = "";

    foreach ($tab as $key => $param){
        if(empty($param)==FALSE){
            if(empty($maChaine)==TRUE){
                $maChaine = " ".$key ." = '". $param."' ";
            } else {
                $maChaine = $maChaine .", ". $key ." = '". $param."' ";
            }
            
        }
    }
    if (empty($maChaine)==FALSE){
        $bdd = new BDD;
        $requete = "UPDATE User SET" . $maChaine . "WHERE User.user_id = ?";
        $bdd->update($requete, [$idUser]);
    }

}

header('Location: ficheUser.php?id=' . $idUser);
<?php
include 'classes/bdd.class.php';

$idUser= ($_GET['id']);

if (!empty($_POST)) {
    if(!empty($idUser)){

        $tab = $_POST;

        $maChaine = "";

        foreach ($tab as $key => $param){
            if(!empty($param)){
                if(empty($maChaine)){
                    $maChaine = " ".$key ." = '". $param."' ";
                } else {
                    $maChaine .= ", ". $key ." = '". $param."' ";
                }

            }
        }
        if (!empty($maChaine)){
            $bdd = new BDD;
            $requete = "UPDATE User SET" . $maChaine . "WHERE User.user_id = ?";
            $bdd->update($requete, [$idUser]);   
            header('Location: ficheUser.php?id=' . $idUser);
            exit();     
        }
    }
    else {
        $tab = $_POST;
        
        $keys = "";
        $values = "";

        foreach ($tab as $key => $param){
            if(!empty($param)){
                if(empty($keys)){
                    $keys = $key;
                    $values = '"'.$param.'"';
                } else {
                    $keys .= ', '.$key;
                    $values .=', "'.$param.'"';
                }

            }
        }
        
        $bdd = new BDD;
        $requete = "INSERT INTO User ( ". $keys ." ) VALUES (".$values.")";
        var_dump($requete);
        $bdd->update($requete,[]);
        $idUser = $bdd->getLastId();
        header('Location: ficheUser.php?id=' . $idUser);
        exit;

    }
}
header('Location: espaceAdmin.php');


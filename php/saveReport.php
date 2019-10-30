<?php

include 'classes/bdd.class.php';
include 'classes/userSession.class.php';

$userSession = new UserSession();
$userSession->isAdmin();

if (isset($_GET['id'])){

    $rdv_id = $_GET['id'];

    if (isset ($_POST['modifResume']))

        $content = $_POST['modifResume'];

        $bdd = new BDD;
        $requete = " UPDATE RendezVous SET content = ?  WHERE rdv_id = $rdv_id" ;
        $save = $bdd->update($requete,[$content]);

        $requete = "SELECT user_id FROM RendezVous WHERE rdv_id = $rdv_id ";
        $userId = $bdd->selectOne($requete,[]);
        
        header('Location: ficheUser.php?id='.$userId['user_id']);

}
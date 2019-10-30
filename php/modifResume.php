<?php

include 'classes/bdd.class.php';
include 'classes/userSession.class.php';

$userSession = new UserSession;
$userSession->isAdmin();

if (isset($_GET['id'])){
    
    $rdv_id = $_GET['id'];

    $bdd = new BDD;
    $requete = " SELECT rdv_id, content FROM RendezVous WHERE rdv_id = ? ";
    $content = $bdd->selectOne($requete,[$rdv_id]);
}

include 'vue/modifResume.phtml';
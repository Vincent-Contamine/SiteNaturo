<?php

include 'classes/bdd.class.php';
include 'classes/userSession.class.php';

$userSession = new UserSession();
$userSession->isAdmin();

if (isset($_GET['id'])){
    
    $rdvId = $_GET['id'];
    
    $bdd =new BDD;
    $requete = "DELETE FROM RendezVous WHERE rdv_id = ? ";
    var_dump($requete);
    $delete = $bdd->update($requete,[$rdvId]);

    header('Location: espaceAdmin.php');
}
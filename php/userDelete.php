<?php

include 'classes/bdd.class.php';
include 'classes/userSession.class.php';

$userSession = new UserSession();
$userSession->isAdmin();

if (isset($_GET['id'])){
    
    $userId = $_GET['id'];
    
    $bdd =new BDD;
    $requete = "DELETE FROM User WHERE user_id = ? ";
    $delete = $bdd->update($requete,[$userId]);

    header('Location: patientele.php');
}
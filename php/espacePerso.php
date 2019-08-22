<?php

include 'classes/bdd.class.php';
include 'classes/rendezVous.class.php';
include 'classes/userSession.class.php';
$userSession = new UserSession();
$userSession->isAuthenticated() ? $idUser = $userSession->getId() : $idUser = 0;
    if ($_SESSION["user"]["UserId"] == 1){
        header('Location: espaceAdmin.php');
        exit();
    }
$rdvListe = new RendezVous();
$mesRdv = $rdvListe -> listAll($idUser);
include 'vue/espacePerso.phtml';
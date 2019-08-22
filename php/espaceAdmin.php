<?php

include 'classes/bdd.class.php';
include 'classes/userSession.class.php';
include 'classes/rendezVous.class.php';
$userSession = new UserSession();
$userSession->isAdmin();
$date = date("Y-m-d");
$rdvListe = new RendezVous();
$mesRdv = $rdvListe->listAdmin($date);

include 'vue/espaceAdmin.phtml';

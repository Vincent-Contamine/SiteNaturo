<?php
include 'classes/bdd.class.php';
include 'classes/userSession.class.php';
$userSession = new UserSession();
$userSession->isAdmin();

$bdd = new BDD;
$requete = "SELECT user_id, firstName, lastName FROM User ORDER BY lastName ";
$users = $bdd->selectAll($requete,[]);

include 'vue/patientele.phtml';
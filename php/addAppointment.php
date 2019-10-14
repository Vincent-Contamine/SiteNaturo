<?php
include 'classes/bdd.class.php';
include 'classes/userSession.class.php';
include 'classes/rendezVous.class.php';
$userSession = new UserSession();
$userSession->isAdmin();

$date = date("Y-m-d");

$bdd = new BDD();
$requete = "SELECT user_id, firstName, lastName FROM User ORDER BY user_id";
$users = $bdd->selectAll($requete,[]);
var_dump($users);

include 'vue/addAppointment.phtml';

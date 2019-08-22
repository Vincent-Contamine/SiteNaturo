<?php
include 'classes/bdd.class.php';
include 'classes/userSession.class.php';

$idUser = ($_GET['id']);

if (isset($_GET['id'])) {
   
    $bdd = new BDD();
    $requete = " SELECT *, DATE_FORMAT(date, '%d/%m/%Y') as dateEu FROM User INNER JOIN RendezVous ON User.user_id = RendezVous.user_id WHERE User.user_id = ? ORDER BY date, start_hour";
    $userInfo = $bdd->selectAll($requete,[$idUser]);
}


include 'vue/editUser.phtml';
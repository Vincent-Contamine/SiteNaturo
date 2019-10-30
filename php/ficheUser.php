<?php
include 'classes/bdd.class.php';
include 'classes/userSession.class.php';
include 'classes/rendezVous.class.php';
$userSession = new UserSession();
$userSession->isAdmin();

if (isset($_GET['id'])) {
    $idUser = ($_GET['id']);
    
    $bdd = new BDD;
    $requete = " SELECT *, DATE_FORMAT(birthday, '%d/%m/%Y') as dateEu FROM User WHERE user_id = ?";
    $userInfo = $bdd->selectOne($requete,[$idUser]);

    $rdvListe = new RendezVous();
    $mesRdv = $rdvListe -> listAll($idUser);

}



include 'vue/ficheUser.phtml';


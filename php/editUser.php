<?php
include 'classes/bdd.class.php';
include 'classes/userSession.class.php';

$idUser = ($_GET['id']);

if (isset($_GET['id'])) {
   
    $bdd = new BDD;
    $requete = " SELECT *, DATE_FORMAT(birthday, '%d/%m/%Y') as dateEu FROM User WHERE user_id = ? ";
    $userInfo = $bdd->selectOne($requete,[$idUser]);
}


include 'vue/editUser.phtml';
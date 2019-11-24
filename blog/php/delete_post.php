<?php

include '../../php/classes/userSession.class.php';
$userSession = new UserSession();
$userSession->isAdmin();

    if(isset($_GET['id'])){

        include '../../php/classes/bdd.class.php';

        $bdd =new BDD();

        $requete =
        '
            DELETE FROM
                Post
            WHERE
                Id = ?
        ';
        $bdd->update($requete,[$_GET['id']]);
    }
    
    header('Location: admin.php');
    exit();
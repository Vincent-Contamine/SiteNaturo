<?php

    include '../../php/classes/bdd.class.php';
    include '../../php/classes/userSession.class.php';
    $userSession = new UserSession();
    $userSession->isAdmin();

    $bdd = new BDD();

    if(empty($_POST))
    {
        
        $requete =
        '
            SELECT
                Id,
                Name
            FROM
                Category
        ';
        $categories = $bdd->selectAll($requete,[]);

        $vue = 'add_post';
        include '../templates/layout.phtml';

    } else {
       
        $requete =
        '
            INSERT INTO
                Post (Title, Content, Category_Id, CreationTimestamp)
            VALUES
                (?, ?, ?, NOW())
        ';
        $update = $bdd->update($requete,[$_POST['title'], $_POST['content'], $_POST['category']]);

        header('Location: admin.php');
        exit();
    }
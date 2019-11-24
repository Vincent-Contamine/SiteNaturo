<?php

    include '../../php/classes/bdd.class.php';
    include '../../php/classes/userSession.class.php';
    $userSession = new UserSession();
    $userSession->isAdmin();

    $bdd =new BDD();

    $requete =
    '
        SELECT
            Post.Id,
            Title,
            Content,
            CreationTimestamp,
            Category.Name AS Category_Name
        FROM
            Post
        INNER JOIN
            Category
        ON
            Post.Category_Id = Category.Id
        ORDER BY
            CreationTimestamp DESC
    ';
    $posts = $bdd->selectAll($requete,[]);
    
    $vue = 'admin';
    include '../templates/layout.phtml';
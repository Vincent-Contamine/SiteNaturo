<?php

    include '../../php/classes/bdd.class.php';
    include '../../php/classes/userSession.class.php';
    $userSession = new UserSession();
    $userSession->isAdmin();

    $bdd = new BDD();

    if(empty($_POST)){

        if(isset($_GET['id'])){
        
            $postId = $_GET['id'];
            
            $requete =
            '
                SELECT
                    Id,
                    Title,
                    Content
                FROM
                    Post
                WHERE
                    Id = ?
            ';
            $post = $bdd->selectOne($requete,[$postId]);

            $vue = 'edit_post';
            include '../templates/layout.phtml';
        }
    }
    else
    {
        $requete =
        '
            UPDATE
                Post
            SET
                Title = ?,
                Content = ?
            WHERE
                Id = ?
        ';
        $bdd->update($requete,[$_POST['title'], $_POST['content'], $_POST['postId']]);

        header('Location: admin.php');
        exit();
    }
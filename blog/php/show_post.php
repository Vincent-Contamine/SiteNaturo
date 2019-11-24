<?php

    if(isset($_GET['id']))
    {
        include '../../php/classes/bdd.class.php';

        $postId = $_GET['id'];

        $bdd = new BDD();

        $requete =
        '
            SELECT
                Id,
                Title,
                Content,
                CreationTimestamp
            FROM
                Post
            WHERE
                Id = ?
        ';
        $post = $bdd->selectOne($requete,[$postId]);
        
        $vue = 'show_post';
        include '../templates/layout.phtml';

    } else {
        
        header('Location: indexBlog.php');
        exit(); 
    }

    
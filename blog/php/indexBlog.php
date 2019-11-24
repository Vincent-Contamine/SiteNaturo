<?php
    include '../../php/classes/bdd.class.php';

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
        ORDER BY
            CreationTimestamp DESC
    ';
    $posts = $bdd->selectAll($requete,[]);
    
    $vue = 'indexBlog';
    include '../templates/layout.phtml';
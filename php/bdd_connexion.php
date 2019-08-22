<?php

$pdo = new PDO('mysql:host=localhost;dbname=SiteNaturo;charset=utf8','root','root',
[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

include "classes/UserSession.class.php";
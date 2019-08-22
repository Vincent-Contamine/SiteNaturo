<?php
include 'classes/bdd.class.php';

if(!empty($_POST)){
    $errors = '';
    $myEmail = 'aurelie.c.naturopathe@gmail.com';
    if( empty($_POST['firstName'])  ||
        empty($_POST['lastName'])  ||
        empty($_POST['email']) ||
        empty($_POST['message']))
    {
        $errors .= "\n Erreur : Tous les champs sont requis";
    }

    $fullName = $_POST['firstName'] ."  ". $_POST['lastName'] ;
    $email_address = $_POST['email'];
    $message = $_POST['message'];

    if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
    $email_address))
    {
        $errors .= "\n Erreur : Votre address mail est invalide";
    }

    if( empty($errors))
    {
    
    $to      = $myEmail;
    $from    = $fulltName;
    $message = wordwrap($message, 70, "\r\n");
    $headers =  'From: '.$email_address . "\r\n" .
                'Reply-To:'.$email_address . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

    $test =mail($to, $subject, $message, $headers);

    }
} 

// header('Location: index.php');

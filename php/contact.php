<?php
include 'classes/bdd.class.php';

if (!empty($_POST)) {
    $myEmail = 'vincent.conta@gmail.com';
    $fullName = $_POST['firstName'] ."  ". $_POST['lastName'] ;
    $email_address = $_POST['email'];
    $message = $_POST['message'];
    
    $to      = $myEmail;
    $from    = $fulltName;
    $message = wordwrap($message, 70, "\r\n");
    $headers =  'From: '.$email_address . "\r\n";

    $test = mail($to, $from, $message, $headers);

    if ($test) {
        header('Location: index.php?success=Votre message a bien été envoyé#contact'); 
        exit();
    }
    header("Location: contact.php?err=Désolé, votre message n'a pas pu être envoyé#contact"); 
    exit();
}

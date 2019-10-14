<?php
include 'classes/bdd.class.php';

if (!empty($_POST)) {
    $myEmail = 'aurelie.c.naturopathe@gmail.com';
    $fullName = $_POST['firstName'] ."  ". $_POST['lastName'] ;
    $email_address = $_POST['email'];
    $message = $_POST['message'];
    
    $to      = $myEmail;
    $from    = $fulltName;
    $message = wordwrap($message, 70, "\r\n");
    $headers =  'From: '.$email_address . "\r\n";

    $test = mail($to, $from, $message, $headers);

    if ($test) {
        header('Location: contact.php?q=1'); 
        exit();
    }
    header('Location: contact.php?err=problemeTechnique'); 
    exit();
}

// header('Location: index.php');

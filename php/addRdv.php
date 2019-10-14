<?php
include 'classes/bdd.class.php';

if (isset($_POST['patient']) && isset($_POST['consultation']) && isset($_POST['startTime']) && isset($_POST['date'])) {
    
    $bdd = new BDD();
    $requete = "INSERT INTO RendezVous(name, date, start_hour, content, user_id) VALUES (?,?,?,?,?) ";
    $rdv = $bdd->update($requete,[$_POST['consultation'],$_POST['date'],$_POST['startTime'],$_POST['infoG'],$_POST['patient']]);
    header('Location: espaceAdmin.php');
     
}
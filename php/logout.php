<?php 
include "classes/userSession.class.php";
$userSession = new UserSession();
$userSession->destroy();
header('Location: index.php');
exit(); 
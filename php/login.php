<?php 

include 'classes/bdd.class.php';
include 'classes/userSession.class.php';
$bdd = new BDD();

function hashPassword($password){
    $salt = '$2y$11$' .substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22); 
    // Voir la documentation de crypt() : http://devdocs.io/php/function.crypt
    return crypt($password, $salt);
}
function verifyPassword($password, $hashPassword){
    return crypt($password, $hashPassword) == $hashPassword;
}

if (array_key_exists("email",$_POST) && array_key_exists("password",$_POST))
{
    $requete = " SELECT user_id, email, firstName, lastName, password FROM User WHERE email = ? ";
    $user = $bdd->selectOne($requete,[$_POST['email']]);
    
    if (empty($user))
    {
        if (array_key_exists('cpassword', $_POST) )
        {  
            $password = $_POST['password'];
            $hashPassword = hashPassword($password);

            $requete = "INSERT INTO User(email,password,firstName,lastName) VALUES (?,?,?,?) ";
            $user = $bdd->update($requete,[strtolower($_POST['email']),$hashPassword,ucfirst(strtolower($_POST['firstName'])),ucfirst(strtolower($_POST['lastName']))]);
            
            $lastId = $bdd->getLastId();
            
            $requete = " SELECT
                user_id,
                email,
                firstName,
                lastName
                FROM
                User
                WHERE
                user_id = ?
                ";
            $user = $bdd->selectOne($requete,[$lastId]);
            
            if (empty($user))
            {
                $erreur = "Erreur lors de la création du compte";
                header('Location: inscription.php?err='.$erreur); 
		        exit();
            }
            else 
            {       
            $userSession = new UserSession();
            $userSession->create($user['user_id'],$user['firstName'],$user['lastName'],$user['email']); 
            header('Location: espacePerso.php');
            exit();  
            }
        }
        else 
        {
            $erreur = "Le compte n'existe pas";
            header('Location: connexion.php?err='.$erreur); 
	        exit();
        }
    }
    else 
    {
        $password = $_POST['password'];
        $hashPassword = $user['password'];        
        if (verifyPassword($password, $hashPassword) == true)
        {
            $userSession = new UserSession();
            $userSession->create($user['user_id'],$user['firstName'],$user['lastName'],$user['email']); 
            header('Location: espacePerso.php');
		    exit();  
        }
        else 
        {
            $erreur = "L'e-mail et le mot de passe ne coresspondent pas";
            header('Location: connexion.php?err='.$erreur);
		    exit();
        }         
    } 
}



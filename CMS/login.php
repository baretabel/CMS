<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";
$mail=$_POST['login'];
$mdp=$_POST['pwd'];
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

//  Récupération de l'utilisateur et de son pass hashé
$req = $conn->prepare("SELECT ID, Pass, Pseudo, Role FROM compte WHERE Email = '$mail'");
$req->execute();
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base


if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($resultat['Pass']==$mdp) {
        session_start();
        $_SESSION['id'] = $resultat['ID'];
        $_SESSION['login'] = $resultat['Pseudo'];
        $_SESSION['rol'] = $resultat['Role'];
        header('location: autor.php');
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
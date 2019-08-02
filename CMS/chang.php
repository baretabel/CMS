<?php

$servername = "localhost";
$username = "VendeurVendu";
$password = "Simplon974!";
$dbname = "CMS";
$id=$_POST['id'];
$type=$_POST['type'];
$couv=$_POST['img'];
$cat=$_POST['cat'];
$date=$_POST['date'];
$atr=$_POST['auteur'];
$titre=$_POST['titre'];
$text=$_POST['text'];
$etat=$_POST['etat'];
$cac=chr(92);

$text = str_replace("'", $cac."'", $text);
$text = str_replace('"', $cac.'"', $text);
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    $stmt = $conn->prepare("UPDATE Articles SET Type='$type', Couv='$couv', Catégories='$cat', Date='$date', Auteur='$atr', Titre='$titre', Texte='$text', etat='$etat' WHERE ID='$id'"); 
    $stmt->execute();    
    header('location: up.php');

    // vérifier avec phpmyadmin
    }catch(PDOException $e)
    {
     $e->getMessage();
		}
?>
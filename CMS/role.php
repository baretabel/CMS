<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";
$id=$_POST['sup'];
$role=$_POST['type'];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    $stmt = $conn->prepare("UPDATE compte SET Role='$role' WHERE ID='$id'"); 
    $stmt->execute();    
    header('location: contrib.php');

    // vérifier avec phpmyadmin
    }catch(PDOException $e)
    {
     $e->getMessage();
		}
?>
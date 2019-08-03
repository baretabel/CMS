<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";
$id=$_POST['sup'];
$conn = new mysqli($servername, $username, $password, $dbname);
       
    
            $sqli = "DELETE FROM articles WHERE ID=$id";
            $res=$conn->query($sqli);
            header('Location: up.php'); 
        


?>

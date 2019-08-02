<?php

$servername = "localhost";
$username = "VendeurVendu";
$password = "Simplon974!";
$dbname = "CMS";
$id=$_POST['sup'];
$conn = new mysqli($servername, $username, $password, $dbname);
       
    
            $sqli = "DELETE FROM Articles WHERE ID=$id";
            $res=$conn->query($sqli);
            header('Location: up.php'); 
        


?>

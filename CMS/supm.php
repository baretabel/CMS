<?php

$servername = "localhost";
$username = "VendeurVendu";
$password = "Simplon974!";
$dbname = "CMS";
$conn = new mysqli($servername, $username, $password, $dbname);
       
       $sql = "SELECT ID FROM Articles";
       $result = $conn->query($sql);
       while($row = $result->fetch_assoc()) {
        $id=$row['ID'];
       }
if (isset($_POST['check']))
{$resulta = $_POST['check'];
foreach($resulta as $id)
          {
             // echo $id;
            $sqli = "DELETE FROM Articles WHERE ID=$id";
            $res=$conn->query($sqli);
            header('Location: up.php'); 
          }

}
?>
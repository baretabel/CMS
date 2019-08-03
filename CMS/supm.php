<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";
$conn = new mysqli($servername, $username, $password, $dbname);
       
       $sql = "SELECT ID FROM articles";
       $result = $conn->query($sql);
       while($row = $result->fetch_assoc()) {
        $id=$row['ID'];
       }
if (isset($_POST['check']))
{$resulta = $_POST['check'];
foreach($resulta as $id)
          {
             // echo $id;
            $sqli = "DELETE FROM articles WHERE ID=$id";
            $res=$conn->query($sqli);
            header('Location: up.php'); 
          }

}
?>
<?php
session_start();
$servername = "localhost";
$username = "VendeurVendu";
$password = "Simplon974!";
$dbname = "CMS";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT ID, Catégories, Date, Auteur, Titre FROM Articles "); 
    $stmt->execute();

    // vérifier avec phpmyadmin
    }catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <header>
        <div class="cont" style="padding: 7px; margin-right: 3%; font-size: 20px"><?php echo $_SESSION['login'];?></div>
    </header>
   
   
   
    <div class="tab">
        <h1>Liste d'articles</h1>
			<table id="tab">
			<tr><th> </th><th>Titre</th><th>Auteur</th><th>Catégories</th><th>Date</th><th></th><th></th></tr>
 <?php while ($resultat = $stmt->fetch()) {
      
 
    echo"<tr><td><input form=\"sup\" type=\"checkbox\" name=\"check[]\" value=\"".$resultat["ID"]."\"></td><td>" .$resultat['Titre']."   </td><td>" .$resultat['Auteur']."   </td><td>" .$resultat['Catégories']."   </td><td> ".$resultat['Date']."</td><td> <form action=\"modif.php\" method=\"POST\"><button type=\"submit\" name=\"modif\"value=\"".$resultat["ID"]."\">Modifier</button></form></td><td> <form id=\"for\" action=\"sup.php\" method=\"POST\"><button type=\"submit\" name=\"sup\"value=\"".$resultat["ID"]."\">Supprimer</button></form></td></tr>";
		 }?>
		 
		</table>
		<form id="sup" action="supm.php" method="post"><button type="submit" class="btn btn-primary btn-block btn-large bt" style="width: 25%">Supprimer</button><br></form>
            
    
    </div>
    
</body>
</html>
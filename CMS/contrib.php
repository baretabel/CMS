<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT ID, Pseudo, Role FROM compte "); 
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
        <h1>Liste d'utilisateur</h1>
			<table id="tab">
			<tr><th>Pseudo</th><th>Role</th><th></th></tr>
 <?php while ($resultat = $stmt->fetch()) {
      echo "<tr><td>" .$resultat['Pseudo']."   </td><td><form action=\"role.php\" method=\"post\"><select name=\"type\" class=\"full\"><option  selected=\"selected\" value=\"". $resultat['Role']."\">".$resultat['Role']."</option><option value=\"Admin\">Admin</option><option value=\"Inscrit\">Inscrit</option><option value=\"Contributeur\">Contributeur</option></select></td><td><button type=\"submit\" name=\"sup\"value=\"".$resultat["ID"]."\">Envoyer</button></form></td></tr>";
		 }?>
		 
		</table>
		
            
    
    </div>
    
</body>
</html>
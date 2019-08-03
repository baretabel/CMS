<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";
$cat=$_POST['cat'] ;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req = $conn->prepare("SELECT DISTINCT Catégories  FROM articles "); 
    $req->execute();
if(empty($cat) || $cat=='Animaux'){
    $cat='Animaux' ;
    $stmt = $conn->prepare("SELECT ID, Type,  Couv,   Auteur, Titre, etat  FROM articles WHERE etat='Publié' AND Type='Article' "); 
    $stmt->execute();
  }  else{
   $stmt = $conn->prepare("SELECT ID, Type,  Couv,   Auteur, Titre, etat  FROM articles WHERE etat='Publié' AND Type='Article' AND Catégories='$cat' "); 
    $stmt->execute();
  }
    
    

    // vérifier avec phpmyadmin
    }catch(PDOException $e)
    {
    echo  "<br>" . $e->getMessage();
		}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="site.css">
</head>
<body>

<header>
        <h1> L'animalerie</h1>
        <h4> Blog sur les animaux!!!</h4>
       <form action="Site.php" method="post"> <div><select name="cat">
            <?php
            echo "<option value=\"Animaux\" selected=\"selected\">Animaux</option>";
            while($result=$req->fetch()){
                echo "<option value=\"".$result['Catégories']."\">".$result['Catégories']."</option>";
            }
            ?>
        </select>
        <button type="submit" class="pet">>></button></form></div>
    </header>
    <div class="cont">
    <?php
    while ($resultat = $stmt->fetch()) {
        echo "<div class=\"card\">\n";
        echo "  <img src=\"".$resultat['Couv']."\" alt=\"\" style=\"width:100%\">\n";
        echo "  <div class=\"container\">\n";
        echo "    <h4><b>".$resultat['Titre']."</b></h4> \n";
        echo "    <p>".$resultat['Auteur']."</p> \n";
        echo "    <form action=\"article.php\" method=\"POST\"><button value=\"".$resultat['ID']."\"  name=\"id\"type=\"submit\">Consulter</button></form>";
        echo "</div>";
        echo "</div>";
    }
   ?>
   </div>
</body>
</html>
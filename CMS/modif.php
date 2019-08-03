<?php
session_start();
$id=$_POST['modif'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT ID, Type, Couv, Catégories, Date, Auteur, Titre, Texte, etat FROM articles WHERE ID=$id "); 
    $stmt->execute();
    $resultat = $stmt->fetch();

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
   
    <div class="nav">
    
    <form action="chang.php" method="POST" id="for">
    <div class="champ">
        <label>Type</label>
    <select name="type" class="full">
    <option  selected="selected" value="<?php echo $resultat['Type']?>"><?php echo $resultat['Type']?></option>
  <option value="Page">Page</option>
  <option value="Article">Article</option>
</select>
</div><div class="champ">
    <label>Couverture</label>
    <input name="img" type="url" class="full" style="width: 95%" value="<?php echo $resultat['Couv']?>">
    </div><div class="champ">
    <label>Catégories</label>
    <input name="cat" type="text" class="full" required="required" value="<?php echo $resultat['Catégories']?>">
    </div><div class="champ">
    <label>Date</label>
    <input name="date" type="date" class="full" required="required" value="<?php echo $resultat['Date']?>">
    </div><div class="champ">
    <label>Auteur</label>
    <input name="auteur" type="text" class="full" required="required" value="<?php echo $resultat['Auteur']?>">
    </div><div class="champ">
    <label>Etat</label>
    <select name="etat" class="full">
    <option  selected="selected" value="<?php echo $resultat['etat']?>"><?php echo $resultat['etat']?></option>
  <option value="Brouillon">Brouillon</option>
  <option value="Publié">Publié</option>
</select>
    </div><div class="champ">
    <button value="<?php echo $resultat['ID']?>" name="id" type="submit" class="btn btn-primary btn-block btn-large"
                style="margin-bottom: 5%">Envoie</button>
</form>
</div>
    </div>
    <div class="inter">
        <input name="titre" type="text" placeholder=" Titre..." class="tit full" form="for"value="<?php echo $resultat['Titre']?>">
        <textarea name="text" class="zon" placeholder=" Ecrire votre texte..." form="for" ><?php echo $resultat['Texte']?></textarea>
    
    </div>
    
</body>
</html>
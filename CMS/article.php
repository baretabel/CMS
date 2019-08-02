<?php
$servername = "localhost";
$username = "VendeurVendu";
$password = "Simplon974!";
$dbname = "CMS";
$id=$_POST['id'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT ID, Type,  Couv, Catégories, Date, Auteur, Titre, Texte, etat  FROM Articles WHERE ID=$id "); 
    $stmt->execute();
    $resultat = $stmt->fetch();
  
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
    </header>
    <div class="art">
    <h2><b><?php echo $resultat['Titre']?></b></h2> 
    <p><i>Publier par <?php echo $resultat['Auteur']?> le <?php echo $resultat['Date']?> dans <?php echo $resultat['Catégories']?></i></p> 
    <img src="<?php echo $resultat['Couv']?>" alt="" style="width:100%">
  <div class="container">
    

    <p class="txt"><?php echo $resultat['Texte']?></p>
   </div>
</body>
</html>
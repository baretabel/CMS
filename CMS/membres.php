<?php
$servername = "localhost";
$username = "VendeurVendu";
$password = "Simplon974!";
$dbname = "CMS";
$mail=$_POST['mail'];
$psd=$_POST['pseudo'];
$mdp1=$_POST['mdp1'];
$mdp2=$_POST['mdp2'];
$GLOBALS['x']=0;

if($mdp1==$mdp2){
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT Email FROM Compte "); 
        $stmt->execute();
        while ($resultat = $stmt->fetch()) {
            if($resultat['Nom']==$mail){
                $GLOBALS['x']++;
                echo $GLOBALS['x'];
            }
        }
        if($GLOBALS['x']==0){
            $req = " INSERT INTO Compte ( ID, Email,  Pseudo, Pass) VALUES (null,'$mail','$psd','$mdp1');";
            $conn->exec($req);
        }else{
            echo "mail existant";
        }
    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
}else{
 header('location: inscrip.html');
}
?>
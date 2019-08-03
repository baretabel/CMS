<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";
$mail=$_POST['mail'];
$psd=$_POST['pseudo'];
$mdp1=$_POST['mdp1'];
$mdp2=$_POST['mdp2'];
$GLOBALS['x']=0;

if($mdp1==$mdp2){
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT Email FROM compte "); 
        $stmt->execute();
        while ($resultat = $stmt->fetch()) {
            if($resultat['Email']==$mail){
                $GLOBALS['x']++;
                echo $GLOBALS['x'];
            }
        }
        if($GLOBALS['x']==0){
            $req = " INSERT INTO compte ( ID, Email,  Pseudo, Pass) VALUES (null,'$mail','$psd','$mdp1');";
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
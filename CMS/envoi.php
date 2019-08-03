<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";
$type=$_POST['type'];
$img=$_POST['img'];
$cat=$_POST['cat'];
$date=$_POST['date'];
$atr=$_POST['auteur'];
$titre=$_POST['titre'];
$text=$_POST['text'];
$etat=$_POST['etat'];
$cac=chr(92);

$text = str_replace("'", $cac."'", $text);
$text = str_replace('"', $cac.'"', $text);
echo$text;
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $req = " INSERT INTO articles ( ID, Type, Couv, Catégories, Date, Auteur, Titre, Texte, etat) VALUES (null,'$type','$img','$cat','$date','$atr','$titre','$text', '$etat');";
            $conn->exec($req);
            header('loction: red.php');
}catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}
?>
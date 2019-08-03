<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";
$rol=$_SESSION['rol'];

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
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    
<body>
    <header>
        <div class="cont" style="padding: 7px; margin-right: 3%; font-size: 20px"><?php echo $_SESSION['login'];?></div>
    </header>
   
   
   
    <div class="cen">
        <form action="direct.php" method="post" class="for"><button type="submit" name="dir" value="1" class="case"><b>Nouvel Article</b></button></form>
        <form action="direct.php" method="post" class="for" ><button type="submit" name="dir" value="2" class="case"><b>Modifier</b></button></form>
        <form action="direct.php" method="post" class="for vis" id="admin" ><button type="submit" name="dir" value="3" class="case" ><b>Gestion Contributeu<b>r</button></form>
    
    </div>
    
</body>
</html><script>
        var element = document.getElementById("admin");
  
 var role = <?php echo json_encode($rol); ?>;
 if( role=='Admin'){
element.classList.remove("vis");
 }
</script>
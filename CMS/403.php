<?php
session_start();
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
        <div class="cont" style="padding: 7px; margin-right: 3%; font-size: 20px"><?php echo $_SESSION['login']?></div>
    </header>
    <div class="vet">
        <h1>Erreur 403</h1>
        <p> 403 accès refusé </p>
    </div>
</body>
   
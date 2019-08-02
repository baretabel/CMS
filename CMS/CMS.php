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
        <div class="cont" style="padding: 7px; margin-right: 3%; font-size: 20px"><?php echo $_SESSION['login'];?></div>
    </header>
   
    <div class="nav">
    
    <form action="envoi.php" method="POST" id="for">
    <div class="champ">
        <label>Type</label>
    <select name="type" class="full">
  <option value="Page">Page</option>
  <option value="Article">Article</option>
</select>
</div><div class="champ">
    <label>Couverture</label>
    <input name="img" type="url" class="full" style="width: 95%" >
    </div><div class="champ">
    <label>Catégories</label>
    <input name="cat" type="text" class="full" required="required">
    </div><div class="champ">
    <label>Date</label>
    <input name="date" type="date" class="full" required="required">
    </div><div class="champ">
    <label>Auteur</label>
    <input name="auteur" type="text" class="full" required="required">
    </div><div class="champ">
    <label>Etat</label>
    <select name="etat" class="full">
  <option value="Brouillon">Brouillon</option>
  <option value="Publié">Publié</option>
</select>
    </div><div class="champ">
    <button type="submit" class="btn btn-primary btn-block btn-large"
                style="margin-bottom: 5%">Envoie</button>
</form>
</div>
    </div>
    <div class="inter">
        <input name="titre" type="text" placeholder=" Titre..." class="tit full" form="for">
        <textarea name="text" class="zon" placeholder=" Ecrire votre texte..." form="for"></textarea>
    
    </div>
    
</body>
</html>
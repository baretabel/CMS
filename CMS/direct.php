<?php
$nb=$_POST['dir'];
if($nb=="1"){
header('location: CMS.php');
}else if($nb=="2"){
header('location: up.php');
}else if($nb=="3"){
    header('location: contrib.php');
}
?>
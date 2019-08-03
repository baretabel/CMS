<?php
session_start();
$role=$_SESSION['rol'];

if($role=='Inscrit'){
header('location: 403.php');
}else{
header('location: red.php');
}
?>
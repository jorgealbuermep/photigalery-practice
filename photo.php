<?php
require 'functions.php';
$conection= conect('photogalery','root','');
if(!$conection){
    die;
}
$id= isset($_GET['id'])? (int)$_GET['id'] : false;

if(!$id){
   header('Location: index.php');
}
$statement= $conection->prepare('SELECT * from photo WHERE id= :id ');
$statement->execute(array(':id'=>$id));

$photo= $statement->fetch();

if(!$photo){
    header('Location: index.php');
}
require 'views/photo.view.php';

<?php
require 'functions.php';

$photos_pher_page=8;

$current_page= (isset($_GET['p']) ?(int)$_GET['p'] : 1);
$init= ($current_page>1)? $current_page *$photos_pher_page-$photos_pher_page : 0;
$conection= conect('photogalery','root','');

if(!$conection){
    die;
}

$statement= $conection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM photo LIMIT $init, $photos_pher_page");
$statement->execute();
$photos= $statement->fetchAll();

if(!$photos){
    header('Location: index.php');
}

$statement= $conection->prepare("SELECT FOUND_ROWS() as total_rows");
$statement->execute();
$total_post= $statement->fetch()['total_rows'];

$total_pages= ceil($total_post/$photos_pher_page);
require 'views/index.view.php';

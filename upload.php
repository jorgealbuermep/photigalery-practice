<?php
require 'functions.php';
$conection= conect('photogalery','root','');
if(!$conection){
    die;
}

if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_FILES)){
    $check= getimagesize($_FILES['photo']['tmp_name']);
    if($check!==false){
        $destinyfolder='destinyFolder/';
        $uploaded_file= $destinyfolder. $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], $uploaded_file);

        $statement= $conection->prepare('INSERT INTO photo (tittle,image,text) VALUES (:tittle,:image,:text) ');
        $statement->execute(array(':tittle'=>$_POST['tittle'], ':image'=>$_FILES['photo']['name'], ':text'=>$_POST['text']));
        header('Location: index.php');
    }
    else{
        $error="the file isn't an image o the file is too heavy";
    }
}






require 'views/upload.view.php';

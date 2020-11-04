<?php

function conect($bd, $user, $pass){
    try{

        $conection= new PDO("mysql:host=localhost; dbname=$bd",$user, $pass);
            return $conection;
    }
   catch(PDOExeption $e){
       return false;
   }

    }

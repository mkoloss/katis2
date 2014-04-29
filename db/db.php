<?php
    try{
        $base = new PDO('mysql:host=localhost;dbname=katis','root','1234');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOEException $e){
        echo 'ERROR: '.$e->getMessage();
    }
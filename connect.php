<?php
    $dsn = 'mysql:host=localhost;dbname=COMP1006_SUMMER2020'; //change the database name
    $username = 'root';
    $password = 'root'; 
    $db = new PDO($dsn, $username, $password);
    //set error mode to exception 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
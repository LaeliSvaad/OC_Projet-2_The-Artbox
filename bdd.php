<?php
    const DB_HOST = 'database';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_NAME = 'artbox';


    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

    try {
        $PDO = new PDO($dsn, DB_USER, DB_PASS);
    } 
    catch (PDOException $e) {
        echo $e->getMessage();
        die;
    } 
   
    return $PDO;
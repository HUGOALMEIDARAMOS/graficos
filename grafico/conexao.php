<?php

try{
	
    $host="localhost";
    $db="votacao";
    $usuarioDb="root";
    $senhaDb="";
    

    $pdo = new PDO("mysql:host={$host};dbname={$db}", $usuarioDb, $senhaDb, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
    
}catch(PDOException $e){
    throw $e;
}
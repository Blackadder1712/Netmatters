<?php
 //local server info
 $server = "127.0.0.1";
 $username = "root";
 $password = "";
 $db = "netmatters_news";

 //Check connection
 try
 {
   $handle = new PDO("mysql:host=$server; dbname=$db", "$username", "$password");
   $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
 }
 catch(PDOException $e){
    die("Oops cannot connect to database");
    $e->getMessage();
 }


?>
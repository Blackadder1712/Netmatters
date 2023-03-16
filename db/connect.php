<?php
 /*local server info
 $server = "127.0.0.1";
 $username = "root";
 $password = "";
 $db = "netmatters_news";*/

 //cpanel
 $server = "localhost";
 $username = "amyvince_amy";
 $password = "f)5%)NNd.cpA";
 $db = "amyvince_netmatters";

 //Check connection
 try
 {
   $db = new PDO("mysql:host=$server; dbname=$db", "$username", "$password");
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
 }
 catch(PDOException $e){
    die("Oops cannot connect to database");
    $e->getMessage();
 }


?>
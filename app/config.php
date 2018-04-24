<?php 

    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "sms");

     $con = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);   
       if($con->connect_errno){
       	 die("Databse Connection Failed".$con->connect_error);
       }
     

$config = [
    'account_sid'=> 'AC285ecdc1aad24b34b1b481eea308ee19', 
    'auth_token' => 'ac3c4f1feac2e49ea8cdad1a7e7f5273',
    'phone_number'=>'+16466526763'
];



?>
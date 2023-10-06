<?php 
$host ="localhost";
$user ="root";
$password ="";
$db ="our_shop";

$conn = mysql_connect($host,$user,$password,$db);
if (!$conn){
    die("DB connection failed");
    
}

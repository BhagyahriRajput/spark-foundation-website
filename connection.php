<?php
$username = "root";
$password="";
$server="localhost";
$db="customers";
$conn = mysqli_connect($server,$username,$password,$db);
if(!$conn){
   die("Could not connect to database due to error :".mysqli_connect_error());
}
   ?>
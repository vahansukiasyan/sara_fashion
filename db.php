<?php
 $servername="localhost";
 $username="root";
 $password="";
$db_name="sara";

    $con=mysqli_connect($servername, $username,$password,$db_name);
    if(!$con){
    	die("Error:" .  mysqli_connect_error());
    }



?>
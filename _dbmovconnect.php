<?php

$servername="localhost";
$username="root";
$password="";
$database="content";

$con=mysqli_connect($servername,$username,$password,$database);

if(!$con)
{
    die("Sorry we failed to connnect due to:".mysqli_connect_error());

}


?>
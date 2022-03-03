<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="student";
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(mysqli_connect_errno($con))
{
    echo"failed to connect"<div class="mysqli_connect_error($con);
}
?>
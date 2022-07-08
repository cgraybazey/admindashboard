<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);

$sql = mysqli_query($conn,"SELECT * FROM enrollment");
?>
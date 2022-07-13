<?php
//1.database connection
require_once('logics/dbconnection.php');
$sqldeletestudent =mysqli_query($conn,
"DELETE FROM enrollment WHERE no='".$_GET['id']."' ");
if($sqldeletestudent)
{
    echo "üser deleted successfully";
}
else
{
    echo "Error occured. Please try again!";
}
?>
<?php
//updating user records
if(isset($_POST['updateEnrollment']))
{
    //fetch form data
    $fullname =$_POST['fullname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $gender = $_POST['gender'];
    $course =$_POST['course'];
    //perform the sql query
    $updaterecords = mysqli_query($conn,
    "UPDATE enrollment set fullname ='$fullname',email= '$email',phonenumber=
    '$phonenumber',gender='$gender',course='$course'
     WHERE no='".$_GET['id']."' ");
    if($updaterecords)
    {
        $message = 'Records updated successfully';
    }
    else
    {
        $message = 'Error occured while updating user';
    }
    
}


?>
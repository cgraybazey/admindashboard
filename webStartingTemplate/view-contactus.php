<?php
//1.database connection
require_once('logics/dbconnection.php');
$sqlfetchenrolledstudent =mysqli_query($conn,
"SELECT * FROM contactus WHERE no='".$_GET['id']."' ");
while($fetchstudent=mysqli_fetch_array($sqlfetchenrolledstudent))
{
	$firstname= $fetchstudent['firstname'];
	$lastname = $fetchstudent['lastname'];
	$email = $fetchstudent['email'];
	$phonenumber = $fetchstudent['phonenumber'];
	$message= $fetchstudent['message'];
	$createdat = $fetchstudent['created-at'];
}
?>
<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	<?php require_once('includes/navbar.php')?>
	<div class="sidebar">
	<?php 
	 require_once('includes/sidebar.php')?>
		
	</div>
	<div class="maincontent">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 pt-5">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<h4 class="card-title">Personal Information</h4>
						</div>
						<div class="card-body">
							<ul class="list-group">
								<li class="list-group-item">firstName:<span class="float-end badge bg-primary"><?php echo $firstname?><span></li>
								<li class="list-group-item">lastname:<span class="float-end badge bg-secondary"><?php echo $lastname?><span></li>
								<li class="list-group-item">email:<span class="float-end badge bg-danger"><?php echo $email?><span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6 pt-5">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<h4 class="card-title">Personal Information</h4>
						</div>
						<div class="card-body">
							<ul class="list-group">
								<li class="list-group-item">phonenumber:<span class="float-end badge bg-primary"><?php echo $phonenumber?><span></li>
								<li class="list-group-item">message:<span class="float-end badge bg-secondary"><?php echo $message?><span></li>
								<li class="list-group-item">created at:<span class="float-end badge bg-danger"><?php echo $createdat?><span></li>
							</ul>
							</div>
					</div>
				</div>
		</div>
	</div>
	<?php require_once('includes/scripts.php')?>
</body> 
</html>
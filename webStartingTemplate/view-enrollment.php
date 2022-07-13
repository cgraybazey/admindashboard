<?php
//1.database connection
require_once('logics/dbconnection.php');
$sqlfetchenrolledstudent =mysqli_query($conn,
"SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");
while($fetchstudent=mysqli_fetch_array($sqlfetchenrolledstudent))
{
	$fullname = $fetchstudent['fullname'];
	$email = $fetchstudent['email'];
	$phonenumber = $fetchstudent['phonenumber'];
	$gender = $fetchstudent['gender'];
	$course = $fetchstudent['course'];
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
	// require_once('includes/sidebar.php')?>
		
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
								<li class="list-group-item">Full Name:<span class="float-end badge bg-primary"><?php echo $fullname?><span></li>
								<li class="list-group-item">Email:<span class="float-end badge bg-secondary"><?php echo $email?><span></li>
								<li class="list-group-item">Phone Number:<span class="float-end badge bg-danger"><?php echo $phonenumber?><span></li>
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
								<li class="list-group-item">Gender:<span class="float-end badge bg-primary"><?php echo $gender?><span></li>
								<li class="list-group-item">course:<span class="float-end badge bg-secondary"><?php echo $course?><span></li>
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
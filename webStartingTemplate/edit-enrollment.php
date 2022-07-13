<?php
require_once('logics/dbconnection.php');

$querystudent = mysqli_query($conn,"SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");
while($fetchstudent = mysqli_fetch_array($querystudent))
{
	$fullname = $fetchstudent['fullname'];
	$email = $fetchstudent['email'];
	$phonenumber = $fetchstudent['phonenumber'];
	$gender = $fetchstudent['gender'];
	$course = $fetchstudent['course'];
}
	require_once('logics/process-update.php')
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
                <div class="col-lg-12 pt-5">
                   <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4>Edit Student <?php echo $fullname ?></h4>
							<form action="enroll.php" method="POST"> 
						</div>
						<div class="card-body">
							<form action="">
							<div class="row">
								<div class="mb-3 col-lg-6">
									<label for="Fullname" class="form-label">fullName</label>
									<input type="text" name="fullname" value="<?php echo $fullname ?>"class="form-control" placeholder="please enter your name">
									</div>
								<div class="mb-3 col-lg-6">
									<label for="email" class="form-label">Email</label>
									<input type="email" name="email" value="<?php echo $email ?>"class="form-control" placeholder="please enter your email adress">
								</div>
								<div class="mb-3 col-lg-6">
									<label for="phone number" class="form-label">Phone Number</label>
									<input type="tel" name="phonenumber" value="<?php echo $phonenumber ?>" class="form-control" placeholder="please enter your phone number">
								</div>
								<div class="mb-3 col-lg-6">
									<label for="gender" class="form-label">gender</label>
									<select name="gender" class="form-control">
									<option value=""><?php echo $gender ?></option>
									<option value="male">Male</option>
									<option value="female">Female</option>
									</select>
                   			 	</div>
							</div>
							<div class="row pt-3">
								<div class="col-lg-6">
								<button type="submit" class="btn btn-primary">Update records</button>
							</div>
							</div>
							<div class="row pt-5">
								<div class="col-lg-12">
									<label for="whats your preffered course?" class="form-label">what is your perffered course</label>
									<select name="course" class="form-control">
									<option value=""><?php echo $course ?></option>
										<option value="web design">Web Design</option>
										<option value="cyber security">Cyber security</option>
									</select>
								</div>
							</div>					
							<br>                    
          					<button type="submit" class="btn btn-primary" name="enroll">submit application</button>
							</form>
              			</div>
            		</div>
                </div>
            </div>
		</div>
	</div>
	<?php require_once('includes/scripts.php')?>
</body> 
</html>
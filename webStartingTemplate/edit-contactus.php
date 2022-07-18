<?php
$message="";
require_once('logics/dbconnection.php');

$querystudent = mysqli_query($conn,"SELECT * FROM contactus WHERE no='".$_GET['id']."' ");
while($fetchstudent = mysqli_fetch_array($querystudent))
{
    $id = $fetchstudent['no'];
	$firstname= $fetchstudent['firstname'];
	$lastname = $fetchstudent['lastname'];
	$email = $fetchstudent['email'];
	$phonenumber = $fetchstudent['phonenumber'];
	$message= $fetchstudent['message'];
	$createdat = $fetchstudent['created-at'];
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
 		require_once('includes/sidebar.php')
	?>
		
	</div>
	<div class="maincontent">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 pt-5">
                   <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4>Edit Student <?php echo $firstname ?></h4>
							<?php echo $message?>
						</div>
						<div class="card-body">
							<form action="edit-enrollment.php?id=<?php echo $id?>" method="POST">
							<div class="row">
								<div class="mb-3 col-lg-6">
									<label for="firstname" class="form-label">firstName</label>
									<input type="text" name="firstname" value="<?php echo $firstname ?>"class="form-control" placeholder="please enter your name">
									</div>
                                    <div class="mb-3 col-lg-6">
									<label for="lastname" class="form-label">lastName</label>
									<input type="text" name="lastname" value="<?php echo $lastname ?>"class="form-control" placeholder="please enter your name">
									</div>
								<div class="mb-3 col-lg-6">
									<label for="email" class="form-label">Email</label>
									<input type="email" name="email" value="<?php echo $email ?>"class="form-control" placeholder="please enter your email adress">
								</div>
								<div class="mb-3 col-lg-6">
									<label for="phone number" class="form-label">Phone Number</label>
									<input type="tel" name="phonenumber" value="<?php echo $phonenumber ?>" class="form-control" placeholder="please enter your phone number">
								</div>
						        <br>                    
          					<button type="submit" class="btn btn-primary" name="updateEnrollment">submit application</button>
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
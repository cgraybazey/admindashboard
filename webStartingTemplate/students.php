<?php
require_once('logics/dbconnection.php');
?>

<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>
	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>
	</div>
	<div class="maincontent">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 pt-5">
					<div class="card-header bg-dark text-white text-center">
					<span>students</span>
				</div>
					<div class="card-body">
					<table class="table table-striped table-hover table-responsive">
						<thead>
							<tr>
								<th>No.</th>
								<th>Full name</th>
								<th>phone Number</th>
								<th>Email</th>
								<th>Gender</th>
								<th>course</th>
								<th>Enrolled on</th>
								<th>Action</th>
							</tr>
						</thead>
							<tbody>
								<?php while($fetchEnrollmentRecord=mysqli_fetch_array($sql)){?>
									<tr>
										<td><?php echo $fetchEnrollmentRecord['no']?></td>
										<td><?php echo $fetchEnrollmentRecord['fullname']?></td>
										<td><?php echo $fetchEnrollmentRecord['phonenumber']?></td>
										<td><?php echo $fetchEnrollmentRecord['email']?></td>
										<td><?php echo $fetchEnrollmentRecord['gender']?></td>
										<td><?php echo $fetchEnrollmentRecord['course']?></td>
										<td><?php echo $fetchEnrollmentRecord['created-at']?></td>
										<td>
											<a href="edit-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no']?>" class="btn btn-primary btn-sm">
												<i class="fa fa-edit"></i>
											</a>
											<a href="#" class="btn btn-info btn-sm">
												<i class="fa fa-eye"></i>
											</a>
											<a href="#" class="btn btn-danger btn-sm">
												<i class="fa fa-trash"></i>
											</a>
										</td>
									</tr>
								<?php }?>
								
							</tbody>
						</table>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
		</div>
	</div>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
		<script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>
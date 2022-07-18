<?php
require_once('logics/dbconnection.php');
$sql = mysqli_query($conn, "SELECT * FROM contactus");
?>


<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
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
					<div class="card-header bg-dark text-white text-center">
					<span>students</span>
				</div>
					<div class="card-body">
					<table class="table table-striped table-hover table-responsive">
						<thead>
							<tr>
								<th>No.</th>
								<th>firstname</th>
								<th>lastname</th>
								<th>Email</th>
								<th>phonenumber</th>
								<th>message</th>
								<th>created-at</th>
								<th>Action</th>
							</tr>
						</thead>
							<tbody>
								<?php while($fetchcontactusRecord=mysqli_fetch_array($sql)){?>
									<tr>
										<td><?php echo $fetchcontactusRecord['no']?></td>
										<td><?php echo $fetchcontactusRecord['firstname']?></td>
										<td><?php echo $fetchcontactusRecord['lastname']?></td>
										<td><?php echo $fetchcontactusRecord['email']?></td>
										<td><?php echo $fetchcontactusRecord['phonenumber']?></td>
										<td><?php echo $fetchcontactusRecord['message']?></td>
										<td><?php echo $fetchcontactusRecord['created-at']?></td>
										<td>
											<a href="edit-contactus.php?id=<?php echo $fetchcontactusRecord['no']?>" class="btn btn-primary btn-sm">
												<i class="fa fa-edit"></i>
											</a>
											<a href="view-contactus.php?id=<?php echo $fetchcontactusRecord['no']?>" class="btn btn-info btn-sm">
												<i class="fa fa-eye"></i>
											</a>
											<a href="delete-contactus.php?id=<?php echo $fetchcontactusRecord['no']?>" class="btn btn-danger btn-sm">
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
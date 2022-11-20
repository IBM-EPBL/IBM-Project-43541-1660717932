<?php session_start(); ?>
<?php
	include("../dbcon.php");
	$username = $_GET['Username'];
	$jobid = $_GET['JobID'];
	//Load Personal Profile Details
	$fullname = "";
	$addressline1 = "";
	$addressline2 = "";
	$addressline3 = "";
	$city= "";
	$state = "";
	$pin = "";
	$mobile = "";
	$email = "";
	
	$query = "select * from tabpersonal where username='$username'";
	$result = mysqli_query($con, $query);
	if (mysqli_num_rows($result) > 0)
	{
		$record = mysqli_fetch_array($result);
		$fullname = $record[1];
		$addressline1 = $record[2];
		$addressline2 = $record[3];
		$addressline3 = $record[4];
		$city = $record[5];
		$state = $record[6];
		$pin = $record[7];
		$mobile = $record[8];
		$email = $record[9];
	}
	
?>
<?php
	
	
?>

<?php include("top.php"); ?>					
	<div class="col-md-12">
		<div class="card">
			<div class="header">
				<h4 class="title">Personal Information</h4>
			</div>
			<div class="content">
				<form name="form1" method="post" action="">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="txtName" value="<?php echo $fullname; ?>" readonly class="form-control" placeholder="Enter your Name" required="required" />
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Address Line 1</label>
								<input type="text" name="txtAddressLine1" readonly value="<?php echo $addressline1; ?>" class="form-control" placeholder="Enter Address Line 1" required="required" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Address Line 2</label>
								<input type="text" name="txtAddressLine2" readonly value="<?php echo $addressline2; ?>" class="form-control" placeholder="Enter Address Line 2" required="required" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Address Line 3</label>
								<input type="text" name="txtAddressLine3" readonly value="<?php echo $addressline3; ?>" class="form-control" placeholder="Enter Address Line 3" required="required" />
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>City</label>
								<input type="text" name="txtCity" readonly value="<?php echo $city; ?>" class="form-control" placeholder="Enter City Name" required="required" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>State</label>
								<input type="text" name="txtState" readonly value="<?php echo $state; ?>" class="form-control" placeholder="Enter State Name" required="required" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>PIN</label>
								<input type="text" name="txtPIN" readonly value="<?php echo $pin; ?>" class="form-control" placeholder="Enter PIN Code" required="required" />
							</div>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Mobile</label>
								<input type="text" name="txtMobile" readonly value="<?php echo $mobile; ?>" class="form-control" placeholder="Enter Mobile Number" required="required" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="txtEmail" readonly value="<?php echo $email; ?>" class="form-control" placeholder="Enter Email" required="required" />
							</div>
						</div>						
					</div>
					
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
	
	<?php
		$query = "select * from tabqualification where username='$username'";
		$result = mysqli_query($con, $query);
		if (mysqli_num_rows($result) == 0)
		{
			echo "<!--";
		}
	?>
	<div class="col-md-12">
		<div class="card">
			<div class="header">
				<h4 class="title">Educational Details</h4>
			</div>
			<div class="content">
				<?php
					while ($record = mysqli_fetch_array($result))
					{
						echo '<div class="row" style="padding:10px 0px;">';
							echo '<div class="col-md-2"><strong>' .$record[2] . '</strong></div>';
							echo '<div class="col-md-2"><strong>' .$record[3] . '</strong></div>';
							echo '<div class="col-md-2"><strong>' .$record[4] . '</strong></div>';
							echo '<div class="col-md-2"><strong>' .$record[5] . '</strong></div>';
							echo '<div class="col-md-1"><strong>' .$record[6] . '</strong></div>';
							echo '<div class="col-md-1"><strong>' .$record[7] . '</strong></div>';
							echo '<div class="col-md-1"><strong>' .$record[8] . '</strong></div>';
							echo '<hr />';
						echo '</div>';
					}
				?>
					
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<?php
		$query = "select * from tabqualification where username='$username'";
		$result = mysqli_query($con, $query);
		if (mysqli_num_rows($result) == 0)
		{
			echo "-->";
		}
	?>
	
	<?php
		$query = "select * from tabexperience where username='$username'";
		$result = mysqli_query($con, $query);
		if (mysqli_num_rows($result) == 0)
		{
			echo "<!--";
		}
	?>
	<div class="col-md-12">
		<div class="card">
			<div class="header">
				<h4 class="title">Experience Details</h4>
			</div>
			<div class="content">
				<?php
					while ($record = mysqli_fetch_array($result))
					{
						echo '<div class="row" style="padding:10px 0px;">';
							echo '<div class="col-md-3"><strong>' .$record[2] . '</strong></div>';
							echo '<div class="col-md-2"><strong>' .$record[3] . '</strong></div>';
							echo '<div class="col-md-2"><strong>' .$record[4] . '</strong></div>';
							echo '<div class="col-md-2"><strong>Rs.' .$record[5] . '</strong></div>';
							echo '<div class="col-md-3"><strong>' .$record[6] . ' to ' . $record[7] . '</strong></div>';
						echo '</div>';
					}
				?>
					
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<?php
		$query = "select * from tabexperience where username='$username'";
		$result = mysqli_query($con, $query);
		if (mysqli_num_rows($result) == 0)
		{
			echo "-->";
		}
	?>
	<div class="col-md-12">
		<a class="btn btn-primary btn-fill btn-block" href="approve.php?Username=<?php echo $username; ?>&JobID=<?php echo $jobid; ?>">Approve</a>
	</div>
<?php include("bottom.php"); ?>
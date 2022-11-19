<?php session_start(); ?>

<?php
	include("../dbcon.php");
	if (isset($_POST["btnAddJob"]))
	{
		$jobname = $_POST["txtJobName"];
		$city = $_POST["txtCity"];
		$jobtype = $_POST["drpType"];
		$candidates = $_POST["txtCandidatesCount"];
		$qualification = $_POST["drpQualification"];
		$gender = $_POST["drpGender"];
		$contactperson = $_POST["txtContactPerson"];
		$contactmobile = $_POST["txtMobile"];
		$contactemail = $_POST["txtEmail"];
		$status = "active";

		
		
		$query = "insert into tabjobs (jobname, city, jobtype, candidates, qualification, gender, contactperson, contactmobile, contactemail, status) values('$jobname', '$city', '$jobtype', '$candidates', '$qualification', '$gender', '$contactperson', '$contactmobile', '$contactemail', '$status')";
		
		mysqli_query($con, $query);
		if (mysqli_affected_rows($con) > 0)
		{
			$info_message = "Job Information added successfully!";
		}
	}
?>

<?php include("top.php"); ?>					
	<div class="col-md-12">
		<div class="card">
			<div class="header">
				<h4 class="title">Job Details</h4>
			</div>
			<div class="content">
				<form name="form1" method="post" action="">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Job Name</label>
								<input type="text" name="txtJobName" class="form-control" placeholder="Enter the Job Name" required="required" />
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>City</label>
								<input type="text" name="txtCity" class="form-control" placeholder="Enter City Name" required="required" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Job Type</label>
								<select class="form-control" name="drpType">
									<option>Permanent</option>
									<option>Part Time</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Candidates</label>
								<input type="number" name="txtCandidatesCount" class="form-control" placeholder="Enter total candidates count" required="required" />
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Qualification</label>
								<select class="form-control" name="drpQualification">
									<option>Bachelor Degree</option>
									<option>Post Graduate Degree</option>
									<option>Engineering (Bachelor)</option>
									<option>Engineering (Master)</option>
									<option>Diploma</option>
									<option>Arts and Science (Bachelor)</option>
									<option>Arts and Science (Master)</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Gender Status</label>
								<select class="form-control" name="drpGender">
									<option>Male</option>
									<option>Female</option>
									<option>Both</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Contact Person</label>
								<input type="text" name="txtContactPerson" class="form-control" placeholder="Enter Contact Person Name" required="required"  />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Mobile Number</label>
								<input type="text" name="txtMobile" class="form-control" placeholder="Enter Mobile Number" required="required"  />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Email ID</label>
								<input type="email" name="txtEmail" class="form-control" placeholder="Enter Email ID" required="required"  />
							</div>
						</div>
					</div>
					
					
					
					<input type="submit" class="btn btn-primary btn-fill pull-right" name="btnAddJob" value="Add Job" />
					
					<div class="row">
						<div class="col-md-12">
							<?php
								if (isset($info_message))
								{
									include("show_info.php");
								}
							?>
						</div>
					</div>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
		
		<?php
			$query = "select * from tabjobs where status='active'";
			$result = mysqli_query($con, $query);
			
			$jobs_count = mysqli_num_rows($result);
			if ($jobs_count == 0)
			{
				echo "<!--";
			}
		?>
		<div class="card">
			<div class="header">
				<h4 class="title">Active Jobs List</h4>
			</div>
			<div class="content table-responsive table-full-width">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Job Name</th>
							<th>City</th>
							<th>Job Type</th>
							<td align="right" style="padding-right:20px;">Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while($record = mysqli_fetch_array($result))
							{
								echo '<tr>';
									echo '<td>' . $record[1] . '</td>';
									echo '<td>' . $record[2] . '</td>';
									echo '<td>' . $record[3] . '</td>';
									echo '<td align="right"><a href="deletejob.php?JobID=' . $record[0] . '" class="btn btn-fill btn-danger">Delete</a></td>';
								echo '</tr>';
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<?php
			if ($jobs_count == 0)
			{
				echo "-->";
			}
		?>
		
		
		
	</div>
<?php include("bottom.php"); ?>
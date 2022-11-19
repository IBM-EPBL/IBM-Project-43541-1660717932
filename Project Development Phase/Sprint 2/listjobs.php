<?php session_start(); ?>
<?php
	include("../../dbcon.php");
	$username = $_SESSION['js_username'];
	
?>

<?php include("top.php"); ?>					
	<div class="col-md-12">
		<?php
			
			$query = "select gender from tabcandidates where username='$username'";
			$result = mysqli_query($con, $query);
			$record = mysqli_fetch_array($result);
			$gender = $record[0];

			$query = "select city from tabpersonal where username='$username'";
			$result = mysqli_query($con, $query);
			$record = mysqli_fetch_array($result);
			$city = $record[0];

			$query = "select * from tabjobs where status='active' and jobid not in (select jobid from tabapplied where username='$username') and gender in ('$gender', 'both') and qualification in (select coursetype from tabqualification where username='$username') and city='$city'";
			$result = mysqli_query($con, $query);
			
			$jobs_count = mysqli_num_rows($result);
			if ($jobs_count == 0)
			{
				echo "<!--";
				$error_message = "No Jobs available to list";
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
							<td align="right" style="padding-right:20px;">Select</th>
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
									echo '<td align="right"><a href="openjob.php?JobID=' . $record[0] . '" class="btn btn-fill btn-danger">Open</a></td>';
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
		<?php include("show_error.php"); ?>
		
		
	</div>
<?php include("bottom.php"); ?>
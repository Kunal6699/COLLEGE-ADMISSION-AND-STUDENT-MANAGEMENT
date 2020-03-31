<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Import CSV File into MySQL Database using PHP/MySQLi</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Upload Admit Card</h1>
	<div class="row">
		<div class="col-sm-3">
			<h3>Import File Form</h3>
			<form method="POST" action="import.php" enctype="multipart/form-data">
				<div class="form-group">
					<label for="file">File:</label>
					<input type="file" id="file" name="file">
				</div>
				<button type="submit" name="import" class="btn btn-primary btn-sm">Import</button>
			</form>
			<?php
				session_start();
				if(isset($_SESSION['message'])){
					?>
					<div class="alert alert-info text-center" style="margin-top:20px;">
						<?php echo $_SESSION['message']; ?>
					</div>
					<?php

					unset($_SESSION['message']);
				}

			?>
		</div>
		<div class="col-sm-9">
			<table class="table table-bordered table-striped">
				<thead>
					<th>UserID</th>
					<th>ID NUMBER</th>
					<th>DOB</th>
					<th>NAME</th>
					<th>Exam Center</th>
					<th>Exam Date</th>
  					<th>Exam Time</th>
					<th>Father's Name</th>
					<th>Sex</th>
					<th>Per. Add1</th>
					<th>per. Add2</th>
					<th>Pincode</th>
					<th>Category</th>
					<th>Applied Branch</th>
					
				</thead>
				<tbody>
					<?php
					//connection
					$conn = new mysqli('localhost', 'root', '', 'oas');

					$sql = "SELECT * FROM members";
					$query = $conn->query($sql);

					while($row = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['s_id']; ?></td>
							<td><?php echo $row['s_dob']; ?></td>
							<td><?php echo $row['s_name']; ?></td>
							<td><?php echo $row['s_ad']; ?></td>
							<td><?php echo $row['s_date']; ?></td>
						        <td><?php echo $row['s_time']; ?></td>
                                                        <td><?php echo $row['f_name']; ?></td>
							<td><?php echo $row['s_sex']; ?></td>
							<td><?php echo $row['s_padr']; ?></td>
							<td><?php echo $row['s_pst']; ?></td>
 							<td><?php echo $row['s_ppin']; ?></td>
							<td><?php echo $row['s_catg']; ?></td>
							<td><?php echo $row['s_branch']; ?></td>
							
						</tr>
						<?php
					}

					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>
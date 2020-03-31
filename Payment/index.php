<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Import CSV File into MySQL Database using PHP/MySQLi</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Upload Payment Status</h1>
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
					<th>Payment ID</th>
					<th>Transaction Date</th>
					<th>Transaction Status</th>
					<th>Form Name</th>
  					<th>Email</th>
					<th>Phone Number</th>
					<th>Amount Paid</th>
					
					
				</thead>
				<tbody>
					<?php
					//connection
					$conn = new mysqli('localhost', 'root', '', 'oas');

					$sql = "SELECT * FROM payment";
					$query = $conn->query($sql);

					while($row = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['s_id']; ?></td>
							<td><?php echo $row['f_pay']; ?></td>
							<td><?php echo $row['s_date']; ?></td>
							<td><?php echo $row['s_tran']; ?></td>
							<td><?php echo $row['s_form']; ?></td>
						        <td><?php echo $row['s_email']; ?></td>
                                                        <td><?php echo $row['s_phone']; ?></td>
							<td><?php echo $row['s_amount']; ?></td>
							
							
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
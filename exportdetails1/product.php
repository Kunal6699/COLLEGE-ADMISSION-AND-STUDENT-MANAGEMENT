<?php
require_once ('connection.php');

$qry = "SELECT `student_name`, `student_username`, `student_email`, `student_image`, `created_date`, `status` FROM `student`";
$res = mysqli_query($con,$qry);

?>
<html>

<head>
    <title>Table</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<div class="container">
	<div class="row">
		<button id="export" class="btn btn-info">Export Excel</button>
	</div>
    <div class="row">
		<table id="product" class="table table-bordered">
			<thead>
				<tr>
					<th>Student Name</th>
					<th>Student Username</th>
					<th>Student Email</th>
					<th>Student Image</th>
					<th>Created Date</th>
					<th>Status</th>
					
				</tr>
			</thead>
			<tbody>
				<?php while($row = mysqli_fetch_assoc($res)){ ?>
					<tr>
						<td><?php echo $row['student_name']; ?></td>
						<td><?php echo $row['student_username']; ?></td>
						<td><?php echo $row['student_email']; ?></td>
						<td><?php echo $row['student_image']; ?></td>
						<td><?php echo $row['created_date']; ?></td>
						<td><?php echo $row['status']; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
    
</div>

<script src="js/jquery-3.2.0.min.js" type="text/javascript"></script>
<script src="table2excel/src/jquery.table2excel.js" type="text/javascript"></script>

<script>
    $("#export").click(function(){
        $("#product").table2excel({

            // exclude CSS class
            exclude: ".noExl",
            name: "Worksheet Name",
        filename: "product" //do not include extension
    });
    });

</script>

</body>
</html>

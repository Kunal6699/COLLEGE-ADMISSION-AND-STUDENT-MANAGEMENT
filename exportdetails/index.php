<?php
require_once ('connection.php');

$qry = "SELECT `s_id`, `s_pwd`, `s_dob`, `s_name`, `s_email`, `s_mob` FROM `t_user_data`";
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
					<th>ID No.</th>
					<th>Password</th>
					<th>Date Of birth</th>
					<th>Candidate name</th>
					<th>Candidate email</th>
					<th>Candidate mob</th>
					
				</tr>
			</thead>
			<tbody>
				<?php while($row = mysqli_fetch_assoc($res)){ ?>
					<tr>
						<td><?php echo $row['s_id']; ?></td>
						<td><?php echo $row['s_pwd']; ?></td>
						<td><?php echo $row['s_dob']; ?></td>
						<td><?php echo $row['s_name']; ?></td>
						<td><?php echo $row['s_email']; ?></td>
						<td><?php echo $row['s_mob']; ?></td>
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

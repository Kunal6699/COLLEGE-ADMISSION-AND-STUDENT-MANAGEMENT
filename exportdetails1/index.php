<?php
require_once ('connection.php');

$qry = "SELECT `s_id`, `f_name`, `m_name`, `s_sex`, `s_padr`, `s_pst`, `s_ppin`, `s_catg`, `s_branch`, `s_center`FROM `t_user`";
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
					<th>Father's Name</th>
					<th>Mother's Name</th>
					<th>Sex</th>
					<th>Per. Add1</th>
					<th>Per. Add2</th>
					<th>Pincode</th>
                                        <th>Category</th>
                                        <th>Branch Applied</th>
                                        <th>Center choosen</th>
					
				</tr>
			</thead>
			<tbody>
				<?php while($row = mysqli_fetch_assoc($res)){ ?>
					<tr>
						<td><?php echo $row['s_id']; ?></td>
						<td><?php echo $row['f_name']; ?></td>
						<td><?php echo $row['m_name']; ?></td>
						<td><?php echo $row['s_sex']; ?></td>
						<td><?php echo $row['s_padr']; ?></td>
						<td><?php echo $row['s_pst']; ?></td>
 						<td><?php echo $row['s_ppin']; ?></td>
						<td><?php echo $row['s_catg']; ?></td>
						<td><?php echo $row['s_branch']; ?></td>
						<td><?php echo $row['s_center']; ?></td>
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

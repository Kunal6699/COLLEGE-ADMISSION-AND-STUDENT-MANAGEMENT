<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search by ID</title>
	<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />
</head>

<body>
<center><h1>Search Result</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="addnew" href="index.php" style="font-face:Khmer OS Battambang; font-size:16px;">ត្រលប់ក្រោយ</a></font>
	<table>
    	<tr>
            <th>StuID</th>
            <th>Registration No.</th>
            <th>DOB</th>
            <th>Name</th>
            <th>Exam city</th>
            <th>Exam date</th>
            <th>Exam time</th>
		<th>Father's name</th>
		<th>Mother's name</th>
		<th>Sex</th>
		<th>Per. Add1</th>
		<th>per. Add2</th>
		<th>Pincode</th>
		<th>category</th>
		<th>branch Applied</th>
            <th>Option</th>
        </tr>
    <?php
		$text = $_POST['txtsearch'];
		if($text==""){
			echo "No Data....Please Try Again!!!"."<br>";
			echo '<a href="ViewTable.php"><img src="Images/Users_Group.png" title="Go Back"></a>';
		}
	?>
    <?php
		$cbo = $_POST['cbosearch'];
		$search = $_POST['txtsearch'];
		include('connect.php');
	?>
    <?php
		if($cbo=="ID")
		{
			$id = mysql_query("SELECT * FROM members WHERE id='$search'");
	?>

    <?php
		while($di=mysql_fetch_array($id))
		{
	?>
			<tr>
				<td><?php echo $di[0]; ?></td>
				<td><?php echo $di[1]; ?></td>
                <td><?php echo $di[2]; ?></td>
                <td><?php echo $di[3]; ?></td>
                <td><?php echo $di[4]; ?></td>
                <td><?php echo $di[5]; ?></td>
                <td><?php echo $di[6]; ?></td>
		 <td><?php echo $di[7]; ?></td>
		 <td><?php echo $di[8]; ?></td>
		 <td><?php echo $di[9]; ?></td>
		 <td><?php echo $di[10]; ?></td>
		 <td><?php echo $di[11]; ?></td>
		 <td><?php echo $di[12]; ?></td>
		 <td><?php echo $di[13]; ?></td>
		 <td><?php echo $di[14]; ?></td>
		 <td><?php echo $di[15]; ?></td>
				<td align="center"><a href="Delete_Form.php? txtid=<?php echo $di[0];?>">Delete</a> / <a href="Edit_Form.php? txtid=<?php echo $di[0];?>">Edit</a></td>
			</tr>
            <?php
		}
		}else if($cbo=="RegistrationNo")
		{
			$na = mysql_query("SELECT * FROM members WHERE s_id like '".$search."%'");
	?>
    <?php
		while($an=mysql_fetch_array($na))
		{
	?>
			<tr>
				<td><?php echo $an[0]; ?></td>
				<td><?php echo $an[1]; ?></td>
                <td><?php echo $an[2]; ?></td>
                <td><?php echo $an[3]; ?></td>
                <td><?php echo $an[4]; ?></td>
                <td><?php echo $an[5]; ?></td>
                <td><?php echo $an[6]; ?></td>
		<td><?php echo $an[7]; ?></td>
		 <td><?php echo $an[8]; ?></td>
		 <td><?php echo $an[9]; ?></td>
		 <td><?php echo $an[10]; ?></td>
		 <td><?php echo $an[11]; ?></td>
		 <td><?php echo $an[12]; ?></td>
		 <td><?php echo $an[13]; ?></td>
		 <td><?php echo $an[14]; ?></td>
				<td align="center"><a href="Delete_Form.php? txtid=<?php echo $an[0];?>">Delete</a> / <a href="Edit_Form.php? txtid=<?php echo $an[0];?>">Edit</a></td>
			</tr>
            <?php
				}
			?>  
     <?php
		}else if($cbo=="DOB")
				{
        $add = mysql_query("SELECT * FROM members WHERE s_dob like '".$search."%'");
     ?>
		<?php
		while($dda=mysql_fetch_array($add))
		{
		?>
			<tr>
				<td><?php echo $dda[0]; ?></td>
				<td><?php echo $dda[1]; ?></td>
                <td><?php echo $dda[2]; ?></td>
                <td><?php echo $dda[3]; ?></td>
                <td><?php echo $dda[4]; ?></td>
                <td><?php echo $dda[5]; ?></td>
                <td><?php echo $dda[6]; ?></td>
		<td><?php echo $dda[7]; ?></td>
		 <td><?php echo $dda[8]; ?></td>
		 <td><?php echo $dda[9]; ?></td>
		 <td><?php echo $dda[10]; ?></td>
		 <td><?php echo $dda[11]; ?></td>
		 <td><?php echo $dda[12]; ?></td>
		 <td><?php echo $dda[13]; ?></td>
		 <td><?php echo $dda[14]; ?></td>
		 
				<td align="center"><a href="Delete_Form.php?txtid=<?php echo $dda[0];?>">Delete</a> / <a href="Edit_Form.php?txtid=<?php echo $dda[0];?>">Edit</a></td>
			</tr>
            <?php
				}
			}else if($cbo=="Name")
			{
			$g = mysql_query("SELECT * FROM members WHERE s_name like '".$search."%'");
			?>  
			<?php
				while($ge=mysql_fetch_array($g))
				{			
			?>
            <tr>
				<td><?php echo $ge[0]; ?></td>
				<td><?php echo $ge[1]; ?></td>
                <td><?php echo $ge[2]; ?></td>
                <td><?php echo $ge[3]; ?></td>
                <td><?php echo $ge[4]; ?></td>
                <td><?php echo $ge[5]; ?></td>
                <td><?php echo $ge[6]; ?></td>
		<td><?php echo $ge[7]; ?></td>
		 <td><?php echo $ge[8]; ?></td>
		 <td><?php echo $ge[9]; ?></td>
		 <td><?php echo $ge[10]; ?></td>
		 <td><?php echo $ge[11]; ?></td>
		 <td><?php echo $ge[12]; ?></td>
		 <td><?php echo $ge[13]; ?></td>
		 <td><?php echo $ge[14]; ?></td>
		 
				<td align="center"><a href="Delete_Form.php?txtid=<?php echo $ge[0];?>">Delete</a> / <a href="Edit_Form.php?txtid=<?php echo $ge[0];?>">Edit</a></td>
			</tr>
            
            <?php
				}
			}
			?>
</table>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Information</title>
<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />
</head>
<body>
<center><h1>Welcome to Student</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="addnew" href="Add_Form.php" style="font-face:Khmer OS Battambang; font-size:16px;">ចុចត្រង់នេះដើម្បីបន្ថែម Record ថ្មី</a></font>
	<div class="search">
	<form method="post" action="searchidandname.php">
    <select name="cbosearch">
    	<option>ID</option>
    	<option>RegistrationNo</option>
        <option>DOB</option>
        <option>Name</option>
    </select>
	<input type="text" name="txtsearch" placeholder="Type to Search" /><input type="submit" name="cmdsearch" value="Search" />
    </form>
    </div>
	<table>
    	<tr>
            <th>StuID</th>
            <th>Registration ID</th>
            <th>DOB</th>
            <th>Name</th>
            <th>Exam center</th>
            <th>Exam Date</th>
            <th>Exam Time</th>
	   <th>Father's name</th>
	    <th>Mother's name</th>
	       <th>Sex</th>
	    <th>Per. Add1</th>
             <th>Per. Add2</th>
		<th>Pincode</th>
		<th>Category</th>
		<th>Branch Applied</th>
            <th>Option</th>
    	</tr>
        <?php
			include "connect.php";
			$i = "select * from members";
			$h = mysql_query($i);
			while($tr=mysql_fetch_array($h))
			{
		?>
        <tr>
        	<td><?php echo $tr[0]; ?></td>
            <td><?php echo $tr[1]; ?></td>
            <td><?php echo $tr[2]; ?></td>
            <td><?php echo $tr[3]; ?></td>
            <td><?php echo $tr[4]; ?></td>
            <td><?php echo $tr[5]; ?></td>
            <td><?php echo $tr[6]; ?></td>
	<td><?php echo $tr[7]; ?></td>
	<td><?php echo $tr[8]; ?></td>
	<td><?php echo $tr[9]; ?></td>
	<td><?php echo $tr[10]; ?></td>
	<td><?php echo $tr[11]; ?></td>
	<td><?php echo $tr[12]; ?></td>
	<td><?php echo $tr[13]; ?></td>
	<td><?php echo $tr[14]; ?></td>
            <td align="center"><a href="Delete_Form.php? txtid=<?php echo $tr[0];?>">Delete</a> / <a href="Edit_Form.php? txtid=<?php echo $tr[0];?>">Edit</a> </td>    
        </tr>
        <?php
			}
		?>
		
    </table>
</body>
</html>
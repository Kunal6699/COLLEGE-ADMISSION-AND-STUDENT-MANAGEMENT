<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Form</title>
	<link href="Style/Delete_Form.css" type="text/css" rel="stylesheet" />
</head>

<body background="Images/MyBackground.png" bgcolor="#999966">
	<div class="topbar"><center><h1 style="color:#FFF">Delete Form</h1></center></div>
	<div id="box"><center>
    
    	<?php
		
			$id = $_GET['txtid'];
			include ("connect.php");
			$i = "select * from members where id=".$id;
			$h = mysql_query($i);
			if($tr=mysql_fetch_array($h))
			{
		?>
    
	<table>
    		<form method="post" action="">
    	<tr>
        	<th>ID:</th>
            <td><input type="text" name="txtid" value="<?php echo $tr[0]; ?>" /></td>
        </tr>
        <tr>
        	<th>Registration ID:</th>
            <td><input type="text" name="txtname" value="<?php echo $tr[1]; ?>"/></td>
        </tr>
        <tr>
        	<th>DOB:</th>
            <td><input type="text" name="txtgender" value="<?php echo $tr[2]; ?>" /></td>
        </tr>
        <tr>
        	<th>Name:</th>
            <td><input type="text" name="txtdob" value="<?php echo $tr[3]; ?>" /></td>
        </tr>
        <tr>
        	<th>Exam Center:</th>
            <td><textarea name="txtaddress" cols="14px" rows="3"><?php echo $tr[4]; ?></textarea></td>
        </tr>
        <tr>
        	<th>Exam Date:</th>
            <td><input type="text" name="txtsub" value="<?php echo $tr[5]; ?>" /></td>
        </tr>
        <tr>
        	<th>Exam TIme:</th>
            <td><input type="text" name="txtdate" value="<?php echo $tr[6]; ?>" /></td>
        </tr>
	<tr>
        	<th>Father name:</th>
        	<td><input type="text" name="txtfather" value="<?php echo $tr[7]; ?>" /></td>
        </tr>  
	<tr>
        	<th>Mother name:</th>
        	<td><input type="text" name="txtmother" value="<?php echo $tr[8]; ?>" /></td>
        </tr> 
	<tr>
        	<th>Sex:</th>
        	<td><input type="text" name="txtsex" value="<?php echo $tr[9]; ?>" /></td>
        </tr>   
	<tr>
        	<th>Per. Add1:</th>
        	<td><input type="text" name="txtper1" value="<?php echo $tr[10]; ?>" /></td>
        </tr> 
	<tr>
        	<th>Per. Add2:</th>
        	<td><input type="text" name="txtper2" value="<?php echo $tr[11]; ?>" /></td>
        </tr>   
	<tr>
        	<th>Pincode:</th>
        	<td><input type="text" name="txtpin" value="<?php echo $tr[12]; ?>" /></td>
        </tr>
	<tr>
        	<th>Category:</th>
        	<td><input type="text" name="txtcat" value="<?php echo $tr[13]; ?>" /></td>
        </tr>   
	<tr>
        	<th>Branch Applied:</th>
        	<td><input type="text" name="txtbranch" value="<?php echo $tr[14]; ?>" /></td>
        </tr>   
        <?php
			}
		?>
        <tr>
            <td colspan="2" align="center">
            <input type="submit" name="cmddelete" value="Delete"/>
            <a href="index.php"><img src="Images/Users_Group.png" title="Go Back" /></a>
            </td>
        </tr>
        	</form>
    </table></center>
	</div>
        <?php
        $id=$_POST['txtid'];        
        include("connect.php");
        $i = mysql_query("delete from members where id=".$id);
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
        }
        //header('Location::index.php');
        //exit;
        //mysql_close();
    ?>
</body>
</html>
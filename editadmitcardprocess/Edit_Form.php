<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Form</title>

	<link rel="stylesheet" type="text/css"  href="Style/Edit_Form.css" />

</head>

<body background="Images/MyBackground.png" bgcolor="#FFCC99">
	<div class="topbar"> <h1 style="color:#FFF"><center>Edit Form</center></h1></div>    
	<center>
    <div class="box">
    	<?php
		$id = $_GET['txtid'];
		include ("connect.php");
		$i ="select * from members where id=".$id;
		$h= mysql_query($i);
		if($tr=mysql_fetch_array($h))
		{
	?>
    <table><form method="post" action="">
    	<tr>
        	<th>ID:</th>
        	<td><input type="text" name="txtid" value="<?php echo $tr[0]; ?>"/></td>
        </tr>
        <tr>
        	<th>Registration No.:</th>
        	<td><input type="text" name="txtname" value="<?php echo $tr[1]; ?>" /></td>
        </tr>
        <tr>
        	<th>DOB:</th>
        	<td>
            	<input type="text" name="txtgender" value="<?php echo $tr[2]; ?>" /></td>
            </td>
        </tr>
        <tr>
        	<th>Name:</th>
        	<td><input type="text" name="txtdob" value="<?php echo $tr[3]; ?>" /></td>
        </tr>
        <tr>
        	<th>Exam Center:</th>
        	<td><textarea cols="16" rows="3" name="txtaddress"> <?php echo $tr[4];?> </textarea></td>
        </tr>
        <tr>
        	<th>Exam Date:</th>
        	<td><input type="text" name="txtsubject" value="<?php echo $tr[5]; ?>" /></td>
        </tr>            
        <tr>
        	<th>Exam Time:</th>
            <td><input type="text" name="txtdate" value="<?php echo $tr[6];?>"/></td>
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
        	<td colspan="2" align="center"><input type="submit" name="cmdedit" value="Save" />
            <a href="index.php"><img src="Images/Users_Group.png" title="Go Back"/></a>
            </td>
        </tr>
	</form></table>
    </div>
    </center>
    <?php
        include ("connect.php");
        $i = mysql_query("update members set s_id='".$_POST['txtname']."', s_dob='".$_POST['txtgender']."', s_name='".$_POST['txtdob']."', s_ad='".trim($_POST['txtaddress'])."', s_date='".$_POST['txtsubject']."', s_time='".$_POST['txtdate']."', f_name='".$_POST['txtfather']."', m_name='".$_POST['txtmother']."', s_sex='".$_POST['txtsex']."', s_padr='".$_POST['txtper1']."', s_pst='".$_POST['txtper2']."', s_ppin='".$_POST['txtpin']."', s_catg='".$_POST['txtcat']."', s_branch='".$_POST['txtbranch']."' where id=".$_POST['txtid']);
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
        }
        //header('Location::index.php');
        //exit;
        //mysql_close();
    ?>
</body>
</html>
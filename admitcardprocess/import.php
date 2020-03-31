<?php

	session_start();
	//connection
	$conn = new mysqli('localhost', 'root', '', 'oas');

	if(isset($_POST['import'])){
		//check if input file is empty
		if(!empty($_FILES['file']['name'])){
			$filename = $_FILES['file']['tmp_name'];
			$fileinfo = pathinfo($_FILES['file']['name']);

			//check file extension
			if(strtolower($fileinfo['extension']) == 'csv'){
				//check if file contains data
				if($_FILES['file']['size'] > 0){

					$file = fopen($filename, 'r');

					while(($impData = fgetcsv($file, 1000, ',')) !== FALSE){
						$sql = "INSERT INTO members (s_id, s_dob, s_name, s_ad, s_date, s_time, f_name, s_sex, s_padr, s_pst, s_ppin, s_catg, s_branch) VALUES ('".$impData[0]."', '".$impData[1]."', '".$impData[2]."', '".$impData[3]."', '".$impData[4]."', '".$impData[5]."' , '".$impData[6]."' , '".$impData[7]."' , '".$impData[8]."' , '".$impData[9]."' , '".$impData[10]."' , '".$impData[11]."' , '".$impData[12]."')";
						$query = $conn->query($sql);

						if($query){
							$_SESSION['message'] = "Data imported successfully";
						}
						else{
							$_SESSION['message'] = "Cannot import data. Something went wrong";
						}
					}
					header('location: index.php');
					
				}
				else{
					$_SESSION['message'] = "File contains empty data";
					header('location: index.php');
				}
			}
			else{
				$_SESSION['message'] = "Please upload CSV files only";
				header('location: index.php');
			}
		}
		else{
			$_SESSION['message'] = "File empty";
			header('location: index.php');
		}

	}

	else{
		$_SESSION['message'] = "Please import a file first";
		header('location: index.php');
	} 
 
?>
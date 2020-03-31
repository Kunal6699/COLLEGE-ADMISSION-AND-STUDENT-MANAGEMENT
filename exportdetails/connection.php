<?php
/**
 * Created by PhpStorm.
 * User: Aravinth
 * Date: 14-07-2017
 * Time: 02:09 PM
 */
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "oas";
$con = mysqli_connect($hostname,$username,$password);
mysqli_select_db($con,$dbname);
?>

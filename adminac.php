<?php
    error_reporting(0);
$getid= $_GET["id"];
$con=mysqli_connect("localhost","root","","oas");
if(!isset($con))
{
    die("Database Not Found");
}


$q=mysqli_query($con,"select s_name,s_dob,s_ad,s_date,s_time, f_name, s_sex, s_padr, s_pst, s_ppin, s_catg, s_branch from members where s_id='".$getid."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['s_name'];
$stdob= $n['s_dob'];
$stad= $n['s_ad'];
$stdate= $n['s_date'];
$sttime= $n['s_time'];
$stfname= $n['f_name'];
$stsex= $n['s_sex'];
$stpadr= $n['s_padr'];
$stpst= $n['s_pst'];
$stppin= $n['s_ppin'];
$stcatg= $n['s_catg'];
$stbranch= $n['s_branch'];

$result = mysqli_query($con,"SELECT * FROM t_user WHERE s_id='".$getid."'");
                    
                    while($row = mysqli_fetch_array($result))
                      {

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
         <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>
        
    </head>
    <body style="background-image:url(./images/inbg.jpg) ">
      <form id="adminac" action="adminac.php" method="post">
            
          <div class="container-fluid">
                            <div class="row">
                               <div class="col-sm-12">
      <center>  <table class="table table-bordered" style="font-family: Verdana">
                
                <tr>
                 <td style="width:3%;"><img src="./images/Logo-T.png" width="100%"> </td>
                 <td style="width:8%;"><center><font style="font-family:Arial Black; font-size:20px;">
                    Online Application System For Admission Cum Examination,INDIA</font></center>
                
                <center><font style="font-family:Verdana; font-size:18px;">
                    Phone : (1234)123456, Fax : (1234)123456
                    </font></center>
                
                <br>
                <br>
                <center><font style="font-family:Arial Black; font-size:20px;">
                    ADMIT CARD (2019-20)</font></center>
                </td>
                    <td colspan="2" width="3%" >
                        <?php
                  
                    $picfile_path ='studentpic/';
                    
                    $result1 = mysqli_query($con,"SELECT * FROM t_userdoc where s_id='".$getid."'");
             
                    while($row1 = mysqli_fetch_array($result1))
                      {                  
                        $picsrc=$picfile_path.$row1['s_pic'];
                        
                        echo "<img src='$picsrc.' class='img-thumbnail' width='180px' style='height:180px;'>";
                        echo"<div>";
                      }
                   ?>
                        </td>
               
                   </tr>       
                 
                 
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Registration No.  </font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $getid;?></font> </td>
                 </tr>       
                 
                 
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Exam Date  </font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $stdate;?></font> </td>
                 </tr>

                 
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Exam Time  </font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $sttime;?></font> </td>
                 </tr>
                 
                
                
                <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Name  </font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $stname;?></font> </td>
                 </tr>

                  <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Date of Birth </font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $stdob;?></font> </td>
                 </tr>
		<tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Gender</font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $stsex;?></font> </td>
                 </tr>
		<tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Category </font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $stcatg;?></font> </td>
                 </tr>
		<tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Applied for Branch </font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $stbranch;?></font> </td>
                 </tr>
		<tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Father's Name</font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $stfname;?></font> </td>
                 </tr>
		<tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Permanent Address </font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $stpadr;?></font> </td>
                 </tr>
		<tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;"> </font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $stpst;?></font> </td>
                 </tr>
		<tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Pincode</font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $stppin;?></font> </td>
                 </tr>
                 
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Exam Center  </font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $stad;?></font> </td>
                 </tr>

                 </tr>
                <?php
                }
                ?>
                 
                    </table>
                </div>
             </div>
          </div>
          
          <center><font style="font-family: Verdana; font-weight: bold; font-size: 20px;"> Instructions to the Candidate</font></center><br>
          <font style="font-family: Verdana;  font-size: 13px;"> 
            <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                1. This Admit Card must be presented for verification at the time of examination, along with at least one
                   original(not photocopied or scanned copy) and valid (not expired) photo identification card
                   (e.g : Aadhaar Card, Voter ID).
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                2. This Admit Card is valid only if the candidate's photograph and signature images are <b> legibly printed</b>.
                   Print this on an A4 sized paper using a laser printer preferably a color photo printer.
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                3. Candidates should occupy their alloted seats <b>25 minutes before</b> the scheduled start of the examination.
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                4. Candidates will not be allowed to enter the examination hall <b>30 minutes</b>
                after the commencement of the examination.
            </p>
            
            <p style="margin-left: 100px; margin-right: 100px; font-family: Verdana;">
                5. Mobile phones or any other Electronic gadgets are NOT ALLOWED inside the examination hall. There may not be any
                facility for the safe-keeping of your gadget outside the hall, so it may be easier to leave it at your residence.
            </p>
            
          </font>
          
          <center><input type="button" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></center>
      </form>
    </body>
</html>

<?php 
include('inc/header.php');

?>

<body>
<p id="miraclestitle">

<span>
    <a href='javascript:void(0)' style='margin:0px; padding:0px;float:left; margin-right:10px;' class='closebtn' onclick='closemyMiraclesNav()'>
	<i class='fa fa-chevron-circle-up' aria-hidden='true' style='color:#000;'></i></span>
	</a>

	<a href='javascript:void(0)' style='margin:0px; padding:0px;float:left;' class='closebtn' onclick='openmyMiraclesNav()'>
	<i class='fa fa-chevron-circle-down' aria-hidden='true' style='color:#000;'></i></span>
	</a>
</span>

<span style="color:white;"> About_us</span> Table</p>
<br>
<br>
<br>
<h3> About_us Content</h3>
<!--
    <form class="form-horizontal" role="form" action="#" method="post" enctype="multipart/form-data">
      <input name='AB_sub' type='text' placeholder='Subject' />
      <textarea name="AB_description" style="width:50em; height:30px; margin-top:5px;" placeholder="Describe About_us"></textarea>
          <input name='AB_address' type='text' placeholder='Address' />
            <input name='AB_mobile' type='int' placeholder='Mobile' />
              <input name='AB_email' type='email' placeholder='Email' />

<input type="submit" name="insertaboutus"  value="&#xf0c7; Insert" style="width:150px;" />
<input type="reset" value="Reset" style="width:150px;" />
</form> -->
<?php
/*
include('inc/db_connect.php');

if(isset($_POST['insertaboutus'])){
  $aboutus_sub =htmlspecialchars(@$_POST['AB_sub']);
	$aboutus_description =htmlspecialchars(@$_POST['AB_description']);
  $aboutus_address =htmlspecialchars(@$_POST['AB_address']);
  $aboutus_mobile =htmlspecialchars(@$_POST['AB_mobile']);
  $aboutus_email =htmlspecialchars(@$_POST['AB_email']);


 $sql = "INSERT INTO about_us(AB_sub,AB_description,AB_address,AB_mobile,AB_email)values('$aboutus_sub','$aboutus_description','$aboutus_address','$aboutus_mobile','$aboutus_email')";

       if ($conn->query($sql) === TRUE) {
           echo "<P style='color:#4CAF50;'>New Record Created successfully !</p>";
       } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
       }
   }
*/
?>
<br><br>
</body>
</html>

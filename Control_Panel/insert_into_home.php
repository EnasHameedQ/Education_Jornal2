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

<span style="color:white;"> Home</span> Table</p>
<br>
<br>
<br>
<p> Slider Content</p>
<?php
  if (isset($_SESSION['message']) && $_SESSION['message'])
  {
    printf('<b>%s</b>', $_SESSION['message']);
    unset($_SESSION['message']);
  }
?>
    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
<!-- كود  الصور -->
<input type="file" name="uploadedFile" value="select image"   />
<input name="H_sub" type="text" placeholder="Subject of image" />
<textarea name="H_desc" style="width:50em; height:30px; margin-top:5px;" placeholder="Describe image"  value=""></textarea>
<input type="submit" name="insertintohome"  value="Upload" style="width:150px;" />
<input type="reset" value="Reset" style="width:150px;" />
</form>
<?php

include('inc/db_connect.php');

if(isset($_POST['insertintohome'])){

  $Home_id =htmlspecialchars(@$_POST['H_id']);
  $Home_img =htmlspecialchars(@$_POST['uploadedFile']);
  $Home_sub =htmlspecialchars(@$_POST['H_sub']);
  $Home_desc =htmlspecialchars(@$_POST['H_desc']);
 $sql = "INSERT INTO home (H_img,H_sub,H_desc)values('$Home_img','$Home_sub','$Home_desc')";

       if ($conn->query($sql) === TRUE) {
           echo "<P style='color:#4CAF50;'>New Record Created successfully !</p>" ;
       } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
       }
   }

?>

<br><br>
</body>
</html>

<?php include('inc/db_connect.php');
include('inc/header.php');

?>

<?php

/*
  if (isset($_SESSION['message']) && $_SESSION['message'])
  {
    printf('<b>%s</b>', $_SESSION['message']);
    unset($_SESSION['message']);
  }
  */
?>


<body>
<p id="suspicionstitle">

<span>
    <a href='javascript:void(0)' style='margin:0px; padding:0px;float:left; margin-right:10px;' class='closebtn' onclick='closemySuspicionsNav()'>
	<i class='fa fa-chevron-circle-up' aria-hidden='true' style='color:#000;'></i></span>
	</a>
	<a href='javascript:void(0)' style='margin:0px; padding:0px;float:left;' class='closebtn' onclick='openmySuspicionsNav()'>
	<i class='fa fa-chevron-circle-down' aria-hidden='true' style='color:#000;'></i></span>
	</a>
</span>

<span style="color:white;"> Journals</span> Table</p>
<br>
<br>
<br>
<?php if (isset($_GET['error'])): ?>
  <p><?php echo $_GET['error']; ?></p>
<?php endif ?>
  <form class="form-horizontal" role="form" action="uploadpdf.php"  method="post" enctype="multipart/form-data">
<!-- كود  الصور -->
  <span>Upload an Image:</span>
<input type="file" name="my_image" value="select_img" size="400"   required="required" />
<input name="j_name" type="text" placeholder="Name of journal"  required="required" />
<textarea name="j_description" style="width:50em; height:30px; margin-top:5px;" placeholder="Describe journals"  value=""  required="required"></textarea>
</br>
  <span>Upload an PDF:</span>
<input type="file" name="pdf" value="select_pdf"    />
<select  class="basic" name="d_id">
<?php
  $sql = "SELECT * from departments";
  $result = $conn->query($sql);
    while($row = $result->fetch_row()) {
    // code...
echo "<option value='" . $row['0']  ."'> ". $row['1'] . "</option>";
}

?>

</select>

<input type="submit" name="insertjournal" value="&#xf0c7; Insert" style="width:150px;" />
<input type="reset" value="Reset" style="width:150px;" />
</form>

<br><br>

</body>
</html>

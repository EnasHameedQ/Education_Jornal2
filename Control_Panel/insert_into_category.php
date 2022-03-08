
<?php
include('inc/header.php');

?>

<body>
  <p id="surtitle">

  <span>
      <a href='javascript:void(0)' style='margin:0px; padding:0px;float:left; margin-right:10px;' class='closebtn' onclick='closemySurNav()'>
  	<i class='fa fa-chevron-circle-up' aria-hidden='true' style='color:#000;'></i></span>
  	</a>

  	<a href='javascript:void(0)' style='margin:0px; padding:0px;float:left;' class='closebtn' onclick='openmySurNav()'>
  	<i class='fa fa-chevron-circle-down' aria-hidden='true' style='color:#000;'></i></span>
  	</a>
  </span>

<span style="color:white;">Departments</span> Table</p>
<br>
<br>
<br>
<?php if (isset($_GET['error'])): ?>
  <p><?php echo $_GET['error']; ?></p>
<?php endif ?>

<form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
<!-- كود  الصور -->
  <span>Upload an Image:</span>
<input type="file" name="my_image" value="select img "   />
<input name="name" type="text" placeholder="Name of Department" />
<textarea name="description" style="width:50em; height:30px; margin-top:5px;" placeholder="Describe the Department"  value=""></textarea>
<input type="submit" name="submit" value="&#xf0c7; Insert" style="width:150px;" />
<input type="reset" value="Reset" style="width:150px;" />
</form>
<?php

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
  include('inc/db_connect.php');

	//echo "<pre>";
	//print_r($_FILES['my_image']);
	//echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
  $img_type = $_FILES['my_image']['type'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: admin_control.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png");
}
			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				$move=move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database

        if(isset($_POST['submit'])){
        $dep_id =htmlspecialchars(@$_POST['Id']);
        $dep_name =htmlspecialchars(@$_POST['name']);
        $dep_desc =htmlspecialchars(@$_POST['description']);
        $SQL = "INSERT INTO departments (name,description,img) values('$dep_name','$dep_desc','$img_upload_path')";


        if ($conn->query($SQL) === TRUE) {

         echo "<P style='color:#4CAF50;'>New Record Created successfully !</p>
        			<a href='admin_control.php' class=''> </a>";
                 }
         else {
            echo "Error: " . $SQL . "<br>" . $conn->error;


        }



    }


    else {
    echo  $em = "You can't upload files of this type";
          //header("Location: admin_control.php?error=$em");
    }
  }
}else {
  echo  $em = "unknown error occurred!";
  //header("Location: admin_control.php?error=$em");
}

}//else {
//header("Location: admin_control.php");
//}
?>
<br><br>
</body>
</html>

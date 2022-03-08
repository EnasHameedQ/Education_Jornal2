<?php

 include('inc/db_connect.php');
  include('inc/header.php');

  ?>


<body>
<p id="surtitle"><!-- donot cheange id name-->

<span>
    <a href='javascript:void(0)' style='margin:0px; padding:0px;float:left; margin-right:10px;' class='closebtn' onclick='closemySurNav()'>
	<i class='fa fa-chevron-circle-up' aria-hidden='true' style='color:#000;'></i></span>
	</a>

	<a href='javascript:void(0)' style='margin:0px; padding:0px;float:left;' class='closebtn' onclick='openmySurNav()'>
	<i class='fa fa-chevron-circle-down' aria-hidden='true' style='color:#000;'></i></span>
	</a>
</span>

<span style="color:white;">Articals</span> Table</p>
<form action="" method="post"enctype="multipart/form-data">

  <br>
  <br>
  <br>

<input name="A_Name" type="text" placeholder="Articals Subject" required/>
  <br>
<textarea name="A_description"  placeholder="Articals Content" required/></textarea>
</br>
  <span>Upload an Image:</span>
<input type="file" name="my_image" required/>
<input name="A_link" type="url" placeholder="Articals URL " />
<input type="submit" name="uploadBtn" value="&#xf0c7; Upload" style="width:150px;" />
<input type="reset" value="Reset" style="width:150px;" />
</form>
<?php

if (isset($_POST['uploadBtn'])) {
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
		 echo "  $em";
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc1 = strtolower($img_ex);

			$allowed_exs1 = array("jpg", "jpeg", "png");
}
			if (in_array($img_ex_lc1, $allowed_exs1)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc1;
				$img_upload_path = 'uploads/'.$new_img_name;
				$move=move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database

        if(isset($_POST['uploadBtn'])){
        $A_id =htmlspecialchars(@$_POST['A_id']);
        $A_Name =htmlspecialchars(@$_POST['A_Name']);
        $A_description =htmlspecialchars(@$_POST['A_description']);
        $A_link =filter_var($_POST['A_link'],FILTER_SANITIZE_URL);
        $A_img=@$_POST['img_upload_path'];

        $sql = "INSERT INTO articles(A_Name,A_description,A_img,A_link)
        values('$A_Name','$A_description','$img_upload_path','$A_link')";
        if ($conn->query($sql) === TRUE) {

         echo "<P style='color:#4CAF50;'>New Record Created successfully !</p>
        			<a href='admin_control.php' class=''> </a>";
                 }
         else {
            echo "Error: " . $sql . "<br>" . $conn->error;


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

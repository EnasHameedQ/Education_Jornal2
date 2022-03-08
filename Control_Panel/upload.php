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

        $dep_id =filter_var($_POST['Id'],FILTR_SANITIZE_NUMBER_INT);
        $dep_name =filter_var($_POST['name'],FILTR_SANITIZE_STRING);
        $dep_desc =filter_var($_POST['description'],FILTR_SANITIZE_STRING);
        $SQL = "INSERT INTO departments (name,description,img) values('$dep_name','$dep_desc','$img_upload_path')";



        if ($conn->query($SQL) === TRUE) {

         echo "<div style='position:fixed;top:4em;left:10%; z-index:25; width:80%; background-color:#fff; height:580px;'>
        			<br><br><br><br><br><br><br><br><P style='color:#4CAF50;'>New Record Created successfully !</p><br>
        			<a href='admin_control.php' class=''>
        			<button class='closebtn' id='button' onClick='closeNav()'><span>Back</span></button></a></div>";
              echo "<P style='color:#4CAF50;'></p>";}
         else {
            echo "Error: " . $SQL . "<br>" . $conn->error;


        }



    }


    else {
      $em = "You can't upload files of this type";
          header("Location: admin_control.php?error=$em");
    }
  }
}else {
  $em = "unknown error occurred!";
  header("Location: admin_control.php?error=$em");
}

}else {
header("Location: admin_control.php");
}
?>

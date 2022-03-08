<?php

if (isset($_POST['Updatedep'])) {

	include "inc/db_connect.php";

	$id =htmlspecialchars(@$_POST['Updatedep']);
	$img =htmlspecialchars(@$_POST['my_image']);
	$name=htmlspecialchars(@$_POST['name']);
	$description=htmlspecialchars(@$_POST['description']);


	//echo "<pre>";
	//print_r($_FILES['my_image']&& ($_FILES['pdf']));
	//echo "</pre>";//disappare 1

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 500000 ) {
			$em = "Sorry, your IMAGE is too large.";
		    header("Location: admin_control.php?error=$em");
	     	}

		else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);


			$allowed_exs = array("jpg", "jpeg", "png");

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
       	move_uploaded_file($tmp_name, $img_upload_path );


				// Insert into Database
				$first = "UPDATE  departments SET img='$img_upload_path' ,name='$name',description='$description' WHERE id='$id'";
				if ($conn->query($first) === TRUE) {
					 if(isset($_POST['Updatedep'])){
				 echo "<div style='position:fixed;top:4em;left:10%; z-index:25; width:80%; background-color:#fff; height:580px;'>
							<br><br><br><br><br><br><br><br><p style='font-size:20px; background-color:#2196F3; color:#fff; padding:20px;'>
							Selected Record Number <span style='border-radius:50px; background-color:#fff; color:#2196F3; padding:10px 10px;'>".$id."</span> Updated successfully !<span></span></p><br>
							<a href='admin_control.php' class=''>
							<button class='closebtn' id='button' onClick='closeNav()'><span>Back</span></button></a></div>";echo "<P style='color:#4CAF50;'></p>";
						}
				}//end if($conn->query($first) === True)
								 else {
									echo "ErrorUPDATE department " . $first . "<br>" . $conn->error;
									}


							}//end if (in_array($img_ex_lc, $allowed_exsP))


								else {
									$em = "You can't upload img of this type";
											header("Location: admin_control.php?error=$em");
								}
				}//end else		$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);


	}//end if($error === 0)


	else {
		$em = "unknown error occurred!";
		header("Location: admin_control.php?error=$em");
	}
}//end if(isset('UpdatearRowId'))

else {
	header("Location: admin_control.php");
}

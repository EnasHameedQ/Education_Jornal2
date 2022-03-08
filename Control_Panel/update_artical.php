<?php

if (isset($_POST['Updatartical'])) {

	include "inc/db_connect.php";

	$up_art_id =htmlspecialchars(@$_POST['Updatartical']);
	$up_art_img =htmlspecialchars(@$_POST['my_image']);
	$up_art_name=$_POST['A_name'];
	$up_art_description=$_POST['A_description'];
$up_art_link=htmlspecialchars(@$_POST['A_link']);// filter???

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
		    header("Location: admin_control2.php?error=$em");
	     	}

		else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);


			$allowed_exs = array("jpg", "jpeg", "png");

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
       	move_uploaded_file($tmp_name, $img_upload_path );



				// update into Database

        $sqlc = "UPDATE articles SET A_name='$up_art_name',A_description='$up_art_description', A_img='$img_upload_path ',A_link='$up_art_link' WHERE A_id='$up_art_id'";

        if ($conn->query($sqlc) === TRUE) {
         if(isset($_POST['Updatartical'])){
        echo "<div style='position:fixed;top:4em;left:10%; z-index:25; width:80%; background-color:#fff; height:580px;'>
            <br><br><br><br><br><br><br><br><p style='font-size:20px; background-color:#2196F3; color:#fff; padding:20px;'>
            Selected Record Number <span style='border-radius:50px; background-color:#fff; color:#2196F3; padding:10px 10px;'>".$up_art_id."</span> Updated successfully !<span></span></p><br>
            <a href='admin_control2.php' class=''>
            <button class='closebtn' id='button' onClick='closeNav()'><span>Back</span></button></a></div>";echo "<P style='color:#4CAF50;'></p>";
          }
        }//end if($conn->query($first) === True)
								 else {
									echo "Error UPDATE artical " . $sqlc . "<br>" . $conn->error;
									}


							}//end if (in_array($img_ex_lc, $allowed_exsP))


								else {
									$em = "You can't upload img of this type";
											header("Location: admin_control2.php?error=$em");
								}
				}//end else		$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);


	}//end if($error === 0)


	else {
echo  "unknown error occurred!";

	}
}//end if(isset('UpdatearRowId'))

else {
	header("Location: admin_control2.php");
}

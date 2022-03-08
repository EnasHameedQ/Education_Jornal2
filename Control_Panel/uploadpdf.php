<?php

if (isset($_POST['insertjournal'])) {
	include "inc/db_connect.php";

	$j_id =htmlspecialchars(@$_POST['j_id']);
	$j_img =htmlspecialchars(@$_POST['my_image']);
	$j_name=htmlspecialchars(@$_POST['j_name']);
	$j_description=htmlspecialchars(@$_POST['j_description']);
	$j_pdf=htmlspecialchars(@$_POST['pdf']);
	$d_id =htmlspecialchars(@$_POST['d_id']);

	//echo "<pre>";
	//print_r($_FILES['my_image']&& ($_FILES['pdf']));
	//echo "</pre>";//disappare 1

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	$pdf_name = $_FILES['pdf']['name'];
	$pdf_size = $_FILES['pdf']['size'];
	$tmp_name_pdf = $_FILES['pdf']['tmp_name'];
	$error = $_FILES['pdf']['error'];

	if ($error === 0) {
		if ($img_size > 500000 ) {
			$em = "Sorry, your file is too large.";
		    header("Location: admin_control2.php?error=$em");
	     	}
		else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$pdf_ex= pathinfo($pdf_name, PATHINFO_EXTENSION);
			$pdf_ex_lc=strtolower($pdf_ex);


			$allowed_exs = array("jpg", "jpeg", "png","pdf");

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				$new_pdf_name= uniqid("PDF-", true).'.'.$pdf_ex_lc;
				$pdf_upload_path = 'uploadspdf/'.$new_pdf_name;
				move_uploaded_file($tmp_name, $img_upload_path );
				move_uploaded_file($tmp_name_pdf, $pdf_upload_path );
				//


				// Insert into Database
				$first = "INSERT INTO journals(j_img,j_name,j_description,j_pdf,d_id)
				        VALUES('$img_upload_path','$j_name','$j_description','$pdf_upload_path','$d_id')";
								if ($conn->query($first) === True) {


		 echo "<div style='position:fixed;top:4em;left:10%; z-index:25; width:80%; background-color:#fff; height:580px;'>
					<br><br><br><br><br><br><br><br><p style='font-size:20px; background-color:#4CAF50; color:#fff; padding:20px;'>
					New Record NUM Created successfully :)<span></span></p><br>
					<a href='admin_control2.php' class=''>
					<button class='closebtn' id='button' onClick='closeNav()'><span>Back</span></button></a></div>";


								}//end if($conn->query($first) === True)

								 else {
									echo "Error insert journal " . $first . "<br>" . $conn->error;
									}
								}//end if (in_array($img_ex_lc, $allowed_exs))

								else {
									$em = "You can't upload img of this type";
											header("Location: admin_control2.php?error=$em");
								}
				}//end else		$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);


	}//end if($error === 0)
	else {
		$em = "unknown error occurred!";
		header("Location: admin_control2.php?error=$em");
	}
}//end if(isset('insertjournal'))

else {
	header("Location: admin_control2.php");
}

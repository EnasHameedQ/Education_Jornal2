<?php

include('inc/db_connect.php');
$admin_id=@$row['Id'];
$admin_name =@ $row['name'];
$ad_email=@ $row['email'];
$admin_password =@ $row['password'];
$result = $conn->query("SET names utf8;");

//////////////////////////////////////////////////
///////////////////////SELECT/////////////////////
//////////////////////////////////////////////////

$sql = "SELECT * FROM admin";
$result = $conn->query($sql);

if ($result->num_rows >0)  {
    echo"
<button class='hide_show' href='javascript:void(0)' id='hideadmintable' onClick='hideadmintable()'>Hide admins table
			<i class='fa fa-arrow-up' aria-hidden='true'></i>
			</button>
			<button class='hide_show' href='javascript:void(0)' id='showadmintable' onClick='showadmintable()'>Show admins table
			<i class='fa fa-arrow-down' aria-hidden='true'></i>
			</button>
	<div style='width:90%;' align='center'>
	<table id='admintable' style='text-align:center; width:100%;'>
<tr>
 <td style='background-color:#000; color:#fff;'><i class='fa fa-hashtag' aria-hidden='true'></i>
   ID</td>

   <td style='background-color:#000; color:#fff;'><i class='fa fa-user' aria-hidden='true'></i>
   User Name</td>



   <td style='background-color:#000; color:#fff;'><i class='fa fa-hashtag' aria-hidden='true'></i>
Email</td>

<td style='background-color:#000; color:#fff;'><i class='fa fa-hashtag' aria-hidden='true'></i>
Password</td>


   <td style='background-color:#000; color:#fff; padding:0px; width:180px;'>setting</td>
</tr>";

	while($row = $result->fetch_row()) {
	echo "
	<tr>
		<td>".$row['0']."</td>
		<td>".$row['1']."</td>
		<td>".$row['2']."</td>
		<td>".$row['3']."</td>


		<td style='padding:0px; background-color:#fff; border-bottom:2px solid #000;'>
		<a href='admin_control.php?UpdateadminRowId=".$row['0']."'><button class='setbtn' style='background-color:#4CAF50;'>Update</button></a>
		<a href='admin_control.php?DeletadminRowId=".$row['0']."'><button class='setbtn' style='background-color:#f44336;'>Delete</button></a>
		</td>
		</tr>";
	}
	echo "</table></div>";

} else {
    echo "<p style='font-size:20px; background-color:#f44336; color:#fff; padding:20px;'>No records in admin table</p>";

}


//////////////////////////////////////////////////////////////////
///////////////////////////////DELETE////////////////////////////
//////////////////////////////////////////////////////////////////
if(isset($_GET['DeletadminRowId']))
		{

			$DeletadminRowId = $_GET['DeletadminRowId'];
			$sql = "DELETE FROM admin WHERE Id='$DeletadminRowId'";
			$result=$conn->query($sql);

			echo "<div style='position:fixed;top:4em;left:10%; z-index:25; width:80%; background-color:#fff; height:580px;'>
			<br><br><br><br><br><br><br><br><p style='font-size:20px; background-color:#f44336; color:#fff; padding:20px;'>Selected Record Number <span style='border-radius:50px; background-color:#fff; color:#f44336; padding:10px 10px;'>".$DeletadminRowId."</span> Was Deleted Successfully !<span></span></p><br>
			<a href='admin_control.php' class=''>
			<button class='closebtn' id='button' onClick='closeNav()'><span>Back</span></button></a></div>";
		}

    //////////////////////////////////////////////////////////
    ////////////////////////UPDATE////////////////////////////
    //////////////////////////////////////////////////////////

    if(isset($_GET['UpdateadminRowId'])){

    	$up_admin_id = $_GET['UpdateadminRowId'];
    	$up_admin_name =@ $_POST['up_admin_name'];
    	$up_admin_password =@  $_POST['up_admin_password'];
    	$up_admin_email =@ $_POST['up_admin_email'];
       $hash_password=sha1(	$up_admin_password);


    	echo "
    	<form action='' method='post'>
    	<input name='id' type='text' placeholder='ID' value='ID = $up_admin_id' disabled/>
    	<input name='up_admin_name' type='text' placeholder='Full Name' required/>
    	<input name='up_admin_email' type='email' placeholder='E-mail Adress' required/>
	    <input name='up_admin_password' type='password' placeholder='Password' required/>
    	<input type='submit' name='UpdateAdmin'  value='&#xf0c7; Update' />
    	<input type='reset' value='Reset' />
    	</form>
    	";

    $sql = "UPDATE admin SET name ='$up_admin_name',email ='$up_admin_email', password ='$hash_password' WHERE id='$up_admin_id'";

    if ($conn->query($sql) === TRUE) {
       if(isset($_POST['UpdateAdmin'])){
     echo "<div style='position:fixed;top:4em;left:10%; z-index:25; width:80%; background-color:#fff; height:580px;'>
    			<br><br><br><br><br><br><br><br><p style='font-size:20px; background-color:#2196F3; color:#fff; padding:20px;'>Selected Record Number <span style='border-radius:50px; background-color:#fff; color:#2196F3; padding:10px 10px;'>".$up_admin_id."</span> Updated successfully !<span></span></p><br>
    			<a href='admin_control.php' class=''>
    			<button class='closebtn' id='button' onClick='closeNav()'><span>Back</span></button></a></div>";echo "<P style='color:#4CAF50;'></p>";}
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
?>
<br><br>

<?php
include('inc/db_connect.php');
$H_id =@ $row['H_id'];
$H_img =@ $row['uploadedFile'];
$H_sub =@ $row['H_sub'];
$H_desc =@ $row['H_desc'];



$result = $conn->query("SET names utf8;");
$sql = "SELECT * FROM 	home";
$result = $conn->query($sql);

if ($result->num_rows >= 0)  {
    echo" 	<button class='hide_show' href='javascript:void(0)' id='hidemirtable' onClick='hidemirtable()'>Hide Home table
	<i class='fa fa-arrow-up' aria-hidden='true'></i>
			</button>

			<button class='hide_show' href='javascript:void(0)' id='showmirtable' onClick='showmirtable()'>Show Home table
			<i class='fa fa-arrow-down' aria-hidden='true'></i>
			</button>
	<div style='width:90%;' align='center'><table id='mirtable' style='text-align:center; width:40%;'>
<tr>

	<td style='background-color:#000; color:#fff;'>id</td>
	<td style='background-color:#000; color:#fff;'>img</td>
  	<td style='background-color:#000; color:#fff;'>subject</td>
	<td style='background-color:#000; color:#fff;'>Describtion</td>
	<td style='background-color:#000; color:#fff; padding:0px; width:180px;'>setting</td>
</tr>";

	while($row=$result->fetch_row()) {
	echo "
	<tr>
		<td>".$row['0']."</td>
		<td><img src=" . $row['1'] . "  width='70px' height='70px' /></td>
		<td>".$row['2']."</td>
		<td>".$row['3']."</td>

		<td style='padding:0px; background-color:#fff; border-bottom:2px solid #000;'>
		<a href='admin_control.php?UpdatehomeRowId=".$row['0']."'><button class='setbtn' style='background-color:#4CAF50;'>Update</button>
		<a href='admin_control.php?DelethomeRowId=".$row['0']."'><button class='setbtn' style='background-color:#f44336;'>Delete</button></a>
		</td>
		</tr>";
	}
	echo "</table>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



//////////////////////////////////////////////////////////////////
///////////////////////////////DELETE////////////////////////////
//////////////////////////////////////////////////////////////////
if(isset($_GET['DelethomeRowId']))
		{

			$DelethomeRowId = $_GET['DelethomeRowId'];
			$sql = "DELETE FROM home WHERE H_id='$DelethomeRowId'";
			$result=$conn->query($sql);

			echo "<div style='position:fixed;top:4em;left:10%; z-index:25; width:80%; background-color:#fff; height:580px;'>
			<br><br><br><br><br><br><br><br><p style='font-size:20px; background-color:#f44336; color:#fff;
       padding:20px;'>Selected Record Number <span style='border-radius:50px; background-color:#fff; color:#f44336; padding:10px 10px;'>"
       .$DelethomeRowId."</span> Was Deleted Successfully !<span></span></p><br>
			<a href='admin_control.php' class=''>
			<button class='closebtn' id='button' onClick='closeNav()'><span>Back</span></button></a></div>";
		}

//////////////////////////////////////////////////////////
////////////////////////UPDATE////////////////////////////
//////////////////////////////////////////////////////////

if(isset($_GET['UpdatehomeRowId'])){

	$up_home_id = $_GET['UpdatehomeRowId'];
  $up_home_sub =@ $_POST['Home_sub'];
  $up_home_Describtion =@ $_POST['H_desc'];
	$up_home_img =@ $_POST['uploadedFile'];
        echo "
        <form action='' method='post'>
        <input name='H_id' type='text' placeholder='ID' value='ID = $up_home_id' disabled/>
        <input name='uploadedFile' type='file' placeholder='Department image' required/>
        <input name='Home_sub' type='text' placeholder='Subject Image' required/>
      	<textarea name='H_desc' type='text' placeholder='image description ' /></textarea>
        <input type='submit' name='Updatehome'  value='&#xf0c7; Update' />
        <input type='reset' value='Reset' />
        </form>
        ";

$sql = "UPDATE home SET H_sub='$up_home_sub',H_img='$up_home_img',H_desc='$up_home_Describtion' WHERE H_id='$up_home_id'";

if ($conn->query($sql) === TRUE) {
   if(isset($_POST['Updatehome'])){
 echo "<div style='position:fixed;top:4em;left:10%; z-index:25; width:80%; background-color:#fff; height:580px;'>
			<br><br><br><br><br><br><br><br><p style='font-size:20px; background-color:#2196F3; color:#fff; padding:20px;'>Selected Record Number <span style='border-radius:50px; background-color:#fff; color:#2196F3; padding:10px 10px;'>".$up_home_id."</span> Updated successfully !<span></span></p><br>
			<a href='admin_control.php' class=''>
			<button class='closebtn' id='button' onClick='closeNav()'><span>Back</span></button></a></div>";echo "<P style='color:#4CAF50;'></p>";}
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>

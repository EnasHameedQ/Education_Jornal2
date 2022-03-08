<?php
include('inc/db_connect.php');

$result = $conn->query("SET names utf8;");
$sql = "SELECT * FROM 	about_us";
$result = $conn->query($sql);

if ($result->num_rows >= 0)  {
    echo" 	<button class='hide_show' href='javascript:void(0)' id='hidemirtable' onClick='hidemirtable()'>Hide About_us table
	<i class='fa fa-arrow-up' aria-hidden='true'></i>
			</button>

			<button class='hide_show' href='javascript:void(0)' id='showmirtable' onClick='showmirtable()'>Show About_us table
			<i class='fa fa-arrow-down' aria-hidden='true'></i>
			</button>
	<div style='width:90%;' align='center'><table id='mirtable' style='text-align:center; width:40%;'>
<tr>

	<td style='background-color:#000; color:#fff;'>id</td>
	<td style='background-color:#000; color:#fff;'>Subject</td>
  	<td style='background-color:#000; color:#fff;'>Describtion</td>
    	<td style='background-color:#000; color:#fff;'>Address</td>
      	<td style='background-color:#000; color:#fff;'>Mobile</td>
        	<td style='background-color:#000; color:#fff;'>Email</td>
	<td style='background-color:#000; color:#fff; padding:0px; width:180px;'>setting</td>
</tr>";

	while($row=$result->fetch_row()) {
	echo "
	<tr>
		<td>".$row['0']."</td>
		<td>".$row['1']."</td>
    <td>".$row['2']."</td>
    <td>".$row['3']."</td>
    <td>".$row['4']."</td>
    <td>".$row['5']."</td>

    		<td style='padding:0px; background-color:#fff; border-bottom:2px solid #000;'>
    		<a href='admin_control.php?UpdateaboutusRowId=".$row['0']."'><button class='setbtn' style='background-color:#4CAF50;'>Update</button>

    		</td>
    		</tr>";

	}
	echo "</table>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


//////////////////////////////////////////////////////////
////////////////////////UPDATE////////////////////////////
//////////////////////////////////////////////////////////

if(isset($_GET['UpdateaboutusRowId'])){

	$up_aboutus_id = $_GET['UpdateaboutusRowId'];
  $up_aboutus_sub =htmlspecialchars(@$_POST['AB_sub']);
	$up_aboutus_description =htmlspecialchars(@$_POST['AB_description']);
  $up_aboutus_address =htmlspecialchars(@$_POST['AB_address']);
  $up_aboutus_mobile =htmlspecialchars(@$_POST['AB_mobile']);
  $up_aboutus_email =htmlspecialchars(@$_POST['AB_email']);
	echo "
<form action='' method='post'  enctype='multipart/form-data'>
	<input name='AB_Id' type='text' placeholder='ID' value='ID =$up_aboutus_id' disabled/>
  <input name='AB_sub' type='text' placeholder='Subject' />
  <textarea name='AB_description' type='text' placeholder='Describe About_us'></textarea>
      <input name='AB_address' type='text' placeholder='Address' />
        <input name='AB_mobile' type='' placeholder='Mobile' />
          <input name='AB_email' type='email' placeholder='Email' />
	<input type='submit' name='Updateabout'  value='&#xf0c7; Update' />
	<input type='reset' value='Reset' />
	</form>
	";

//A Yemeni pharmaceutical company interested in a scientific study in the field of medicine

$sql = "UPDATE about_us SET AB_sub='$up_aboutus_sub' ,AB_description ='$up_aboutus_description',AB_address ='$up_aboutus_address',AB_mobile ='$up_aboutus_mobile',AB_email='$up_aboutus_email' ";

if ($conn->query($sql) === TRUE) {
   if(isset($_POST['Updateabout'])){
 echo "<div style='position:fixed;top:4em;left:10%; z-index:25; width:80%; background-color:#fff; height:580px;'>
			<br><br><br><br><br><br><br><br><p style='font-size:20px; background-color:#2196F3; color:#fff; padding:20px;'>Selected Record Number <span style='border-radius:50px; background-color:#fff; color:#2196F3; padding:10px 10px;'>".$up_aboutus_id."</span> Updated successfully !<span></span></p><br>
			<a href='admin_control.php' class=''>
			<button class='closebtn' id='button' onClick='closeNav()'><span>Back</span></button></a></div>";echo "<P style='color:#4CAF50;'></p>";}
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>

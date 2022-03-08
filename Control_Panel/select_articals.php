<?php
include('inc/db_connect.php');


$result = $conn->query("SET names utf8;");
$sql = "SELECT * FROM articles ";

$result = $conn->query($sql);

if ($result->num_rows >0)  {
    echo" 	<button class='hide_show' href='javascript:void(0)' id='hidesurtable' onClick='hidesurtable()'>Hide medical_artical table
			<i class='fa fa-arrow-up' aria-hidden='true'></i>
			</button>
			<button class='hide_show' href='javascript:void(0)' id='showsurtable' onClick='showsurtable()'>Show medical_artical table
			<i class='fa fa-arrow-down' aria-hidden='true'></i>
			</button>
	<div style='width:90%;' align='center'><table id='surtable' style='text-align:center; width:40%;'>
<tr>
	<td style='background-color:#000; color:#fff;'>ID</td>
		<td style='background-color:#000; color:#fff;'>Articals Name</td>
			<td style='background-color:#000; color:#fff;'>artical describe</td>
      		<td style='background-color:#000; color:#fff;'>artical img</td>
	<td style='background-color:#000; color:#fff;'>Artical link</td>

	<td style='background-color:#000; color:#fff; padding:0px; width:180px;'>setting</td>
</tr>";

	while($row=$result->fetch_row()) {
	echo "
	<tr>
		<td>".$row['0']."</td>
		<td>".$row['1']."</td>
		<td>".$row['2']."</td>
		  <td><img src=" . $row['3'] . "  width='70px' height='70px' /></td>
		<td>".$row['4']."</td>

		<td style='padding:0px; background-color:#fff; border-bottom:2px solid #000;'>
		<a href='admin_control2.php?UpdatartRowId=".$row['0']."'><button class='setbtn' style='background-color:#4CAF50;'>Update</button>
		<a href='admin_control2.php?DeletarticalRowId=".$row['0']."'><button class='setbtn' style='background-color:#f44336;'>Delete</button></a>
		</td>
		</tr>";
	}
	echo "</table>";

}



//////////////////////////////////////////////////////////////////
///////////////////////////////DELETE////////////////////////////
//////////////////////////////////////////////////////////////////
if(isset($_GET['DeletarticalRowId']))
		{

			$DeletarticalRowId = $_GET['DeletarticalRowId'];
			$sql = "DELETE FROM articles WHERE A_id='$DeletarticalRowId'";
			$result=$conn->query($sql);

			echo "<div style='position:fixed;top:4em;left:10%; z-index:25; width:80%; background-color:#fff; height:580px;'>
			<br><br><br><br><br><br><br><br><p style='font-size:20px; background-color:#f44336; color:#fff; padding:20px;'>Selected Record Number <span style='border-radius:50px; background-color:#fff; color:#f44336; padding:10px 10px;'>".$DeletarticalRowId."</span> Was Deleted Successfully !<span></span></p><br>
			<a href='admin_control2.php' class=''>
			<button class='closebtn' id='button' onClick='closeNav()'><span>Back</span></button></a></div>";
		}

//////////////////////////////////////////////////////////
////////////////////////UPDATE////////////////////////////
//////////


////////////////////////////////
if(isset($_GET['UpdatartRowId']))
		{
$up_art_id = $_GET['UpdatartRowId'];
$up_art_name =htmlspecialchars(@$_POST['A_name']);
$up_art_description =htmlspecialchars(@$_POST['A_description']);
$up_art_link =htmlspecialchars(@$_POST['A_link']);

      echo "
      <form action='update_artical.php' method='post' enctype='multipart/form-data'>
      <input name='=A_id' type='text' placeholder='ID' value='ID = $up_art_id' disabled/>
      <input name='my_image' type='file' placeholder='Department image' required/>
      <input name='A_name' type='text' placeholder='Department name' required/>
      <textarea name='A_description' type='text' placeholder=' Dsescription image' required /></textarea>
    <input name='A_link' type='url' placeholder='Articals URL ' />";

      ?>
    			<?php if (isset($_GET['error'])): ?>
    		<p><?php echo $_GET['error']; ?></p>
    	<?php endif ?>
    	<?php
      echo "
      <input type='submit' name='Updatartical'  placeholder='update' value='$up_art_id'.update; />
      <input type='reset' value='Reset' />
      </form>
      ";


}


?>

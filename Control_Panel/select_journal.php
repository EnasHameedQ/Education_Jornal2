<?php
include('inc/db_connect.php');
$j_id =htmlspecialchars(@$_POST['j_id']);
$j_img =htmlspecialchars(@$_POST['my_image']);
$j_name=htmlspecialchars(@$_POST['j_name']);
$j_description=htmlspecialchars(@$_POST['j_description']);
$j_pdf=htmlspecialchars(@$_POST['pdf']);
$d_id =htmlspecialchars(@$_POST['d_id']);

$result = $conn->query("SET names utf8;");
$sql =  "SELECT journals.j_id, journals.j_img, journals.j_name,journals.j_description ,journals.j_pdf, departments.name AS DepartmentName  from journals
 INNER JOIN departments on journals.d_id=departments.Id";
$result = $conn->query($sql);
if($result){
if ($result->num_rows >0)  {
    echo" 	<button class='hide_show' href='javascript:void(0)' id='hidesusptable' onClick='hidesusptable()'>Hide Medical_Analises table
			<i class='fa fa-arrow-up' aria-hidden='true'></i>
			</button>
			<button class='hide_show' href='javascript:void(0)' id='showsusptable' onClick='showsusptable()'>Show Jornals table
			<i class='fa fa-arrow-down' aria-hidden='true'></i>
			</button>
	<div style='width:90%;' align='center'>
  <table id='susptable' style='text-align:center; width:40%;'>
<tr>


	<td style='background-color:#000; color:#fff;'>id </td>
		<td style='background-color:#000; color:#fff;'>img</td>
	<td style='background-color:#000; color:#fff;'>Name </td>
	<td style='background-color:#000; color:#fff;'>description</td>
	<td style='background-color:#000; color:#fff;'>pdf</td>
	<td style='background-color:#000; color:#fff;'>Department</td>

	<td style='background-color:#000; color:#fff; padding:0px; width:180px;'>setting</td>
</tr>";


while($row=$result->fetch_row()) {
	echo "
	<tr>
		<td>".$row['0']."</td>
		<td><img src=" . $row['1'] . "  width='70px' height='70px' /></td>
		<td>".$row['2']."</td>
		<td>".$row['3']."</td>
		<td> <embed type='application/pdf' src=".$row['4']." width='100' height='100'></td>
		<td>".$row['5']."</td>

		<td style='padding:0px; background-color:#fff; border-bottom:2px solid #000;'>
		<a href='admin_control2.php?UpdatejournalRowId=".$row['0']."'><button class='setbtn' style='background-color:#4CAF50;'>Update</button>
		<a href='admin_control2.php?DeletjournalRowId=".$row['0']."'><button class='setbtn' style='background-color:#f44336;'>Delete</button></a>
		</td>
		</tr>";
	}

	echo "</table>";

}


}


////////////////////////////////////////////////////////////////
/////////////////////////////DELETE////////////////////////////

////////////////////////////////////////////////////////////////
if(isset($_GET['DeletjournalRowId']))
		{

			$DeletjournalRowId = htmlspecialchars(@$_GET['DeletjournalRowId']);
			$sql = "DELETE FROM journals WHERE j_id='$DeletjournalRowId'";
			$result=$conn->query($sql);

			echo "<div style='position:fixed;top:4em;left:10%; z-index:25; width:80%; background-color:#fff; height:580px;'>
			<br><br><br><br><br><br><br><br><p style='font-size:20px; background-color:#f44336; color:#fff; padding:20px;'>Selected Record Number
			<span style='border-radius:50px; background-color:#fff; color:#f44336; padding:10px 10px;'>".$DeletjournalRowId."</span> Was Deleted Successfully !<span></span></p><br>
			<a href='admin_control2.php' class=''>
			<button class='closebtn' id='button' onClick='closeNav()'><span>Back</span></button></a></div>";
		}

////////////////////////////////////////////////////////
//////////////////////UPDATE////////////////////////////
///////////////////////////////////////////

if(isset($_GET['UpdatejournalRowId']))
		{
$up_jou_id = $_GET['UpdatejournalRowId'];
$up_jou_name =htmlspecialchars(@$_POST['j_name']);
$up_jou_description =htmlspecialchars(@$_POST['j_description']);



    echo "
      <form action='uploadupdatepdf.php' method='post' enctype='multipart/form-data'>
      <input name='j_id' type='text' placeholder='ID' value='ID =$up_jou_id' disabled/>
      <input name='my_image' type='file' placeholder='journal image' required/>
      <input name='j_name' type='text' placeholder='journal name' required/>
      <textarea name='j_description' type='text' placeholder=' Dsescription ' /></textarea>
			</br>
			  <span>Upload an PDF:</span>
			<input type='file' name='pdf' value='select_pdf'    />
			";
			?>
			<select  class="basic" name="d_id">
		<?php
			  $sql = "SELECT * from departments";
			  $result = $conn->query($sql);
			    while($row = $result->fetch_row()) {
			    // code...
	echo "	<option value='" . $row['0']  ."'> ". $row['1'] . "</option>";
			}

			?>
			</select>
			<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
	<?php
			echo "
      <input type='submit' name='Updatejou' placeholder='update' value='$up_jou_id'.update;  />
      <input type='reset' value='Reset' />
      </form>
      ";
}

?>


<style>
* {box-sizing: border-box}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
    width: 100%;
  }
}
</style>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<?php


include('inc/db_connect.php');

$result = $conn->query("SET names utf8;");

$query = "SELECT * FROM departments ";
$result = $conn->query($query);

if ($result->num_rows >=0)  {
    echo" 	<button class='hide_show' href='javascript:void(0)' id='hidesusptable' onClick='hidesusptable()'>Hide Departments table
			<i class='fa fa-arrow-up' aria-hidden='true'></i>
			</button>
			<button class='hide_show' href='javascript:void(0)' id='showsusptable' onClick='showsusptable()'>Show  Departments table
			<i class='fa fa-arrow-down' aria-hidden='true'></i>
			</button>
	<div style='width:90%;' align='center'><table id='susptable' style='text-align:center; width:40%;'>
<tr>


	<td style='background-color:#000; color:#fff;'>d_id</td>
	<td style='background-color:#000; color:#fff;'>Department name</td>
	<td style='background-color:#000; color:#fff;'>Department </td>
  	<td style='background-color:#000; color:#fff;'>image_department</td>
	<td style='background-color:#000; color:#fff; padding:0px; width:180px;'>setting</td>
</tr>";

while($row=$result->fetch_row()) {
echo "
<tr>
  <td>".$row['0']."</td>
  <td>".$row['1']."</td>
  <td>".$row['2']."</td>

   <td><img src=".$row['3']." width='70px' height='70px' /></td>
  <td style='padding:0px; background-color:#fff; border-bottom:2px solid #000;'>
  <a href='admin_control.php?UpdatedepRowId=".$row['0']."'><button class='setbtn' style='background-color:#4CAF50;'>Update</button>
  <a href='admin_control.php?Deletdep=".$row['0']."'><button class='setbtn' name ='Deletdep' onclick='document.getElementById('id01').style.display='block'' style='background-color:#f44336;'>Delete</button></a>
  </td>
  </tr>";
}
	echo "</table>";

}


////////////////////////////////////////////////////////////////
/////////////////////////////DELETE with alart////////////////////////////
////////////////////////////////////////////////////////////////
if(isset($_GET['Deletdep']))
	{
	$Deletdep = $_GET['Deletdep'];
  echo "
       <div id='id01' class=''>

         <form class='modal-content' action='delete_department.php ' >
           <div class='container'>
             <h1>Delete Department</h1>
             <p>Are you sure you want to delete this Department?
  Because it may contain scientific journals you need!
  <a href='admin_control.php?UpdatedepRowId=".$Deletdep."'> Maybe you want to change the name of the Department only? </a></p>

             <div class='clearfix'>
              <a href='admin_control.php'><button class='setbtn' name ='cancel' style='background-color:#979090;'>Cancel</button></a>

          <button class='setbtn' name='Deletdep' placeholder='Deletdep' value='$Deletdep'.update;style='background-color:#f44336;'></button>
              "; ?>
               <?PHP
            
              echo "
             </div>
           </div>
         </form>
       </div>";




}
?>
<?php
////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
///////////////////Update////////////////////////
if(isset($_GET['UpdatedepRowId']))
		{
$up_dep_id = $_GET['UpdatedepRowId'];



    echo "
      <form action='update_department.php' method='post' enctype='multipart/form-data'>
      <input name='id' type='text' placeholder='ID' value='ID =$up_dep_id' disabled/>
      <input name='my_image' type='file' placeholder='department image' required/>
      <input name='name' type='text' placeholder='department name' required/>
      <textarea name='description' type='text' placeholder=' Dsescription ' /></textarea>";
	?>
			<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
	<?php
			echo "
      <input type='submit' name='Updatedep' placeholder='update' value='$up_dep_id'.update;  />
      <input type='reset' value='Reset' />
      </form>
      ";
}

///////////////////////////////////

?>

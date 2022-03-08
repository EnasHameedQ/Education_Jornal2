<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="img/_copy.ico">
<title>Guide Me | إهدني</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<script>
 function closemyAdminSearchNav(){
	document.getElementById("adminsearchnav").style.height = "15px";
	document.getElementById("adminsearchnav").style.overflow ="hidden";
	document.getElementById("adminsearchnav").style.transitionProperty ="height";
	document.getElementById("adminsearchnav").style.transitionDuration ="0.5s";
}
 function openmyAdminSearchNav(){
	document.getElementById("adminsearchnav").style.height = "120px";
}

 function closemyAdminSearchtable(){
	 document.getElementById("adminsearchtable").style.display ="none";
}
</script>

<style>
#myinfonav{display:block;}
#admintable,#hideadmintable,#ayattable,#hideayattable,#surtable,#hidesurtable,#rectable,#hiderectable,#mirtable,#hidemirtable,#susptable,#hidesusptable {display:none;}
</style>

<script>
 function closemyInfoNav(){
	document.getElementById("myinfonav").style.display = "none";
}
 function closemyAdminSearchNav(){
	document.getElementById("myadminsearchnav").style.display = "none";
}

</script>
<meta charset="utf-8">
<title>Guide Me | إهدني</title>
<script src="js/GuidemeJs.js"></script>
</head>

<body>

<p id="searchtitle">

<span>
    <a href='javascript:void(0)' style='margin:0px; padding:0px;float:left; margin-right:10px;' class='closebtn' onclick='closemySearchNav()'>
	<i class='fa fa-chevron-circle-up' aria-hidden='true' style='color:#000;'></i></span>
	</a>

	<a href='javascript:void(0)' style='margin:0px; padding:0px;float:left;' class='closebtn' onclick='openmySearchNav()'>
	<i class='fa fa-chevron-circle-down' aria-hidden='true' style='color:#000;'></i></span>
	</a>    
</span>

<span style="color:white;"> Search</span> Table</p>
<div>
<?php
///////////////////////////////////////////////
/////////////////SEARCH////////////////////////
///////////////////////////////////////////////
		include('db_connect.php');
	echo
	"
	<div align='center' id='adminsearchnav' style='width:20%; margin:0px; padding:10px; box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 2px 5px 0 rgba(0, 0, 0, 0.1); height:120px;'>
	
	<a href='javascript:void(0)' style='margin:0px; padding:0px;float:left; margin-right:10px;' class='closebtn' onclick='closemyAdminSearchNav()'>
	<i class='fa fa-chevron-circle-up' aria-hidden='true' style='color:#000;'></i></span>
	</a>

	<a href='javascript:void(0)' style='margin:0px; padding:0px;float:left;' class='closebtn' onclick='openmyAdminSearchNav()'>
	<i class='fa fa-chevron-circle-down' aria-hidden='true' style='color:#000;'></i></span>
	</a>
	
	<form action='' method='get'>
	<label style=' '>Search By</label>
	<br><br>
	<select name='row' style='width:100%; margin:0px; height:30px; border-radius:0px;'>
	<option value='admin_id'>ID</option>
	<option value='admin_name'>Admin Name</option>
	<option value='admin_email'>E-Mail</option>
	<option value='admin_phone'>Phone</option>
	</select>
	<br><br>
	<input name='search' type='search' style='float:left; margin:0px; width:80%; border-radius:0px; border:2px solid #2196F3; height:30px;' required/>
	<input type='submit' value='&#xf002;' name='admin_search' style='width:20%; margin:0px; height:30px;'/>
	</form></div>";
if(isset($_GET['admin_search'])){
	$row =$_GET['row'];
	$search =$_GET['search'];
	
	$sql = "SELECT * FROM admin WHERE $row='$search'";
$result = $conn->query($sql);

if ($result->num_rows > 0)  {
    echo"
	<div id='adminsearchtable' style='width:90%;' align='center'>
	
	<a href='javascript:void(0)' style='margin:0px; padding:0px;float:left;' class='closebtn' onclick='closemyAdminSearchtable()'>
	<i class='fa fa-times fa-2x' aria-hidden='true' style='color:#000;'></i></span>
	</a>
	
	<table  style='text-align:center; width:100%;'>
<tr>
<td style='background-color:#000; color:#fff;'>ID</td>
<td style='background-color:#000; color:#fff;'><i class='fa fa-user' aria-hidden='true'></i>
   User Name</td>
<td style='background-color:#000; color:#fff;'><i class='fa fa-hashtag' aria-hidden='true'></i>
   Password</td>
<td style='background-color:#000; color:#fff;'><i class='fa fa-envelope' aria-hidden='true'></i>
   E-mail</td>
<td style='background-color:#000; color:#fff;'><i class='fa fa-phone-square' aria-hidden='true'></i>
   Phone Number</td>
   <td style='background-color:#000; color:#fff; padding:0px; width:180px;'>setting</td>
</tr>";

	while($row = $result->fetch_row()) {
	echo "
	<tr>
		<td>".$row['0']."</td>
		<td>".$row['1']."</td>
		<td>".$row['2']."</td>
		<td>".$row['3']."</td>
		<td>".$row['4']."</td>
		<td style='padding:0px; background-color:#fff; border-bottom:2px solid #000;'>
		<a href='admin_control.php?UpdateadminRowId=".$row['0']."'><button class='setbtn' style='background-color:#4CAF50;'>Update</button></a>
		<a href='admin_control.php?DeletadminRowId=".$row['0']."'><button class='setbtn' style='background-color:#f44336;'>Delete</button></a>
		</td>
		</tr>";
	}
	echo "</table></div>";
	
} else {
    echo "<p style='font-size:20px; background-color:#f44336; color:#fff; padding:20px;'>No records</p>";
}

	}
	
?>
</div>
</body>
</html>
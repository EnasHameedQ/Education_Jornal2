<?php
	include "inc/db_connect.php";
  if(isset($_GET['cancel'])){
    // method to reset data
    echo '<script>window.location="admin_control.php"</script>';
  }

if(isset($_GET['Deletdep']))
{
 $Deletdep = $_GET['Deletdep'];
  echo 	$Deletdep;
 $sql = "DELETE FROM  departments WHERE id='$Deletdep'";
 $result=$conn->query($sql);

 echo "<div style='position:fixed;top:4em;left:10%; z-index:25; width:80%; background-color:#fff; height:580px;'>
 <br><br><br><br><br><br><br><br><p style='font-size:20px; background-color:#f44336; color:#fff; padding:20px;'>Selected Record Number
 <span style='border-radius:50px; background-color:#fff; color:#f44336; padding:10px 10px;'>".$Deletdep."</span> Was Deleted Successfully !<span></span></p><br>
 <a href='admin_control.php' class=''>
 <button class='closebtn' id='button' onClick='closeNav()'><span>Back</span></button></a></div>";
}
else {
 //echo "Error delete department " . $sql . "<br>" . $conn->error;
 }
?>

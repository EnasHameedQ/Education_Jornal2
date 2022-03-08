<?php

// session_start();
//
// if(!isset($_SESSION['UserEmail'])) {
//
// 	header("Location:loginadmin.php");
//
// 	}

?>

 <?php include("inc/header.php");
 ?>
<div class="middle" align="center">

<?php

		echo "<section id='admins'><br>";
		include('insert_into_admins.php');//
		include('select_admins.php');
		echo "</section><hr>";

		echo "<section id='miracles'><br>";
		include('insert_into_aboutus.php');
		include('select_aboutus.php');
		echo "</section><hr>";

		echo "<section id='sur'><br>";//dont cheange id
		include('insert_into_category.php');
		include('select_category.php');
		echo "</section><hr>";




?>

</div>
</body>
</html>

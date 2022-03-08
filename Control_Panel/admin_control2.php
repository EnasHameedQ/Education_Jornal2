
<?php

// session_start();
//
// if(!isset($_SESSION['UserEmail'])) {
//
// 	header("Location:loginadmin.php");
//
// 	}

 include("inc/header.php");?>

<div class="middle" align="center">

<?php
echo "<section id='suspicions'><br>";
include('insert_Into_journal.php');
include('select_journal.php');
echo "</section><hr>";



		echo "<section id='sur'><br>";//dont cheange id
		include('insert_articals.php');
		include('select_articals.php');
		echo "</section><hr>";


		//echo "<section id='miracles'><br>";
		//include('insert_into_home.php');
	//	include('select_home.php');
	//	echo "</section><hr>";

?>

</div>
</body>
</html>

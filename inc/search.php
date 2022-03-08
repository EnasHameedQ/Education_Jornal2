<?php include("headerPages.php");?>

    <br>
  <br>
  <br>
  <!-- وضع كود التفاصيل نفسه -->
	<?php
	 $name=$_GET['search'];
	 $ql="select * from journals || articles where name LIKE '%".$name."%'  ";
	$query=mysqli_query($link,$ql);
	 if(isset($name) and !empty($name))
	 {
		 if(mysqli_num_rows($query)==0)
		 {
			 echo  "The scientific journal or article you are looking for does not exist...";
		 }
		 else
		 {

	?>

				<div class="items"><!-- اسم الديف الخاص بال مجلة او المقالة -->

	<?PHP
	while($rows=mysqli_fetch_array($query)){
		?>

		<div class="item1">

			<a href="journal.php?id=<?PHP echo $rows['id']?>"><img src=<?PHP echo $rows['image'];?> width="213" height="192"/></a>
			<p><a href="#"><?PHP echo $rows['name'];?></a></p>
			</div>
			<a href="artical.php?id=<?PHP echo $rows['id']?>"><img src=<?PHP echo $rows['image'];?> width="213" height="192"/></a>
			<p><a href="#"><?PHP echo $rows['name'];?></a></p>
			</div>

		<?PHP
		   }}
		   }
		   else {header("location:../index.php");}
?>





 <?php include ("footers.php")?>

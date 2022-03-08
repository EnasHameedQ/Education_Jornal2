<?php include("../inc/‏‏headerPages.php");
?>
<?php  include("../Control_Panel/inc/db_connect.php");?>
	<header id="head" class="secondary">

		<?php
		if(isset($_GET['id'])){
		$A_id =$_GET['id'];
		mysqli_set_charset($conn,'utf8');
		$query="SELECT *FROM articles where A_id=$A_id" ;
		$result=mysqli_query($conn,$query);
		if (!$result){
   die('Invalid query: '.($query));
}

		while($row=mysqli_fetch_assoc($result)){
$img_upload_path ="../Control_Panel/".$row['A_img'];
		echo "<div class='container'>
                    <h1>".$row['A_name']."</h1>
                </div>
    </header>
	<section class='container'>
		<div class='row'>
			<article class='col-md-8 maincontent'>
				<br />	<br />
				<p>".$row['A_description']." </p>
			</article>
			<aside class='col-md-4 sidebar sidebar-right'>
				<div class='row panel'>
					<div class='col-xs-12'>
					  <h3>For reading more click the link</h3>
						<a href=".$row['A_link']."?id=".$row['A_id'].">Releated link</a>
			   	</div>
				</div>
				<div class='row panel'>
					<div class='col-xs-12'>
						<h3>Articles image </h3>
						<p>

							<img src=$img_upload_path  class='img-responsive img-thumbnail' />

						</p>
					</div>
				</div>

			</aside>";

	}}

		?>
<!--
			<div id="sb_related_posts_thumbnail" class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary">Related Articles</h2></div>
			<div class="list styled custom-list">
			<ul>
			<li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Mathematics and Computer Science</a></li>
			<li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Mathematics and Philosophy</a></li>
			<li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">Philosophy and Modern Languages</a></li>
			<li><a title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci." href="#">History (Ancient and Modern)</a></li>
			<li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Classical Archaeology and Ancient History</a></li>
			<li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Physics and Philosophy</a></li>
			</ul>
			</div>
			</div>
-->

		</div>
	</section>


	<?php include("../inc/footers.php");
 ?>

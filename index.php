<?php include("inc/header.php");
?>
<?php  include('inc/db_connect.php');?>
<header id="head">
	<div class="container">
					 <div class="heading-text">
						<h1 class="animated flipInY delay1">Start Online Education</h1>
						<p>Free Online education template for elearning and online education institute.</p>
					</div>

				<div class="fluid_container">
									<div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
											<div data-thumb="assets/images/slides/thumbs/img1.jpg" data-src="assets/images/slides/img1.jpg">
													<h2>We develop.</h2>
											</div>
											<div data-thumb="assets/images/slides/thumbs/img2.jpg" data-src="assets/images/slides/img2.jpg">
											</div>
											<div data-thumb="assets/images/slides/thumbs/img3.jpg" data-src="assets/images/slides/img3.jpg">
											</div>
									</div><!-- #camera_wrap_3 -->
							</div><!-- .fluid_container -->
	</div>
</header>
<!-- <section class="news-box top-margin">
	<div class="container">
	<h2><span>Our Journals Department</span></h2>
    <div class="row"> -->
			<?PHP
// 			$dep_id =htmlspecialchars(@$_POST['Id']);
// 			$dep_img =htmlspecialchars(@$_POST['img']);

// 			$result = $connn->query("SET names utf8;");

// 			$query = "SELECT * FROM departments order by id DESC LIMIT 0,4 ";
// 			$result = $connn->query($query);

// 		 while($row = $result->fetch_row()) {
// $img_r = 'Control_Panel/'.$row["3"];//important to be hare inside the while


// echo "

// 	// 				<div class='col-md-3' >
	// 					<div class='grey-box-icon'>
	// 						<div class='icon-box-top grey-box-icon-pos'>
	// 							<a href= pages/All_journal.php?id=" . $row['j_id'] . ">
	// <img src=" . $img_rj . " class='img-responsive img-thumbnail' />
	// 							</div><!--icon box top -->
	// 						<h4>".$row['1']."</h4>
	// 						<p>".$row['2']."</p>
    //             </a>
	// 					</div><!--grey box -->
	// 				</div><!--/span3-->
	// ";

	// 		}
	// ?>

		//		</div>
   // </div>
	//</section>
		<section class="news-box top-margin">
		  <div class="container">
		      <h2><span>Top Journals</span></h2>
		      <div class="row">
						<?php
$journal_img =htmlspecialchars(@$_POST['j_img']);
$result = $connn->query("SET names utf8;");

$query = "SELECT * FROM `journals` ,`departments`order by id DESC LIMIT 0,4  ";
$result = $connn->query($query);

 while($row = mysqli_fetch_array($result)){

 $img_rj = 'Control_Panel/'.$row['j_img'];//important to be hare inside the while
echo "

							<div class='col-md-3' >
								<div class='grey-box-icon'>
									<div class='icon-box-top grey-box-icon-pos'>
	<a href= pages/All_journal.php?id=".$row['j_id'].">
	<img src=".$img_rj." class='img-responsive img-thumbnail' />



									</div><!--icon box top -->
									<h4>".$row['j_name']."</h4>
									<p>".$row['j_description']."</p>
                       </a>
								</div><!--grey box -->
							</div><!--/span3-->";
 }?>

		      </div>
		  </div>
		</section>

		<section class="container">
		<div class="row">
			<?php
			$result = $connn->query("SET names utf8;");

			$query = "SELECT * FROM `about_us` ";
			$result = $connn->query($query);

			while($row = $result->fetch_row()) {
			echo "
		  <div class='col-md-12'>
				<div class='title-box clearfix '>
					<h2 class='title-box_primary'>About Us</h2>
				</div>
		  <p><span>".$row['1']." </span></p>
		  <p>".$row['2']."</p>

			</div>";
		}
?>
	</div>
</section>
			<?php include("inc/footer.php");
			 ?>

<?php include("../inc/‏‏headerPages.php");
?>
		<header id="head" class="secondary">
            <div class="container">
                    <h1>ALL_Articals</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
                </div>
    </header>

		<!-- container -->
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<section id="portfolio" class="page-section section appear clearfix">
						<br />
						<br />

						<?php  include('../inc/db_connect.php');?>
		<div class="col-md-12">
				<div class="row">
					<?php

					$result = $connn->query("SET names utf8;");

					$query = "SELECT * FROM articles order by A_id DESC ";
					$result = $connn->query($query);

				 while($row = $result->fetch_row()) {
					 	 $img_r = '../Control_Panel/'.$row["3"];
						echo "
						<div class='col-md-3' >
							<div class='grey-box-icon'>
								<div class='icon-box-top grey-box-icon-pos'>

									<img src=".$img_r." class='img-responsive img-thumbnail'   />
									<h4>".$row['1']."</h4>
							

							  	<a href= artical.php?id=".$row['0'].">read more	 </a>
						   	</div><!--icon box top -->
							</div><!--grey box -->
						</div><!--/span3-->";
								}

				?>
			  </div>
			</div>
</section>

  </div>
 </div>
</section>
<?php include("../inc/footers.php");
?>

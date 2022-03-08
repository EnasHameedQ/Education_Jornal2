
<?php include("../inc/‏‏headerPages.php");
  include('../inc/db_connect.php');
?>
<?php

$tab_query = "SELECT * FROM departments ORDER BY id ASC";
$tab_result = mysqli_query($connn, $tab_query);
$tab_menu = '';
$tab_content = '';
$i = 0;
while($row = mysqli_fetch_array($tab_result))
{
 if($i == 0)
 {
  $tab_menu .= '
   <li class="active"><a href="#'.$row["id"].'" data-toggle="tab">'.$row["name"].'</a></li>
  ';
  $tab_content .= '
   <div id="'.$row["id"].'" class="tab-pane fade in active">
  ';
 }
 else
 {
  $tab_menu .= '
   <li><a href="#'.$row["id"].'" data-toggle="tab">'.$row["name"].'</a></li>
  ';
  $tab_content .= '
   <div id="'.$row["id"].'" class="tab-pane fade">
  ';
 }

 $product_query = "SELECT * FROM journals WHERE d_id = '".$row["id"]."'";
 $product_result = mysqli_query($connn, $product_query);
 while($sub_row = mysqli_fetch_array($product_result))
 {
  $tab_content .= '
  <div class="col-md-3" style="margin-bottom:36px;">
   <img src=" ../Control_Panel/'.$sub_row["j_img"].'" class="img-responsive img-thumbnail" />
   <h4>'.$sub_row["j_name"].'</h4>
	 <p>'.$sub_row["j_description"].'</p>

   <a href="journal.php?id='.$sub_row["j_id"].'"> read more	 </a>
             </div>


   ';
 }

 $tab_content .= '<div style="clear:both"></div></div>';
 $i++;
}
?>

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Journals_Department</h1>
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
						  <h3>Journals_Department</h3>
							<br />
							<br />
						<ul class="nav nav-tabs">
				    <?php
				    echo $tab_menu;
				    ?>
				    </ul>
				    <div class="tab-content">
				    <br />
						<h3>Journals</h3>
				    <?php
				    echo  $tab_content;

				    ?>
						</div>
			</section>
    </div>
   </div>
   </section>
<!---->
	<?php include("../inc/footers.php");
 ?>

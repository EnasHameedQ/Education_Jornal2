
<footer id="footer">
   <div class="container">
  <div class="row">
 <div class="footerbottom">
   <div class="col-md-3 col-sm-6">
     <div class="footerwidget">
       <h4>
         Journals_Department
       </h4>
       <?php
include('../inc/db_connect.php');
       $result = $connn->query("SET names utf8;");

       $query = "SELECT * FROM departments ORDER BY id ASC ";
       $result = $connn->query($query);

      while($row = $result->fetch_row()) {
         echo "
       <div class='menu-course'>
         <ul class='menu'>
         <p>".$row['1']."</p>
           <li>
               <a href=All_journal.php?id=".$row['0'].">	 </a>
           </li>

         </ul>
       </div>";
     }
     ?>
     </div>
   </div>
   <div class="col-md-3 col-sm-6">
     <div class="footerwidget">
       <h4>
        Articles
       </h4>
       <?php

       $result = $connn->query("SET names utf8;");

       $query = "SELECT * FROM articles order by A_id DESC ";
       $result = $connn->query($query);

      while($row = $result->fetch_row()) {
         echo "
       <div class='menu-course'>
         <ul class='menu'>
           <p>".$row['1']."</p>
             <li>
                 <a href= artical.php?id=".$row['0'].">	 </a>
             </li>
         </ul>
       </div>";
     }
       ?>
     </div>
   </div>
   <?php
   $result = $connn->query("SET names utf8;");

   $query = "SELECT * FROM `about_us` ";
   $result = $connn->query($query);

   while($row = $result->fetch_row()) {
   echo "
   <div class='col-md-3 col-sm-6'>
             <div class='footerwidget'>
                        <h4>Contact</h4>
                       <p>".$row['2']."</p>
           <div class='contact-info'>
           <i class='fa fa-map-marker'></i> ".$row['3']."<br>
           <i class='fa fa-phone'></i>".$row['4']." <br>
            <i class='fa fa-envelope-o'></i> ".$row['5']."
             </div>
               </div><!-- end widget -->
               ";
             }
             ?>
   </div>

   <div class="col-md-3 col-sm-6">
     <div class="footerwidget">
       <h4>
      GOOGLE MAP
      </h4>
      <div id="map"></div>
     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBzjRvHIX1pWH0KWGI8SJenZ_IzAdG0ac&callback=initMap"></script>
     <script>
       var map; function initialize_map() {
                                     if ($('#map').length) { var myLatLng = new google.maps.LatLng(15.332946761416874, 44.20907111643367); var mapOptions = { zoom: 20, center: myLatLng, scrollwheel: false, panControl: true, zoomControl: true, scaleControl: true, mapTypeControl: true, streetViewControl: true }; map = new google.maps.Map(document.getElementById('map'), mapOptions); var marker = new google.maps.Marker({ position: myLatLng, map: map, tittle: 'New Touch', icon: './images/map-locator.png' }); }
                                     else { return false; }
                                 }
                                 google.maps.event.addDomListener(window, 'load', initialize_map);</script>

       </div>
 </div>
</div>
     <div class="social text-center">
       <a href="#"><i class="fa fa-twitter"></i></a>
       <a href="#"><i class="fa fa-facebook"></i></a>
       <a href="#"><i class="fa fa-dribbble"></i></a>
       <a href="#"><i class="fa fa-flickr"></i></a>
       <a href="#"><i class="fa fa-github"></i></a>
     </div>

     <div class="clear"></div>
     <!--CLEAR FLOATS-->
   </div>
   <div class="footer2">
     <div class="container">
       <div class="row">

         <div class="col-md-6 panel">
           <div class="panel-body">
             <p class="simplenav">
               <a href="../index.php">Home</a> |
               <a href="../pages/All_journal.php">Journals</a> |
               <a href="../pages/All_articles.php">Articles</a> |
               <a href="../pages/contact.php">Contact</a>
             </p>
           </div>
         </div>

         <div class="col-md-6 panel">
           <div class="panel-body">
             <p class="text-center">
             Copyright &copy;2021 <a href="http://Biotech.com/" rel="develop">Biotech</a>
             </p>
           </div>
         </div>

       </div>
       <!-- /row of panels -->
     </div>
   </div>
 </footer>

   			 <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
   		 	<script src="assets/js/modernizr-latest.js"></script>
   		 	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
   		     <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>

   		     <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
   		     <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script>
   		     <script type='text/javascript' src='assets/js/camera.min.js'></script>
   		     <script src="assets/js/bootstrap.min.js"></script>
   		 	<script src="assets/js/custom.js"></script>

   		     <script>
   		 		jQuery(function(){

   		 			jQuery('#camera_wrap_4').camera({
   		                 transPeriod: 500,
   		                 time: 3000,
   		 				height: '600',
   		 				loader: 'false',
   		 				pagination: true,
   		 				thumbnails: false,
   		 				hover: false,
   		                 playPause: false,
   		                 navigation: false,
   		 				opacityOnGrid: false,
   		 				imagePath: 'assets/images/slides'
   		 			});

   		 		});

   		 	</script>

   	 </body>

   	 </html>

<?php
include('../inc/headerPages.php');
 include('../inc/db_connect.php');

//include('../Control_Panel/uploadspdf.php');
if(isset($_GET['id'])){
    $j_id =$_GET['id'];

  $sql="SELECT j_pdf from journals  where j_id=$j_id";

  $query=mysqli_query($connn,$sql);
  while($info=mysqli_fetch_array($query)) {


    $pdf_url ="../Control_Panel/".$info["j_pdf"];
echo "<div style='height:40;width:40;'>";


$file = $pdf_url ;
$filename = $pdf_url;

// Header content type
header('Content-type: application/pdf');

header('Content-Disposition: inline; filename="' . $filename . '"');

header('Content-Transfer-Encoding: binary');

header('Accept-Ranges: bytes');

// Read the file
@readfile($file);
echo "</div>";
	  }
}



 include("../inc/footers.php");

?>

<?php
include('inc/header.php');
include('inc/db_connect.php');
?>

<body>
<p id="admintitle">

<span>
    <a href='javascript:void(0)' style='margin:0px; padding:0px;float:left; margin-right:10px;' class='closebtn' onclick='closemyAdminNav()'>
	<i class='fa fa-chevron-circle-up' aria-hidden='true' style='color:#000;'></i></span>
	</a>

	<a href='javascript:void(0)' style='margin:0px; padding:0px;float:left;' class='closebtn' onclick='openmyAdminNav()'>
	<i class='fa fa-chevron-circle-down' aria-hidden='true' style='color:#000;'></i></span>
	</a>
</span>

<span style="color:white;">Admins</span> Table</p>
<br>
<br>
<br>

  <form class="form-horizontal" role="form" action=""  method="POST" enctype="multipart/form-data">
<?php if(!empty($formErrors)){ ?>
  <div class="alart alart-danger alart-dissmissible" role="start">
  <button type="button" class="close" data-dissmiss="alart" aria-lable="Close">
</button>
  <?php
 foreach ($formErrors as $error) {
   echo $error.'</br>';

 }

    ?>
</div>
<?php }  ?>
  <div  class="form-group">
Admin name <input class="input" name="name" type="text" placeholder="Full Name" value="<?php if(isset ($ad_name)){ echo $ad_name;} ?>" required />
</div>
  <div  class="form-group">
 Admin email <input type="email" placeholder="Admin _email" name="Email" value="<?php if(isset ($ad_email)){ echo $ad_email;} ?>" required >
 </div>
 Admin password <input class="input" name="password" type="password" value="<?php if(isset ($ad_password)){ echo $ad_password;} ?>" placeholder="Password" required/>
<input type="submit" name="insertAdmin"  value="&#xf0c7; Insert" style="width:150px;" />

<input type="reset" value="Reset" style="width:150px;" />
</form>
</br></br></br>



<?php
//if($_SERVER['REQUEST_METHOD']== 'POST')
if (isset($_POST['insertAdmin']))
{
  $ad_id =$_POST['insertAdmin'];
  $ad_name = $_POST['name'];
  $ad_password = $_POST['password'];
  $ad_email =$_POST['Email'];

  $ad_password_hash = sha1($ad_password);
// Creat array  of errors
      $formErrors = array();
      if (strlen($ad_name)<=5){
        $formErrors[]='admin name has to be equal or Larger than <strong>5</strong>  characters';
      }
      if (strlen($ad_password)<=8){
        $formErrors[]='password has to be equal or Larger than <strong>8</strong>  characters';
      }

else {
  // code...

$sql = "INSERT INTO admin (name,password,Email)values('$ad_name','$ad_password_hash','$ad_email')";
// //نحتاج دالة للتحقق من تكرار المدخلات اذا وجودة من قبل
if ($conn->query($sql) === TRUE) {
   echo "<P style='color:#4CAF50;'>New Record Created successfully !</p>";
// method to reset data
echo '<script>window.location="admin_control.php"</script>';


//exit(header("Refresh:0"));
}
 else {
   echo "Error: البيانات موجوده من قبل الرجاء كتابة بريد الكتروني جديد والتحقق من الاسم
   "."<br>" . $sql . "<br>" . $conn->error;
}
}
}

 ?>


<?php
//
// include('inc/db_connect.php');
//
// if(isset($_POST['insertAdmin'])){
// $ad_id =htmlspecialchars(@$_POST['Id']);
// $ad_name = htmlspecialchars($_POST['name']);
// $ad_password = htmlspecialchars($_POST['password']);
// $ad_email =htmlspecialchars(@$_POST['Email']);
//
//
// $sql = "INSERT INTO admin (name,password,Email)values('$ad_name','$ad_password','$ad_email')";
// //نحتاج دالة للتحقق من تكرار المدخلات اذا وجودة من قبل
// if ($conn->query($sql) === TRUE) {
//     echo "<P style='color:#4CAF50;'>New Record Created successfully !</p>";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
// }

?>

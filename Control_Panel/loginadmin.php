<?php session_start();

  include('inc/db_connect.php');
 ?>

<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title> </title>



    <link rel="stylesheet" href="css/style.css">

        <script src="js/GuidemeJs.js"></script>
        <meta charset="utf-8">
        <link rel="icon" href="img/_copy.ico">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title></title>

        </script>


        <style>

            body{
                background-image:url(img/body_bg.png);
                background-attachment: fixed;
                margin:0px;
                padding:0px;
            }
            #admintitle,#surtitle,#ayattitle,#miraclestitle,#reciterstitle,#suspicionstitle,#translatetitle,#searchtitle
            {background-color:#4CAF50;width:60%; border-radius:50px; padding:10px; font-family:Cairo;}

            section{
                height:auto;
                overflow:hidden;
                transition-property:height;
                transition-duration:1.5s;
            }
            .hide_show {
                margin-top:0px;
                background-color:#f1f1f1;
                background-image:url(img/body_bg.png);
                width:200px;
                height:30px;
                border:0px;
                box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 2px 5px 0 rgba(0, 0, 0, 0.1);
                margin-bottom:5px;
            }
            .hide_show:hover {
                background-color:#e68a00;
                color:#fff;
                transition-property:all;
                transition-duration:0.5s;
            }
            #button {
                color:#000; background-color:#e7e7e7;
            }
            #button:hover{background-color:#ddd;}}
            #admintable,#hideadmintable,#ayattable,#hideayattable,#surtable,#hidesurtable,#rectable,#hiderectable,#mirtable,#hidemirtable,#susptable,#hidesusptable {display:none;}

            td{height:30px; padding:5px; background-color:#ccc; margin-left:20px; border-bottom:2px solid #274442;}
            td:hover{background-color:#0aaeef; border-bottom:#0aaeef;}

            i{font-family: 'FontAwesome';}

            div.middle{
                width:1100px;
                height:85%;
                background-color:#fff;
                padding:0em;
                margin-top:60px;
                margin-left:30px;
                margin-right:10px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 2px 5px 0 rgba(0, 0, 0, 0.1);
                position:fixed;top:0em;left:0em;
                overflow-y:scroll;
            }

            input{
                border-radius:10px;
                padding:5px;
                margin-top:5px;
                display:block;
                width:140px;

            }

            .input:hover {
                width:250px;
                transition-property:width;
                transition-duration:0.5s;
            }
            input[type="submit"]{
                color:#fff;
                font-family: 'FontAwesome';
                background-color:#2196F3;
                border:0px;
                border-radius:0px 0px 0px 0px;
                height:30px;
            }
            input[type=submit]:hover{
                background-color:#0b7dda;
                color:#fff;
                height:40px;
                transition-property:height;
                transition-duration:0.5s;
            }

            input[type="reset"]{
                color:#fff;
                font-family: 'FontAwesome';
                background-color:#ff9800;
                border:0px;
                border-radius:0px 0px 0px 0px;
                height:30px;
            }
            input[type=reset]:hover{
                background-color:#e68a00;
                height:40px;
                transition-property:height;
                transition-duration:0.5s;
            }

            .setbtn {
                width:80px;
                margin:0px;
                height:30px;
                color:#fff;
                border:0px;
            }
            .setbtn:hover {
                box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 2px 5px 0 rgba(0, 0, 0, 0.1);
            }
            .show_info{width:300px; border:0px;}

        </style>
    </head>



</head>

<body>

<div class="wrapper">
    <div class="container">
        <h1>Welcome</h1>
<?php

// cheeck if user comming from HTTP POST request
if($_SERVER['REQUEST_METHOD']== 'POST')
{

 //$User_id=$_POST['id'];
 $UserEmail=$_POST['email'];
 $UserPassword= $_POST['password'];
 $HashUserPassword=sha1($UserPassword);
 //echo $HashUserPassword .$UserEmail;
   //cheeck if user exist in DB
 $sql= "SELECT email, password FROM admin Where email='$UserEmail' AND password='$HashUserPassword'";
 $result = $conn->query( $sql);
      if($result){
              if ($result->num_rows >=0)  {
              $fetchUserData = $result->fetch_assoc();
              print_r($fetchUserData);

                   if(isset($_SESSION['UserEmail']!==$UserEmail)) {
                      echo "<script> window.location='admin_control.php'</script>";
                    }
                    else{
                      echo "you are not athurized";
                    }
              }
          else{
          echo "No record found";
          }
      }
      else{
      echo "Error in ".$sql."<br>".$conn->error;
      }
}


 ?>

        <form class="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
            <input type="email"  name="email" placeholder="User Email" value="<?php if(isset ($UserEmail)){ echo $UserEmail;} ?>" required>
            <input type="password" name="password" placeholder="User Password" value="<?php if(isset ($UserPassword)){ echo $UserPassword;} ?>"required>
            <button type="submit"  id="login-button" name="sub">Login</button>
        </form>
    </div>

    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
</body>
</html>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>
<?php

include('../inc/db_connect.php');
?>


<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="css/font-awesome.min.css">

<script src="js/GuidemeJs.js"></script>
<meta charset="utf-8">
<link rel="icon" href="img/_copy.ico">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Admin Control</title>

<!--  لا تعدلي في الدوال -->
<script>
function hideadmintable() {
    document.getElementById("admintable").style.display = "none";
	document.getElementById("hideadmintable").style.display ="none";
	document.getElementById("showadmintable").style.display ="block";

}
function showadmintable() {
    document.getElementById("admintable").style.display = "table";
	document.getElementById("showadmintable").style.display ="none";
	document.getElementById("hideadmintable").style.display ="block";
}

function hidesurtable() {
    document.getElementById("surtable").style.display = "none";
	document.getElementById("hidesurtable").style.display ="none";
	document.getElementById("showsurtable").style.display ="block";

}
function showsurtable() {
    document.getElementById("surtable").style.display = "table";
	document.getElementById("showsurtable").style.display ="none";
	document.getElementById("hidesurtable").style.display ="block";

}

function hideayattable() {
    document.getElementById("ayattable").style.display = "none";
	document.getElementById("hideayattable").style.display ="none";
	document.getElementById("showayattable").style.display ="block";
}
function showayattable() {
    document.getElementById("ayattable").style.display = "table";
	document.getElementById("showayattable").style.display ="none";
	document.getElementById("hideayattable").style.display ="block";
}

function hiderectable() {
    document.getElementById("rectable").style.display = "none";
	document.getElementById("hiderectable").style.display ="none";
	document.getElementById("showrectable").style.display ="block";
}
function showrectable() {
    document.getElementById("rectable").style.display = "table";
	document.getElementById("showrectable").style.display ="none";
	document.getElementById("hiderectable").style.display ="block";
}

function hidemirtable() {
    document.getElementById("mirtable").style.display = "none";
	document.getElementById("hidemirtable").style.display ="none";
	document.getElementById("showmirtable").style.display ="block";
}
function showmirtable() {
    document.getElementById("mirtable").style.display = "table";
	document.getElementById("showmirtable").style.display ="none";
	document.getElementById("hidemirtable").style.display ="block";
}

function hidesusptable() {
    document.getElementById("susptable").style.display = "none";
	document.getElementById("hidesusptable").style.display ="none";
	document.getElementById("showsusptable").style.display ="block";
}
function showsusptable() {
    document.getElementById("susptable").style.display = "table";
	document.getElementById("showsusptable").style.display ="none";
	document.getElementById("hidesusptable").style.display ="block";
}
 function closemyAdminNav(){
	document.getElementById("admins").style.height = "100px";
	document.getElementById("admins").style.overflow ="hidden";
	document.getElementById("admins").style.transitionProperty ="height";
	document.getElementById("admins").style.transitionDuration ="1.5s";
	document.getElementById("admintitle").style.backgroundColor = "#4CAF50";

}
 function openmyAdminNav(){
	document.getElementById("admins").style.height = "560px";
	document.getElementById("admintitle").style.backgroundColor = "#0aaeef";
}

 function closemySurNav(){
	document.getElementById("sur").style.height = "100px";
	document.getElementById("sur").style.overflow ="hidden";
	document.getElementById("sur").style.transitionProperty ="height";
	document.getElementById("sur").style.transitionDuration ="1.5s";
	document.getElementById("surtitle").style.backgroundColor = "#4CAF50";
}
 function openmySurNav(){
	document.getElementById("sur").style.height = "auto";
	document.getElementById("surtitle").style.backgroundColor = "#0aaeef";
}

 function closemyAyatNav(){
	document.getElementById("ayat").style.height = "100px";
	document.getElementById("ayat").style.overflow ="hidden";
	document.getElementById("ayat").style.transitionProperty ="height";
	document.getElementById("ayat").style.transitionDuration ="1.5s";
	document.getElementById("ayattitle").style.backgroundColor = "#4CAF50";
}
 function openmyAyatNav(){
	document.getElementById("ayat").style.height = "560px";
	document.getElementById("ayattitle").style.backgroundColor = "#0aaeef";
}

 function closemyMiraclesNav(){
	document.getElementById("miracles").style.height = "100px";
	document.getElementById("miracles").style.overflow ="hidden";
	document.getElementById("miracles").style.transitionProperty ="height";
	document.getElementById("miracles").style.transitionDuration ="1.5s";
	document.getElementById("miraclestitle").style.backgroundColor = "#4CAF50";
}
 function openmyMiraclesNav(){
	document.getElementById("miracles").style.height = "560px";
	document.getElementById("miraclestitle").style.backgroundColor = "#0aaeef";
}

 function closemyRecitersNav(){
	document.getElementById("reciters").style.height = "100px";
	document.getElementById("reciters").style.overflow ="hidden";
	document.getElementById("reciters").style.transitionProperty ="height";
	document.getElementById("reciters").style.transitionDuration ="1.5s";
	document.getElementById("reciterstitle").style.backgroundColor = "#4CAF50";
}
 function openmyRecitersNav(){
	document.getElementById("reciters").style.height = "560px";
	document.getElementById("reciterstitle").style.backgroundColor = "#0aaeef";
}

 function closemySuspicionsNav(){
	document.getElementById("suspicions").style.height = "100px";
	document.getElementById("suspicions").style.overflow ="hidden";
	document.getElementById("suspicions").style.transitionProperty ="height";
	document.getElementById("suspicions").style.transitionDuration ="1.5s";
	document.getElementById("suspicionstitle").style.backgroundColor = "#4CAF50";
}
 function openmySuspicionsNav(){
	document.getElementById("suspicions").style.height = "560px";
	document.getElementById("suspicionstitle").style.backgroundColor = "#0aaeef";
}

 function closemyTranslateNav(){
	document.getElementById("translate").style.height = "100px";
	document.getElementById("translate").style.overflow ="hidden";
	document.getElementById("translate").style.transitionProperty ="height";
	document.getElementById("translate").style.transitionDuration ="1.5s";
	document.getElementById("translatetitle").style.backgroundColor = "#4CAF50";
}
 function openmyTranslateNav(){
	document.getElementById("translate").style.height = "560px";
	document.getElementById("translatetitle").style.backgroundColor = "#0aaeef";
}

 function closemySearchNav(){
	document.getElementById("search").style.height = "100px";
	document.getElementById("search").style.overflow ="hidden";
	document.getElementById("search").style.transitionProperty ="height";
	document.getElementById("search").style.transitionDuration ="1.5s";
	document.getElementById("searchtitle").style.backgroundColor = "#4CAF50";
}
 function openmySearchNav(){
	document.getElementById("search").style.height = "560px";
	document.getElementById("searchtitle").style.backgroundColor = "#0aaeef";
}
function closemyInfoNav(){
 document.getElementById("myinfonav").style.display = "none";
}
function closemyAdminSearchNav(){
 document.getElementById("myadminsearchnav").style.display = "none";
}
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
	background-color:#e68a00c7;
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
#myinfonav{display:block;}
#admintable,#hideadmintable,#ayattable,#hideayattable,#surtable,#hidesurtable,#rectable,#hiderectable,#mirtable,#hidemirtable,#susptable,#hidesusptable {display:none;}

</style>
</head>

<body>
<!--القائمة الرئيسية-->
<ul class="topnav" id="myTopnav">
  <li><a href="../index.php" target="_blank" style="padding:6.5px 0px;"><img src="person.png" height="35px"></a></li>

  <li><a href="admin_control.php" class="a" title="Admins"><i class="fa fa-user-circle" aria-hidden="true"></i> Admins</a></li>
<li><a href="admin_control.php " class="a" title="About_us"><i class="fa fa-question-circle" aria-hidden="true"></i> About_us</a></li> <!-- miracles  >>> About_us-->
  <li><a href="admin_control.php " class="a" title=" Category"><i class="fa fa-list-alt" aria-hidden="true"></i> Departments</a></li><!-- suspicions>>> Category -->

   <li><a href="admin_control2.php " class="a" title="Journals"><i class="fa fa-list-alt" aria-hidden="true"></i> Journals</a></li><!-- Suspicions>>> Journals -->
   <li><a href="admin_control2.php " class="a" title="Articles"><i class="fa fa-question-circle" aria-hidden="true"></i> Articles</a></li> <!-- sur>>> Articles-->
<!-- messages icon -->
 <li><a href="logout.php " class="a" title="Logout"><i class="fa fa-question-circle" aria-hidden="true"></i> Log out</a></li>
<!--<li><a href="admin_control2.php " class="a" title=" Home"><i class="fa fa-question-circle" aria-hidden="true"></i> Home</a></li><!--  Miracles>>> Home -->


  </li>
</ul>

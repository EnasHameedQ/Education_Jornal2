<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="webThemez.com">
	<title>Education Jornal</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="favicon" href="../assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">

	<link href="http://fonts.googleapis.com/css?family=Arvo:400,700|" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<script>
		// Initialize and add the map
		function initMap() {
			// The location of Uluru
			const uluru = {
				lat: -25.344,
				lng: 131.036
			};
			// The map, centered at Uluru
			const map = new google.maps.Map(document.getElementById("map"), {
				zoom: 4,
				center: uluru,
			});
			// The marker, positioned at Uluru
			const marker = new google.maps.Marker({
				position: uluru,
				map: map,
			});
		}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="../index.php">
					<img src="../assets/images/logo.png" alt=""></a>
			</div>

			<div class="navbar-collapse collapse">

				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="../index.php">Home</a></li>
					<li><a href="../pages/All_journal.php">Journals</a></li>
					<li><a href="../pages/All_articles.php">Articles</a></li>
					<li><a href="../pages/contact.php">Contact</a></li>
					<li id="google_translate_element"></li>
				</ul>
				<script type="text/javascript">
					function googleTranslateElementInit() {
						new google.translate.TranslateElement({
							pageLanguage: 'en'
						}, 'google_translate_element');
					}
				</script>

				<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
	<?php include('../inc/db_connect.php'); ?>
	<header id="head" class="secondary">
		<div class="container">
			<h1>Contact Us</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
		</div>
	</header>


	<!-- container -->
	<div class="container php-email-form">
		<div class="row">
			<?php
			$Msg = "";
			if (isset($_GET['error'])) {
				$Msg = " Please Fill in the Blanks ";
				echo '<div class="alert alert-danger">' . $Msg . '</div>';
			}

			if (isset($_GET['success'])) {
				$Msg = " Your Message Has Been Sent ";
				echo '<div class="alert alert-success">' . $Msg . '</div>';
			}

			?>
			<div class="col-md-8">
				<h3 class="section-title">Your Message</h3>
				<p>
					Lorem Ipsum is inting and typesetting in simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</p>

				<form class="form-light mt-20" role="form" action="../inc/process.php">
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" placeholder="Your name">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" placeholder="Email address">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Phone</label>
								<input type="text" class="form-control" placeholder="Phone number">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Subject</label>
						<input type="text" class="form-control" placeholder="Subject">
					</div>
					<div class="form-group">
						<label>Message</label>
						<textarea class="form-control" id="message" placeholder="Write you message here..." style="height:100px;"></textarea>
					</div>
					<button type="submit" class="btn btn-two">Send message</button>
					<p><br /></p>
				</form>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-6">
						<h3 class="section-title">Office Address</h3>
						<?php
						$result = $connn->query("SET names utf8;");

						$query = "SELECT * FROM `about_us` ";
						$result = $connn->query($query);

						while ($row = $result->fetch_row()) {
							echo "

								<div class='contact-info'>
									<h5>Address</h5>
									<p>" . $row['3'] . "</p>

									<h5>Email</h5>
									<p>" . $row['5'] . "</p>

									<h5>Phone</h5>
									<p>" . $row['4'] . "</p>
								</div>
								";
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<!-- /container -->

		<?php include("../inc/footers.php");
		?>
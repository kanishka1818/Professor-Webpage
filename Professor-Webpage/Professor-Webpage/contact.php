<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/homepage.css" />
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script src="js/contact.js"></script>
	</head>
	<body>
		<?php
			include("header.html");
			include('constants.php');
		?>
		<section class="main-container container section-1">
			<div class="col-lg-12 address address-contact-page">
				<div class="col-lg-5">
					<?php
					if(isset($_GET) && !empty($_GET) &&
						array_key_exists("mailSend", $_GET)) {
							$class = "btn btn-success";
							$message = THANKS_FEEDBACK;
							if($_GET["mailSend"] == "false") {
								$class = "btn btn-danger";
								$message = ERROR_FEEDBACK;
							}
							?>
						<label class="<?php echo $class; ?>"><?php echo $message; ?></label>
					<?php } ?>
					<img class="responsive img-responsive circle-image" src="imgs/images.jpg" alt="Puneet Gupta"/>
					<address>
						<h4>Dr. Puneet Gupta</h4>
						Assistant Professor</br>
						Discipline of Computer Science Engineering</br>
						Indian Institute of Technology, Indore</br></br>
						<strong>Address:</strong><br>
						Office: Room 411, POD-1A (Scandium Building), CSE, IIT Indore, Simrol 453552, India
						<br>
						<abbr title="Phone">Phone:</abbr> 5592784823
					</address>
					<address>
						<strong>E-Mail:</strong>
						<a href="mailto:mems200005011@iiti.ac.in" class="email">mems200005011@iiti.ac.in</a>
					</address>
					<div class="row btn-appointment-feedback">						
						<button class="btn btn-default btn-feedback" data-toggle="modal" data-target="#feedbackModal">Send Feedback</button>
					</div>
				</div>
					<div class="col-lg-7 slider">
						
						
					</div>
				<div class="column maps col-lg-7 slider" id="map"></div>
			</div>
		</section>
		<?php include("footer.html"); ?>
		<?php include("feedbackModal.php"); ?>
	</body>
</html>
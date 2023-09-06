<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/homepage.css" />
		<link href="css/jquery.bxslider.css" rel="stylesheet" />
		
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery.bxslider.min.js"></script>
		<script src="js/home.js"></script>
	</head>
	<body>
		<?php include("header.html"); ?>
		<section class="main-container container section-1">
			<div class="col-lg-12 address">
				<div class="col-lg-5">
					<img class="responsive img-responsive circle-image" src="imgs/images.jpg" alt="puneet Gupta"/>
					<address>
						<h4>Dr. Puneet Gupta</h4>
						Assistant Professor</br>
						Department of Computer Science Engineering</br>
						Indian Institute of Technology Indore</br></br>
					</address>
				</div>
				<div class="col-lg-7 slider">
					<ul class="bxslider">
						<li><img class="responsive img-responsive" src="imgs/slider1.jpg" /></li>
						<li><img class="responsive img-responsive" src="imgs/slider2.jpg" /></li>
						<li><img class="responsive img-responsive" src="imgs/slider3.jpg" /></li>
					</ul>
				</div>
			</div>
		</section>
		<section class="main-container container section-2">
				<h3>Biographic Sketch</h3>
				<p>
					Warm welcome to my homepage! My broad research interests include Computer Vision, Deep Learning, and Image Processing . I work to make the current technology useful for human beings by analyzing their behavior. I have worked on fusing multiple biometric traits for authentication; analyzing facial expressions using deep learning; measuring the human-vitals (which are, heart rate, breathing rate and blood pressure) using unobtrusive and non-contact human videos; and cross-modal learning. These play indispensable role in security; affective computing; ambient intelligence; and health-care. Currently, I am working in:
                    Improving the efficacy of human vital measurements and human expression understanding.
                    Explore feasibility of human vital parameters and their expressions in authentication; remote and affordable health care like estimating stress or estimating cardiac diseases; fitness monitoring; lie detection to avoid frauds; affective computing applications (like video summarization and commercial advertisement rating); monitoring suspicious intent for psychotherapy; and augmented reality by improving the face synthesis.
                    Explore Cross-modal learning that aims to improve the single modality representations by levaraging unlabeled data from the remaining modalities. Zero-shot learning and Big-data are few examples that follow the similar principle. Furthermore, it is shown that sound classification can be improved by jointly learning the image and sound modalities. Such astonishing improvements inspires me to conduct the research in simultaneously learning the features of multiple modalities.
				</p>				
			<div class="col-lg-6 col-sm-6 col-xs-12 achievements">
				<h2>Achievements</h2>
				<ul><br/>
					<li>Awarded several times for generating patents in TCS innovation labs.</li>
					<li>Awarded two times for publishing in reputed journals by IIT Kanpur.</li>
					<li>Served as a judge in ACM ICPC regional final contest.</li>
					<li>Served as a reviewer for several reputed journals like IEEE transaction on cybernetics, IEEE transaction on Industrial Electronics, Digital Signal Processing, and so on.</li>
					<li>Served as a reviewer for several reputed conferences like WACV, ICRA, ICPR, ICIP, and so on.</li>
					<li>Served as a session chair in Tenth International Conference on Intelligent Computing, ICIC-2014.</li>
					<li>Actively participated in several government projects from DST, NABARD and AIIMS related to biometric authentication, banking security and biomedical image processing respectively.</li>
				</ul>
			</div>
			<div class="col-lg-6 col-sm-6 col-xs-12 achievements">
				<div class="">
					<h2>Education</h2>
					<ul>
						<li>
							Ph.D.	: Computer Science and Engineering, 
							<br>
							 Indian Institute of Technology Kanpur, Kanpur, U.P
							<br>
							[Jan 2011 - June 2016]
						</li>
						<li>
							B.Tech	: Computer Science and Engineering,
							<br>
							Maharaja Agrasen Institute of Technology, New Delhi	
							<br>
							[July 2005 - July 2009]

						</li>
					</ul>
				</div>
			</div>
		</section>
		<?php include("footer.html"); ?>
	</body>
</html>
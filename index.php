<!DOCTYPE HTML>

<?php
if(isset($_POST['submit']))
{
	require('/srv/http/webapps/devinsenacom/PHPMailer/PHPMailerAutoload.php');
	$mail = new PHPMailer;
        $mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.mailgun.org';
	$mail->Username = 'postmaster@devinsena.com';
	$mail->Password = 'SURFBoardSB6141';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->From = 'contact@devinsena.com';
        $mail->FromName = 'Contact Form';
        $mail->addAddress('devinsena@gmail.com','Devin Sena');
        $mail->addReplyTo($_POST['email'], $_POST['name']);
        $mail->Body = $_POST['message'];
        $mail->Subject = "Contact form entry from " . $_SERVER['HTTP_CF_CONNECTING_IP'];
        if (!$mail->send()) {
		die("There was an error sending your message. " . $mail->ErrorInfo); 
	}
}
?>

<html>
	<head>
		<title>Devin Sena</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic" rel="stylesheet" type="text/css" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>

	<script>
	function Send()
	{
		alert("Thanks for contacting me, I'll get back to you shortly");
	}
	</script>
	<body>
	
	<!-- Google Analytics-->
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46868705-1', 'devinsena.com');
  ga('send', 'pageview');

		</script>
		
		<!-- Header -->
			<section id="header" class="dark">
				<header>
					<p>Hello World, I'm</p>
					<h1>Devin Sena</h1><p>User Interface Designer & Entrepreneur</a></p>
				</header>
				<footer>
					<a href="#first" class="button scrolly">A little bit about me.</a>
				</footer>
			</section>
			
		<!-- First -->
			<section id="first" class="main">
				<header>
					<div class="container">
						<h2>About</h2>
						<p>As a user, I appreciate beautiful UI's that have been thoughtfully crafted. I believe it is important for software to not only be functional but to also provide an exceptional user experience. When starting a new project, I am completely language agnostic and believe in using the best tool for the job.</p>
					</div>
				</header>
				<div class="content dark style1 featured">
					<div class="container">
						<div class="row">
							<div class="4u">
								<section>
									<span class="feature-icon"><span class="fa fa-clock-o"></span></span>
									<header>
										<h3>Discussion</h3>
									</header>
									<p>The first and most important step in bringing your idea to life is to find out exactly what your vision is for the project. 
									</p>
								</section>
							</div>
							<div class="4u">
								<section>
									<span class="feature-icon"><span class="fa fa-bolt"></span></span>
									<header>
										<h3>Production</h3>
									</header>
									<p>Subsequently, I begin the process of designing mock-ups based on your needs. I then develop the designs into a fully functional website ready to be reviewed by you.</p>
								</section>
							</div>
							<div class="4u">
								<section>
									<span class="feature-icon"><span class="fa fa-cloud"></span></span>
									<header>
										<h3>Deployment</h3>
									</header>
									<p>Finally, I'll review and prepare the final finished product, then polish, test, and launch your new website!</p>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<footer>
									<a href="#second" class="button scrolly">Portfolio</a>
								</footer>
							</div>
						</div>
					</div>
				</div>
			</section>

		<!-- Second -->
			<section id="second" class="main">
				<header>
					<div class="container">
						<h2>Portfolio</h2>
					</div>
				</header>
				<div class="content dark style2">
					<div class="container">
						<div class="row">
							<div class="4u">
								<section>
								<h3>Development</h3>
									<p>I've had the pleasure of working with some great companies in the past few years. Here are some of my more recent projects. There will be a more comprehensive portfolio here in the coming weeks.</p>
									<footer>
										<a href="/resources/Resume.pdf" target="_blank" class="button scrolly">Resume</a>
									</footer>
								</section>
							</div>
							<div class="8u">
								<div class="row no-collapse">
									<div class="6u"><a href="http://safebyte.com" target="_blank" class="image full"><img src="images/pic01.png" alt="" /></a></div>
									<div class="6u"><a class="image full"><img src="images/pic02.jpg" alt="" /></a></div>
								</div>
								<!-- This is a placeholder for where I'll expand my portfolio (: -->
								<!--<div class="row no-collapse">
									<div class="6u"><a href="devinsena.com" class="image full"><img src="images/pic03.jpg" alt="" /></a></div>
									<div class="6u"><a href="devinsena.com" class="image full"><img src="images/pic04.jpg" alt="" /></a></div>
								</div>
								<div class="row no-collapse">
									<div class="6u"><a href="devinsena.com" class="image full"><img src="images/pic05.jpg" alt="" /></a></div>
									<div class="6u"><a href="devinsena.com" class="image full"><img src="images/pic06.jpg" alt="" /></a></div>
								</div>
								-->
							</div>
						</div>
					</div>
				</div>
			</section>
		
		<!-- Fourth -->
			<section id="fourth" class="main">
				<header>
					<div class="container">
						<h2>Contact</h2>
						<p>You can contact me using the form below or by emailing me at devinsena@gmail.com.<br />
						I'm looking forward to working with you.</p>
					</div>
				</header>
				<div class="content style4 featured">
					<div class="container small">
						<form method="post" action="index.php">
							<div class="row half">
								<div class="6u"><input type="text" class="text" name="name" placeholder="Name" /></div>
								<div class="6u"><input type="text" class="text" name="email" placeholder="Email" /></div>
							</div>
							<div class="row half">
								<div class="12u"><textarea name="message" placeholder="Message"></textarea></div>
							</div>
							<div class="row">
								<div class="12u">
									<ul class="actions">
										<li><input type="submit" name="submit" class="button" value="Send Message" onclick="javacript:Send()" /></li>
										<li><input type="reset" class="button alt" value="Clear Form" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
			
		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="http://twitter.com/devinsenaUI" class="fa fa-twitter solo"><span>Twitter</span></a></li>
					<li><a href="http://facebook.com/devinthedev" class="fa fa-facebook solo"><span>Facebook</span></a></li>
					<li><a href="https://plus.google.com/+DevinSena/" class="fa fa-google-plus solo"><span>Google+</span></a></li>
					<li><a href="#" class="fa fa-github solo"><span>GitHub</span></a></li>
				</ul>
				<div class="copyright">
					<ul class="menu">
						<li>&copy; Devin Sena. All rights reserved.</li>
						<li>Hosted on a Raspberry Pi (: <a href="http://en.wikipedia.org/wiki/Raspberry_Pi"></a></li>
					</ul>
				</div>
			</section>

	</body>
</html>

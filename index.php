<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Student Senate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57.png"/>
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114.png" />
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/application.css" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-modal.js"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">
	$(document).ready(function()
	{
		$('#contact').modal();	
		$('#contact').modal('hide');
		$('#contact-button').click(function()
		{
			$('#contact').modal('show');
		});
	});
	</script>
</head>

<body>
<div class="container">
<header class="jumbotron masthead">
<div id="description" class="inner">
	<img id="logo" src="img/ss_logo.png" alt"Student Senate"></img>
	
	<section id="intro">
		<p>This server is administered by the <br />Student Senate Web Technologies Group <br />at Rensselaer Polytechnic Institute.</p>
		<p>For any inquiries, concerns, or issues related to this server, <br />contact us at <a href="senate-webmaster@union.rpi.edu">senate-webmaster@union.rpi.edu</a>.</p>
	</section>
	<section id="info">
		<p>Not the page you were expecting?</p>
		<ul>
			<li>The address of the site must be correctly entered.
				<ul>
					<li>Sites on this server must be accessed via their fully qualified domain name (<em>http://studentsenate.rpi.edu</em>, <em>webtech.union.rpi.edu</em>, <em>shuttles.rpi.edu</em>).</li>
					<li>Accessing site on this server using an IP address (<em>128.113.91.229</em>, <em>2620:0:2820:900::229</em>) will not work.</li>
				</ul>
			</li>
			<li>The site may be down for maintainence.  Please try again later.</li>
		</ul>
	</section>
	<br />
	<nav id="quicklinks">
	<ul>
		<li><a href="http://studentsenate.rpi.edu/" class="btn btn-large btn-primary">Senate Home</a></li>
		<li><a href="http://wiki.studentsenate.rpi.edu/" class="btn btn-large">Senate Wiki</a></li>
		<li><a id="contact-button" class="btn btn-large">Contact Us</a></li>
	</ul>
	</nav>
</div>

</header>

<div id="contact" class="modal">
<div class="modal-header">
	<a class="close" data-dismiss="modal">×</a>
	<h3>Contact Us</h3>
</div>
<div class="modal-body">
	<p>Question, problem, or concern?  Email us at <a href="mailto:JustAsk@rpi.edu">JustAsk@rpi.edu</a>.</p>
	<p>In addition, the entire Senate can be reached at <a href="mailto:senate@union.rpi.edu">senate@union.rpi.edu</a>.</p>
</div>
<div class="modal-footer">
	<a href="#" class="btn" data-dismiss="modal">Close</a>
</div>
</div>

<!-- Footer
================================================== -->
<footer class="footer">
	<p class="pull-right"><a href="#">Back to top</a></p>
	<p>Copyright &copy; RPI Student Senate 2012</p>
	<p>Designed by the <a href="http://webtech.union.rpi.edu" target="_blank">Web Technologies Group</a> of the <a href="http://studentsenate.rpi.edu" target="_blank">RPI Student Senate</a>.</p>
	<p>Issues, problems, or concerns?  <a href="mailto:justask@rpi.edu">Just ask.</a></p>
	<p>This page is being served from <?php echo $_SERVER["SERVER_ADDR"]; ?>.</p>
	<a href="http://wiki.studentsenate.rpi.edu/w/Privacy_Policy">Privacy Policy</a>
</footer>
</div>
</body>

</html>
<?php 
	include("./partials/head_info.html");
	include("./partials/scripts.html");
?>

<body>	
<!-- navigation -->
	<div class="container">
		<div class="navbar navbar-default navbar-static-top" role="navigation">
		<?php include("./partials/navbar_header.html");?>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="resume.php" class="active">RESUME</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</div>
</div>		

<!-- resume section -->
<div id="download_link" style="padding-bottom: 0px;">
	<div class="container">
		<div class="row">
			<a class="download_link"
			style="text-decoration: underline;"
				href="./images/MI_resume.pdf" download>
				Click to download resume.
			 </a>
         </div>
	</div>
</div>	

<div style="text-align:center;">
	<img id="resume_picture" src="./images/MI_resume_1.jpg" style="max-width: 80%;">
	
</div>

<div style="text-align:center;">
	
	<img id="resume_picture" src="./images/MI_resume_2.jpg" style="max-width: 80%;">
</div>
<br><br>

</body>

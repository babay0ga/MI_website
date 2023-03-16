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
				<li><a href="about.php" class="active">ABOUT</a></li>
				<li><a href="resume.php">RESUME</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</div>
</div>		

<!-- bio section -->
<div id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12" style="text-align: center;">
				<h2>Hello there, I'm Mark!</h2>
                <p>
					Born with the surname, "ITman", my destiny to become a technical problem-solver was preordained. <p>
				</p> <br>
				<p>
					As a young immigrant to this country, I have worked diligently throughout my career to find my 
					place in the professional world. As a seasoned Solutions Consultant with over 8 years of experience 
					across many subverticles in the adtech industry, I've fortunate to have found a stimulating passion:
					cultivating honest relationships with my customers through trust and results. 

				</p><br>
				<p>
					While my resume provides a comprehensive overview of my qualifications, I would like to highlight my tenacity, 
					persistence and resourcefulness in overcoming adversity. These qualities have become a hallmark of my approach 
					to work and are the key to my success. If you believe that these characteristics align with your team's values, 
					I would be thrilled to discuss potential opportunities with you.
				</p><br>
				<p>	
					Thanks for visiting! Read more about this project below and feel free to contact me with any questions.
				</p>
			</div>
         </div>
         
		 <!-- spacer -->
         <div class="row mt30" id="sam_bio">
			<div class="col-md-4 col-sm-4 col-xs-9">
				<div class="team-wrapper" style="border: none !important;">
					
				</div>
			</div>

			<!-- short bio section -->
			<div class="col-md-4 col-sm-4 col-xs-9">
				<div class="team-wrapper">
					<img src="images/MI_headshot.jpeg" class="img-responsive" alt="team img">
					<h3>Mark Itman</h3>
					<h4>Solutions Consultant</h4>
					<p>Customer-facing technical specialist with 8+ years of experience.
					</p>
				</div>
			</div>

			<!-- spacer -->
			<div class="col-md-4 col-sm-4 col-xs-9">
				<div class="team-wrapper" style="border: none !important;">
					
				</div>
			</div>
	</div>
</div>		

<!-- info section -->
<div class="row mt30" style="margin-right: 15px; margin-left: 15px; margin-top: 5px;"> 
	<div class="col-md-12 col-sm-12">
		<hr>
	</div>
	<div class="col-md-6 col-sm-6">
		<h3>Project Info</h3>
		<p>My objective in creating this web project was simply to showcase some of the technical aptitudes I've 
			accumulated over the years. While I'm a far cry away from being a full-stack developer, 
			my resourcefullness and tenacity were able to fill in the gaps to create the project you see before you.  
		</p>
		<p>This website is hosted on an AWS EC2 Linux instance running an Apache2 web server.</p>
		<p>Domain name configured through AWS Route 53, and SSL certificate configured through certbot.</p>
	</div>
	<div class="col-md-6 col-sm-6">
		<h3>Code Breakdown</h3>
		<div class="progress" style="height: fit-content;">
			<div class="progress-bar progress-bar-success" role="progressbar" style="width: 49%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">CSS</div>
			<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">PHP</div>
			<div class="progress-bar progress-bar-warning" role="progressbar" style="width: 13%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">HTML</div>
			<div class="progress-bar progress-bar-danger" role="progressbar" style="width: 8%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">JS</div>
		</div>
	</div>
</div>

</body>

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
				<li><a href="index.php" class="active">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="resume.php">RESUME</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</div>
</div>		

<!-- home section -->
<div id="home">
	<div class="container" id="title_container">
		<div class="typewriter"> 
			<h1>Welcome to Mark Itman's Website!</h1>
		</div>
	</div>
</div>

<!-- divider section -->
<div class="divider">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-one">
					<i class="fa fa-shield"></i>
					<h2>Advertising</h2>
					<p>Demonstrated experience in adtech industry.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-two">
					<i class="fa fa-laptop"></i>
					<h2>Marketing</h2>
					<p>hey there.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="divider-wrapper divider-three">
					<i class="fa fa-trophy"></i>
					<h2>Leadership</h2>
					<p>keep this</p>
				</div>
			</div>
		</div>
	</div>
</div>


</body>

<!-- Begin Header -->
			<header>

		     	<!-- Begin Navigation -->
				<div class="navbar">
					<div class="container container-header">
						<div class="navbar-header">
							<!-- Brand -->
							<a href="home.php" class="navbar-brand">
								<!-- <div class="css-logo"></div>  -->
								<img src="img_geo/geo_logo2.png" class="raleway-logo-metta" alt="Raleway Responsive Parallax Bootstrap 3 Template">
								<!-- <img src="img_geo/geo_logo2.png" class="raleway-logo" alt="Raleway Responsive Parallax Bootstrap 3 Template"> -->
							</a>
							<!-- Mobile Navigation -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					            <span class="sr-only">Toggle navigation</span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
							</button> 
						</div><!-- /navbar header -->   

						<!-- Main Navigation -->
						<nav class="navbar-collapse collapse navHeaderCollapse" role="navigation">
							<ul class="nav navbar-nav navbar-right">
<?php
$isActive = $activePage === 'home' ? 'active' : ''; 
?>								

								<li class='<?=$isActive?>'><a href="home.php">Home</a></li>
<?php
$isActive = $activePage === 'honors' ? 'active' : ''; 
?>								
								<li  class='<?=$isActive?>'><a href="honors.php">Honors Program</a></li>
<?php
$isActive = $activePage === 'challenge' ? 'active' : ''; 
?>								
                                <li  class='<?=$isActive?>'><a href="challenge.php">KMUTT's Challenge</a></li>
<?php
$isActive = $activePage === 'doc' ? 'active' : ''; 
?>								
								<li  class='<?=$isActive?>'><a href="doc.php">Documents</a></li>
<?php
$isActive = $activePage === 'contact' ? 'active' : ''; 
?>								
								<li  class='<?=$isActive?>'><a href="about.php">About</a></li>
								
							</ul><!-- /navbar right -->  
						</nav><!-- /nav -->   

					</div><!-- /container header -->   
				</div><!-- /navbar -->   
				<!-- End Navigation -->

			</header><!-- /header -->
			<!-- End Header -->


<?php 

include 'core/connection.php'; 
include 'includes/head.inc.php';

?>


	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
    
	<header class="header_sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
				
						<h1 id="reg"><a href="index.php" title=>BabyRegister</a></h1>

				</div>
				<nav class="col-lg-9 col-6">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>

					<div class="main-menu">
						<ul>
							<li class="submenu">
								<a href="index.php" class="show-submenu">Home<i class="icon"></i></a>
							</li>
							<li class="submenu">
								<a href="#0" class="show-submenu">Sevices<i class="icon"></i></a>
							</li>
							<li class="submenu">
								<a href="#0" class="show-submenu">About<i class="icon"></i></a>
							</li>
						</ul>
					</div>
					<!-- /main-menu -->
				</nav>
			</div>
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->
	
	<main>
		<div class="hero_home version_1">
			<div class="content">
				<h3>Register a Child!</h3>
				<p>
					Register and Generate a Birth Certificate for your child
				</p>
			<a class="btn" href="register.php">
			<button class="btn btn-info" type="submit">REGISTER A BABY</button>
			</a>
			<br><br>
			<div id="custom-search-input">
				<div class="input-group">
					<input type="text" class=" search-query" placeholder="Search Baby Details by ID">
					<input type="submit" class="btn_search" value="Search">
				</div>
				</div>
			</div>
		</div>
		<!-- /Hero -->

		<div class="container margin_120_95">
			<div class="main_title">
				<h2>ADVANTAGES OF  <strong>REGISTERING</strong>YOUR CHILD WITH US!</h2>
				<p>Our Website Made it easy for our customers to register and generate birth certificate for thier new born Babies.
					Also Search for an existing birth certificate when needed!
				</p>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-4">
					<div class="box_feat" id="icon_1">
						<span></span>
						<h3>Click on Register a Child</h3>
						<p>Text.......</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_2">
						<span></span>
						<h3>Fill Birth Registration Form</h3>
						<p>Text.......</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_3">
						<h3>Generate Birth Certificate</h3>
						<p>Text.......</p>
					</div>
				</div>
			</div>
			<!-- /row -->
			<p class="text-center"><a href="register.php" class="btn_1 medium">Register a child</a></p>

		</div>
		<!-- /container -->

		<!-- /white_bg -->

	
		<!-- /app_section -->
	</main>
	<!-- /main content -->
	
<?php 

include 'includes/footer.inc.php';


?>
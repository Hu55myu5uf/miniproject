<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>BabyRegister</title>

	<!-- Favicons-->

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    
	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

</head>

<body>

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
	

    <div class="container">
            <div id="accordion">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h4>Birth Registration Form</h4>
                        </div>
                    </div>
                </div>
            
                <div class="card card-default">
                    <div class="card-header">
                        <h6 class="card-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                <i class="glyphicon glyphicon-search text-gold"></i>
                                <b>SECTION I: PARTICULARS OF CHILD</b>
                            </a>
                        </h6>
                    </div>
                    <div id="collapse1" class="collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Last Name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-1 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-1 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Middle Name</label>
                                        <input class="form-control" type="text" />
                                    </div>
                                </div>
                                    
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Date Of Birth</label>
                                        <input class="form-control" type="date"/>
                                        <div class="input-group date">
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Place of Occurance</label>
                                        <select type="list" class="form-control">
                                            <option>Hospital</option>
                                            <option>Maternity Home</option>  
                                            <option>Home</option> 
                                            <option>Traditional Doctor's Place</option>
                                            <option>Others</option>                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Local Government</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
            
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">State</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
            
                                <div class="col-md-3 col-lg-2">
                                    <div class="form-group">
                                        <label class="control-label">Gender</label>
                                        <select type="text" class="form-control">
                                            <option>Male</option>
                                            <option>Female</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col-md-3 col-lg-2">
                                    <div class="form-group">
                                        <label class="control-label">Weight of Baby</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-2">
                                    <div class="form-group">
                                        <label class="control-label">Delivery Time</label>
                                        <input type="time" class="form-control" />
                                    </div>
                                </div>
                            </div>

                        </div>`
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header">
                        <h6 class="card-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                <i class="glyphicon glyphicon-lock text-gold"></i>
                                <b>SECTION II: PARTICULARS OF MOTHER</b>
                            </a>
                        </h6>
                    </div>
                    <div id="collapse2" class="collapse show">
                        <div class="card-body">
            
                            <div class="row">
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Last Name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
            
                                <div class="col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
            
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Middle Name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Age at Birth of Child</label>
                                            <input type="number" class="form-control" />
                                        </div>
                                </div>
            
                            </div>
            
                            <div class="row">
                                <div class="col-md-2 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Marrital Status</label>
                                        <select type="text" class="form-control">
                                            <option>Single</option>
                                            <option>Married</option>
                                            <option>Separated</option>
                                            <option>Widowed</option>
                                            <option>Divorced</option>
                                        </select>
                                    </div>
                                </div>
            
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Nationality</label>
                                        <select type="text" class="form-control">
                                            <option>Nigerian</option>
                                            <option>Non-Nigerian</option>
                                        </select>
                                    </div>
                                </div>
            
                                <div class="col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">State of Origin</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
            
                                <div class="col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Tribe/Ethnicity</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>

                            </div>
            
                            <div class="row">
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Occupation</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Phone Number</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>

                                <div class="col-md-5 col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Home of Residence Address</label>
                                        <textarea type="text" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>


                    <div class="card card-default">
                            <div class="card-header">
                                <h6 class="card-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        <i class="glyphicon glyphicon-lock text-gold"></i>
                                        <b>SECTION III: PARTICULARS OF FATHER</b>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapse2" class="collapse show">
                                <div class="card-body">
                    
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Last Name</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                    
                                        <div class="col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">First Name</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                    
                                        <div class="col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Middle Name</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
        
                                        <div class="col-md-3 col-lg-3">
                                                <div class="form-group">
                                                    <label class="control-label">Age</label>
                                                    <input type="number" class="form-control" />
                                                </div>
                                        </div>
                    
                                    </div>
                    
                                    <div class="row">
                                        <div class="col-md-2 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Marrital Status</label>
                                                <select type="text" class="form-control">
                                                    <option>Single</option>
                                                    <option>Married</option>
                                                    <option>Separated</option>
                                                    <option>Widowed</option>
                                                    <option>Divorced</option>
                                                </select>
                                            </div>
                                        </div>
                    
                                        <div class="col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Nationality</label>
                                                <select type="text" class="form-control">
                                                    <option>Nigerian</option>
                                                    <option>Non-Nigerian</option>
                                                </select>
                                            </div>
                                        </div>
                    
                                        <div class="col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">State of Origin</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                    
                                        <div class="col-md-4 col-lg-3">
                                                <div class="form-group">
                                                    <label class="control-label">Tribe/Ethnicity</label>
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
        
                                    </div>
                    
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Occupation</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
        
                                        <div class="col-md-3 col-lg-3">
                                                <div class="form-group">
                                                    <label class="control-label">Phone Number</label>
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
        
                                        <div class="col-md-5 col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label">Home of Residence Address</label>
                                                <textarea type="text" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                </div>
                <br />
            </div>
            
            <div class="row">
                <div class="col-md-6 col-lg-12">
                    <div class="pull-right">
                        <a href="#" class="btn btn-info" id="btnSubmit"><i class="fa fa-save"></i>Submit</a>
                        <a href="#" class="btn btn-info" id="btnGenerate"><i class="fa fa-save"></i> Generate Birth Certificate</a>
                    </div>
                </div>
            </div>
            </div>




	<!-- /main content -->
	
	<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<p>
						
							<h3 id="reg"><a href="index.html" title=>BabyRegister</a></h3>
					
					</p>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>About</h5>
					<ul class="links">
						<li><a href="#0">About us</a></li>
						<li><a href="login.html">Login</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="tel:"><i class="icon_mobile"></i> + 234 80 6647 8898</a></li>
						<li><a href="maii"><i class="icon_mail_alt"></i> |babyregister@.com</a></li>
					</ul>
					<div class="follow_us">
						<h5>Follow us</h5>
						<ul>
							<li><a href="#0"><i class="social_facebook"></i></a></li>
							<li><a href="#0"><i class="social_twitter"></i></a></li>
							<li><a href="#0"><i class="social_instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2018 BabyRegister</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>

</body>
</html>
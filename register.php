<?php 
include 'core/connection.php'; 
include 'includes/head.inc.php';

if(isset($_POST['submit']))
{
    $sqlb = "INSERT INTO `child`(`id`, `last_name`, `first_name`, `middle_name`, `dob`, 
    `place_of_occurance`, `local_government`, `state`, `gender`, `weight`, `delivery_time`) VALUES
     ('".$_POST[""]."','".$_POST["lastname"]."','".$_POST["firstname"]."','".$_POST["middlename"]."',
     '".$_POST["dob"]."','".$_POST["poc"]."','".$_POST["lga"]."',
     '".$_POST["state"]."','".$_POST["gender"]."','".$_POST["weight"]."','".$_POST["dt"]."')";


    $sqlm = "INSERT INTO `mother`(`id`, `child_id`, `last_name`, `first_name`, `middle_name`, 
     `age`, `marital_status`, `Nationality`, `state`, `tribe`, `occupation`, 
     `phone_number`, `address`) VALUES ('".$_POST[""]."','".$_POST[""]."',
     '".$_POST["lastname"]."','".$_POST["firstname"]."',
     '".$_POST["middlename"]."','".$_POST["aaboc"]."','".$_POST["status"]."',
     '".$_POST["nationality"]."','".$_POST["origin"]."',
     '".$_POST["tribe"]."','".$_POST["occupation"]."','".$_POST["phone"]."','".$_POST["address"]."')";


     $sqlf = "INSERT INTO `father`(`id`, `child_id`, `last_name`, `first_name`, `middle_name`, 
     `age`, `marital_status`, `Nationality`, `state`, `tribe`, `occupation`, 
     `phone_number`, `address`) VALUES ('".$_POST[""]."','".$_POST[""]."',
     '".$_POST["lastname"]."','".$_POST["firstname"]."',
     '".$_POST["middlename"]."','".$_POST["aaboc"]."','".$_POST["status"]."',
     '".$_POST["nationality"]."','".$_POST["origin"]."',
     '".$_POST["tribe"]."','".$_POST["occupation"]."','".$_POST["phone"]."','".$_POST["address"]."')";


    $babygen = mysql_query($conn,$sqlb);
    $babygen = mysql_query($conn,$sqlm);
    $babygen = mysql_query($conn,$sqlf);

}


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
	
<form method="post">
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
                                        <input type="text" class="form-control" name="lastname" />
                                    </div>
                                </div>
                                <div class="col-md-1 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        <input type="text" class="form-control" name="firstname" />
                                    </div>
                                </div>
                                <div class="col-md-1 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Middle Name</label>
                                        <input class="form-control" type="text" name="middlename" />
                                    </div>
                                </div>
                                    
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Date Of Birth</label>
                                        <input class="form-control" type="date" name="dob" />
                                        <div class="input-group date">
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Place of Occurance</label>
                                        <select type="list" class="form-control" name="poc">
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
                                        <input type="text" class="form-control" name="lga" />
                                    </div>
                                </div>
            
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">State</label>
                                        <input type="text" class="form-control" name="state" />
                                    </div>
                                </div>
            
                                <div class="col-md-3 col-lg-2">
                                    <div class="form-group">
                                        <label class="control-label">Gender</label>
                                        <select type="text" class="form-control" name="gender">
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
                                        <input type="text" class="form-control" name="weight" />
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-2">
                                    <div class="form-group">
                                        <label class="control-label">Delivery Time</label>
                                        <input type="time" class="form-control" name="dt" />
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
                                        <input type="text" class="form-control" name="lastname" />
                                    </div>
                                </div>
            
                                <div class="col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        <input type="text" class="form-control" name="firstname" />
                                    </div>
                                </div>
            
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Middle Name</label>
                                        <input type="text" class="form-control" name="middlename" />
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Age at Birth of Child</label>
                                            <input type="number" class="form-control" name="aaboc" />
                                        </div>
                                </div>
            
                            </div>
            
                            <div class="row">
                                <div class="col-md-2 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Marrital Status</label>
                                        <select type="text" class="form-control" name="status">
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
                                        <select type="text" class="form-control" name="nationality">
                                            <option>Nigerian</option>
                                            <option>Non-Nigerian</option>
                                        </select>
                                    </div>
                                </div>
            
                                <div class="col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">State of Origin</label>
                                        <input type="text" class="form-control" name="origin" />
                                    </div>
                                </div>
            
                                <div class="col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Tribe/Ethnicity</label>
                                            <input type="text" class="form-control" name="tribe" />
                                        </div>
                                    </div>

                            </div>
            
                            <div class="row">
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Occupation</label>
                                        <input type="text" class="form-control" name="occupation" />
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Phone Number</label>
                                            <input type="text" class="form-control" name="phone" />
                                        </div>
                                    </div>

                                <div class="col-md-5 col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Home of Residence Address</label>
                                        <textarea type="text" class="form-control" name="address"></textarea>
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
                                                <input type="text" class="form-control" name="lastname" />
                                            </div>
                                        </div>
                    
                                        <div class="col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">First Name</label>
                                                <input type="text" class="form-control" name="firstname" />
                                            </div>
                                        </div>
                    
                                        <div class="col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Middle Name</label>
                                                <input type="text" class="form-control" name="middlename" />
                                            </div>
                                        </div>
        
                                        <div class="col-md-3 col-lg-3">
                                                <div class="form-group">
                                                    <label class="control-label">Age</label>
                                                    <input type="number" class="form-control" name="age" />
                                                </div>
                                        </div>
                    
                                    </div>
                    
                                    <div class="row">
                                        <div class="col-md-2 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Marrital Status</label>
                                                <select type="text" class="form-control" name="status">
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
                                                <select type="text" class="form-control" name="nationality">
                                                    <option>Nigerian</option>
                                                    <option>Non-Nigerian</option>
                                                </select>
                                            </div>
                                        </div>
                    
                                        <div class="col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">State of Origin</label>
                                                <input type="text" class="form-control" name="origin" />
                                            </div>
                                        </div>
                    
                                        <div class="col-md-4 col-lg-3">
                                                <div class="form-group">
                                                    <label class="control-label">Tribe/Ethnicity</label>
                                                    <input type="text" class="form-control" name="tribe" />
                                                </div>
                                            </div>
        
                                    </div>
                    
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Occupation</label>
                                                <input type="text" class="form-control" name="occupation" />
                                            </div>
                                        </div>
        
                                        <div class="col-md-3 col-lg-3">
                                                <div class="form-group">
                                                    <label class="control-label">Phone Number</label>
                                                    <input type="text" class="form-control" name="phone" />
                                                </div>
                                            </div>
        
                                        <div class="col-md-5 col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label">Home of Residence Address</label>
                                                <textarea type="text" class="form-control" name="address"></textarea>
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
                        <input type="submit" name="submit" value="Submit" class="btn btn-info" id="btnSubmit">
                        <input type="submit" name="submit" value="Generate Birth Certificate" class="btn btn-info" id="btnGenerate">
                    </div>
                </div>
            </div>
            </div>
</form>




<?php 

include 'includes/footer.inc.php';


?>
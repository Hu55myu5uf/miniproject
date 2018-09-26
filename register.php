<?php 
include 'core/connection.php'; 
include 'includes/head.inc.php';

if(isset($_POST['submit']))
{


   $sql = "INSERT INTO `babyregister`(`s/n`, `id`, `last_name`, `first_name`, `middle_name`, `dob`, `poc`, 
   `lga`, `state`, `gender`, `weight`, `delivery_time`, `mlast_name`, `mfirst_name`, `mmiddle_name`, 
   `mage`, `mstatus`, `mnationality`, `morigin`, `mtribe`, `moccupation`, `mphone`, `maddress`, `flast_name`, 
   `ffirst_name`, `fmiddle_name`, `fage`, `fstatus`, `fnationality`, `forigin`, `ftribe`, `foccupation`, `fphone`, 
   `faddress`) VALUES 
   (NULL,NULL,'".$_POST["ln"]."','".$_POST["fn"]."','".$_POST["mn"]."','".$_POST["dob"]."','".$_POST["poc"]."',
   '".$_POST["lga"]."','".$_POST["state"]."','".$_POST["gender"]."','".$_POST["weight"]."','".$_POST["dt"]."',
   '".$_POST["mln"]."','".$_POST["mfn"]."','".$_POST["mmn"]."','".$_POST["aaboc"]."','".$_POST["mstatus"]."',
   '".$_POST["mnationality"]."','".$_POST["morigin"]."','".$_POST["mtribe"]."','".$_POST["moccupation"]."','".$_POST["mphone"]."',
   '".$_POST["maddress"]."','".$_POST["fln"]."','".$_POST["ffn"]."','".$_POST["fmn"]."','".$_POST["fage"]."',
   '".$_POST["fstatus"]."','".$_POST["fnationality"]."','".$_POST["forigin"]."','".$_POST["ftribe"]."','".$_POST["foccupation"]."',
   '".$_POST["fphone"]."','".$_POST["faddress"]."')";


   $run_query = mysqli_query($conn,$sql);



    /*
    $sqlb = "INSERT INTO `child`(`id`, `last_name`, `first_name`, `middle_name`, `dob`, 
    `place_of_occurance`, `local_government`, `state`, `gender`, `weight`, `delivery_time`) VALUES
     (NULL,'".$_POST["ln"]."','".$_POST["fn"]."','".$_POST["mn"]."',
     '".$_POST["dob"]."','".$_POST["poc"]."','".$_POST["lga"]."',
     '".$_POST["state"]."','".$_POST["gender"]."','".$_POST["weight"]."','".$_POST["dt"]."')";

    
    $sqlm = "INSERT INTO `mother`(`id`, `child_id`, `last_name`, `first_name`, `middle_name`, 
     `age`, `marital_status`, `Nationality`, `state`, `tribe`, `occupation`, 
     `phone_number`, `address`) VALUES (NULL,'".$_POST["fn"]."',
     '".$_POST["mln"]."','".$_POST["mfn"]."',
     '".$_POST["mmn"]."','".$_POST["aaboc"]."','".$_POST["status"]."',
     '".$_POST["nationality"]."','".$_POST["origin"]."',
     '".$_POST["tribe"]."','".$_POST["occupation"]."','".$_POST["phone"]."','".$_POST["address"]."')";


     $sqlf = "INSERT INTO `father`(`id`, `child_id`, `last_name`, `first_name`, `middle_name`, 
     `age`, `marital_status`, `Nationality`, `state`, `tribe`, `occupation`, 
     `phone_number`, `address`) VALUES (NULL,'".$_POST["fn=".$_POST["fln"]."','".$_POST["ffn"]."',
     '".$_POST["fmn"]."','".$_POST["aaboc"]."','".$_POST["status"]."',
     '".$_POST["nationality"]."','".$_POST["origin"]."',
     '".$_POST["tribe"]."','".$_POST["occupation"]."','".$_POST["phone"]."','".$_POST["address"]."')";
    
    
    

    $run_query = mysqli_query($conn,$sqlb);
    $run_query = mysqli_query($conn,$sqlm);
    $run_query = mysqli_query($conn,$sqlf);
    */

    if (!$run_query){
      
        echo "<script>alert('Invalid Database Insertion')</script>";
    }   
    else{
        echo "<script>alert('Submitted')</script>";
    }
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
                                        <input type="text" class="form-control" name="ln" />
                                    </div>
                                </div>
                                <div class="col-md-1 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        <input type="text" class="form-control" name="fn" />
                                    </div>
                                </div>
                                <div class="col-md-1 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Middle Name</label>
                                        <input class="form-control" type="text" name="mn" />
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
                                        <input type="text" class="form-control" name="mln" />
                                    </div>
                                </div>
            
                                <div class="col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        <input type="text" class="form-control" name="mfn" />
                                    </div>
                                </div>
            
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Middle Name</label>
                                        <input type="text" class="form-control" name="mmn" />
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
                                        <select type="text" class="form-control" name="mstatus">
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
                                        <select type="text" class="form-control" name="mnationality">
                                            <option>Nigerian</option>
                                            <option>Non-Nigerian</option>
                                        </select>
                                    </div>
                                </div>
            
                                <div class="col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">State of Origin</label>
                                        <input type="text" class="form-control" name="morigin" />
                                    </div>
                                </div>
            
                                <div class="col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Tribe/Ethnicity</label>
                                            <input type="text" class="form-control" name="mtribe" />
                                        </div>
                                    </div>

                            </div>
            
                            <div class="row">
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Occupation</label>
                                        <input type="text" class="form-control" name="moccupation" />
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Phone Number</label>
                                            <input type="text" class="form-control" name="mphone" />
                                        </div>
                                    </div>

                                <div class="col-md-5 col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Home of Residence Address</label>
                                        <textarea type="text" class="form-control" name="maddress"></textarea>
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
                                                <input type="text" class="form-control" name="fln" />
                                            </div>
                                        </div>
                    
                                        <div class="col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">First Name</label>
                                                <input type="text" class="form-control" name="ffn" />
                                            </div>
                                        </div>
                    
                                        <div class="col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Middle Name</label>
                                                <input type="text" class="form-control" name="fmn" />
                                            </div>
                                        </div>
        
                                        <div class="col-md-3 col-lg-3">
                                                <div class="form-group">
                                                    <label class="control-label">Age</label>
                                                    <input type="number" class="form-control" name="fage" />
                                                </div>
                                        </div>
                    
                                    </div>
                    
                                    <div class="row">
                                        <div class="col-md-2 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Marrital Status</label>
                                                <select type="text" class="form-control" name="fstatus">
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
                                                <select type="text" class="form-control" name="fnationality">
                                                    <option>Nigerian</option>
                                                    <option>Non-Nigerian</option>
                                                </select>
                                            </div>
                                        </div>
                    
                                        <div class="col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">State of Origin</label>
                                                <input type="text" class="form-control" name="forigin" />
                                            </div>
                                        </div>
                    
                                        <div class="col-md-4 col-lg-3">
                                                <div class="form-group">
                                                    <label class="control-label">Tribe/Ethnicity</label>
                                                    <input type="text" class="form-control" name="ftribe" />
                                                </div>
                                            </div>
        
                                    </div>
                    
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Occupation</label>
                                                <input type="text" class="form-control" name="foccupation" />
                                            </div>
                                        </div>
        
                                        <div class="col-md-3 col-lg-3">
                                                <div class="form-group">
                                                    <label class="control-label">Phone Number</label>
                                                    <input type="text" class="form-control" name="fphone" />
                                                </div>
                                            </div>
        
                                        <div class="col-md-5 col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label">Home of Residence Address</label>
                                                <textarea type="text" class="form-control" name="faddress"></textarea>
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
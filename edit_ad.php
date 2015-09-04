<?php 
session_start();
if(isset($_SESSION['uid'])){
$uid=$_SESSION['uid'];
$username=$_SESSION['user'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.png">

        <title>Edit Ad | ENQUIP- A Classifieds Ads for engg. students</title>

        <!-- Bootstrap core CSS -->
        <link id="switch_style" href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/theme.css" rel="stylesheet">
        <link href="css/dropzone.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
        <link rel="stylesheet" type="text/css" href="js/fancybox/helpers/jquery.fancybox-buttons.css?v=2.1.5" media="screen" />
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="index.php" class="navbar-brand ">
                        <span class="logo"><strong>classified</strong><span class="handwriting">ads</span><br />
                            <small >a minimalist theme built with bootstrap </small></span>
                    </a>

                </div>



                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right visible-xs">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="my_account.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="listings.php">Listings</a></li>
                        <li><a href="account_dashboard.php">My account</a></li>
                        <li><a href="account_ad_create.php">Post an ad</a></li>
                    </ul> 
                    <div class="nav navbar-nav navbar-right hidden-xs">
                        <div class="row">

                            <div class="pull-right">


                                <?php if(!isset($uid)){echo "<a data-toggle='modal' data-target='#modalLogin'  href='#'>Login</a> | <a href='register.php'>Register</a> | ";}
                            else {echo "<a href='logout.php'>logout</a> | ";} ?> 
                                <!-- <a href="register.php">Register</a> | 
                                <a href="listings.php">Listings</a> |  -->
                                 <a href="account_dashboard.php"><?php if(!isset($uid)){echo "My Account"; }else{echo "Welcome,",$username;}?></a>
                                <a href="account_ad_create.php" class="btn btn-default post-ad-btn">Post an ad</a>

                            </div>	
                        </div>
                    </div>
                </div>
                </div>
            </nav>
                        <hr class="topbar"/>
            <div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="sidebar-account">		
	<div class="row ">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">My account</div>
				<div class="panel-body">
					<ul class="nav">
						<li>
							<a class="active" href="account_dashboard.php">Dashboard</a>
						</li>						
						<li>	
							<a class="active" href="account_profile.php">My profile</a>
						</li>
                        <li>
							<a class="active" href="account_account.php">My account</a>
						</li>
						<li>
							<a class="active" href="account_ads.php">Manage ads</a>
						</li>
						<li>
							<a class="active" href="account_ad_create.php">Create new ad</a>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</div>

	<div class="row hidden-xs">
<div class="col-lg-12">
		<div class="well">
			<div class="row ">
<div class="col-lg-3">
	<img src="image/Crest.png" width="45"/>
			</div>
			<div class="col-lg-9">

<h4 style="margin-top: 0">Increase visibility</h4>
			<p>Don't forget to 'bump' your listing to gain more visibility</p>

			</div>
			</div>

		</div>
		</div>
		</div>

</div>
        </div>

        <div class="col-sm-9">
            <form class="form-vertical" action="ads.php" method="POST" enctype="multipart/form-data">

                <div class="panel panel-default">
                    <div class="panel-heading">Choose category</div>
                    <div class="panel-body">


                        <div class="row">  
                            <div class="col-sm-12 "  >

                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-sm-2" style="margin-top: 10px;">
                                            <label>Category</label>
                                        </div>
                                        <div class="col-sm-6">

                                              <select id="category" class="form-control" name="category">
                                                <option>Choose a category</option>
                                                <optgroup label="Books">
                                                    <option value="1">&nbsp;&nbsp;&nbsp;Computer Science</option>

                                                    <option value="2">&nbsp;&nbsp;&nbsp;Infromation Technology</option>

                                                    <option value="3">&nbsp;&nbsp;&nbsp;Mechanical</option>

                                                    <option value="4">&nbsp;&nbsp;&nbsp;Electronics</option>

                                                    <option value="5">&nbsp;&nbsp;&nbsp;Extc </option>

                                                    <option value="6">&nbsp;&nbsp;&nbsp;Electrical</option>

                                                    <option value="7">&nbsp;&nbsp;&nbsp; Civil</option>

                                                    <option value="8">&nbsp;&nbsp;&nbsp;PRoduction</option>

                                                    <option value="20">&nbsp;&nbsp;&nbsp;Placement Books</option>

                                                    <option value="21">&nbsp;&nbsp;&nbsp;GRE &amp; other books</option>
                                                </optgroup>
                                                <optgroup label="Tools">
                                                    <option value="9">&nbsp;&nbsp;&nbsp;WorkShoop Tools</option>

                                                    <option value="10">&nbsp;&nbsp;&nbsp;Drafters</option>

                                                    <option value="11">&nbsp;&nbsp;&nbsp;Other Tools</option>
                                                </optgroup>
                                                <optgroup label="">
                                                    <option value="12">&nbsp;&nbsp;&nbsp;Computer &amp; Accessories </option>

                                                    <option value="13">&nbsp;&nbsp;&nbsp;Camera &amp; Accessories</option>

                                                    <option value="14">&nbsp;&nbsp;&nbsp;Other Accessories</option>

                                                </optgroup>
                                                <optgroup label="Services">
                                                    <option value="15">&nbsp;&nbsp;&nbsp;Education &amp; Classes </option>

                                                    <option value="16">&nbsp;&nbsp;&nbsp;Web Development</option>

                                                    <option value="17">&nbsp;&nbsp;&nbsp;Electronics &amp; Computer Repair</option>

                                                    <option value="18">&nbsp;&nbsp;&nbsp;Other Services</option>

                                                </optgroup>
                                                <optgroup label="Job">
                                                    <option value="19">&nbsp;&nbsp;&nbsp;Internship </option>

                                                </optgroup>
                                                
                                                </select>

                                        </div>
                                    </div>
                                </div>			

                            </div>			
                        </div>			
                    </div>			
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Ad details</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="row">

                                <div class="col-sm-12">
                                    <label>Title </label>
                                    <input type="text" name="heading" id="heading" class="form-control" >
                                </div>
                                <div class="col-sm-12"><br />
                                    <label>Description </label>
                                    <!-- <textarea class="form-control col-sm-8 expand"  name="description" rows="6" style="width: 99%"></textarea> -->
                                    <textarea id="text" name="description" class="form-control" rows="8"></textarea>
                                </div>

                                <div class="col-sm-12"><br />
                                    <label>Keywords</label>
                                    <input type="text" name="key" class="form-control" >
                                </div>
                                 <div class="col-sm-12">
                                    <label>Status </label>
                                     <select id="type" name="status" class="form-control">
                                            <option selected="selected">Select status</option>
                                            <option>New</option>
                                            <option>Used</option>
                                          </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Ad information</div>
                    <div class="panel-body">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Region</label>
                                    <input type="text" name="region" class="form-control "  >
                                </div>
                                <div class="col-sm-6">
                                    <label>City</label>
                                    <input type="text" name="city" id="city" class="form-control"  >
                                </div>
                                <div class="col-sm-6"><br />
                                    <label>Country</label>
                                    <select id="type" name="country" class="form-control">
                                            <option selected="selected">Select country</option>
                                            <option>India</option>
                                            
                                          </select>
                                </div>
                                <div class="col-sm-6"><br />
                                    <label>Pin Code</label>
                                    <input type="text" name="pincode" class="form-control "  >
                                </div>


                            </div>
                            <br />
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2">
                                            Don't show my address details publicly
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Add photos</div>
                    <div class="panel-body">
                        <!-- <div id="my-dropzone" action="ads.php" class="dropzone"></div>
                        <br /><p><small>* please note that the displayed images are cropped/resized only for display purposes</small></p> -->
                        <div class="form-group">
                  <label>Select images</label>
                  <input type="file" id="image1" name="image1">
                  <input type="file" id="image2" name="image2">
                  <input type="file" id="image3" name="image3">
                  <input type="file" id="image4" name="image4">
                </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Your price</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="price"  placeholder="How much do you want it to be listed for?">
                                </div>
                                <div class="col-sm-6">
                                    <p>You can adjust your price anytime you like, even after your listing is published.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	

                <div class="panel panel-default">
                    <div class="panel-heading">Complete ad</div>
                    <div class="panel-body">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> I agree to the terms and conditions and regulations.
                            </label>
                        </div>
                        <br />
                        <button type="" class="btn btn-default hidden-xs">Save draft</button>
                        <button type="" class="btn btn-default hidden-xs">Preview ad</button>
                        <!-- <button class="btn btn-primary pull-right" type="submit" name="submit"><i class="icon-ok"></i>  Publish ad</button> -->
                        <?php if(!isset($uid)){echo "<button class='btn btn-primary pull-right' data-toggle='modal' data-target='#modalLogin'><i class='icon-ok'></i>  Publish ad</button>" ;}
                            else {echo "<button class='btn btn-primary pull-right' type='submit' name='submit'><i class='icon-ok'></i>  Publish ad</button>";} ?>
                        <br /><p class=" hidden-xs" style="text-align: right"><small><br /> </small></p>
                    </div>
                </div>

            </div>




        </div>
    </div>
</div>
</form>
<br />

</div>
</div><!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sign in to your account</h4>
            </div>
            <div class="modal-body">
                <p>If you have an account with us, please enter your details below.</p>

                <form method="POST" action="account_dashboard.php" accept-charset="UTF-8" id="user-login-form" class="form ajax" data-replace=".error-message p">

                    <div class="form-group">
                        <input placeholder="Your username/email" class="form-control" name="email" type="text">                </div>

                    <div class="form-group">
                        <input placeholder="Your password" class="form-control" name="password" type="password" value="">                </div>

                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <button type="submit" name="sub" class="btn btn-primary pull-right">Login</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="modal" href="#modalForgot">Forgot your password?</a>
                        </div>
                    </div>

                </form>
            </div>

            <div class="modal-footer" style="text-align: center">
                <div class="error-message"><p style="color: #000; font-weight: normal;">Don't have an account? <a class="link-info" href="register.php">Register now</a></p></div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal -->
<div class="modal fade" id="modalForgot" tabindex="-1" role="dialog" aria-labelledby="modalForgot" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot your password?</h4>
            </div>
            <div class="modal-body">
                <p>Enter your email to continue</p>

                <form role="form">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your email address">
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                        </div><div class="col-md-6">
                        <a href="my_account.php" class="btn btn-primary pull-right">Continue</a>
                        </div>
                    </div>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="footer">
    <div class="container">

        <div class="row">

            <div class="col-sm-4 col-xs-12">
                <p><strong>&copy; Bootstrap Classifieds 2014</strong></p>
                <p>All rights reserved</p>
            </div>			

            <div class="col-sm-8 col-xs-12">
                <p class="footer-links">
                    <a href="index.php" class="active">Home</a>
                    <a href="typography.php">Typography</a>
                    <a href="terms.php">Terms and Conditions</a>
                    <a href="contact.php">Contact Us</a>
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/dropzone.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js?v=2.1.5"></script>
<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js?v=2.1.5"></script>
<script src="js/global.js"></script>
</body>
</html>
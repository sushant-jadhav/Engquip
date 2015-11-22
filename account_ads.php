<?php 
session_start();
if(isset($_SESSION['uid'])){
$uid=$_SESSION['uid'];
$username=$_SESSION['user'];
}
if(isset($_SESSION['adsid'])){
    $adsid=$_SESSION['adsid'];
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

        <title>ENQUIP- A Classifieds Ads for engg. students</title>

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
                            <small > A Classifieds Ads for engg. students </small></span>
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

                                <?php if(!isset($uid)){echo "<a data-toggle='modal' data-target='#modalLogin'  href='#'>Login</a> | ";}
                            else {echo "<a href='logout.php'>logout</a> | ";} ?>
                                <!-- <a href="register.php">New Register</a> |  -->
                                <a href="listings.php">Listings</a> | 
                                 <?php if(!isset($uid)){echo "<a data-toggle='modal' data-target='#modalLogin'  href='#'>My Account</a> ";}
                            else {echo "<a href='account_dashboard.php'>Welcome, $username</a>  ";} ?>
                                <?php if(!isset($uid)){echo "<a data-toggle='modal' data-target='#modalpost'  href='#' class='btn btn-primary post-ad-btn'>Post an ad</a>";}
                                else{echo "<a href='account_ad_create.php' class='btn btn-primary post-ad-btn'>Post an ad</a>";}?>

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
		  <img src="images/Crest.png" width="45"/>
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
            <div class="panel panel-default">
                <div class="panel-heading">Manage adverts</div>
                <div class="panel-body">
                    <form class="form-vertical">
                        <fieldset>

                            <div class="row">  
                                <div class="col-sm-12" >

                                    <table class="table edit-listings">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Date&nbsp;posted</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                <?php
                                include("config.php");
                                $dbcon=mysqli_connect("localhost","root","");
                                    $res = mysqli_select_db($dbcon,"classifiedads");
                                $sql_uad="SELECT ads.*,options.*,users.* from ads inner join options on ads.opId=options.opId left join users on ads.uId=users.uId where ads.uId=$uid";
                                $result_sql_uad=mysqli_query($dbcon,$sql_uad);
                                while($uad=mysqli_fetch_object($result_sql_uad)){
                                ?>
                                            <tr>
                                                <td><img src="<?php echo $uad->adImg1;?>" style="width:75px" /></td>
                                                <td class="main-td">


                                                    <a href="account_ad_create.php"><?php echo $uad->adHeading;?></a><a href="#" class="no-views">(11 views)</a><br />

                                                    <a class="edit-ad" href="edit_ad.php?ad=<?php echo $uad->adId;?>">Edit ad</a>
                                                    <!-- <a class="extend-ad" href="#" data-toggle="tooltip" title="Extend ad by 30 days">Extend for 30 days</a> -->
                                                    <a class="remove-ad" onclick= 'return confirm("Are you sure")' href="account_ads.php?delete=yes&adid=<?php echo $uad->adId;?>">Remove this ad</a>

                                                    <p ><?php echo $uad->adText;?></p>
                                                </td>
                                                <td>1 day ago</td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <?php if(isset($_GET['delete']))
{
    include("config.php");
    $adid = $_GET['adid'];
    $query = "DELETE FROM ads WHERE adId=$adid";
    mysql_query($query,$connect); //link query to database
    //print "Employee Updated"; // print confirmation
    echo"<script>window.open('account_ads.php','_self')</script>";
}?>
            </div>
        </div>
    </div>
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
                            <button type="submit" class="btn btn-primary pull-right">Login</button>
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

<?php include("footer.php");?>

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
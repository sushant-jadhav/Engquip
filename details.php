<?php
session_start();
if(isset($_COOKIE['uniqueID'])){
    $cid=$_COOKIE['uniqueID'];
   }
if(isset($_SESSION['uid'])){
 $uid=$_SESSION['uid'];
 $username=$_SESSION['user'];
}
 $adid=$_GET['adId'];
 $opid=$_GET['opId'];
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

        <title>ENQUIP- A Classifieds Ads for engg. student</title>

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
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        
        



        <nav class="navbar navbar-default" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="index.php" class="navbar-brand ">
                        <span class="logo"><strong>Enquip</strong><span class="handwriting">ads</span><br />
                            <small >a website foe engg. students </small></span>
                    </a>

                </div>



                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right visible-xs">
                        <li class="active"><a href="#">Home</a></li>
                        <li><?php if(!isset($uid)){echo "<a data-toggle='modal' data-target='#modalLogin'  href='#'>Login</a> ";}
                            else {echo "<a href='logout.php'>logout</a>";} ?></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="listings.php">Listings</a></li>
                        <li><a href="account_dashboard.php">My account</a></li>
                        <li><a href="account_ad_create.php">Post an ad</a></li>
                    </ul> 
                    <div class="nav navbar-nav navbar-right hidden-xs">
                        <div class="row">

                            <div class="pull-right">


                                <?php if(!isset($uid)){echo "<a data-toggle='modal' data-target='#modalLogin'  href='#'>Login</a> |";}
                            else {echo "<a href='logout.php'>logout</a> | ";} ?>
                                 <!-- <a href="wishlist.php" class="">Wishlist <span class="badge val"></span></a> | -->
                                <?php if(!isset($uid)){echo "<a data-toggle='modal' data-target='#modalLogin'  href='#'>My Account</a> ";}
                            else {echo "<a href='account_dashboard.php'>Welcome, $username</a>  ";} ?>
                                <!-- <a href="account_ad_create.php" class="btn btn-warning post-ad-btn">Post an ad</a> -->
                                <?php if(!isset($uid)){echo "<a href='post_ad.php' class='btn btn-primary post-ad-btn'>Post an ad</a>";}
                                else{echo "<a href='account_ad_create.php' class='btn btn-primary post-ad-btn'>Post an ad</a>";}?>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </nav>
            <div class="jumbotron home-tron-search well ">
                <div class="container">
                    <div class="row">

                        <?php if(isset($_GET['search'])){ $srch= $_GET['search'];}else{$srch=null;}?>
                        <?php if(isset($_GET['category'])){$cat=$_GET['category'];}else{$cat=null;}?>
                        <form method="GET" action="search.php?search=<?php echo $srch;?>&category=<?php echo $cat;?>">
                        <div class="col-sm-12">
                            <div class="home-tron-search-inner">

                                <div class="row">

                                    <div class="col-sm-8 col-xs-9" style="text-align: center">
                                        <div class="row">

                                            <div class="col-sm-12 col-sm-offset-1">
                                                <div class="input-group">
                                                    <span class="input-group-addon input-group-addon-text hidden-xs">Find me a</span>

                                                    <input type="text" class="form-control col-sm-3" name="search" placeholder="e.g. BMW, 2 bed flat, sofa" required>
                                                    <div class=" input-group-addon hidden-xs">
                                                        <div class="btn-group" >
                                                            <select class="btn dropdown-toggle" name="category">
                                                                <option>Choose Category</option>
                                                                <option value="Books">Books</option>
                                                                <option value="Tools">Tools</option>
                                                                <option value="Electronics & Computer">Electronics & Computer</option>
                                                                <option value="Services">Services</option>
                                                                <option value="Jobs">Jobs</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                    </div>


                                    <div class="col-sm-4 col-xs-3" style="text-align: center">
                                        <div class="row">
                                            <div class="col-sm-11 pull-right">
                                                <button class="btn btn-primary search-btn"><i class="icon-search"></i>&nbsp;&nbsp;&nbsp;&nbsp;Search</button>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            

            <div class="container" id="listings-page">
    <div class="row">
        <div class="col-sm-12 listing-wrapper listings-top listings-bottom">
            <br />
            <br />
                <?php 
                include("config.php");
                    $sql_ad="SELECT ads.*,users.*,options.* FROM ads left join users on ads.uId=users.uId inner join options on ads.opId=options.opId where ads.adId=$adid and ads.opId=$opid ";
                    $result_ad =mysqli_query($connect,$sql_ad);
                    while($ad=mysqli_fetch_object($result_ad)){
            ?>
            
            <div class="row">

                <div class="col-sm-7">	

                    <ol class="breadcrumb">
                        <li><a href="listings.php" class="link-info"><i class="fa fa-chevron-left"></i> Back to listings</a></li>
                        <li><a href="index.php">Home</a></li>
                        <!-- <li ><?php echo $ad->opName;?></li> -->
                        <li class="active"><a href="#"><?php echo $ad->opName;?></a></li>
                         
                    </ol>

                </div>

            </div>
            

            <div class="row">

                <div class="col-sm-7">	
                    <h1 id="ad"><?php echo $ad->adHeading;?> <!-- <a href="#" id="<?php echo $ad->adId;?>" class="approve-button"><i class="fa fa-star wl-button">wishlist it</i></a> --> </h1>
                    <p>Location: <?php echo $ad->adCity;?>, <?php echo $ad->adRegion;?> India</p>
                </div>


                <div class="col-sm-5">

                    <p class="price"><i class="fa fa-inr"></i>&nbsp; <?php echo $ad->adPrice;?></p> 

                </div>

            </div>			<div class="row">

            <div class="col-sm-7">	
                <div class="row">
                    <div class="col-xs-3" style="width: 100px;">	
                        <!-- Place this tag where you want the share button to render. -->
                        <div class="g-plus" data-action="share" data-annotation="bubble"></div>

                        <!-- Place this tag after the last share tag. -->
                        <script type="text/javascript">
                            (function() {
                                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                po.src = 'https://apis.google.com/js/platform.js';
                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                            })();
                        </script>
                    </div>


                    <div class="col-xs-3" style="width: 100px;">	
                        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </div>

                    <div class="col-xs-3" style="width: 100px;">	
                        <div class="fb-share-button" data-href="http://developers.facebook.com/docs/plugins/" data-type="button_count"></div>
                    </div>
                </div>
            </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-7">
                    <h3>Ad details</h3>
                    <div class="row">
                        <div class="col-xs-6">
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <th>Ad ID</th>
                                        <td><?php echo $ad->adId;?></td>
                                    </tr>
                                    <tr>
                                        <th>Ad Status</th>
                                        <td><?php echo $ad->adStatus;?></td>
                                    </tr>
                                    <tr>
                                        <th>Ad ?</th>
                                        <td id="product"><?php echo $ad->adId;?></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-6">
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <th>Ad Region</th>
                                        <td><?php echo $ad->adRegion;?></td>
                                    </tr>
                                    <tr>
                                        <th>Ad City:</th>
                                        <td><?php echo $ad->adCity;?></td>
                                    </tr>
                                    <tr>
                                        <th>Ad PinCode</th>
                                        <td><?php echo $ad->adPincode;?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br/>                        
                    </div>
                    <hr>
                    <h3>Seller details</h3>
                    <div class="row">
                        <div class="col-xs-6">
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <td><?php echo $ad->adName;?> </td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo $ad->adEmail;?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-6">
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <th>College </th>
                                        <td><?php echo $ad->adCollege;?></td>
                                    </tr>
                                    <tr>
                                        <th>Contact </th>
                                        <td><?php echo $ad->adPhone;?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br/>

                    </div>
                    <hr>
                    <p>
                    <h3>Description:</h3>
                    <?php echo $ad->adText;?>
                    <hr>
                    <p>
                        <br><strong>We don't use agencies to hire, so please don't contact us if you are an agency.... </strong>
                    </p>

                    <p>Ad ref: <?php echo $ad->adId;?> | Posted <?php echo $ad->adDate;?></p>

                    <p>
                        <!-- <span class="classified_links ">
                            <a class="link-info" href="#"><i class="fa fa-share"></i> Share</a>&nbsp;
                            <i class="fa fa-star wl-button"></i> Add to favorites
                            &nbsp;<a class="link-info  " href="#"><i class="fa fa-envelope-o"></i> Contact</a>
                            &nbsp;<a class="link-info fancybox-media" href="http://maps.google.com/?q=<?php echo $ad->adCity;?>"><i class="fa fa-map-marker"></i> Map</a></span>
                     --></p>

                </div>

                <div class="col-sm-5 center zoom-gallery">
                    <div class="row center">

                        <div class="col-sm-12">	
                            <a class="fancybox" rel="group" href="css/images/single/1.jpg">
                                <img id="img_01" alt="" class="raised" src="<?php echo $ad->adImg1;?>" style="width: 100%" />
                            </a>
                            <br />
                            <br />
                            <div class="row" id="gallery" >

                                                                <div class="col-xs-4" style="margin-bottom: 10px;">	
                                    <a href="css/images/2.jpg" class="fancybox thumbnail" rel="group" >
                                        <img alt="" src="<?php echo $ad->adImg1;?>" style="width: 100%" />
                                    </a>
                                </div>
                                                                <div class="col-xs-4" style="margin-bottom: 10px;">	
                                    <a href="css/images/single/3.jpg" class="fancybox thumbnail" rel="group" >
                                        <img alt="" src="<?php echo $ad->adImg2;?>" style="width: 100%" />
                                    </a>
                                </div>
                                                                <div class="col-xs-4" style="margin-bottom: 10px;">	
                                    <a href="css/images/single/4.jpg" class="fancybox thumbnail" rel="group" >
                                        <img alt="" src="<?php echo $ad->adImg3;?>" style="width: 100%" />
                                    </a>
                                </div>
                                                                <div class="col-xs-4" style="margin-bottom: 10px;">	
                                    <a href="css/images/single/5.jpg" class="fancybox thumbnail" rel="group" >
                                        <img alt="" src="<?php echo $ad->adImg4;?>" style="width: 100%" />
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br />	
                    <br />	
                    <div class="col-sm-12" style="text-align: center; margin: 0 auto">	
                        <button data-toggle="modal" data-target="#myModal" class="btn btn-primary" style="text-align: center;width: 180px; " type="button">Reply to ad</button>
                        <br />
                        <p>or call <?php echo $ad->adName;?> on <strong>+91&nbsp;<?php echo $ad->adPhone;?></strong></p>
                    </div>



                    <br />


                    

                </div>				

            </div>			

            <div class="col-sm-12 listings">
                                <br />
                <div class="row">
                

                    <div class="panel panel-default recent-listings hidden-xs">
                        <div class="panel-heading">Recent <?php echo $ad->opName ;?> ads in <?php echo $ad->adCity;?></div>
                        <?php// }?>
                        <div class="panel-body">
                        <?php 
                       include("config.php");
                    $city=$ad->adCity;
                    $sql_city="SELECT ads.*,options.* FROM ads left join options on ads.opId=options.opId  where  ads.adCity  like '%{$city}%' limit 3 ";
                    $result_city = mysqli_query($connect,$sql_city);
                        while($adcity = mysqli_fetch_object($result_city)){?>
                                
                            <div class="row premium  listing-row">

                                <div class="col-sm-2">
                                    <a href="details.php?adId=<?php echo $adcity->adId;?>&opId=<?php echo $adcity->opId;?>" class="thumbnail " ><img alt="" src="<?php echo $adcity->adImg1;?>"></a>
                                </div>	 

                                <div class="col-sm-10">
                                    <div class="row">

                                        <div class="col-sm-9">
                                            <h3><a class=""  href="details.php?adId=<?php echo $adcity->adId;?>&opId=<?php echo $adcity->opId;?>"><?php echo $adcity->adHeading;?></a></h3>
                                        </div>                    

                                        <div class="col-sm-3">
                                            <h3 class="price-text"><strong><i class="fa fa-inr"></i>&nbsp;<?php echo $adcity->adPrice;?></strong></h3>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="muted">Located in <strong><?php echo $adcity->adCity;?></strong></p>
                                            <p class="muted">Posted <?php echo $adcity->adDate;?> to <a href="#" class="underline"><?php echo $adcity->opName;?></a></p><br />
                                            <p><?php echo $adcity->adText;?>...</p><br />


                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-5">
                                            <p class="ad-description">
                                                <strong>2006</strong> | 

                                                <strong>98,000 miles</strong> | 

                                                <strong>2,696 cc</strong> | 

                                                <strong>Diesel</strong>                
                                            </p>
                                        </div>
                                        <!-- <div class="col-sm-5">
                                            <p>
                                                <span class="classified_links pull-right">
                                                    <a class="link-info underline" href="#">Share</a>&nbsp;
                                                    <a class="link-info underline wl-button">Add to favorites</a>
                                                    &nbsp;<a class="link-info underline" href="#">Contact</a>
                                                    &nbsp;<a class="link-info underline" href="http://maps.google.com/?q=<?php echo $adcity->adCity;?>">Map</a></span>
                                            </p>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <?php  }?>
                            <br />


                            <br />
                        </div>
                    </div>
                </div>


            </div>
        </div>



    </div>	



</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Reply to <?php echo $ad->uFirstname;?></h4>
                <p class="hidden-xs">about "<?php echo $ad->adHeading;?>"</p>
            </div>
            <div class="modal-body">
                <form class="form-vertical">
                    <fieldset>

                        <div class="row">  
                            <div class="col-sm-12" >

                                <div class="form-group">
                                    <label>Message</label>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <textarea class="form-control" rows="4"></textarea>
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control " placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control " placeholder="Enter email">
                                </div>
                                <div class="form-group hidden-xs">
                                    <label>Phone Number (Optional):</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>						  


                                <div class="alert alert-info hidden-xs">
                                    <p>
                                        Follow these simple steps for a safe and successful buying experience:<br />
                                        1. Meet face to face to see the item and exchange money.<br /> 2. Make sure you are completely happy with the item before handing over any money. <br />3. Although we do not recommend paying for an item you haven't seen, if you are planning to do this, please use a secure payment method.<br />

                                    </p>
                                </div>

                            </div>




                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </div>
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

                <form method="POST" action="login.php" accept-charset="UTF-8" id="user-login-form" class="form ajax" data-replace=".error-message p">

                    <div class="form-group">
                        <input placeholder="Your username/email" class="form-control" name="email" type="text" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>">
                    </div>

                    <div class="form-group">
                        <input placeholder="Your password" class="form-control" name="password" type="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <input type="checkbox" id="remember_me" name="remember_me" <?php if(isset($_COOKIE['username'])){echo "checked='checked'"; } ?> value="1" /> <label for="remember_me"> Remember Me </label>
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
<!-- post ads -->
<div class="modal fade" id="modalpost" tabindex="-1" role="dialog" aria-labelledby="modalpost" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sign in to your account For Posting Ads</h4>
            </div>
            <div class="modal-body">
                <p>If you have an account with us, please sign in for post ads.</p>

                <form method="POST" action="login.php" accept-charset="UTF-8" id="user-login-form" class="form ajax" data-replace=".error-message p">

                    <div class="form-group">
                        <input placeholder="Your username/email" class="form-control" name="email" type="text" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>">
                    </div>

                    <div class="form-group">
                        <input placeholder="Your password" class="form-control" name="password" type="password" <?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <input type="checkbox" id="remember_me" name="remember_me" <?php if(isset($_COOKIE['username'])){echo "checked='checked'"; } ?> value="1" /> <label for="remember_me"> Remember Me </label>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" name="submit" class="btn btn-primary pull-right">Login</button>
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
<?php  }?>
<?php include("footer.php");?>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/dropzone.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('a[class="approve-button"]').click(function(){

   //Get the ID of the button that was clicked on
       var id_of_item_to_approve = $(this).attr("id");
       console.log(id_of_item_to_approve);

       $.ajax({
          url: 'wishlist.php?adid=<?php echo $ad;?>', //This is the page where you will handle your SQL insert
          type: 'POST',
          datatype: 'html',
          data: {id: id_of_item_to_approve}, //The data your sending to some-page.php
          success: function(data){
              console.log("AJAX request was successfull");
              var c=$("#s").html(id_of_item_to_approve);
              <?php $wisharray=array();
              
              array_push($wisharray, $adid);
              $_SESSION['wishing']=$wisharray;
              // print_r($_SESSION['wishing']);
              ?>
              var m=<?php echo json_encode($_SESSION['wishing']);
              ?>;
          },
          error:function(){
              console.log("AJAX request was a failure");
          }   
        });

    });
    });
 </script>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js?v=2.1.5"></script>
<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js?v=2.1.5"></script>
<script src="js/global.js"></script>
</body>
</html>
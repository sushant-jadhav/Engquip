<?php 
session_start();
if(isset($_COOKIE['uniqueID'])){
    $cid=$_COOKIE['uniqueID'];
   }
if(isset($_SESSION['uid'])){
$uid=$_SESSION['uid'];
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


                                <?php if(!isset($uid)){echo "<a data-toggle='modal' data-target='#modalLogin'  href='#'>Login</a> | ";}
                                else {echo "<a href='logout.php'>logout</a> | ";} ?>
                                <a href="register.php">Register</a> | 
                                <a href="listings.php">Listings</a> | 
                                <a href="account_dashboard.php">My account</a>
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

        <div class="col-md-12">
            <h1>Typography <small>Headings, paragraphs, lists, and other inline type elements</small></h1>
            <hr />

            <h2>Headings &amp; body copy</h2>

            <!-- Headings & Paragraph Copy -->
            <div class="row">
                <div class="col-md-4">
                    <h3>Typographic scale</h3>
                    <p>The entire typographic grid is based on two Less variables in our variables.less file: <code>@baseFontSize</code> and <code>@baseLineHeight</code>. The first is the base font-size used throughout and the second is the base line-height.</p>

                    <p>We use those variables, and some math, to create the margins, paddings, and line-heights of all our type and more.</p>
                </div>
                <div class="col-md-4">
                    <h3>Example body text</h3>
                    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
                </div>

                <div class="col-md-4">
                    <div class="well">
                        <h1>h1. Heading 1</h1>
                        <h2>h2. Heading 2</h2>
                        <h3>h3. Heading 3</h3>
                        <h4>h4. Heading 4</h4>
                        <h5>h5. Heading 5</h5>

                        <h6>h6. Heading 6</h6>
                    </div>
                </div>
            </div>

            <!-- Misc Elements -->
            <h2>Emphasis, address, and abbreviation</h2>
            <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>Element</th>
                        <th>Usage</th>
                        <th>Optional</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <code>&lt;strong&gt;</code>
                        </td>
                        <td>
                            For emphasizing a snippet of text with <strong>important</strong>

                        </td>
                        <td>
                            <span class="muted">None</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>&lt;em&gt;</code>

                        </td>
                        <td>
                            For emphasizing a snippet of text with <em>stress</em>
                        </td>
                        <td>
                            <span class="muted">None</span>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <code>&lt;abbr&gt;</code>
                        </td>
                        <td>
                            Wraps abbreviations and acronyms to show the expanded version on hover
                        </td>
                        <td>

                            Include optional <code>title</code> for expanded text
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>&lt;address&gt;</code>
                        </td>

                        <td>
                            For contact information for its nearest ancestor or the entire body of work
                        </td>
                        <td>
                            Preserve formatting by ending all lines with <code>&lt;br&gt;</code>
                        </td>
                    </tr>
                </tbody>

            </table>

            <div class="row">
                <div class="col-md-4">
                    <h3>Using emphasis</h3>
                    <p><a href="#">Fusce dapibus</a>, <strong>tellus ac cursus commodo</strong>, <em>tortor mauris condimentum nibh</em>, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue.</p>

                    <p><strong>Note:</strong> Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5, but their usage has changed a bit. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>

                </div>
                <div class="col-md-4">
                    <h3>Example addresses</h3>
                    <p>Here are two examples of how the <code>&lt;address&gt;</code> tag can be used:</p>
                    <address>
                        <strong>Twitter, Inc.</strong><br />

                        795 Folsom Ave, Suite 600<br />
                        San Francisco, CA 94107<br />
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                    <address>
                        <strong>Full Name</strong><br />
                        <a href="mailto:#">first.last@gmail.com</a>

                    </address>
                </div>
                <div class="col-md-4">
                    <h3>Example abbreviations</h3>
                    <p>Abbreviations are styled with uppercase text and a light dotted bottom border. They also have a help cursor on hover so users have extra indication something will be shown on hover.</p>
                    <p><abbr title="HyperText Markup Language">HTML</abbr> is the best thing since sliced bread.</p>

                    <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
                </div>
            </div>


            <!-- Blockquotes -->
            <h2>Blockquotes</h2>
            <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>Element</th>
                        <th>Usage</th>
                        <th>Optional</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <code>&lt;blockquote&gt;</code>
                        </td>
                        <td>
                            Block-level element for quoting content from another source
                        </td>
                        <td>

                            <p>Add <code>cite</code> attribute for source URL</p>
                            Use <code>.pull-left</code> and <code>.pull-right</code> classes for floated options
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <code>&lt;small&gt;</code>
                        </td>
                        <td>
                            Optional element for adding a user-facing citation, typically an author with title of work
                        </td>
                        <td>
                            Place the <code>&lt;cite&gt;</code> around the title or name of source
                        </td>

                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-4">
                    <p>To include a blockquote, wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes we recommend a <code>&lt;p&gt;</code>.</p>

                    <p>Include an optional <code>&lt;small&gt;</code> element to cite your source and you'll get an em dash <code>&amp;mdash;</code> before it for styling purposes.</p>
                </div>
                <div class="col-md-8">
                    <pre class="prettyprint linenums">
&lt;blockquote&gt;
&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.&lt;/p&gt;

&lt;small&gt;Someone famous&lt;/small&gt;
&lt;/blockquote&gt;
</pre>
                </div>
            </div><!--/row-->

            <h3>Example blockquotes</h3>
            <div class="row">

                <div class="col-md-6">
                    <p>Default blockquotes are styled as such:</p>
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</p>
                        <small>Someone famous in <cite title="">Body of work</cite></small>
                    </blockquote>
                </div>

                <div class="col-md-6">
                    <p>To float your blockquote to the right, add <code>class="pull-right"</code>:</p>
                    <blockquote class="pull-right">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</p>
                        <small>Someone famous in <cite title="">Body of work</cite></small>
                    </blockquote>

                </div>
            </div>


            <!-- Lists -->
            <h2>Lists</h2>
            <div class="row">
                <div class="col-md-3">
                    <h4>Unordered</h4>

                    <p><code>&lt;ul&gt;</code></p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>

                        <li>Nulla volutpat aliquam velit
                            <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>

                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ul>
                </div>
                <div class="col-md-3">

                    <h4>Unstyled</h4>
                    <p><code>&lt;ul class="unstyled"&gt;</code></p>
                    <ul class="unstyled">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>

                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>

                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h4>Ordered</h4>
                    <p><code>&lt;ol&gt;</code></p>
                    <ol>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>

                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit</li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ol>

                </div>
                <div class="col-md-3">
                    <h4>Description</h4>
                    <p><code>&lt;dl&gt;</code></p>
                    <dl>
                        <dt>Description lists</dt>
                        <dd>A description list is perfect for defining terms.</dd>

                        <dt>Euismod</dt>
                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                        <dt>Malesuada porta</dt>
                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                    </dl>

                </div>
            </div><!-- /row -->

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
<script src="js/jquery.js"></script>
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
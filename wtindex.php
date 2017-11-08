<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Anish Jain">  
    <meta name="description" content="Anish Jain Web Developer site">
    <meta name="robots" content="all">
    <link rel="icon" type="image/png" href="icon-inventory.png">
    <title>StockiFy</title>
    <link href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="normalize.css">  
    <link rel="stylesheet" type="text/css" href="wt.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">      
    <script src="pace.js">pace.start();</script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
  <body oncontextmenu="return false">  
    <nav class="navbar sticky-top navbar-toggleable-sm navbar-inverse navbar-custom" id="navi">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/wtproj/wtindex.php"><img src="icon-inventory.png" alt="logo"><strong>StockiFy</strong></a>
            </div>
            <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="wtindex.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="feat/features.php">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="modal" href="#myModal">Log in</a></li>
                </ul>
                <button class="btn btn-primary my-2 my-sm-0" type="submit" onclick="window.location.href='signup.php'">Get Started</button>
            </div>
        </div>
    </nav>  
    <div class="modal fade log" id="myModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="clear1()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
        <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" id="lmail" value="" placeholder="email" required><br>
        <input type="password" class="form-control" name="pass" id="lpass" value="" placeholder="password" required><br>
        <p id="err" style="color:red;"><?php $error ?></p>    
        <p><a style="color:blue;" href="#">Forget Password?</a></p>
        <button type="button" class="btn btn-primary btn-block" name="login" onclick="log()" value="Log In">Log In</button>     
            </div>
          </form>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clear1()">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
                    function clear1(){document.getElementById("err").innerHTML=""; document.getElementById("lmail").value="";document.getElementById("lpass").value="";}
                    function log() {    
                    var e=document.getElementById("lmail").value;
                    var p=document.getElementById("lpass").value;    
                    $.ajax({
                        type: 'POST',
                        url: 'logg.php',
                        data: {mail1:e,pass1:p},
                        cache: false,
                        success: function(d){
                            if(d=="2")
                            document.getElementById("err").innerHTML="Account not confirmed";
                            else if(d=="1")
                            window.location.href='dashboard.php';    
                            else if(d=="3")
                            document.getElementById("err").innerHTML="Invalid Email or password";    
                        }
                    });
                    return false;    
                    }
                    </script>      
    <section style="background-image: url('This.png');background-position: center bottom;background-size: cover;background-repeat: repeat-x">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 intro">
                <h1 class="text-center">Inventory Management</h1>
                <div class="h1 ph text-center"></div>
                <div class="text-center"><p>With our powerful inventory control and order management features, you can increase sales and fulfill orders efficiently.</p></div> 
                <div class="text-center"><a href="signup.php" class="btn btn-primary">Get started for free</a></div>
                </div>
            </div>
        </div>
      </section>
          <div id="extra-contents">
        <h3>Run a better efficient business</h3>
        <div class="row" id="content-row">
            <div class="col-md-4 col-sm-6 col-xs-12 down right">
                <i class="fa fa-line-chart icon-images fa-5x" aria-hidden="true"></i>
                <h4>Increase sales</h4>
                <p>Add more selling channels to scale your business. We integrate with Amazon, eBay, Etsy and Shopify, so you can expand your selling opportunities.</p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 down">
                <i class="fa fa-check-square-o icon-images fa-5x" aria-hidden="true"></i>
                <h4>Better shipping options</h4>
                <p>We integrate with major shipping services, so you can get real-time shipping rates and latest in-transit info - all in one place.</p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 down left">
                <i class="fa fa-cogs icon-images fa-5x" aria-hidden="true"></i>
                <h4>Accounting and CRM integrations</h4>
                <p>Thanks to the AWS Services, you can easily sync your customers, orders and finances.</p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 up right">
                <i class="fa fa-shopping-cart icon-images fa-5x" aria-hidden="true"></i>
                <h4>Manage orders</h4>
                <p>Create Purchase Orders and Sales Orders in minutes. Manage your online and offline orders from one central location.</p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 up">
                <i class="fa fa-map-marker icon-images fa-5x" aria-hidden="true"></i>
                <h4>End-to-end tracking</h4>
                <p>Stay on top of your inventory at all times. Keep tabs on your stock right from order to delivery and never lose a product again.</p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 up left">
                <i class="fa fa-home icon-images fa-5x" aria-hidden="true"></i>
                <h4>Warehouse Management</h4>
                <p>Manage all your warehouses from a single control point. Keep track of your stock levels, move inventory between warehouses, generate reports for each of your warehouse from anywhere and anytime.</p>
            </div>
        </div>
    </div>
    
    <div id="partition" class="twoo">
        <div class="row">
            <div class="col-md-6 col-sm-8 partition-one">
                <div class="inside-partition-one">
                    <h1><b>Track Your Progress</b></h1>
                    <p>You can track your <b>Business</b></p><p>Any Platform</p><p>Anytime</p><p>Anywhere</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-4 partition-two">
                    <img class="partition-image slide-right" src="img1.png">
            </div>
        </div>
    </div>
    
    
    <div id="partition2">
        <div class="row">
            <div class="col-md-6 col-sm-4 partition-two">
                    <img class="partition-image progress slide-left" src="progress.png">
            </div>
            <div class="col-md-6 col-sm-8 partition-one">
                <div class="inside-partition-one">
                    <h1><b>Improve</b></h1>
                    <p>Watch your progress and come up with different strateges to grow your company</p><b><p>Bigger &amp; Better</p></b>
                </div>
            </div>
        </div>
    </div>
    

    
    <div id="partition" class="onee">
        <div class="row">
            <div class="col-md-6 col-sm-8 partition-one">
                <div class="inside-partition-one linevise">
                    <h1><b>Get Started</b></h1>
                    <p><i class="fa fa-sign-in" aria-hidden="true"></i> SignUp by creating a Account</p><p><i class="fa fa-envelope" aria-hidden="true"></i> Confirm your account via Email</p><p><i class="fa fa-check" aria-hidden="true"></i> That's IT!! You Are Good To Go</p><h2>Enjoy our Seamless Services at Your Fingertips</h2>
                </div>
            </div>
            <div class="col-md-6 col-sm-4 partition-two">
                    <div class="container1">
                        <h1>Sign Up</h1>
                        <div class="holder">		
                            <input type="checkbox" value="None" id="check" name="check" class="check-ios" onclick="setTimeout(myfun,1000);" autocomplete="off">
                            <label for="check"></label>
                            <span></span>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        function myfun(){
            if(document.getElementById('check').checked) {
                window.location.href = "signup.php";
            }
        }
    </script>
    
      <section id="price">
      <div id="pprice" class="text-center h1">Simple pricing. No surprises.</div>      
      <div class="container">
  <div class="row row-custom flex-items-xs-middle flex-items-xs-center">

    <!-- Pricing Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-center">
        <div class="card-header">
          <h3 class="display-2"><span class="currency">$</span>19<span class="period">/month</span></h3>
        </div>
        <div class="card-block">
          <h4 class="card-title"> 
            Basic Plan
          </h4>
          <ul class="list-group">
            <li class="list-group-item">Ultimate Features</li>
            <li class="list-group-item">Responsive Ready</li>
            <li class="list-group-item">Visual Composer Included</li>
            <li class="list-group-item">24/7 Support System</li>
          </ul>
          <a href="#" class="btn btn-cus btn-gradient-cus btn-gradient mt-2">Choose Plan</a>
        </div>
      </div>
    </div>

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-center">
        <div class="card-header">
          <h3 class="display-2"><span class="currency">$</span>29<span class="period">/month</span></h3>
        </div>
        <div class="card-block">
          <h4 class="card-title"> 
            Regular Plan
          </h4>
          <ul class="list-group">
            <li class="list-group-item">Ultimate Features</li>
            <li class="list-group-item">Responsive Ready</li>
            <li class="list-group-item">Visual Composer Included</li>
            <li class="list-group-item">24/7 Support System</li>
          </ul>
          <a href="#" class="btn btn-cus btn-gradient btn-gradient-cus mt-2">Choose Plan</a>
        </div>
      </div>
    </div>

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-center">
        <div class="card-header">
          <h3 class="display-2"><span class="currency">$</span>39<span class="period">/month</span></h3>
        </div>
        <div class="card-block">
          <h4 class="card-title"> 
            Premium Plan
          </h4>
          <ul class="list-group">
            <li class="list-group-item">Ultimate Features</li>
            <li class="list-group-item">Responsive Ready</li>
            <li class="list-group-item">Visual Composer Included</li>
            <li class="list-group-item">24/7 Support System</li>
          </ul>
          <a href="#" class="btn btn-cus btn-gradient-cus btn-gradient mt-2">Choose Plan</a>
        </div>
      </div>
    </div>

  </div>
</div>
</section>
<section id="footer">
        <div class="row justify-content-center">
            <div class="col-sm-8" id="footlinks">
                <div class="row">
                <div class="col-sm-3">    
                <ul style="list-style:none;">
                    <li><strong>Resources</strong></li>
                    <li><a href="#">Technical Support</a></li>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="pricing.php">Plans and pricing</a></li>
                </ul>
                </div>
                <div class="col-sm-2"></div>    
                <div class="col-sm-3">
                <ul style="list-style:none;">
                    <li><strong>StockiFy</strong></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Site Status</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
                </div>
            </div>
            </div>
            <div class="col-sm-4">    
                <h5>Subscribe for our newsletter</h5>
                <form method="post">
                <div class="input-group input-group-sm has-feedback">
                    <input type="email" id="subsmail" class="form-control" name="emaill" placeholder="enter the address..." required>
                    <span class="input-group-btn">
                        <button type="button" name="sub" class="btn btn-primary" onclick="subs()">Go!</button>
                    </span>
                </div>
               </form>
                    <script>
                    function subs() {
                    var e=document.getElementById("subsmail").value;
                    var data1='mail1='+e;   
                    $.ajax({
                        type: 'POST',
                        url: 'subs.php',
                        data: data1,
                        cache: false,
                        success: function(d){
                                document.getElementById("subsmail").value="";        
                                var x = document.getElementById("snackbar");
                                x.className = "show";
                                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                        }
                    });
                    return false;    
                    }
                    </script>
                <p><strong>Connect with us </strong><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></p>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-lg-12 down">
            <hr>
            <ul style="list-style:none;" id="footl">
                <li style="float:left;"><a href="wtindex.html"><img src="icon-inventory.png"><strong>StockiFy</strong></a></li>
                <li style="float:left;"><a href="#">Privacy Policy</a></li>
                <li style="float:left;"><a href="#">Terms of use</a></li>
                <li style="float:left;"><a href="#">Trust &amp; Security</a></li>
                <li style="float:left;"><a href="#">Copyright &copy; 2017</a></li>
            </ul>
            </div>
        </div>
    </section>
    <div id="snackbar">Thanks For Subscribing !</div>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="project.js"></script>
    <script src="jquery.fadethis.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script>$(document).ready(function() {
				$(window).fadeThis({
				});
			});</script>
    <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
    </body>
</html>
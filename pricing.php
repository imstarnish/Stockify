<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Anish Jain">  
    <meta name="description" content="Anish Jain Web Developer site">
    <meta name="robots" content="all">
    <link rel="icon" type="image/png" href="icon-inventory.png">
    <title>StockiFy | Pricing</title>
    <link href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="normalize.css">  
    <link rel="stylesheet" type="text/css" href="pricing.css">
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
                <a class="navbar-brand" href="wtindex.php"><img src="icon-inventory.png" alt="logo"><strong>StockiFy</strong></a>
            </div>
            <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="wtindex.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="feat/features.php">Features</a></li>
                    <li class="nav-item active"><a class="nav-link" href="pricing.html">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="modal" href="#myModal">Log in</a></li>
                </ul>
                <button class="btn btn-primary my-2 my-sm-0" type="submit" onclick="window.location.href='signup.php'">Get Started</button>
            </div>
        </div>
    </nav>
       <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
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
        <div id="error"></div>
        <input type="email" class="form-control" name="email" id="lmail" value="" placeholder="email" required><br>
        <input type="password" class="form-control" name="pass" id="lpass" value="" placeholder="password" required><br>
        <p id="err" style="color:red;"></p>    
        <p><a style="color:blue;" href="#">Forget Password?</a></p>
        <button type="button" class="btn btn-primary btn-block" onclick="log()" value="Log In">Log In</button>     
            </div>
          </form>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="clear1()" data-dismiss="modal">Close</button>
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
                            window.location.href='welcome.php';    
                            else if(d=="3")
                            document.getElementById("err").innerHTML="Invalid Email or password";    
                        }
                    });
                    return false;    
                    }
                    </script>     
      
    <div class="container">
  <div class="row rowc flex-items-sm-middle flex-items-sm-center">

    <!-- Table #1  -->
    <div class="col-sm-12 col-lg-4">
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
          <a href="#" class="btn btn1 btng btn-gradient mt-2">Choose Plan</a>
        </div>
      </div>
    </div>

    <!-- Table #1  -->
    <div class="col-sm-12 col-lg-4">
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
          <a href="#" class="btn btn1 btng btn-gradient mt-2">Choose Plan</a>
        </div>
      </div>
    </div>

    <!-- Table #1  -->
    <div class="col-sm-12 col-lg-4">
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
          <a href="#" class="btn btn1 btng btn-gradient mt-2">Choose Plan</a>
        </div>
      </div>
    </div>  
  </div>
</div>
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
                <form>
                <div class="input-group input-group-sm">
                    <input type="email" class="form-control" placeholder="enter the address...">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-primary">Go!</button>
                    </span>
                </div>
               </form>
                <p><strong>Connect with us </strong><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></p>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-lg-12 down">
            <hr>
            <ul style="list-style:none;" id="footl">
                <li style="float:left;"><a href="wtindex.php"><img src="icon-inventory.png"><strong>StockiFy</strong></a></li>
                <li style="float:left;"><a href="#">Privacy Policy</a></li>
                <li style="float:left;"><a href="#">Terms of use</a></li>
                <li style="float:left;"><a href="#">Trust &amp; Security</a></li>
                <li style="float:left;"><a href="#">Copyright &copy; 2017</a></li>
            </ul>
            </div>
        </div>
    </section>  
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
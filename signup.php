<!DOCTYPE HTML>
<html>
<head>
    <link rel="icon" type="image/png" href="icon-inventory.png">
    <title>Stockify | Sign Up </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        input[type="submit"]{
            margin: auto;
            display: block;
        }
        body{
            background: #f5f5f5;
        }
        .error{
            color: red;
        }
        p{
            text-align: center;
        }
        #signupd{
            margin:2% 30%;
            box-shadow: 0 0px 65px #57e2b2;
            border-radius: 10px;
            padding: 3%;
            background-color: white;
        }
        .signups{
            margin: 0 44%;
            font-weight: bolder;
        }
    </style>
</head>	
<body class="landing">
    <?php
    
// define variables and set to empty values
$nameErr = $emailErr = $compErr = $passErr = $cpassErr = $signErr = $msg= "";
$name = $email = $comp = $pass = $cpass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nameErr = $emailErr = $compErr = $passErr = $cpassErr= "";
  $name = test_input($_POST["name"]);
  if (empty($name)) {$nameErr="Name is required";}
  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed"; 
  }
  $email = test_input($_POST["email"]);
  $comp = test_input($_POST["company"]);
  if (empty($comp)) {$compErr="Company name is required";}
  if (!preg_match("/^[a-zA-Z ]*$/",$comp)) {
  $compErr = "Only letters and white space allowed"; 
  }
  $pass = test_input($_POST["pass"]);
  if (empty($pass)) {$passErr="Password is required";}
  if ($pass != "") {$passErr=checkPassword($pass);}
  $cpass = test_input($_POST["cpass"]);
  if ($cpass != $pass) {$cpassErr="Password not matched";}
  if (($nameErr == "") && ($compErr == "") && ($emailErr == "") && ($passErr == "") && ($cpassErr == "")) {
      $signEr=SignUp($name,$comp,$email,$pass);
      if($signEr=="1"){$signErr="Email id already registered";}
      else{$msg=$signEr;}
  }
}
   
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function checkPassword($pwd) {
    $pErr="";
    if (strlen($pwd) < 8) {
        $pErr = "Password must have atleast 8 digits, 1 letter a-z and 1 number 0-9";
        return ($pErr);
    }

    if (!preg_match("#[0-9]+#", $pwd)) {
        $pErr = "Password must have atleast 8 digits, 1 letter a-z and 1 number 0-9";
        return ($pErr);
    }

    if (!preg_match("#[a-zA-Z]+#", $pwd)) {
        $pErr = "Password must have atleast 8 digits, 1 letter a-z and 1 number 0-9";
        return ($pErr);
    }     
}
function NewUser($name,$comp,$email,$pass) { 
    include('config.php');
    $hash = md5( rand(0,1500) );
    $password = password_hash($pass, PASSWORD_DEFAULT );
    $query = "INSERT INTO users (id,name,company,mail_id,pass,hash,status) VALUES (null,'$name','$comp','$email','$password','$hash','0')";
    $data = mysqli_query ($db,$query);
    if($data) {
        $to = $email; // Send email to our user
        $subject = 'Email Confirmation'; // Give the email a subject 
        $message = '
 
Thanks for signing up!
Your account has been created, you can login after you have activated your account by pressing the url below.
 

 
Please click this link to activate your account:
http://hakunamatata.tech/stockify/verify.php?email='.$email.'&hash='.$hash.'
 
';
                     
        $from = 'From: StockiFy' . "\r\n";
        mail($to, $subject, $message, $from);
        return;
    }
    else{echo mysqli_error($db);}
    }
    function SignUp($name,$comp,$email,$pass) {
        include('config.php');
         $query ="SELECT * FROM users WHERE mail_id ='$email'";
          $result = mysqli_query($db,$query);
         if(mysqli_num_rows($result) > 0) { 
            $msg="1";
             return ($msg);
         } else { NewUser($name,$comp,$email,$pass); $msg='Your account has been made, <br /> Please verify it by clicking the activation link that has been sent to your email.'; return($msg); }  }
?>
    <a href="javascript:history.back()">&larr; Back</a>
    <br><br><p><?php echo $msg;?></p><br><div><h2 class="signups"><img src="icon-inventory.png" alt="logo"><strong>StockiFy</strong></h2></div>
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group has-feedback" id="signupd">
        <input type="text" name="name" class="form-control" value="" placeholder="Full Name" required><span class="error"><?php echo $nameErr;?></span><br>
        <input type="text" name="company" class="form-control" placeholder="Company Name" required><span class="error"><?php echo $compErr;?></span><br>
        <input type="email" name="email" class="form-control" value="" placeholder="email" required><span class="error"><?php echo $emailErr;?></span><br>
        <input type="password" name="pass" value="" class="form-control" placeholder="password" required><span class="error"><?php echo $passErr;?></span><br>
        <input type="password" name="cpass" class="form-control" placeholder="Confirm password" required><span class="error"><?php echo $cpassErr;?></span><br>
        <input type="submit" name="sign_up" class="btn btn-primary" value="Sign Up"><br>
        <span class="error"><?php echo $signErr;?></span>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        </div>
    </form>
</body>
</html>
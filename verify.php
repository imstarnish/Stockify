<html>
<head>
    <title>Stockify</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>
        p{
            text-align: center;
        }
        ul{
            margin: auto;
            display: block;
        }
    </style>
</head>	
<body class="landing">
    <br><br><br><br><br><br><hr>
<?php
    include('config.php');
    if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = mysqli_real_escape_string($db,$_GET['email']); // Set email variable
    $hash = mysqli_real_escape_string($db,$_GET['hash']); // Set hash variable
    $search = mysqli_query($db,"SELECT mail_id, hash, status FROM users WHERE mail_id='".$email."' AND hash='".$hash."' AND status='0'"); 
    $match  = mysqli_num_rows($search);           
    if($match > 0){
        // We have a match, activate the account
        $result=mysqli_query($db,"UPDATE users SET status='1' WHERE mail_id='".$email."' AND hash='".$hash."' AND status='0'");
        if($result){
        echo '<p>Your account has been activated, You can now login</p><br><ul class="actions"><li><a href="login.php" class="button">Log In</a></li></ul>';
    }else{
        // No match -> invalid url or account has already been activated.
        echo '<p>The url is either invalid or you already have activated your account.</p>';
    }
                 
}else{
    // Invalid approach
    echo '<p>Invalid approach, please use the link that has been send to your email.</p>';
}}
?>
    <hr>
    </body>
</html>
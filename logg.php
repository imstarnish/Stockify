<?php
      function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}     if($_SERVER["REQUEST_METHOD"] == "POST") {      
      $email =test_input($_POST['mail1']);
      $mypassword =test_input($_POST['pass1']);
      include("config.php");
      session_start();    
      $sql = "SELECT * FROM users WHERE mail_id ='$email'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      if(mysqli_num_rows($result) > 0) {  
      if($row["status"]=='1') {     
      $hash=$row["pass"];
      if(password_verify($mypassword,$hash)) {
      $_SESSION['login_user'] = $email;
        echo "1";  
      }else {
         echo "3"; 
      }
      }
      else if($row["status"]==0){echo "2";}      
      }
      else {echo "3";}
      }
?>
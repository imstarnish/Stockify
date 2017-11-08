<?php 
                        
                    $mail=$_POST["mail1"];
                    include("config.php");
                    $query = "INSERT INTO newsletterSubscribers (id,email_id) VALUES (null,'$mail')";
                    $data = mysqli_query ($db,$query);
                    if($data) {
                    echo "1";
                    }   
                    ?>
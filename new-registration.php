<?php

$con= mysqli_connect("localhost","root","","london");
session_start();



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sentMail($name,$email){
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';
    require 'phpmailer/Exception.php';

    $mail = new PHPMailer(true);

    try {                    //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'amilcp47@gmail.com';                     //SMTP username
        $mail->Password   = 'ldvlhajubdhlylrc';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('amilcp47@gmail.com', 'OMG GIMNASIO'); // website name
        $mail->addAddress($email);     //Add a recipient
        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Welcome to Omg Gimnasio'; //subject
        
        $mail->Body    = " <h2>Hi $name </h2> <br> You Are Successfully,  Register Your account in Omg Gimnasio,
        welcome in Omg Gimnasio and now use your email Id and Password to login and book your slot in our gym, <br>
        Thanks for Registration.";
       
        ;
    
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }

}

//TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $weight = $_POST['weight'];
    $password = $_POST['pass'];

    $query = "SELECT *FROM users where email='$email'";  

    $result = mysqli_query($con,$query);
        if($result){
                        if(mysqli_num_rows($result) > 0){
                            echo "<script>
                                alert('email is already taken please enter other email id');
                                window.location.href = 'registration.php';
                            </script>";
                        }

                        else{
                            $query = "INSERT INTO users VALUES('$name', '$email', '$weight', '$password')";

                           $result = mysqli_query($con,$query);
                           if($result && sentMail($name, $email)){
                               echo "<script>
                                   alert('registration successfully');
                                   window.location.href = 'login.php';
                               </script>";    
                           }
                           
                           else{
                            echo "<script>
                                    alert('registration Failed');
                                    window.location.href = 'registration.php';
                                </script>"; 
                           }

                        }
          }

else{
    echo "<script>
                            
                                alert('query failed');
                                window.location.href = 'registration.php';
                            </script>";
}
}


if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['pass'];

        if($email == "admin8785@gmail.com" && $password == "amil8785"){
                
                echo"<script>
                window.location.href = './admin/remove_users.php';
                </script>";
        }
        else{
            $query = "SELECT *FROM users where email='$email' and password='$password' ";

            $result = mysqli_query($con, $query);

                    if($result){
                                if(mysqli_num_rows($result) == 1){
                                        $user = mysqli_fetch_assoc($result);
                                        $_SESSION['username'] = $user['name'];
                                        $_SESSION['email'] = $user['email'];
                                        $_SESSION['loggedin'] = true;

                                        echo "<script>
                                                alert('Login successfully');
                                                window.location.href = 'index.php';
                                        </script>";
                                }

                                else{
                                    echo "<script>
                                                alert('Invalid email or password');
                                                window.location.href = 'login.php';
                                        </script>";
                                }
                    }
                    else{
                        echo "<script>
                        alert('Query failed');
                        window.location.href = 'login.php';
                    </script>";
                    }
        }
}




// update query start

if(isset($_POST['reset'])){
            $email = $_POST['email'];
            $password = $_POST['pass'];

            $query = "SELECT *FROM users where email='$email'";

            $result=mysqli_query($con, $query);
                            if($result){
                                            if(mysqli_num_rows($result) == 1){
                                                    $query = "UPDATE users SET password='$password' where email='$email' ";
                                                    
                                                    mysqli_query($con, $query);
                                                    echo "<script>
                                                             alert('password updated successfully');
                                                             window.location.href = 'login.php';
                                                    </script>";
                                            }

                                            else{
                                                echo "<script>
                                                alert('user does not exits');
                                                window.location.href = 'registration.php';
                                       </script>";
                                            }
                            }
}
else{
    echo "<script>
    alert('query failed');
    window.location.href = 'forgot.php';
</script>";

}

?>
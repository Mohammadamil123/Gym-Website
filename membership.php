<?php
$con = mysqli_connect("localhost","root","","london");
session_start();



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sentMail($name,$email,$package){
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
        $mail->Body    = "<h2>Hello $name </h2> ,Thanks for  joining the gym! your slot has successully
                            booked in our gym.<br>you can come and fill your package fees and start gym.
                            your membership package is  <b>$package </b>.<br><br><br><br><br> Thanks for joining.
                            visit again.";
        
    
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }

}

if(isset($_SESSION['loggedin'])) {
    
    $name = $_POST['full'];
    $email = $_POST['mail'];
    $weight = $_POST['kg'];
    $height = $_POST['cm'];
    $package = $_POST['op'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $address = $_POST['add'];

    $join_date = date("d F, Y");

    if($package == "One Month Rs 1000"){
        $exp_date = date(" d F, Y", strtotime("+30 days"));
    }
    else if($package == "three Month Rs 3500"){
        $exp_date = date(" d F, Y", strtotime("+90 days"));
    }
    else if($package == "Half Yearly Rs 5000"){
        $exp_date = date(" d F, Y", strtotime("+182 days"));
    }
    else{
        $exp_date = date(" d F, Y", strtotime("+365 days"));
    }  

    $packageId = rand(10000,99999);



           $query = "INSERT INTO member VALUES('$packageId','$name','$email','$weight','$height','$package','$city','$state','$address','$join_date','$exp_date', 'Active')";

          
          
           $result = mysqli_query($con,$query);
            if ($result && sentMail($name,$email,$package)) {
                echo"<script>
                alert('You get the membership');
                window.location.href='index.php';
                </script/>";
            }

            else{
                echo"<script>
                alert('You get the membership');
                window.location.href='index.php';
                </script/>";
            }
               
}
else{
    echo "<script>
        alert('Please login and get membership');
        window.location.href='login.php';
    </script>";
}


?>

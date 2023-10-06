<?php

$con = mysqli_connect('localhost','root','','london');
session_start();



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sentMail($name, $email, $sub, $message){
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';
    require 'phpmailer/Exception.php';

    $mail = new PHPMailer(true);

    try {                    //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'pathanamil92@gmail.com';                     //SMTP username
        $mail->Password   = 'sompvrcrfeqzjgaf';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('pathanamil92@gmail.com', 'OMG GIMNASIO'); // website name
        $mail->addAddress('amilcp47@gmail.com');     //Add a recipient
        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $sub; //subject
        
        $mail->Body    = "
        <br><br>
            <table>
                <tr>
                    <th> Name </th>
                    <td> $name </td>
                </tr>
                <tr>
                    <th> Email </th>
                    <td> $email </td>
                </tr>
            </table>
            <br>
            <strong> Query Message </strong>
            <p> $message </p>
            <br><br>
            Thanks for contacting with us..
        ";
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }

}


if(isset($_SESSION['loggedin'])){

            if(isset($_POST['cont'])){


                    $name = $_POST['first'];
                   $email = $_POST['emails'];
                     $sub = $_POST['sub'];
                    $message = $_POST['mess'];

    if(sentMail($name, $email, $sub, $message)){
        echo "
            <script>
                alert('Your query has been sent successfully');
                window.location.href = './contact.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Internet Connection Error! || Server down');
                window.location.href = './contact.php';
            </script>
        ";
    }
}
}

else{
    echo "<script>
        alert('Please login');
        window.location.href='login.php';
    </script>";
}


?>
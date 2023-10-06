<?php
    $con = mysqli_connect("localhost","root","","london");

        $email = $_GET['eid'];
    

        $query = "DELETE FROM users where email='$email'";
  

        if(mysqli_query($con,$query)){
            echo "<script>
                window.location.href='./remove_users.php';
           </script>";
        }
        else{
            echo "<script>
                alert('user not removed!');
                window.location.href='../remove_users.php';
           </script>";
        }  
        // "../phpmailer/Exception.php"

?>
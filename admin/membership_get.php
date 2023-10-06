<?php

    $con = mysqli_connect("localhost","root","","london");
    $email = $_GET['eid'];

    $query = "DELETE FROM member where email='$email'";

    mysqli_query($con,$query);


    echo "<script>
        window.location.href = 'membership_get.php';
    </script>";

?>
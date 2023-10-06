<?php

    $con = mysqli_connect("localhost","root","","london");

    $pacakage_id = $_GET['pid'];

    $query = "UPDATE member SET status='Expired' WHERE pid='$pacakage_id'";

     if(mysqli_query ($con,$query)){

        echo"<script>alert('This pacakage has been expired');
        window.location.href='membership_details.php?pid=$pacakage_id';
        </script>";
       
     }

     else{
        echo"<script>alert('Query failed');</script>";
     
     }
  
     mysqli_close($con);

?>
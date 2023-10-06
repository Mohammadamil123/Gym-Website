<?php
   
    $con = mysqli_connect("localhost","root","","london");

    $pid = $_GET['pid'];
       $query = "UPDATE member SET status='Cancelled' Where pid='$pid'";

       if (mysqli_query ($con,$query)) {
                echo"
                <script>
                    alert('your membership canceled successfully');
                    window.location.href='./mypack.php';
                </script>";
                }
                else{
                    echo"
                <script>
                    alert('your membership not canceled ');
                </script>";
                }
       

?>
<?php

$con = mysqli_connect("localhost","root","","london");

$name = $_POST['full'];
$weight = $_POST['kg'];
$height = $_POST['cm'];
$package = $_POST['op'];
$pid = $_POST['pid'];


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

    $query = "UPDATE member SET name='$name', weight='$weight', height='$height', package='$package', join_date='$join_date', expire_date='$exp_date', status='Active'  WHERE pid='$pid' ";

    if(mysqli_query ($con,$query)){
        echo"
        <script>
        alert('Your pacakage renewed successfully')
        window.location.href='./mypack.php';
        </script>";

    }
    else{
        echo"<script>alert('Query failed')</script>";
    }
    

     mysqli_close($con);
?>
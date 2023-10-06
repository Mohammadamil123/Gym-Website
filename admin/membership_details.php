<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership_details</title>

    <link  rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">


</head>
<body>
<?php

    $con = mysqli_connect("localhost","root","","london");
    $pid = $_GET['pid'];

    $query = "SELECT *FROM member WHERE pid='$pid'";
    
    $result = mysqli_query($con,$query);

    if($result){
                if(mysqli_num_rows($result) > 0){
                    $row =(mysqli_fetch_assoc($result));
                
         ?>

         


                    <div class="container">

                    <div class="row">
                    <div class="text-end"><a href="./membership_user.php"  class="btn text-light mb-4 bg-secondary mt-2"><i class="bi bi-arrow-90deg-left"></i> Back</a></div>
                    </div>
                    
                            <div class="row justify-content-center ">
                          
                                        <div class="col-md-8 mt-1">
                                            
                                                    <ul class="list-group">

                                                            <li class="list-group-item"><b>Name : </b><?php echo $row['name']?></li>
                                                            <li class="list-group-item"><b>Package id : </b><?php echo $row['pid']?></li>

                                                            <li class="list-group-item"><b>Email id :</b> <?php echo $row['email']?></li>
                                                            <li class="list-group-item"><b>Package :</b> <?php echo $row['package'] ?></li>
                                                            <li class="list-group-item"><b>Address : </b> <?php echo $row['address'] ?></li>
                                                            <li class="list-group-item"><b>Height (cm) :</b> <?php echo $row['height'] ?></li>
                                                            <li class="list-group-item"><b>Weight (kg) :</b> <?php echo $row['weight'] ?></li>
                                                            <li class="list-group-item"><b>Joining_Date :</b> <?php echo $row['join_date'] ?></li>
                                                            <li class="list-group-item"><b>Expiring_Date :</b> <?php echo $row['expire_date'] ?></li>
                                                            <li class="list-group-item"><b>City :</b> <?php echo $row['city'] ?></li>
                                                            <li class="list-group-item"><b>State :</b> <?php echo $row['state'] ?></li>
                                                            <li class="list-group-item"><b>Status :</b> <?php echo $row['status'] ?></li>
                                                    </ul>

                                                    
                                        <?php

                                            if ($row['status'] == "Active") {
                                                echo" <a href='membership_expire.php?pid=$row[pid]' class='btn btn-outline-danger mt-4 mb-4' name='expire'>Expire</a> ";
                                            }
                                            else{               
                                                echo"";
                                            }
                                        ?>

                                                 
                                        </div>


                                        
                            </div>
                    </div>                          
         <?php

                }

            }

            else{
                        echo "No more records found";
            }
         ?>



  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    

        </body>
        </html>


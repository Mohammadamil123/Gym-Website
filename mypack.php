<?php
session_start();
?>
<html>
<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <title>My package</title>
    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/77e2590ce0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <style>
            .content{
                /* padding:10% 0; */
                text-align:left;
                background-color:whitesmoke;
            }
            #uno{
               list-style:none;
            }
            .diet{
              list-style: none;
              text-decoration:none;

            }
           
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3" id="navbar">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="images/omg.png" width="60" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="training.php">Training</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
                <a class="nav-link text-white" href="join.php">Join Us</a>
        </li>
        
        <?php
          if(isset($_SESSION['loggedin'])){
            echo "
            <li class='nav-item'>
              <a class='nav-link text-dark rounded bg-warning' href='logout.php'>Logout - $_SESSION[username]</a>
             
            </li>
            ";
          }
          else{
            echo"
            <li class='nav-item'>
              <a class='nav-link text-white' href='login.php'>Login</a>
            </li>
            ";
          }
        ?>
       <?php

            if (isset($_SESSION['loggedin'])) {
              echo "
              <li class='nav-item'>
                <a class='nav-link text-white ' href='mypack.php'>My Package</a>
               
              </li>
              ";
              
            }

          ?>
        </nav> 
            <?php
                $con = mysqli_connect("localhost","root","","london");

                $query = "SELECT *FROM member where email='$_SESSION[email]' and status='Active'";

                $result = mysqli_query($con,$query);

                if(mysqli_num_rows($result) > 0){
                  $data = mysqli_fetch_assoc($result);
                  ?>

                  <div class="container">
                      <div class="row  justify-content-center mt-5">
                            <div class="col-md-7 mt-1">
                                 

                                  <ul class="list-group">
                                      <li class="list-group-item" name="email"> <b>Email :</b> <?php echo $data['email'] ?></li>
                                      <li class="list-group-item"><b>Name :</b>    <?php echo $data['name'] ?></li>
                                      <li class="list-group-item"><b>Package Id :</b>  <?php echo $data['pid'] ?></li>
                                      <li class="list-group-item"><b>Package Details :</b> <?php  echo $data['package']  ?> </li>
                                      <li class="list-group-item"><b>Weight  (kg) :</b> <?php echo $data['weight'] ?></li>
                                      <li class="list-group-item"><b>Height (cm) :</b><?php echo $data['height'] ?></li>
                                      <li class="list-group-item"><b>Permanent address  :</b> <?php echo $data['address'] ?></li>
                                      <li class="list-group-item"><b>Joining Date : </b><?php echo $data['join_date'] ?></li>
                                      <li class="list-group-item"><b>Expiring Date :</b><?php echo $data['expire_date'] ?></li>
                                      <li class="list-group-item"><b>City : </b><?php echo $data['city'] ?></li>
                                      <li class="list-group-item"><b>State : </b><?php echo $data['state'] ?></li>
                                      <li class="list-group-item" name="status"><b>Status :  </b><?php echo $data['status'] ?></li>
                                    </ul>

                                    <a href="./cancel_package.php?pid=<?php echo $data['pid'] ?>" class="btn-outline-danger btn mt-5 me-4" name="cancel"><b>Cancel</b></a>
                            </div>
                            
                  <?php
                }
                else{
                  echo "<h3 class='text-center my-4'> you don't have any Active Package!</h3>";
                }
                  ?>
                    <div class="text-center">
                    <a href="./diet.php" class="btn btn-success mb-4 mx-2">Follow Diet</a>
                    <a href="./view_past.php?email=<?php echo $_SESSION['email'] ?>" class="btn btn-warning mb-4 mx-2">view old packages</a>
                  </div>
                      </div>
                  </div>


<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
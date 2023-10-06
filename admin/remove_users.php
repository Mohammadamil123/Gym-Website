<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>remove_user</title>

    <link  rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">

    <style>
      @media (max-width:768px) {
        .mytable{
          width: 800px;
        }
      }
    </style>
</head>
<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3" id="navbar">
  <div class="container">
    <a class="navbar-brand" href=""><img src="../images/omg.png" width="60" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" name="panel" href="">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="membership_user.php">Membership</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-white bg-warning " href="../index.php">Admin Logout</a>
        </li>
      </ul>
      </ul>
    </div>
  </div>
</nav>  

<div class="container">
          <div class="row justify-content-center">

                <div class="col-md-10 mt-5 overflow-auto">
                  <table class="table table-warning table-striped text-center mytable">
                    <thead> <h1 class="text-center mb-3">Registered Users</h1>
                      <tr>
                        <th >Sr No.</th>
                        <th >Name</th>
                        <th >Email</th>
                        <th >Weight</th>
                        <th >Password</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $con = mysqli_connect("localhost","root","","london");
                        $query = "SELECT *FROM users";

                        $result = mysqli_query($con,$query);

                        if(mysqli_num_rows($result) > 0){
                            $a=0;         
                            while ($row = mysqli_fetch_assoc($result)  ) {
                              
                      ?>   
                           
                        <tr>
                           
                          <td ><?php echo ++$a; ?></td>
                          <td><?php echo $row['name'] ?></td>
                          <td><?php echo $row['email'] ?></td>
                          <td><?php echo $row['weight'] ?></td>
                          <td><input type="password" value="<?php echo $row['password'] ?>" class="text-center w-50" disabled></td>
                          <td><a href="./delete_admin.php?eid=<?php echo $row['email'] ?>" class="btn btn-danger">Remove User</a></td>
                        </tr>

                      <?php

                            }
                             mysqli_close($con);
                        }
                        else{
                          echo "<h3> No Registered Users!</h3>";
                        }
                      ?>
                    </tbody>
                  </table>

                </div>

          </div>  
  <div>


 

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>


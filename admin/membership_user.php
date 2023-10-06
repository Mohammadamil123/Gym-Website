<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">

    
    <style>
      @media (max-width:780px){
        .mytable{
          width:1000px;
        }
      }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3" id="navbar">
  <div class="container">
  <a class="navbar-brand" href=""><img src="../images/omg.png" width="60" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" name="panel" href="./remove_users.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./membership_user.php">Membership</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white bg-warning " href="../index.php">Admin Logout</a>
        </li>

      </ul>
      </ul>
    </div>
  </div>
</nav>
        <!-- </table> -->

        <div class="container">
                <div class="row justify-content-center mt-5">
                    <h2 class="text-center">Membership</h2>
                    <div class="col-md-12 col-10 mt-4 overflow-auto">
                            <table class="table table-warning table-striped text-center mytable">
                                <thead>
                                    <tr>
                                        <th >Sr No.</th>
                                        <th >Name</th>
                                         <th>Package</th>
                                         <th>Join_Date</th>
                                         <th>Action</th>
                                          
                                         
                                    </tr>
                                </thead>  
                                <tbody>
                                    <?php
                                        $con = mysqli_connect("localhost","root","","london");

                                        $query = "SELECT *FROM member";

                                        $result = mysqli_query($con,$query);
                                            $a=0;
                                        if(mysqli_num_rows($result) > 0){

                                            while($row = mysqli_fetch_assoc($result)){
                                        
                                    ?>
                                    <tr>
                                            <td><?php echo ++$a?></td>    
                                           <td> <?php echo $row['name']?> </td>
                                           <td> <?php echo $row['package']?></td>
                                           <td> <?php echo $row['join_date']?></td>
                                           <td> <a href="membership_details.php?pid=<?php echo $row['pid'] ?>" class="btn btn-outline-dark"  name="delete">View More..</a> </td>
                                        
                                    </tr>

                                    <?php
                                            }
                                            mysqli_close($con);
                                        }
                                        else{
                                            echo "NObody get the membership";
                                        }       
                                       ?> 
                                </tbody> 
                            </table>
                    </div>
                </div>
        </div>
    
        
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
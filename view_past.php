<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>past</title>

    
    <link  rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
</head>
<style>
  .sta{
    background-color:blue;
  }
</style>
<body>

<div class="container">
          <div class="row justify-content-center">

                <div class="col-md-10 mt-5 overflow-auto">
                <h2 class="text-center mb-5">Past packages</h2> 
                    <div class="text-end"><a href="./mypack.php"  class="btn text-light mb-4 bg-secondary"><i class="bi bi-arrow-90deg-left"></i> Back</a></div>
                        

                  <table class="table table-warning table-striped text-center mytable">
                    <thead> 
                      <tr>
                        <th >Sr No.</th>
                        <th >Package_name</th>
                        <th >Package_id</th>
                        <th>Join_date</th>
                        <th>Expire_date</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $con = mysqli_connect("localhost","root","","london");
                        $email=$_GET['email'];
                        $query = "SELECT *FROM member where email='$email' and status!='Active'";


                        $result = mysqli_query($con,$query);

                        if(mysqli_num_rows($result) > 0){
                            $a=0;         
                            while ($row = mysqli_fetch_assoc($result)  ) {
                              
                      ?>   
                           
                        <tr>
                           
                          <td ><?php echo ++$a; ?></td>
                          <td><?php echo $row['pid']?></td>
                          <td><?php echo $row['package'] ?></td>
                          <td><?php echo $row['join_date'] ?></td>
                          <td><?php echo $row['expire_date'] ?></td>
                          <td id="sta"><?php echo $row['status'] ?></td>
                          <td> <?php echo $row['status']=='Expired' ? "<a href='./renew.php?pid=$row[pid]' class='btn btn-primary btn-sm' >Renew</a>" : "--"  ?> </td>
                        </tr>

                      <?php

                            }
                             mysqli_close($con);
                        }
                        else{
                          echo "<h3> No old packages!</h3>";
                        }
                      ?>
                    </tbody>
                  </table>

                </div>

          </div>  
  <div>


 
 
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>  
</body>
</html>
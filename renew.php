<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>joining</title>

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/77e2590ce0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
      .error{
        color:red;
      }
    </style>
</head>
<body>

        <!-- form start -->
            <div class="container">
                    <div class="row justify-content-center my-4 mt-5">
                    <?php
                        $con = mysqli_connect("localhost","root","","london");
                        $pid = $_GET['pid'];
                        $query = "SELECT name,weight,height,package FROM member WHERE pid='$pid'";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_assoc($result);

                    ?>
                            <div class="col-md-4 col-10 rounded mt-5" id="learn-content">
                                   <form action="renew_package.php" method="post" onsubmit="return join()">
                                     <h3 class="head text-center py-2" >Renew Your membership</h3>
                                     <input type="text" class="form-control" name="full" value="<?php echo $row['name'] ?>"  placeholder="Name*" id="name">
                                     <p id="nameerror" class="error"></p>

                                     <input type="text" class="form-control" name="kg" value="<?php echo $row['weight'] ?>" placeholder="Your current weight (lbs)*" id="weight">
                                     <p id="weighterror" class="error"></p>

                                   

                                     <input type="text" class="form-control"  name="cm" value="<?php echo $row['height'] ?>" placeholder="Your current Height (lbs)*" id="height">
                                     <p id="heighterror" class="error"></p>
                                    
                                     <select name="op" class="se mb-3 rounded py-2" style="width:100%" required>
                                        <option value="">Select Your Package</option>
                                        <option value="One Month Rs 1000">One Month Rs 1000</option>
                                        <option value="three Month Rs 3500">three Month Rs 3500</option>
                                        <option value="Half Yearly Rs 5000">Half Yearly Rs 5000</option>
                                        <option value="Yearly Rs 8000"> Yearly Rs 8000</option>
                                     </select>
                                     <input type="hidden" name="pid" value="<?php echo $pid ?>">
                                     <input type="submit" value="Renew" name="renew" class="btn mbtn text-white bg-dark my-3  px-4" >
                                   </form>

                            </div>
                        <?php
                            mysqli_close($con);
                        ?>
                    </div>
            </div>
            
        <!-- form end -->
        
   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>


                function join() {
                    let result=true;
                    let name=document.getElementById('name');
                  
                    let weight=document.getElementById('weight');
                    let height=document.getElementById('height');
                    let select=document.getElementById('select');
                 

                    if (name.value.length == 0) {
                        document.getElementById('nameerror').innerHTML = "Name is required";
                        result=false;
                    }
                    else if(name.value.length < 6){
                        document.getElementById('nameerror').innerHTML = "Name is required minimum 6 characters";
                        result=false;
                    }
                   

                   else if(weight.value.length == 0){
                    document.getElementById('weighterror').innerHTML = "weight is required";
                    result=false;
                   }
                   else if(height.value.length == 0){
                    document.getElementById('heighterror').innerHTML = "height is required";
                    result=false;
                   }
                 
                   else if(address.value.length == 0){
                    document.getElementById('addresserror').innerHTML = "Address is required";
                    result=false;
                   }
                  

                 
                    return(result);
                }

    </script>
     
      

           
  

</body>
</html>
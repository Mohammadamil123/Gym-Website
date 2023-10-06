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
    <!-- navbar start -->
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
                <a class="nav-link text-white" href="join.php">Join us</a>
              </li>

              <?php
          if (isset($_SESSION['loggedin'])) {
            echo "  <li class='nav-item'>
             <a class='nav-link  text-dark rounded bg-warning' href='logout.php'>Logout - $_SESSION[username]</a>
          </li>
          ";
          }
          else{
            echo " <li class='nav-item'>
            <a class='nav-link text-white' href='login.php'>Login</a>
          </li>";
          }
         ?> 
            </ul>
          </div>
        </div>
      </nav>
      <!-- navbar-end -->
        <!-- form start -->
            <div class="container">
                    <div class="row justify-content-center my-4">
                            <div class="col-md-4 col-10 rounded" id="learn-content">
                                   <form action="membership.php" method="post" onsubmit="return join()">
                                     <h3 class="head text-center py-2" >JOIN US</h3>
                                     <input type="text" class="form-control" name="full"  placeholder="Name*" id="name">
                                     <p id="nameerror" class="error"></p>

                                     <input type="text" class="form-control"  name="mail" placeholder="Email*" id="email">
                                     <p id="emailerror" class="error"></p>

                                     <input type="text" class="form-control" name="kg" placeholder="Your current weight (lbs)*" id="weight">
                                     <p id="weighterror" class="error"></p>

                                   

                                     <input type="text" class="form-control"  name="cm" placeholder="Your current Height (lbs)*" id="height">
                                     <p id="heighterror" class="error"></p>

                                     <!-- <input type="date" class="form-control mb-3" name="dt"  id="joindate" required> -->
                                    

                                     <select name="op" class="se mb-3 rounded py-2" style="width:100%" required>
                                        <option value="">Select Your Package</option>
                                        <option value="One Month Rs 1000">One Month Rs 1000</option>
                                        <option value="three Month Rs 3500">three Month Rs 3500</option>
                                        <option value="Half Yearly Rs 5000">Half Yearly Rs 5000</option>
                                        <option value="Yearly Rs 8000"> Yearly Rs 8000</option>
                                     </select>

                                     <select name="city" class="se mb-3 rounded py-2" style="width:100%" required>
                                         <option value="">Select Your city</option>
                                         <option value="Vadodara">Vadodara</option>
                                    </select>

                                    <select name="state" class="se mb-3 rounded py-2" style="width:100%" required>
                                         <option value="">Select Your state</option>
                                         <option value="Gujarat">Gujarat</option>
                                    </select>
                                   
                                  

                                     <!-- <input type="text" class="form-control" placeholder="Address*" id="address"> -->
                                     <textarea id="address" cols="30"  name="add" rows="3" class="form-control"  placeholder="Address"></textarea>
                                     <p id="addresserror" class="error"></p>
                                     <!-- <input type="text" class="form-control" placeholder="Area"><br> -->

                                     <input type="submit" value="JOIN" name="hello" class="btn mbtn text-white bg-dark my-3  px-4" >
                                   </form>

                            </div>
                    </div>
            </div>
            
        <!-- form end -->
        
   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>


                function join() {
                    let result=true;
                    let name=document.getElementById('name');
                    let email=document.getElementById('email');
                    let weight=document.getElementById('weight');
                    let height=document.getElementById('height');
                    let select=document.getElementById('select');
                    let address=document.getElementById('address');

                    if (name.value.length == 0) {
                        document.getElementById('nameerror').innerHTML = "Name is required";
                        result=false;
                    }
                    else if(name.value.length < 6){
                        document.getElementById('nameerror').innerHTML = "Name is required minimum 6 characters";
                        result=false;
                    }
                   
                   else if(email.value.length == 0){
                    document.getElementById('emailerror').innerHTML = "Email is required";
                        result=false;
                   }
                   else if(email.value.indexOf('@')<=0){
                    document.getElementById('emailerror').innerHTML = "@ is wrong position";
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
                   else if(address.value.length < 10){
                    document.getElementById('addresserror').innerHTML = "Address required 10  minimum character";
                    result=false;
                   }

                 
                    return(result);
                }

    </script>
     
      

           
  

</body>
</html>
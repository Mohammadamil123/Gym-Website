<?php
  session_start();
  if(isset($_SESSION['loggedin'])){
    echo "
      <script>
        window.location.href = 'index.php';
      </script>
    ";
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
                <a class="nav-link text-white" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="join.php">Join Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- navbar-end -->
        <!-- form start -->
        <div class="container"> 
            <div class="row justify-content-center mt-3">
                  <div class="col-md-4 col-10 mt-3 py-4 rounded" id="learn-content">
                   <form action="new-registration.php" method="post" onsubmit="return lock()"> 

                      <h3 class="login text-center  mb-4">LOGIN FORM</h3>
                      <input type="text" class="form-control" name="email" placeholder="Email*" id="emaillogin">
                      <p id="emailerror" class="error"></p>

                      <input type="password" class="form-control" name="pass" placeholder="Password*" id="passerror">
                      <p id="pass" class="error"></p>

                      <a href="forgot.php" class="forgot text-decoration-none" style="color:black;">Forgot Password?</a><br>

                      <input type="submit" name="login" class="btn mbtn bg-dark text-white mt-4" value="LOGIN"><br><br>

                      <a href="registration.php" class="text-decoration-none" style="color:black;">Not a member? Register Here</a>
                    </form>  
                  </div>
            </div>
        </din>
            
        <!-- form end -->
        
   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
        function lock() {
              let result=true;
         
              let email=document.getElementById('emaillogin');
              let passlogin=document.getElementById('passerror');

                    if (email.value.length == 0) {
                        document.getElementById('emailerror').innerHTML = "email is required";
                        result=false;
                    }
                    else if(email.value.indexOf('@')<=0){
                        document.getElementById('emailerror').innerHTML = "@ is wrong position";
                        result=false;
                    }

                    else if(passlogin.value.length == 0){
                      document.getElementById('pass').innerHTML = "password is required";
                        result=false;
                    }
                    else if(passlogin.value.length < 6){
                      document.getElementById('pass').innerHTML = "password must be 6 digit";
                        result=false;
                    }
                    else{
                      document.getElementById('pass').innerHTML = "";
                        result=true;
                    }
                   
                 
              return(result);
        }
</script>
  

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot_password</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/77e2590ce0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    
    <link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
      .error{
        color: red;
      }
      </style>
</head>
<body>
    <!-- nav start -->
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
<!-- nav end -->
    
<div class="container">
                <div class="row justify-content-center mt-4">
                            <div class="col-md-4 col-10 mt-5 py-4 rounded" id="left" >
                                  <form action="new-registration.php" method="post" onsubmit="return password()">

                                    <h3 class="for text-center mb-4">Reset Password</h3>

                                    <input type="text" class="form-control" name="email" placeholder="Email*" id="emaillogin">
                                    <p id="emailerror" class="error"></p>
                                    <input type="password" class="form-control" name="pass" placeholder="Password*" id="pass-reset">
                                    <p id="password-error" class="error"></p>
                                    <input type="password" class="form-control" placeholder=" Confirm Password*" id="confirm-password">
                                    <p id="con" class="error"></p>
                                    <input type="Submit" name="reset" class="btn text-white bg-dark mt-4" value="Reset">
                                  </form>
                            </div>
                </div>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
        let result=true;
        let email=document.getElementById('emaillogin');
        let pass=document.getElementById('pass-reset');
        let confirm=document.getElementById('confirm-password');
        
        function password() {
          if (email.value.length == 0) {
                document.getElementById('emailerror').innerHTML = "Email is required";
                result=false;
              }
               else if(email.value.indexOf('@')<=0){  //patan@
                document.getElementById('emailerror').innerHTML = "@ is wrong position";
                result=false;
              }
              else{
                document.getElementById('emailerror').innerHTML = "";
                result=true;
              }

          if (pass.value.length == 0) {
            document.getElementById('password-error').innerHTML = "Enter your password";
            result=false;
          }
          else if (pass.value.length < 6) {
            document.getElementById('password-error').innerHTML = "Password required 6 digit";
            result=false;
          }
          else{
            document.getElementById('password-error').innerHTML = "";
            result=true;
          }
           if(confirm.value.length == 0 ){
            document.getElementById('con').innerHTML = "please confirm your password";
            result=false;
          }
          
          
          else if(pass.value!=confirm.value){
            document.getElementById('con').innerHTML = "password is not same";
            result=false;
          }
          else if(pass.value == confirm.value){
            // document.getElementById('con').innerHTML = "password is not same";
            // result=false;
            // alert('reset sucessfully');
          }
          
          return(result);
        }
        
</script>
</body>
</html>
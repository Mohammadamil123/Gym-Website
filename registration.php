<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/77e2590ce0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <style>
      .error{
        text-align:left;
        color:red;
      }
    </style>
</head>
<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php "><img src="images/omg.png" width="60" alt=""></a>
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

      <!-- form start -->
            <div class="container">
                    <div class="row justify-content-center mt-2" >
                        <div class="col-md-4 col-10 mt-4 py-4 text-center my-3 rounded" id="left">
                          <form action="new-registration.php" method="post" onsubmit="return registration()">    
                                <h3 class="hr  mb-4 ">REGISTRATION FORM</h3>

                                <input type="text" class="form-control" name="name" placeholder="Enter your name*"  id="name">
                                <p id="nameerror" class="error"></p>
                                
                                <input type="text" class="form-control" name="email" placeholder="Email*" id="emaillogin">
                                <p id="emailerror" class="error"></p>

                                 <input type="text" class="form-control" name="weight" placeholder="Enter your current weight" id="weight">
                                  <p id="weighterror" class="error"></p>

                                 <input type="password" class="form-control" name="pass" placeholder="Create password" id="create">
                                <p id="createerror" class="error"></p> 

                                   

                                <input type="password" class="form-control" name="confirm" placeholder="Confirm password" id="confirm">
                                <p id="confirmerror" class="error"></p> 

                               
                              <input type="submit" name="submit" class="btn bg-dark text-white" value="Register">
                          </form>
                            </div>
                    </div>
            </div>
       <!-- <form end> -->

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  
        function registration() {
          let result=true;
          let name=document.getElementById('name');
          let email=document.getElementById('emaillogin');
          let weight=document.getElementById('weight');
          let create=document.getElementById('create');
          let confirm=document.getElementById('confirm');
         

         
            if (name.value.length == 0) {
                document.getElementById('nameerror').innerHTML = "name is required";
                result=false;
            }
            else if(name.value.length < 6){
              document.getElementById('nameerror').innerHTML = "name required minimum six character";
                result=false;
            }

             else if(email.value.length == 0){
              document.getElementById('emailerror').innerHTML = "email is required";
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

             else if(create.value.length == 0){
                document.getElementById('createerror').innerHTML = "create your password";
                result=false;
             }
             else if(create.value.length < 6){
                document.getElementById('createerror').innerHTML = "password required six digit";
                result=false;
             }
             
             else if(confirm.value.length == 0){
                document.getElementById('confirmerror').innerHTML = "please confirm password";
                result=false;
             }
             else if(confirm.value.length < 6){
              document.getElementById('confirmerror').innerHTML = "confirm password required six digit";
                result=false;
             }
             else if(create.value!=confirm.value){
              document.getElementById('confirmerror').innerHTML = "password is not same";
                result=false;
             }
             else{
              document.getElementById('confirmerror').innerHTML = "";
                result=true;
             }

            
            return(result);

        }

</script>
</body>
</html>
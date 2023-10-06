<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/77e2590ce0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
      .error{
        color:red;
        margin-top:0;
      }
      .about-img{
        width:100%;
        height:60vh;
        object-position:top;
        object-fit:cover;
        
      }
      @media (max-width:760px){
        .about-img{
          height:30vh;
        }
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
                <a class="nav-link text-white" href="join.php">Join Us</a>
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
       
      </ul>
    </div>
  </div>
</nav>

    <!-- navbar end -->
    <!-- carsule start -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/learn-3.jpeg" class="d-block w-100 about-img"  style="ht:50vh"; alt="...">
    </div>
    
  </div>
   
</div> 
    <!-- carsule end -->

    <!-- form-start -->
           <div class="container-flud">
                    <div class="row justify-content-evenly" id="left">
                      <div class="col-md-12   text-center mt-4">
                            <h2>Contact Us </h2>
                      </div>
                          <div class="col-md-6  col-10 pt-5 pb-5">
                                  <form action="contactmessage.php" method="post" onsubmit="return validation()">
                                  
                                    <input type="text" class="form-control" name="first" placeholder="Full Name*" id="name"> 
                                    <p id="nameerror" class="error"></p>

                                   <input type="text" class="form-control" name="emails" placeholder="Email*" id="email" > 
                                   <p id="emailerror" class="error"></p>

                                    <input type="text" class="form-control" name="sub" placeholder="Subject" id="subject">
                                    <p id="subjecterror" class="error"></p>

                                   <textarea id="message" placeholder="Message" name="mess" class="form-control mes ps-2" cols="67" rows="5"></textarea> 
                                    <p id="messerror" class="error"></p>
                                    
                                    <input type="submit" name="cont" class="form-control mt-3 contact-btn bg-dark text-white">
                                </form>
                          </div>
                          <div class="col-md-4 col-10 pt-5 pb-5 ">
                          <i class="bi bi-telephone-fill icon"></i>  <h5>Got questions? Let's Talk</h5> <br>
                          <p>9724027564</p>
                          <p>8140590964</p>
                          <p>8392328988</p>
                          <i class="bi bi-envelope icon"></i> <h5>Need help? Email us pathanamil@gmail.com</h5>
                          
                          </div>
                    </div>
           </div>
    <!-- form end -->

    <!-- map start -->
        <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-10 my-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59052.43785951063!2d73.14137009427465!3d22.324258139072708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc9456fa954ad%3A0x263dffdb85937b2a!2sOMG%20GIMNASIO!5e0!3m2!1sen!2sin!4v1670957189031!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
        </div>
    <!-- map end -->
    <div class="container-fluid">
  <div class="row">
    <div class="col-md-12 text-white text-center py-3 bg-dark  lead" >
      <p class="lead">Copyright &copy; 2022 - All rights reseved</p>
    </div>
  </div>
</div> 



<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
   function validation() {
        let result=true;
        let name=document.getElementById('name');
        let email=document.getElementById('email');
        let sub=document.getElementById('subject');
        let message=document.getElementById('message');


        if (name.value.length == 0) {
          document.getElementById('nameerror').innerHTML = "Enter your name";
          result=false;
        }
        else if(name.value.length < 6) {
          document.getElementById('nameerror').innerHTML = "Name required six character";
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

        else if(sub.value.length == 0){
          document.getElementById('subjecterror').innerHTML = "Subject is required";
          result=false;
        }

        else if(message.value.length == 0){
          document.getElementById('messerror').innerHTML = "Message is required";
          result=false;
        }
        
        return(result);
      }       




    
  
</script>
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/77e2590ce0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <style>
      .about-img{
        width:100%;
        height:60vh;
        object-position:bottom;
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
     <!-- navbar -->
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
      </ul>
    </div>
  </div>
</nav>
<!-- navbar ed -->

          <div >
              <img src="images/training-6.jpeg" class="about-img">
          </div>

<!-- about-us -->
<div class="container">
    <div class="row pt-5 col-pt-1">
                <div class="col-md-12 text-center">
                    <h1>About</h1>
                    <p>11 Gym Social Media Post Ideas To Keep Your Customers Hyped
                        Does my gym need social media? ...
                        Nutrition tips. ...
                        Exercise explainers. ...
                        Before and after posts. ...
                        Team introductions. ...
                        User-generated content. ...
                        Motivational quotes and images. ...
                        Challenges.
                    </p>
                </div>
    </div>
</div>
<div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center pt-5 pb-3">
                    <h1>Different Workout</h1>
                </div>
                        <div class="col-md-3 col-11 about-column ">
                            <img src="images/training-3.jpg" alt="" class="img-fluid main">
                            <h3>Chest Workout</h3>
                            <p class="lead">
                            Incline Bench Press. ...
                            Cable Chest Flys. ...
                            Triceps Dips.
                            </p>
                            <a href="learn.php" class="btn btn-dark">Read More</a>
                        </div>
                        <div class="col-md-3 col-11 about-column">
                            <img src="images/training-4.jpg" alt="" class="img-fluid main" >
                            <h3>Pack</h3>
                            <p class="lead">The term " six-pack " 
                                pack has beautiful part of body
                            </p>
                            <a href="learn.php" class="btn btn-dark">Read More</a>
                        </div>
                        <div class="col-md-3 col-11 about-column pb-5">
                            <img src="images/training-5.jpg" alt=""class="img-fluid main" >
                            <h3>Shoulder</h3>
                            <p class="lead">Dumbbell front raise. ...
                                Dumbbell lateral raise. ...</p>
                                <a href="learn.php" class="btn btn-dark">Read More</a>
                        </div>
            </div>
</div>

<!-- circle -->
<div class="container-fluid">
            <div class="row pt-4 pb-3 about-fitness  justify-content-center" >
                        <div class="col-md-12 col-11 text-center pt-4">
                            <h1>About Fitness First</h1>
                            <p>premium and high end fitness clubs with state of the art machines & facilities<br>
                                presence in vadodara in india.
                            </p>
                        </div>
                    
                        <div class="col-md-3 mt-5 col-11 main">
                            <img src="images/ladies.avif" alt="" class="img-fluid">
                            <p class="about-counter pt-3 lead">In omg gym there ladies section facility available.Exercise releases endorphins which improve your mood, prevent pain, and fight depression. Women who strength train commonly report feeling more confident and capable as a result of their training.</p>
                        </div>
                        <div class="col-md-3 mt-5 col-11 main">
                            <img src="images/changing.avif" alt="" class="img-fluid">
                            <p class="about-counter pt-3 lead">Fitting-rooms, or "dressing-rooms", are rooms where people try on clothes, such as in a department store. The rooms are usually individual rooms in which a person tries on clothes to determine fit before making a purchase.</p>
                        </div>
                        <div class="col-md-3 mt-5 col-11 main">
                            <img src="images/counter.jpg" alt="" class="img-fluid">
                            <p class="about-counter pt-3 lead">People are more likely to join if they're getting a discount on their membership fees, which means you'll have new members coming through your door. You can use a referral program to entice your current gym members to encourage their friends to join.</p>
                        </div>
                  
            </div>
</div>

<!--  -->

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 text-white text-center py-3 bg-dark lead" id="footer">
      <p>Copyright &copy; 2022 - All rights reseved</p>
    </div>
  </div>
</div> 


<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn_page</title>

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/77e2590ce0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <style>
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

      <!-- nav end -->

      <!-- carsule start -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/personal.jpeg" class="w-100 about-img"  alt="..." >
    </div>
    
  </div>
   
</div> 
<!-- carsuloe end -->

<!-- column start -->
        <div class="container-fluid">
                    <div class="row justify-content-center py-4">
                            <div class="col-md-3 text-center py-4" >
                            <i class="bi bi-kanban-fill icon"></i>
                            <h3 class="learn-head py-2">Progression</h3>
                            <p>he principle of progression is the idea that as your body adapts to your exercise routine, you have to increase the intensity to continue to see enhanced fitness. </p>
                            </div>
                            <div class="col-md-3 text-center py-4">
                            <i class="bi bi-server icon"></i>
                            <h3 class="learn-head py-2">Workout</h3>
                            <p>The most popular form of vigorous exercise at the moment is no question, HIIT or high intensity interval training. "High Intensity Interval Training is the best bang </p>
                            </div>
                            <div class="col-md-3 text-center py-4">
                            <i class="bi bi-wifi icon"></i>
                              <h3 class="learn-head py-2">Wifi</h3>
                              <p>Fortunately, most modern gyms offer free Internet access in the form of public Wi-Fi networks, which is a plus if you must always be online.</p>
                            </div>
                    </div>
        </div>

<!-- column start -->

<!-- img -->
<div class="container-fluid">
            <div class="row justify-content-evenly" id="learn-content">
                        <div class="col-md-5 col-11 py-4 main" >
                            <img src="images/learn-8.avif" class="img-fluid" alt="">
                        </div>
                    <div class="col-md-5 mt-5">
                        <h2 > We Are Here To dream!<br> Our Team Is here Surve You</h2><br><br>
                        <p class="lead">The most effective fitness websites are full of positive testimonials and progression pictures. Even huge brands rely on getting customers by showing regular people's results. Use a mix of written testimonials and pictures or videos.Having a website for your fitness center is a great way to reach people who may not know about you</p>
                    </div>
            </div>
</div>

<!--  -->
<!-- membership -->

<div class="container-fluid">
        <div class="row py-5 justify-content-evenly" >
              <div class="col-md-5">
                  <h2 class="heading-learn text-center">Get Best Membership</h2><br><br>
                 
                  <i class="bi bi-chevron-right"></i>
                  <p>Sample text.Click to select the textbox. click again or duouble click to start editing the text. Duls aute irure dolor in reprehendent in voluptate velt esse cillum dolore eu fugiat nulls pariatur</p><br>

                  
                  <i class="bi bi-chevron-right"></i> <p>Sample text.Click to select the textbox. click again or duouble click to start editing the text. Duls aute irure dolor in reprehendent in voluptate velt esse cillum dolore eu fugiat nulls pariatur</p><br>

                 
                  <i class="bi bi-chevron-right"></i>  <p>Sample text.Click to select the textbox. click again or duouble click to start editing the text. Duls aute irure dolor in reprehendent in voluptate velt esse cillum dolore eu fugiat nulls pariatur</p>
              </div>
              <div class="col-md-5 mt-3 main">
                <img src="images/learn-11.avif" class="img-fluid"  alt="">
              </div>
        </div>
</div>
<!-- strength start-->
<div class="container-fluid">
      <div class="row justify-content-center py-4" id="strength">
        <div col-md-12>
            <h5 class="str text-center py-4">Success Usually Comes To Those <br> Who Are Too To Be Looking For It."</h5>
            </div>    
            <div class="col-md-3">
              <img src="images/learn-7.jpg" alt="" class="img-fluid  main py-3">
              <p>The best tool for shoulder strength work is the barbell,because you can load the most weight. for this goal use a combination of shoulder presses.</p>
            </div>
            <div class="col-md-3">
              <img src="images/learn-2.jpg" alt=""  class="img-fluid  main py-3">
              <p>Water helps keep your body hydrated and is responsible for allowing it to function during exercise. it regulates your body temperature.</p>
            </div>
            <div class="col-md-3">
              <img src="images/learn-3.jpeg" alt=""  class="img-fluid  main py-3">
              <p>A default is a compound exercise where a weighted barbell starts on the floor.This is know as "dead weight".it is lifted with no momentum.  </p>
            </div>
            </div>
      </div>
</div>
<!-- strength end -->

<!-- strength-2 start -->
    <div class="container-fluid">
            <div class="row py-4 justify-content-center">
                <div class="col-md-12">
                  <h5 class="str text-center py-3">
                    Strength Does Not Come From <br> Physical Capacity
                  </h5>
                </div>
                  <div class="col-md-3">
                    <img src="images/learn-6.jpeg"  class="img-fluid  main py-3" alt="">
                    <p>A deadlift is a compound exercise where a weighted barbell starts on the floor. This is know as "dead weight". it is lifted with no momentum.</p>
                  </div>
                  <div class="col-md-3">
                    <img src="images/learn-3.jpeg" class="img-fluid  main py-3"  alt="">
                    <p>For a new gym goes or those who haven't been for a while, l10kg dumbells is a sufficientweight to notice some differencein your apperance initially.</p>
                  </div>
                 
                  <div class="col-md-3">
                    <img src="images/learn-4.jpeg"  class="img-fluid  main pt-3" alt="">
                    <p><p>A deadlift is a compound exercise where a weighted barbell starts on the floor. This is know as "dead weight". it is lifted with no momentum.</p></p>
                  </div>
            </div>
    </div>

<!-- strength-2 start -->
<!-- footer start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 bg-dark text-white text-center py-3">
    <p class="lead">Copyright &copy; 2022 - All rights reseved</p>
    </div>
  </div>
</div>
<!-- footer end -->




<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
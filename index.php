<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <title>home page</title>
    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/77e2590ce0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
 
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
          if(isset($_SESSION['loggedin'])){
            echo "
            <li class='nav-item'>
              <a class='nav-link text-dark rounded bg-warning' href='logout.php'>Logout - $_SESSION[username]</a>
             
            </li>
            ";
          }
          else{
            echo"
            <li class='nav-item'>
              <a class='nav-link text-white' href='login.php'>Login</a>
            </li>
            ";
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
    </div>
  </div>
</nav>

<!-- carousel -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active main-header">
      <img src="images/learn-6.jpeg" class="d-block w-100 header-img" alt="...">
      <div class="h-content text-white d-none d-md-block">
        <h1>If u want To  B a Success Hard <br> Work  is Only Option</h1>
        <p class="lead my-4">There needs to be a wide variety of fitness machines and exercise accessories that  and enough <br>  of the “popular” machines (like treadmills), so there is no need for time limits on specific equipment </p>
        <a href="learn.php" class="btn btn-dark">Learn More</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/gym_back.jpg" class="d-block w-100 header-img" alt="...">
       <div class="h-content text-white d-none d-md-block">
        <h1>You are ready to get fit strong <br> & motivated anything</h1>
        <p class="lead my-4">it's time for change. At united Front Community Fitness westand together
          in unity<br>. we live better together.    
      </p>
        <a href="learn.php" class="btn btn-dark">Learn More</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/rop.jpeg" class="d-block w-100 header-img" alt="...">
       <div class="h-content text-white d-none d-md-block">
       <h1>Your future is created by what <br> you do today not tomorrow.</h1>
        <p class="lead my-4">Handstands work your core and improve balance while giving you the benefits of increased  circulation and<br> lymph flow. You'll engage your whole body while using your shoulders, arms, core, and back. </p>
        <a href="learn.php" class="btn btn-dark">Learn More</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <div class="container my-3 ">
    <div class="row ">
      <div class="col-12 mb-5  mt-3 text-center">
        <h1 >Your Future is Created by What <br> You do Today Not Tomorrow</h1>
      </div>
    </div>

    <div class="row justify-content-center align-items-center pb-5">
    <div class="col-md-5 mb-4">
      <img src="images/training-2.jpg" class="img-fluid main">
    </div>
    <div class="col-md-5 mb-4">
      <p class="lead">at alta active,we belive that taking care of your body is paramount. our group fitness classes,
        recovery-focused amenities, results focused services.resistance training increase muscle strength by making your muscle
        work against a weight or force. </p>

        <a href="learn.php" class="btn btn-outline-dark mt-4">Learn More</a>
    </div>
    </div>
  </div>

  <!-- faqs start -->
  <div class="container-fluid faq">
        <div class="row mt-4 mb-5 justify-content-center" >
            <div class="col-md-12 text-center">
              <h1 class="h pt-4">FAQ'S</h1>
            </div>
            <div class="col-md-10 my-5">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        How often of day should  exercise
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Each week adults need 150 minutes of moderate-intensity physical activity and 2 days of muscle strengthening activity, according to the current Physical Activity Guidelines for Americans.
      As long as you're not pushing yourself too hard or getting obsessive about it, working out every day is fine. Make sure it's something you enjoy without being too strict with yourself, especially during times of illness or injury.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        What time of day is best to work out
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Between 2 p.m. and 6 p.m., your body temperature is at its highest. This may mean you'll be exercising during the window of time your body is most ready, potentially making it the most effective time of day to work out. First of all, you’ll get your workout done and over with before you even start your day. That means you’ll begin your day with endorphins, and a good feeling knowing you accomplished something before 9 a.m. that some people won’t accomplish all day</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        How long should my works out me
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">The ideal workout duration can vary significantly depending on the person, their goals, their preferences, and the exercise type. For weightlifting and bodyweight strength training, 45–60 minutes per session may suffice. Meanwhile, cardiovascular and calisthenic training may be better if performed for 30–60 minutes. Try starting with short workouts that are 30 minutes or less. As you feel your strength building, add a couple more minutes every week. </div>
    </div>
  </div>
</div>
            </div>
        </div>
  </div>
  <!-- faqs end -->

  <!-- protein start -->

    <div class="container">
        <div class="row justify-content-center ">
              <div class="col-md-12">
                <h1 class="head text-center mb-5">Maintain Your Diet</h1>
              </div>

              <div class="col-md-3  col-11 main " style="height:500px;">
              <img src="images/protein-1.jpeg" alt="" class="img-fluid">
              <p class="lead py-4 px-3 maintain" > Vegetables: Broccoli, spinach, leafy salad greens, tomatoes, green beans, cucumber, zucchini, asparagus, peppers, and mushrooms. have prtein. Seeds and nuts: Almonds, walnuts, sunflower seeds. </p>
            
              </div>
              <div class="col-md-3  col-11  main " style="height:500px;">
              <img src="images/protein-2.jpg" alt="" class="img-fluid">
              <p class="lead py-4 px-3 maintain  ">Milk is an excellent addition for bodybuilding routines. It contains high quality and easily absorbable protein, carbohydrates, and micronutrients (calcium, phosphorus, and B vitamins). </p>
            
              </div>
              <div class="col-md-3  col-11 main" style="height:600px;">

              <img src="images/protein-4.jpg" alt="" class="img-fluid">
              <p class="lead py-4 px-3 maintain">Protein is found throughout the body—in muscle, bone, skin, hair, and virtually every other body part or tissue. It makes up the enzymes that power many chemical reactions. every body builder have take protein. </p>
            
              </div>
        </div>
    </div>

  <!-- protein end -->

  <div class="container-fluid">
      <div class="row   pb-4 justify-content-center text-center faq" > 
        <div class="col-md-3 col-11 pt-3">
        <i class="bi bi-bicycle py-3 icon" style="font-size:50px;"></i>
          <h1>Fitness</h1>
          <p>We believe that the combination of physical , social, and emotional fitness 
            has  transformative power. We build strong human beings on the inside and out, and we <br>
          </p>
        </div>
        <div class="col-md-3  col-11  pt-3">
        <i class="bi bi-headset-vr py-3 icon" style="font-size:50px;"></i>
        <h1>Innovation</h1>
        <p>We are committed to moving forward with relentless persistence and open mind. We push the limits
          of what we think is possible and never settle for the status quo. </p>
        </div>
        <div class="col-md-3  col-11  pt-3">
        <i class="bi bi-people-fill py-3 icon" style="font-size:50px;"></i>
        <h1>Teamwork</h1>
        <p>We work together in a collaborative, <br>encoraging, and respectful manner. We are a powerful team 
        in which the sum of all parts is <br>greater than one single member.</p>
        </div>
      </div>  
  </div>

  <!-- icons end -->

  <div class="container-fluid" id="cf">
        <div class="row pt-3 pb-5 justify-content-center text-center">
              <div class="col-md-12 pt-5 pb-3">
                      <h1>Our Team</h1>
                      <div class="line text-center"></div>
              </div>

              <div class="col-md-3 team pt-5 col-11">
                <img src="images/roman-3.jpg" alt="" >
                <h4>Roman Reigns</h4>
                <p>Every person have wish to build their body but some reasons they not
                  build their body. My life have has been same line but we nat give yhe give-up.
                  Do the hak work. Today i am American professional wrestler
                </p>

              </div> 
              <div class="col-md-3 team pt-5 col-11">
                <img src="images/ob.jpg" alt="" >
                <h4>Obaid Khan</h4>
                <p>Every person have wish to build their body but some reasons they not  
                  build their body. My life have has been same line but we nat give yhe give-up.
                  Do the hak work. Today i am Hyderabad body bulider.
                </p>
              </div>
              <div class="col-md-3 team pt-5 col-11">
                <img src="images/jhon-3.jpg" alt="" >
                <h4>Jhon Cena</h4>
                <p>Every person have wish to build their body but some reasons they 
                  not build their body. My life have has been same line but we not give yhe give-up.
                  Do the hard work. Today i am World  professional wrestler Champion.
                </p>
              </div>
        </div>
  </div>
  <div class="container-fluid" >
        <div class="row justify-content-center py-5 faq">
          <div class="col-md-12 py-2 text-center ex" >
            <h1 class="exe pb-3">Gym Exercise</h1>
          </div>
              <div class="col-md-3 image col-11 pb-4 main">
                <img src="images/learn-6.jpeg" alt="" class="img-fluid">
              </div>
              <div class="col-md-3 image col-11 pb-4 main">
                  <img src="images/running.jpg" alt="">
              </div>
              <div class="col-md-3 image col-11 pb-4 main">
                  <img src="images/running-1.jpg" alt="">
              </div>
        </div>
        <div class="row justify-content-center pb-4 faq">
          
              <div class="col-md-3 image pb-4 col-11 main">
                <img src="images/rop.jpeg" alt="" class="img-fluid">
              </div>
              <div class="col-md-3 image pb-4 col-11 main">
                  <img src="images/training-2.jpg" alt="">
              </div>
              <div class="col-md-3 image pb-4 col-11 main">
                  <img src="images/training-3.jpg" alt="">
              </div>
              <!-- <a href="" class="btn btn-light">Learn More</a> -->
        </div>

</div>      
  <!-- footer -->

<div class="container-fluid">
      <div class="row">
        <div class="col-md-12 py-3 bg-dark text-center text-white">
           <p class="lead">Copyright &copy; 2022 - All rights reseved</p>
        </div>
      </div>
</div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

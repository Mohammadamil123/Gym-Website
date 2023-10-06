<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>training_page</title>
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
        <!-- <li class="nav-item">
          <a class="nav-link text-white" href="login.php">Login</a>
        </li> -->
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
    </div>
  </div>
</nav>

<div>
<div >
              <img src="images/contact-2.jpeg" class="about-img">
          </div>

</div>

<!-- pra -->

<div class="container">
        <div class="row pt-4 pb-4">
                <div class="col-md-12 train-upper col-11">
                    <h2 class="heading py-3">Training Explained</h2>
                    <p class="lead">To get the full effect from these workouts, you need to stick to the four-digit tempo code for each exercise. The first digit indicates how long in seconds you take to lower the weight, the second how long you pause at the bottom of the move, the third how long you take to lift the weight, and the final digit how long you pause at the top. Keep your wits about you, because not every exercise begins with you lowering the weight, in which case you need to follow the third number rather than the first.
                    The accumulated time under tension increases your heart rate to burn fat and break down muscle tissue so its rebuilt bigger and stronger. Keep each rep smooth and controlled so your muscles  not momentum do the work.
                    </p>

                    <h2 class="heading py-3">How To Warm Up</h2>
                    <p class="lead">Ahead of tackling any of the workouts in this plan we highly recommend completing this gym warm-up routine.
                        It involves doing seven moves like downward dog walk-outs and lunges with rotation that warm up muscles all over the body, then going into workout-specific exercises. The simplest way to do the latter is to do one or two sets of each exercise from the workout you’re about to do, using either very light dumbbells or an unloaded barbell.</p>
                </div>
        </div>
</div> 
<!-- pra end -->

<!-- personal training -->
<div class="container-fluid">
    <div class="row personal pt-5 pb-5  justify-content-center" >
        <div class="col-md-12 mb-3 text-center">
            <h1>Personal Training</h1>
        </div>
            <div class="col-md-3 my-2 main col-11" >
                <img src="images/personal-6.jpg" alt="" class="img-fluid ">
                <p class="m px-3 py-2 ">But for an average person, even 50 to 100 push-ups should be enough to maintain a good upper body, provided it is done properly. You can start with 20 push-ups, but do not stick to this number. It is important to keep increasing the number to challenge your body.</p>
            </div>

            <div class="col-md-3  my-2 main col-11" >
            <img src="images/personal.jpeg" alt="" class="img-fluid">
            <p class="m px-3 py-2">You should perform 1-4 chest exercises per workout, with the most optimal range being 2-3 different chest exercises in a single training session. Why? For most lifters, performing any more than 3-4 various movements can result in diminished returns..</p>
            </div>
            <div class="col-md-3  my-2 main col-11" >
            <img src="images/personal-4.jpg" alt="" class="img-fluid">
            <p class="m px-3 py-2">Thighs is importance part of the human body If you have weight to lose or if you're carrying extra body fat, squats (and other lower body strength exercises) can help reduce weight and/or body fat, making your butt and thighs comparatively smaller, tighter, more toned a</p>
            </div>

            
    </div>
</div>

<!-- personal end -->

<!-- videos start -->
<div class="container-fluid">
      <div class="row py-5 justify-content-center">
        <div class="col-md-12 pb-4 col-10 text-center">
          <h1>Training Videos </h1>
        </div>
         <div class="col-md-3 col-11 pt-3 pb-3" >
          
               <iframe width="560" class="img-fluid" height="315" src="https://www.youtube.com/embed/aVPFeoY44X4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  style=height:200px; allowfullscreen></iframe>
             <div class="video">
              <h3 class="heading py-2 px-2" >Shoulder</h3> 
              <!-- <p class="pra px-2" >The shoulder is made up of two joints, the acromioclavicular joint and the glenohumeral joint. The acromioclavicular joint is where the acromion, part of the shoulder blade (scapula) and the collar bone (clavicle) meet. 
                   </p> -->
               </div>  
         </div>

            <div class="col-md-3 col-11 pt-3 pb-3  training-videos";>
          
               <iframe width="560" class="img-fluid" height="315" src="https://www.youtube.com/embed/kUdnyhlvzbo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  style=height:200px; allowfullscreen></iframe>
              <div class="video"> 
                  <h3 class="heading py-2 px-2">Chest</h3>
                   <!-- <p class="pra px-2" >The chest is a muscle group you might have heard referred to by one catchall name: the pectorals, a.k.a. the pecs. There are actually two muscles that make up your pecs, the pectoralis major and pectoralis minor.Chest are important part of body.</p> -->
                </div> 
            </div>

            <div class="col-md-3 col-11   training-videosc pt-3 pb-3 ">
          
                 <iframe width="560" class="img-fluid contain" height="315" src="https://www.youtube.com/embed/7JJN7yY-C2M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style=height:200px; allowfullscreen></iframe>
                 <div class="video">   
                    <h3 class="heading py-2 px-2">Back</h3>
                     <!-- <p class="pra px-2">By strengthening your back muscles, you're building up the main support structure for your entire body. A healthy and strong back will stabilize and brace your spine, making attaining those health and fitness goals even easier.</p> -->
                 </div>
           </div>    
       </div>

      
      <!--  -->

    <div class="container-fluid">
      <div class="row  justify-content-center">
        
            <div class="col-md-3  col-11 pt-3 pb-3 training-videos">        
            <iframe width="560" class="img-fluid" height="315" src="https://www.youtube.com/embed/aVPFeoY44X4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  style=height:200px; allowfullscreen></iframe>
            <div class="video">   
              <h3 class="heading py-2 px-2">Triceps</h3>
              <!-- <p class="pra px-2" >The triceps comprise about 2/3 of the muscle in your arm. So why would you not want to focus your attention on them? If you don't include tricep exercises in your at home workouts then you are only working 1/3 of your arm muscle</p>    -->
            </div>   
            </div>

            <div class="col-md-3 col-11 pt-3 pb-4 training-videos">
            <iframe width="560" class="img-fluid" height="315" src="https://www.youtube.com/embed/kUdnyhlvzbo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  style=height:200px; allowfullscreen></iframe>
              <div class="video">   
              <h3 class="heading py-2 px-2">Bicep</h3>
              
              <!-- <p class="pra px-2" >These are the: coracobrachialis, the brachialis, and the biceps brachii. The Biceps is the largest of these 3. The brachialis, when well developed pushes up on the biceps from underneath and can help accentuate the biceps peak.</p> -->
            </div>
            </div>

            <div class="col-md-3 col-11 pt-3 pb-5" >
            <iframe width="560" class="img-fluid" height="415" src="https://www.youtube.com/embed/yodMOyVT23M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  style=height:200px; allowfullscreen></iframe>
              <div class="video">       
              <h3 class="heading py-2 px-2">Leg</h3>
              <!-- <p class="pra px-2" >
              The basic lower body movements — squats, hip hinges (deadlifts), and lunges — should comprise the majority of your programming. These movements inherently focus on the major muscle groups of the legs: the glutes, quads, hamstrings, and calves.
            </p> -->
            </div>
            </div>    
      </div>
      </div>   
      <!--  -->
      
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
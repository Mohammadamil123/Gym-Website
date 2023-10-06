<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>follow diet</title>

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

    <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 mt-2">
                    <div class="text-end"><a href="./mypack.php"  class="btn text-light mb-4 bg-secondary"><i class="bi bi-arrow-90deg-left"></i> Back</a></div>
                    <ul class="list-group">
                            <li class="list-group-item"><b>Early Morning Routine</b> : Water (Lukewarm) 1 Glass, Sugar- 1 Tablespoon, Salt- 2 Pinches   </li>
                            <li class="list-group-item"><b>Breakfast</b> : 8 boil egg, Potato Sandwich  Milk Protein</li>
                            <li class="list-group-item"><b>Lunch</b> : 250g Boil Chickhen, 200g Rice, Moong Dal- 1 bowl, Salad-1 Medium plate</li>
                            <li class="list-group-item"><b>Pre Workout Meal</b> : Curd-1 Bowl, Boiled Potato- 150g,      Boiled Egg Whites- 6</li>
                            <li class="list-group-item"><b>Post Workout Meal</b>: Whey Protein- 1 Scoop, Sweet Potato-250g,  Banana-1.</li>
                            <li class="list-group-item"><b>Omega Meal</b> : Mct Oil- 5ml, Fish Oil- 2g, CLA- 2g.</li>
                              <li class="list-group-item"><b>Dinner</b> : Chapati- 4, Chicken/Fish- 250g, Green Veggies- 1 Bowl.</li>
                            </ul>
                     </div>
                </div>
    </div>
    


     
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
  session_start();

  include("../php/config.php");
  if(!isset($_SESSION['valid'])){
    header("Location: ./home.php ");
  }
?>

<?php require("../common/head.php"); ?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Testimonial Slider</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
        <!--NavBar Start-->
    <header class="header">
      <nav class="navbar">
      <?php require("../common/header.php"); ?>
          <!--Profile Content-->
          <div class="buttons">
            <div class="right-links">
                <?php require("../common/validation.php") ?>
                <a href="../php/logout.php"> <button type="button" class="btn btn-danger" style="font-size: 12px; height:35px; width: 100px; margin:10px; border-radius:5px;">Log Out</button> </a>
            </div>
          </div>
          <!--Profile Content End-->
      </nav>
    </header>
    <!--NavBar End-->
  <div class="body"   style="background: linear-gradient(to bottom, #175d69 23%, #330c43 95%) ;" >
    <section class="container"  >
      <div class="testimonial mySwiper">
        <div class="testi-content swiper-wrapper">
          <div class="slide swiper-slide">
            <img src="images/img1.jpg" alt="" class="image" />
            <p style="color:white;">
              I am a computer Engineering student, this is our final Year project
            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name" style="color:white;">Kanisha </span>
              <span class="job" style="color:white;">Final Year</span>
            </div>
          </div>
          <div class="slide swiper-slide">
            <img src="images/img5.jpg" alt="" class="image" />
            <p style="color:white;">
             I am a computer Engineering student, this is our final Year project
            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name" style="color:white;">keerthnan</span>
              <span class="job" style="color:white;">Final year</span>
            </div>
          </div>
          <div class="slide swiper-slide">
            <img src="images/img3.jpg" alt="" class="image" />
            <p style="color:white;">
              I am a computer Engineering student, this is our final Year project
            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name" style="color:white;">Nadhiya</span>
              <span class="job" style="color:white;">Final year</span>
            </div>
          </div>
        </div>
        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
  <div class="row">
    <div class="col-sm-6">
      <form action="../rest-api/feedback.php" method="post">
        <label for="name" style="color:white;">Name:</label><br>
        <input type="text" id="name" name="name"></br>


        <label for="feedback" style="color:white;">Feedback:</label><br>
        <textarea id="feedback" name="feedback"></textarea><br>

        <input type="submit" class="btn btn-primary"  value="Submit">
      </form>
    </div>
    <div class="col-sm-6 ">
      <?php
        $conn = mysqli_connect("localhost","root","","tutorial");
        if($conn-> connect_error){
          die("Connection failed: ". $conn-> connect_error);
        }
        $sql = "SELECT name , feedback, days FROM feedback";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
          while($row = $result-> fetch_assoc()){
            echo "<div style='height:100px;'><div><h1 style='color:white'>".$row["name"]."</h1><div><p style='color:white'>".$row["feedback"]."</p></div><div><h4 style='color:white'>".$row["days"]."</h4></div> </div>";
        }
      }
      else{
        echo "0 result";
      }
      $conn-> close();
      ?>
    </div>
  </div>

    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
  </body>
</html>

<?php
   session_start();

   include("../php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: ./home.php ");
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/pages.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
   <!--NavBar Start-->
    <header class="header">
      <nav class="navbar">
        <h2 class="logo"><a href="#">LawBot</a></h2>
        <input type="checkbox" id="menu-toggle" />
        <label for="menu-toggle" id="hamburger-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </label>
        <ul class="links">
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="IPC.php">IPC</a></li>
          <li><a href="Articles.php">Articles</a></li>
          <li><a href="CrPc.php">CrPC</a></li>
          <li><a href="MVA.php">MVA</a></li>
        </ul>
            <!--Profile Content-->
          <div class="buttons">
            <div class="right-links">
                <?php

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                    $res_id = $result['Id'];
                }

                echo "<a href='../login-page/edit.php?Id=$res_id'> <button type='button' class='btn btn-success' style='font-size:13px; ' >Change Profile</button></a>";
                ?>
                <a href="../php/logout.php"> <button type="button" class="btn btn-danger" style="font-size: 12px; height:35px; width: 100px; margin:10px; border-radius:5px;" >Log Out</button> </a>
            </div>
          </div>
                <!--Profile Content End-->
      </nav>
    </header>
                <!--NavBar End-->

        <!--Page Content-->
    <section class="hero-section">
      <div class="hero" >
        <h2>CrPC</h2>
        <p id="text-content">
        </p>
      </div>
      <div class="img">
        <img decoding="async" id="random-image" src="" alt="Random image"  style="height: 325px;"/>
      </div>
    </section>
                  <!--Page Content End-->
</body>

    <script src="./js/images-random.js"></script>
    <script src="./js/text-random.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
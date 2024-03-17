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

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Know Your Rigths</title>

    <link rel="stylesheet" href="../css/pages.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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
          <li><a href="IPc.php">IPC</a></li>
          <li><a href="Articles.php">Articles</a></li>
          <li><a href="CrPc.php">CrPC</a></li>
          <li><a href="MVA.php">MVA</a></li>
        </ul>
        <!--SearchBar Start-->
        <div class="searchbar-content" >
          <form class="form-inline my-2 my-lg-0">
            <select id="select" style=" font-size: 12px; height:35px; width: 100px; margin:10px; border-radius:5px;" >
              <option value="section">Section</option>
              <option value="section_title">Section-Title</option>
            </select>
            <input class="form-control mr-sm-2" id="text" type="search" placeholder="Search" aria-label="Search" style="font-size:13px;">
            <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" onclick="check()">Search</button>
          </form>
        </div>
        <!--SearchBar End-->
      </nav>
    </header>
          <!--NavBar End-->

    <!--popup -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content"  style="background: linear-gradient(to bottom, #175d69 23%, #330c43 95%); color:white; ">

          <!-- popup Header -->
          <div class="modal-header">
            <h4 class="modal-title">Motor Vehicles </h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- popup body -->
          <div class="modal-body">
            <h1>MVA</h1><br>
            <h2 id="chapter"></h2><br>
            <h3 id="title"></h3>
            <p id="description" style="font-size:15px"></p>
          </div>

          <!-- popup footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

        <!--POPUP End -->

        <!--Page Content-->
    <section class="hero-section">
      <div class="hero" >
        <h2 style=" margin-top:90px;">MVA</h2>
        <p>
          The Motor Vehicles Act (MVA) in Indian law serves as a comprehensive statute governing all matters related to motor vehicles and road transport. Enacted in 1988 and subsequently amended, the MVA outlines regulations pertaining to the registration, licensing, insurance, and operation of motor vehicles across the country. It establishes norms for road safety, traffic management, and vehicle standards to ensure the well-being of road users. The MVA also delineates penalties for traffic violations and offenses, aiming to deter reckless driving and promote responsible behavior on the roads. Through its provisions, the MVA plays a crucial role in regulating the burgeoning automotive sector and fostering a safe and efficient transportation ecosystem in India. Amendments and updates to the MVA reflect evolving technology, societal needs, and global best practices in road transport governance.</p>
        <div class="buttons">
          <a href="about.php" class="learn">Read More</1+`>
 </div>
      </div>
      <div class="img">
        <img src="./images/law4" alt="hero image" />
      </div>
    </section>
      <!--Page Content End-->
  </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./js/MVA.js"></script>

</html>
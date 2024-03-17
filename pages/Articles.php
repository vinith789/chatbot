<?php
   session_start();

   include("../php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: ./home.php");
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

    <!--Navbar start-->
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
          <li><a href="CrPC.php">CrPC</a></li>
          <li><a href="MVA.php">MVA</a></li>
        </ul>
        <!-- searchbar start -->
        <div class="search-list">
          <form class="form-inline my-2 my-lg-0">
            <select id="select" style=" font-size: 12px; height:35px; width: 100px; margin:10px; border-radius:5px;"  placeholder="Select Type">
              <option value="articles">Articles</option>
              <option value="articles_title">Title</option>
            </select>
            <input class="form-control mr-sm-2" id="text" type="search" placeholder="Search" aria-label="Search" style="font-size:13px;">
            <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" onclick="check()">Search</button>
          </form>
        </div>
        <!-- searchbar End -->
      </nav>
    </header>
                            <!--Navbar End-->

    <!--popup -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content" style="background: linear-gradient(to bottom, #175d69 23%, #330c43 95%); color:white;">

          <!-- popup Header -->
          <div class="modal-header">
            <h4 class="modal-title">Articles</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- popup body -->
          <div class="modal-body">
            <h1>Article</h1>
            <h3 id="title"></h3>
            <p id="description" style="font-size:15px;"></p>
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
        <h2 style=" margin-top:90px;">Articles</h2>
        <p>
          In Indian law, articles refer to specific provisions or sections outlined in the Constitution of India.
          These articles lay down fundamental principles, rights, and duties that govern the nation.
          They cover a wide spectrum of subjects ranging from citizenship, fundamental rights, directive principles of state policy,
          to the organization and powers of the government. Each article serves as a pillar upon which the legal framework of India stands,
          shaping the country's governance, administration, and societal norms. These articles have been meticulously crafted to uphold democracy, justice, equality, and secularism, fostering a harmonious and inclusive society.
          ..Interpreted by the judiciary, articles in Indian law play a pivotal role in safeguarding the rights of citizens and ensuring the rule of law prevails.
        </p>
        <div class="buttons">
          <a href="about.php" class="learn">Read More</1+`>
 </div>
      </div>
      <div class="img">
        <img src="./images/law-5" alt="hero image" />
      </div>
    </section>
    <!--Page Content End-->
  </body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./js/Articles.js"></script>

</html>
<?php
  session_start();
  include('dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BingoLooT</title>
    <link rel="icon" type="image/jpeg" href="images/netflixlogo.0.0.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/mediaelementplayer.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.6/mediaelementplayer.css">
    <link rel="stylesheet" href="./quality/quality.css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="flic.css">
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="index.css">
</head>
<body>

  <!-- Start Navigation Bar-->
  <header>
    <div class="logoandnav">
      <div class="dropdown">
        <span class="menupad"><img src="images/menu2.png" height="17px" width="18px" alt=""></span>
        <div class="dropdown-contentm">
          <a href="channels.php">Channels</a>
          <a href="languages.php">Languages</a>
          <a href="genres.php">Genres</a>
      </div>
      </div>
    <a href="main.php" class="logo"><img src="images/icons8-netflix-100.png" height="90px" alt=""></a>
    <ul>
      <li>
        <div class="dropdown">
          <a href="tv.php" class="">TV</a>
          <div class="dropdown-content">
              <a href="tv.php?tv=specials">Specials</a>
              <a href="tv.php?tv=start plus">Star Plus</a>
              <a href="tv.php?tv=star jalsa">Star Jalsa</a>
              <a href="tv.php?tv=star sports">Star Sports</a>
              <a href="tv.php?tv=star vijay">Star Vijay</a>
              <a href="tv.php?tv=star bharat">Star Bharat</a>
              <a href="channels.php">More...</a>
          </div>
        </div>
      </li>
      <li>
        <div class="dropdown">
          <a href="movies.php" class="">Movies</a>
          <div class="dropdown-content">
              <a href="movies.php?movie=hindi">Hindi</a>
              <a href="movies.php?movie=bengali">Bengali</a>
              <a href="movies.php?movie=telugu">Telugu</a>
              <a href="movies.php?movie=malyalam">Malyalam</a>
              <a href="movies.php?movie=tamil">Tamil</a>
              <a href="movies.php?movie=marathi">Marathi</a>
              <a href="movies.php?movie=english">English</a>
              <a href="movies.php?movie=kannada">Kannada</a>
          </div>
        </div>
      </li>
      <li>
        <div class="dropdown">
          <a href="sports.php" class="">Sports</a>
          <div class="dropdown-content">
              <a href="sports.php?sport=cricket">Cricket</a>
              <a href="sports.php?sport=tennis">Tennis</a>
              <a href="sports.php?sport=hockey">Hockey</a>
              <a href="sports.php?sport=badminton">Badminton</a>
              <a href="sports.php?sport=formula1">Formula 1</a>
              <a href="sports.php?sport=kabbaddi">Kabbaddi</a>
              <a href="sports.php?sport=esport">eSports</a>
          </div>
        </div>
      </li>
      <li>
        <div class="dropdown">
          <a href="news.php" class="">News</a>
          <div class="dropdown-content">
          <a href="#">Hindi</a>
              <a href="news.php?news=bengali">Bengali</a>
              <a href="news.php?news=telugu">Telugu</a>
              <a href="news.php?news=malyalam">Malyalam</a>
              <a href="news.php?news=tamil">Tamil</a>
              <a href="news.php?news=marathi">Marathi</a>
              <a href="news.php?news=english">English</a>
              <a href="news.php?news=kannada">Kannada</a>
          </div>
        </div>
      </li>
      <li>
        <div class="dropdown">
          <a href="kids.php" class="">Kids</a>
          <div class="dropdown-content">
              <a href="kids.php?kid=humgama">Humgama</a>
              <a href="kids.php?kid=ben10">Ben 10</a>
              <a href="kids.php?kid=doremon">Doremon</a>
              <a href="kids.php?kid=chinchan">Chinchan</a>
              <a href="kids.php?kid=nick">Nick</a>
              <a href="kids.php?kid=pogo">Pogo</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="premium.php" class="">Premiun</a>
          
        </div>
      </li>
    </ul>
    </div>
    <div class="searchandbtn">
      <div>
        <form method="GET" action="search.php">
          <input class="" type="text" placeholder="Search" autocomplete="off" name="search" aria-label="Search">
          <button class="searchbtn" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search text-white" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </button>
        </form>
      </div>
      <?php
      
      if(isset($_SESSION['is_login']))
      {
      ?>
      <a href="subscribe1.php" class="subscribebadgelink"><span class="subscribebadge">Subscribe</span></a>
      <a href="logout.php" style="margin-left :10px;" class="subscribebadgelink"><p style="margin-left: 10px;"><i style="opacity:0.8;" class="far fa-user-circle fa-2x"></i></p></a>
      <?php
      }else{
      ?>
      <a href="subscribe.php" class="subscribebadgelink"><span class="subscribebadge">Subscribe</span></a>
      <a href="" class="subscribebadgelink" data-bs-toggle="modal" data-bs-target="#exampleModal"><p>LOGIN</p></a>
      <?php
      }
      ?>
    </div>
  </header>

  <!-- Start Modal -->
  <div class="modal fade" style="z-index:100000000000;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content modalcentent">
        <div class="modal-body modalcentent">
          <div class="modalnav text-white">
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            <i class="fas fa-times" style="font-weight: 100; cursor: pointer;" data-bs-dismiss="modal" aria-label="Close"></i>
          </div>
          
          <div class="modallogin">
            <h5 id="exampleModalLabel" class="">Login to continue</h5>
            <form action="" method="post">
              <div style="margin-top: 40px;"class="modalinput border-bottom border-primary border-2">
                 +91 | <input type="text" onkeypress="isInputNumber(event)" placeholder="Enter your mobile number" name="usermobile" id="usermobile"> 
              </div>
              <div id="mobilestatus">
                
              </div>
              <div class="modalinput modalinputb border-bottom border-primary border-2">
                <i class="fas fa-key" style="margin: 0 7px;"></i> | <input type="text" name="userpass" id="userpass" placeholder="Enter your password">
              </div>
              <div id="passstatus">
              
              </div>
              
              <div class="d-grid gap-2 modalinputb">
                <button class="btn btn-primary continuebtn" type="submit" id="signin" name="signin">CONTINUE<i class="fas fa-chevron-right"></i></button>
              </div>
              <small class="termsandcondition">By Proceeding you agree to the <a href="#" class="termsandconditionlink">Terms of use</a> and <a href="#" class="termsandconditionlink">Privacy policy</a></small>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  
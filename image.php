<?php
  include('dbconnection.php');
?>

<?php
  include('main/header.php');
?>


  <?php
    $content_id = $_GET['id'];
    $sql1  = "SELECT * FROM newcontent WHERE content_id = '$content_id'";
    $result1 = $conn->query($sql1);
    $row = $result1->fetch_assoc();
  ?>
  <!-- Start Carousel -->
  <section class="banner">
    <div class="maincarousel">
      <div class="carousel2">
        <div class="imagemaindiv" > 
          <a href="video.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" height="400px" alt=""></a>
          <div class="maincarouselcontent">
            <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
            <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
            <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
            <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> WATCH MOVIE </a></div>
          </div>
          <div class="maincarouselcontent2">

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Start Parts -->
  <section class="trays bottom-margin">
    <!-- trailer and Extras-->
    <div class="block1">
        <div class="headings">Trailers & Extras</div>
        <div class="maintray">
            <?php
            $trailer = $row['content_name'].' - Trailer';
            $sql1 = "SELECT * FROM newcontent WHERE content_name = '".$trailer."' LIMIT 1";
            $result1 = $conn->query($sql1);
            if($result1->num_rows > 0)
            {
                while($row = $result1->fetch_assoc())
                {
                ?>
                <div class="mainiteml">
                    <div class="mainimage">
                    <a href="video.php?id=<?php echo $row['content_id']; ?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" width="100%" height="100%" alt=""></a>
                    </div>
                    <?php
                    if($row['content_status']=='1')
                    {
                        echo '<div class="mainlive">
                        <span class="live">LIVE</span>
                        </div>';
                    }
                    ?>
                    <div class="maincontent">
                    <div>
                        <div class="showlink1 whitespacelink" style="margin-bottom: 5px;"><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH  </a></div>
                        <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                        <div class="showdesc"><?php echo $row['content_desc'];?></div>
                        <div class="showlink1 whitespacelink"></div>
                        <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                    </div>
                    </div>
                </div>
                <?php
                }
            }
            ?>
          
        </div>
    </div>

    <div class="block1">
      <div class="headings">More Like This</div>
      <div class="maintray">
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="block1">
      <div class="headings">Shows Recommended For You</div>
      <div class="maintray">
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block1">
      <div class="headings">Popular Movies</div>
      <div class="maintray">
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block1">
      <div class="headings">Popular Shows</div>
      <div class="maintray">
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
        <div class="mainitem">
          <div class="mainimage">
            <a href="#"><img src="images/Avenger INFI portrait.jpg" width="100%" height="100%" alt=""></a>
          </div>
          <div class="maincontent">
            <div>
              <div class="showname">Show Name</div>
            <div class="showtime">1 hr 25 min, Documentary, Hindi, Marathi, Tamil, Kannada,<br>2021</div>
            <div class="showdesc">Hi This movie Belogs to New Type</div>
            <div class="showlink1 whitespacelink"><a href="#" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE </a></div>
            <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </section>

<?php
  include('main/footer.php');
?>
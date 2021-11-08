<?php
   /*  $content_id = $_GET['id']; */
    $sql1  = "SELECT * FROM newcontent WHERE content_id = 16";
    $result1 = $conn->query($sql1);
    $row = $result1->fetch_assoc();
?>

<!-- Start Carousel -->
  <section class="banner">
    <div class="maincarousel" style="background: none !important;">
        <!-- <div class="carousel1">
            <div class="leftdiv1">
              <img src="google2.0.0.jpg" id="leftdiv" height="400px" width="100%" alt="">
            </div>
            <div class="maindiv" > 
                <a href="image.php"><img src="google2.0.0.jpg" id="maindiv" height="400px" width="100%" alt=""></a>
                <div class="maincarouselcontent">
                  <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                  <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                  <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                  <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> WATCH MOVIE </a></div>
                </div>
                <div class="maincarouselcontent3">
                </div>
            </div>
            <div class="rightdiv1">
              <img src="google2.0.0.jpg" id="rightdiv" height="400px" width="100%" alt="">
            </div>
        </div> -->

        <div class="center">
          <div class="carousel"  data-flickity='{ "autoPlay": true , "wrapAround": true}'>
            <div class="carousel-cell">
              <div class="marginpadding">
                <div class="maindiv" > 
                    <div class="maincarouselimage"><a href="image.php"><img src="google2.0.0.jpg" id="maindiv" height="400px" width="100%" alt=""></a></div>
                    <div class="maincarouselcontent" href="image.php">
                      <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                      <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                      <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                      <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> WATCH MOVIE </a></div>
                    </div>
                    <div class="maincarouselcontent3">
                    </div>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="marginpadding">
                <div class="maindiv" > 
                    <div class="maincarouselimage"><a href="image.php"><img src="google2.0.0.jpg" id="maindiv" height="400px" width="100%" alt=""></a></div>
                    <div class="maincarouselcontent">
                      <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                      <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                      <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                      <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> WATCH MOVIE </a></div>
                    </div>
                    <div class="maincarouselcontent3">
                    </div>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="marginpadding">
                <div class="maindiv" > 
                    <div class="maincarouselimage"><a href="image.php"><img src="google2.0.0.jpg" id="maindiv" height="400px" width="100%" alt=""></a></div>
                    <div class="maincarouselcontent">
                      <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                      <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                      <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                      <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> WATCH MOVIE </a></div>
                    </div>
                    <div class="maincarouselcontent3">
                    </div>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="marginpadding">
                <div class="maindiv" > 
                    <div class="maincarouselimage"><a href="image.php"><img src="google2.0.0.jpg" id="maindiv" height="400px" width="100%" alt=""></a></div>
                    <div class="maincarouselcontent">
                      <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                      <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                      <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                      <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> WATCH MOVIE </a></div>
                    </div>
                    <div class="maincarouselcontent3">
                    </div>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="marginpadding">
                <div class="maindiv" > 
                    <div class="maincarouselimage"><a href="image.php"><img src="google2.0.0.jpg" id="maindiv" height="400px" width="100%" alt=""></a></div>
                    <div class="maincarouselcontent">
                      <div class="moviename capilize"><?php echo $row['content_name']; ?></div>
                      <div class="movietitle capilize"><span><?php echo $row['content_lang']; ?> . </span> <span><?php echo $row['content_theme']; ?> . </span> <span><?php echo $row['content_year']; ?></span> </div>
                      <div class="moviedesc2"><?php echo $row['content_desc']; ?></div>
                      <div class=""><a href="video.php?id=<?php echo $row['content_id']; ?>" class="link watchmovie"><i class="fas fa-play margindesc"></i> WATCH MOVIE </a></div>
                    </div>
                    <div class="maincarouselcontent3">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="carouselleftbtn">
            <span href="" class="carouselleftbtn zoom"><i class="fas fa-chevron-circle-left fa-2x"></i></span>
        </div>
        <div class="carouselrightbtn1">
            <span class="carouselrightbtn1 zoom" onclick="next()"><i class="fas fa-chevron-circle-right fa-2x"></i></span>
        </div> -->
    </div>
  </section>
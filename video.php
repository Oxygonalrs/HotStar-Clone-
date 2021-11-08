<?php 
    include('main/header.php');
    if(isset($_SESSION['is_login']))
    {
    $user_mo = $_SESSION['usermobile'];
    }
?>


<?php
    $id = $_GET['id'];
    $sql1 = "SELECT * FROM newcontent WHERE content_id = '$id'";
    $result1 = $conn->query($sql1);
    $row = $result1->fetch_assoc();
    if($row['content_price'] == 'vip' || $row['content_price'] == 'premium')
    {
      
      if(isset($_SESSION['is_login']))
      {
        $user_mo = $_SESSION['usermobile'];
        $sql2 = "SELECT * FROM user WHERE user_mo = '".$user_mo."'";
        $result3 = $conn->query($sql2);
        $row2 = $result3->fetch_assoc();

        $user_order_id = $row2['user_order_id'];
        $sql3 = "SELECT * FROM payment WHERE order_id='".$user_order_id."'";
        $result = $conn->query($sql3);
        $row1 = $result->num_rows;
        if($row1 == 0 || $row2['user_subscription'] == 0)
        {
          echo "<script> location.href = 'subscribe1.php'; </script>";
        }
      }
      else
      {
        echo "<script> location.href = 'subscribe.php'; </script>";
      }
    }
?>
<div class="banner">
    <div class="videosection">
    <video src="<?php echo $row['content_url'] ?>"  width="100%" height="400px" poster="images/movie/<?php echo $row['content_poster_l'] ?>"></video>
    </div>
</div>

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
        <div class="headings">Episodes</div>
        <div class="maintray">
            <?php
            $sql1 = "SELECT * FROM newcontent LIMIT 1";
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

    <!-- trailer and Extras-->
    <div class="block1">
        <div class="headings">Trailers & Extras</div>
        <div class="maintray">
            <?php
            $sql1 = "SELECT * FROM newcontent LIMIT 1";
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
        <!-- <div class="maintray">
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
          
        </div> -->
    </div>
  </section>


<?php 
    include('main/footer.php');
?>

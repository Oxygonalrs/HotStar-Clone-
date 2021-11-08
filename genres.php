<?php
  include('./dbconnection.php');
  ?>
  
  <?php
    include('./main/header.php');
  ?>
  
  <?php
    //include('./main/carousel.php');
  ?>
 
    <section class="banner">
      <section class="traysp">

      <?php
         
          $sql1 = "SELECT * FROM newcontent";
          $result1 = $conn->query($sql1);
          
          if($result1 == TRUE)
          {
            ?>
            <div class="block1">
              <?php
                if($result1->num_rows > 0)
                {
              ?>
                  <div class="headingsp">Channels </div>
                  <div class="maintrayp">
                  <?php
                  while($row = $result1->fetch_assoc())
                  {
                  ?>
                    <div class="mainitemp">
                      <div class="mainimage">
                        <a href="image.php?id=<?php echo $row['content_id'];?>"><img src="images/movie/<?php echo $row['content_poster_l']; ?>" width="100%" height="100%" alt=""></a>
                      </div>
                      <!-- <div class="maincontent">
                        <div>
                          <div class="showname"><?php echo $row['content_name'];?></div>
                        <div class="showtime"><?php if($row['content_hour'] != '0'){echo $row['content_hour'];?> hr <?php echo $row['content_min'];?> min,<?php }
                        else{echo $row['content_min'];?> min <?php echo $row['content_sec'];?> s,<?php } ?> <span class="capilize"><?php echo $row['content_theme']; ?>,<?php echo $row['content_lang']; ?>,<br><?php echo $row['content_year']; ?></span></div>
                        <div class="showdesc"><?php echo $row['content_desc']; ?></div>
                        <div class="showlink1 whitespacelink">
                        <?php
                            if($row['content_type'] == 'movie')
                            {
                            ?>
                            <a href="video.php?id=<?php echo $row['content_id']; ?>" class="link"><i class="fas fa-play margin"></i> WATCH MOVIE</a>
                            <?php
                           }
                           ?>  
                        
                        </div>
                        <div class="showlink2 whitespacelink"><a href="#" class="link"><i class="fas fa-plus margin"></i> ADD TO WATCHLIST </a></div>
                        </div>
                      </div> -->
                    </div>
                  <?php
                  }
                  ?>
                  </div>
              <?php
                }
                else{
                  echo '<div class="headingsp">No result Found</div>';
                }
              ?>
            </div>
          <?php
          }
          ?>
      </section>
    </section>
    
  <?php
    include('./main/footer.php');
  ?> 
  

<?php 
    include_once('dbconnection.php');

    include('header.php');
?>

    
   <div class="mainmargin">
    <!-- Start Carousel -->
    <div style=" padding:0px; border-radius: 10px;margin-left: 50px; margin-right: 50px;" >
        <div id="carouselExampleControls" style="border-radius: 10px;" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="google2.0.0.jpg" class="round d-block w-100 height" alt="...">
              </div>
              <div class="carousel-item">
                <img src="google2.0.0.jpg" class="round d-block height w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="google2.0.0.jpg" class="round d-block height w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    <!-- Start Sports-->
    <div class="mx-5" >
        <div class="h5 mt-3 text-white">Best in Sports</div>
        <div class="d-flex" style="overflow: auto;">

            <?php 
                $sql = "SELECT * FROM content  ORDER BY content_id DESC LIMIT 10";
                $result = $conn->query($sql);
                if($result->num_rows > 0)
                {   
                    while($row = $result->fetch_assoc())
                    {

                    
            ?>
            <div class="d-inline">
                <div class="card bg-dark" style="width: 170px; margin-right: 10px;">
                    <a href="video.php?<?php echo $row['content_id'].$row['content_url']; ?>"><img src="<?php echo $row['content_poster']; ?>" style="width:170px; height:250px" class="round card-img-top" alt="..."></a>
                </div>
            </div>
            <?php }}
            ?>
            </div>
        </div>
    </div>

    <!-- Start Movies-->
    <div class="mx-5" >
        <div class="h5 mt-3 text-white">Special and Latest Movies</div>
            <div class="d-flex" style="overflow: auto;">

            <?php 
                $sql = "SELECT * FROM content  ORDER BY content_id DESC LIMIT 10";
                $result = $conn->query($sql);
                if($result->num_rows > 0)
                {   
                    while($row = $result->fetch_assoc())
                    {

                    
            ?>
            <div class="d-inline">
                <div class="card bg-dark" style="width: 170px; margin-right: 10px;">
                    <a href="video.php?<?php echo $row['content_id'].$row['content_url']; ?>"><img src="<?php echo $row['content_poster']; ?>" style="width:170px; height:250px" class="round card-img-top" alt="..."></a>
                </div>
            </div>
            <?php }}
            ?>
            </div>
        </div>
    </div>
    <!-- Show recommended for you-->
    <div class="mx-5" >
        <div class="h5 mt-3 text-white">Shows Recommended For You</div>
        <div class="d-flex" style="overflow: auto;">

            <?php 
                $sql = "SELECT * FROM content  ORDER BY content_id DESC LIMIT 10";
                $result = $conn->query($sql);
                if($result->num_rows > 0)
                {   
                    while($row = $result->fetch_assoc())
                    {

                    
            ?>
            <div class="d-inline">
                <div class="card bg-dark" style="width: 170px; margin-right: 10px;">
                    <a href="video.php?<?php echo $row['content_id'].$row['content_url']; ?>"><img src="<?php echo $row['content_poster']; ?>" style="width:170px; height:250px" class="round card-img-top" alt="..."></a>
                </div>
            </div>
            <?php }}
            ?>
            </div>
           
        </div>
    </div>
    <!-- Live News-->
    <div class="mx-5" >
        <div class="h5 mt-3 text-white">Live News</div>
        <div class="d-flex" style="overflow: auto;">

            <?php 
                $sql = "SELECT * FROM content  ORDER BY content_id DESC LIMIT 10";
                $result = $conn->query($sql);
                if($result->num_rows > 0)
                {   
                    while($row = $result->fetch_assoc())
                    {

                    
            ?>
            <div class="d-inline">
                <div class="card bg-dark" style="width: 170px; margin-right: 10px;">
                    <a href="video.php?<?php echo $row['content_id'].$row['content_url']; ?>"><img src="<?php echo $row['content_poster']; ?>" style="width:170px; height:250px" class="round card-img-top" alt="..."></a>
                </div>
            </div>
            <?php }}
            ?>
            </div>
        </div>
   </div>
   
    
<?php
    include('footer.php');
?>


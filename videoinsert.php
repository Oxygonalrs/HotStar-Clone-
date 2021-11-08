<?php
include('dbconnection.php');

if(isset($_REQUEST['upload'])){
   
            /* echo "<h1>Name - ".$_REQUEST['content_name']."</h1>";
            echo "<h1>Desc - ".$_REQUEST['content_desc']."</h1>";
            echo "<h1>Type - ".$_REQUEST['content_type']."</h1>";
            echo "<h1>Status - ".$_REQUEST['content_status']."</h1>";
            echo "<h1>Price - ".$_REQUEST['content_price']."</h1>";
            echo "<h1>Theme - ".$_REQUEST['content_theme']."</h1>";
            echo "<h1>Hour - ".$_REQUEST['content_hour']."</h1>";
            echo "<h1>Min - ".$_REQUEST['content_min']."</h1>";
            echo "<h1>Sec - ".$_REQUEST['content_sec']."</h1>";
            echo "<h1>YEar - ".$_REQUEST['content_year']."</h1>";
            echo "<h1>URL - ".$_REQUEST['content_url']."</h1>";
            echo "<h1>POster p".$_REQUEST['content_poster_p']."</h1>";
            echo "<h1>Poster l".$_REQUEST['content_poster_l']."</h1>";
            echo "<h1>Lnag".$_REQUEST['content_lang']."</h1>"; */
    
    if(($_REQUEST['content_name']=="")||($_REQUEST['content_desc']=="")||($_FILES['content_poster_p']=="")||
    ($_REQUEST['content_hour']=="")||($_REQUEST['content_min']=="")||($_REQUEST['content_sec']=="")||
    ($_REQUEST['content_year']=="")||($_REQUEST['content_url']=="")||($_FILES['content_poster_l']==""))
    {
        echo "<script> window.alert('Enter all Fields'); </script>";
    }
    else
    {
        $content_name = $_REQUEST['content_name']; $content_desc = $_REQUEST['content_desc'];
        $content_type = $_REQUEST['content_type']; $content_status = $_REQUEST['content_status'];
        $content_price = $_REQUEST['content_price']; $content_theme = $_REQUEST['content_theme'];
        $content_hour = $_REQUEST['content_hour']; $content_min = $_REQUEST['content_min'];
        $content_sec = $_REQUEST['content_sec']; $content_year = $_REQUEST['content_year'];
        $content_url = $_REQUEST['content_url']; $content_lang = $_REQUEST['content_lang'];
        
        $content_poster_p = $_FILES['content_poster_p']['name'];
        $content_poster_p_temp = $_FILES['content_poster_p']['tmp_name'];
        $content_poster_folder = './images/movie/'.$content_poster_p;
        move_uploaded_file($content_poster_p_temp, $content_poster_folder);

        $content_poster_l = $_FILES['content_poster_l']['name'];
        $content_poster_l_temp = $_FILES['content_poster_l']['tmp_name'];
        $content_poster_folder = './images/movie/'.$content_poster_l;
        move_uploaded_file($content_poster_l_temp, $content_poster_folder);
       

        $sql = "INSERT INTO newcontent (content_name, content_desc, content_type, content_status,
            content_price, content_theme, content_hour, content_min, content_sec, content_year,
            content_url, content_poster_p,  content_poster_l, content_lang) VALUES
            ('$content_name','$content_desc','$content_type','$content_status',
            '$content_price','$content_theme','$content_hour','$content_min',
            '$content_sec','$content_year','$content_url','$content_poster_p',
            '$content_poster_l', '$content_lang')";
        
        $result = $conn->query($sql);
        if($result==TRUE)
        {
            echo "<script> window.alert('Added Successfully'); </script>";
        }
        else
        {
            echo "<script> window.alert('Unable To update'); </script>";
        }
    }
}
    
?>

<?php
  include('./main/adminheader.php');
?>


      <!-- Please exclude main div -->
      <main>
        <div class="main__container">
            <section>
                <form action="" class="" enctype="multipart/form-data" method="POST"> 
                    <div class="mb-3">
                    <label for="content_name" class="form-label">Content Name</label>
                    <input type="text" class="form-control" required="required" id="content_name" name="content_name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="content_desc" class="form-label">Content Desc</label>
                        <input type="text" class="form-control" required id="content_desc" name="content_desc" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="content_type" class="form-label">Content Type(movie)</label>
                        <select name="content_type" id="content_type"  class="form-control">
                            <option value="movie">Movie</option>
                            <option value="webseries">Web Series</option>
                            <option value="tvshows">TV Shows</option>
                            <option value="sports">Sports</option>
                            <option value="news">News</option>
                            <option value="channels">Channels</option>
                            <option value="specials">Specials</option>
                            <option value="premiums">Premiums</option>
                            <option value="trailers">Trailers</option>
                            <option value="kids">KIDS</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="content_status" class="form-label">Content Status(live)</label>
                        <select name="content_status" id="content_status"  class="form-control">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="content_price" class="form-label">Content Price</label>
                        <select name="content_price" id="content_price"  class="form-control">
                            <option value="free">Free</option>
                            <option value="vip">VIP</option>
                            <option value="premium">Premium</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="content_theme" class="form-label">Content Theme(Action)</label>
                        <select name="content_theme" id="content_theme"  class="form-control">
                            <option value="comedy">Comedy</option>
                            <option value="action">Action</option>
                            <option value="drama">Drama</option>
                            <option value="romance">Romance</option>
                            <option value="thriller">Thriller</option>
                            <option value="family">Family</option>
                            <option value="crime">Crime</option>
                            <option value="biopic">Biopic</option>
                            <option value="documentary">Documentary</option>
                            <option value="science">science</option>
                            <option value="wildlife">Wildlife</option>
                            <option value="cricket">Cricket</option>
                            <option value="tennis">Tennis</option>
                            <option value="formula1">Formula 1</option>
                            <option value="hockey">Hockey</option>
                            <option value="badminton">Badminton</option>
                            <option value="kabbaddi">Kabbaddi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="content_hour" class="form-label">Content Hour</label>
                        <input type="text" class="form-control" required name="content_hour" id="content_theme" aria-describedby="emailHelp">
                    </div><div class="mb-3">
                        <label for="content_min" class="form-label">Content Minute</label>
                        <input type="text" class="form-control" required name="content_min" id="content_min" aria-describedby="emailHelp">
                    </div><div class="mb-3">
                        <label for="content_sec" class="form-label">Content Second</label>
                        <input type="text" class="form-control" required name="content_sec" id="content_sec" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="content_year" class="form-label">Content Year</label>
                        <input type="text" class="form-control" required name="content_year" id="content_year" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="content_url" class="form-label">Content URL</label>
                        <input type="text" class="form-control" required name="content_url" id="content_url" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="content_poster_p" class="form-label">Content Poster Portrait </label>
                        <input type="file" class="form-control" required name="content_poster_p" id="content_poster_p" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="content_poster_l" class="form-label">Content Poster Landscape</label>
                        <input type="file" class="form-control" name="content_poster_l" id="content_poster_l" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="content_lang" class="form-label">Content Languages</label>
                        <select name="content_lang" id="content_lang"  class="form-control">
                            <option value="hindi">Hindi</option>
                            <option value="bengali">Bengali</option>
                            <option value="telugu">Telugu</option>
                            <option value="malyalam">Malyalam</option>
                            <option value="tamil">Tamil</option>
                            <option value="marathi">Marathi</option>
                            <option value="english">English</option>
                            <option value="kannada">Kannada</option>
                        </select>
                    </div>
                    <button type="submit" name="upload" class="btn btn-primary">Submit</button>
                    <a href="videoview.php" class="btn btn-danger">Back</a>
                </form>
            </section>
        </div>
      </main>

      <?php
        include('./main/adminsidebar.php');
      ?>
      <?php
        include('./main/adminfooter.php');
      ?>
    

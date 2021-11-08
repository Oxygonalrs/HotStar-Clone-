<?php
include('dbconnection.php');
?>

<?php
  include('./main/adminheader.php');
?>


      <!-- Please exclude main div -->
      <main>
        <div class="main__container">
            <section class="">
                <div>
                    <form class="d-flex" action="videoview.php" method="POST">
                        <input class="form-control mr-5" type="text" name="search" required placeholder="Search">
                        <button class="btn btn-outline-success ml-5" name="show" type="submit">Search</button>
                    </form>
                </div>
                <hr>
                <?php 
                
                if(isset($_REQUEST['delete']))
                {
                    $sql = "DELETE FROM newcontent WHERE content_id={$_REQUEST['id']}";
                    if($conn->query($sql) == TRUE)
                    {
                        echo'<meta http-equiv = "refresh" content="0;URL=?deleted"/>';
                    }
                    else
                    {
                        echo "<script> window.alert('Unable to Delete'); </script>";
                    }
                }
                
                

                if(isset($_REQUEST['show']))
                {
                    $search = $_REQUEST['search'];
                    echo "<script> console.log('$search')</script>";
                    $sql1 = "SELECT * FROM newcontent WHERE content_id LIKE '%$search%'";
                    $sql2 = "SELECT * FROM newcontent WHERE content_name LIKE '%$search%'";
                    $sql3 = "SELECT * FROM newcontent WHERE content_desc LIKE '%$search%'";
                    $sql4 = "SELECT * FROM newcontent WHERE content_type LIKE '%$search%'";
                    $sql5 = "SELECT * FROM newcontent WHERE content_status LIKE '%$search%'";
                    $sql6 = "SELECT * FROM newcontent WHERE content_price LIKE '%$search%'";
                    $sql7 = "SELECT * FROM newcontent WHERE content_theme LIKE '%$search%'";
                    $sql8 = "SELECT * FROM newcontent WHERE content_year LIKE '%$search%'";
                    $sql9 = "SELECT * FROM newcontent WHERE content_lang LIKE '%$search%'";  
                    //$sql1 = "SELECT * FROM newcontent WHERE content_id LIKE '%$search%'";
                    $result1 = $conn->query($sql1);
                    $result2 = $conn->query($sql2);
                    $result3 = $conn->query($sql3);
                    $result4 = $conn->query($sql4);
                    $result5 = $conn->query($sql5);
                    $result6 = $conn->query($sql6);
                    $result7 = $conn->query($sql7);
                    $result8 = $conn->query($sql8);
                    $result9 = $conn->query($sql9);
                    /* $result1 = $conn->query($sql1); */
                    if(($result1 == TRUE) || ($result2 == TRUE) || ($result3 == TRUE) || ($result4 == TRUE) || 
                    ($result5 == TRUE) || ($result6 == TRUE) || ($result7 == TRUE) || ($result8 == TRUE) || ($result9 == TRUE))
                    {
                        ?>
                        <div>
                            <?php
                                if(($result1->num_rows > 0) || ($result2->num_rows > 0) || ($result3->num_rows > 0) || ($result4->num_rows > 0) ||
                                ($result5->num_rows > 0) || ($result6->num_rows > 0) || ($result7->num_rows > 0) || ($result8->num_rows > 0) || ($result9->num_rows > 0) )
                                { ?>
                                
                                    <h1 class="text-center">Results Showing for <i><?php if(isset($search)){echo $search;} ?></i></h1>
                                    <table class="table table-dark table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th> ID</th>
                                                <th> Name</th>
                                                <th>Description</th>
                                                <th> Type</th>
                                                <th> Status</th>
                                                <th>Price</th>
                                                <th>Theme</th>
                                                <th class="TH">Time(HH/MM//SS)</th>
                                                <th>Year</th>
                                                <th>Lang</th>
                                                <th width="auto">Action_Want_To</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($row = $result1->fetch_assoc()){ ?>
                                            <tr>
                                            <th><?php if(isset($row['content_id'])){echo $row['content_id'];} ?></th>
                                            <td><?php if(isset($row['content_name'])){echo $row['content_name'];} ?></td>
                                            <td><?php if(isset($row['content_desc'])){echo $row['content_desc'];} ?></td>
                                            <td><?php if(isset($row['content_type'])){echo $row['content_type'];} ?></td>
                                            <td><?php if(isset($row['content_status'])){echo $row['content_status'];} ?></td>
                                            <td><?php if(isset($row['content_price'])){echo $row['content_price'];} ?></td>
                                            <td><?php if(isset($row['content_theme'])){echo $row['content_theme'];} ?></td>
                                            <td><?php if(isset($row['content_hour']) && isset($row['content_min']) && isset($row['content_sec']))
                                            {echo $row['content_hour'].'h '.$row['content_min'].'m '.$row['content_sec'].'s ';} ?></td>
                                            <td><?php if(isset($row['content_year'])){echo $row['content_year'];} ?></td>
                                            <td><?php if(isset($row['content_lang'])){echo $row['content_lang'];} ?></td>
                                            <td scope="row">
                                                <form method="POST" action="videoupdate.php"class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-success btn-sm mr-2" name="view" value="View">Edit</button>
                                                </form>
                                                <form method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete" value="Delete">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            <?php }
                                            ?>
                                            <?php while($row = $result2->fetch_assoc()){ ?>
                                            <tr>
                                            <th><?php if(isset($row['content_id'])){echo $row['content_id'];} ?></th>
                                            <td><?php if(isset($row['content_name'])){echo $row['content_name'];} ?></td>
                                            <td><?php if(isset($row['content_desc'])){echo $row['content_desc'];} ?></td>
                                            <td><?php if(isset($row['content_type'])){echo $row['content_type'];} ?></td>
                                            <td><?php if(isset($row['content_status'])){echo $row['content_status'];} ?></td>
                                            <td><?php if(isset($row['content_price'])){echo $row['content_price'];} ?></td>
                                            <td><?php if(isset($row['content_theme'])){echo $row['content_theme'];} ?></td>
                                            <td><?php if(isset($row['content_hour']) && isset($row['content_min']) && isset($row['content_sec']))
                                            {echo $row['content_hour'].'h '.$row['content_min'].'m '.$row['content_sec'].'s ';} ?></td>
                                            <td><?php if(isset($row['content_year'])){echo $row['content_year'];} ?></td>
                                            <td><?php if(isset($row['content_lang'])){echo $row['content_lang'];} ?></td>
                                            <td scope="row">
                                                <form method="POST" action="videoupdate.php"class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-success btn-sm mr-2" name="view" value="View">Edit</button>
                                                </form>
                                                <form method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete" value="Delete">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            <?php }
                                            ?>
                                            <?php while($row = $result3->fetch_assoc()){ ?>
                                            <tr>
                                            <th><?php if(isset($row['content_id'])){echo $row['content_id'];} ?></th>
                                            <td><?php if(isset($row['content_name'])){echo $row['content_name'];} ?></td>
                                            <td><?php if(isset($row['content_desc'])){echo $row['content_desc'];} ?></td>
                                            <td><?php if(isset($row['content_type'])){echo $row['content_type'];} ?></td>
                                            <td><?php if(isset($row['content_status'])){echo $row['content_status'];} ?></td>
                                            <td><?php if(isset($row['content_price'])){echo $row['content_price'];} ?></td>
                                            <td><?php if(isset($row['content_theme'])){echo $row['content_theme'];} ?></td>
                                            <td><?php if(isset($row['content_hour']) && isset($row['content_min']) && isset($row['content_sec']))
                                            {echo $row['content_hour'].'h '.$row['content_min'].'m '.$row['content_sec'].'s ';} ?></td>
                                            <td><?php if(isset($row['content_year'])){echo $row['content_year'];} ?></td>
                                            <td><?php if(isset($row['content_lang'])){echo $row['content_lang'];} ?></td>
                                            <td scope="row">
                                                <form method="POST" action="videoupdate.php"class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-success btn-sm mr-2" name="view" value="View">Edit</button>
                                                </form>
                                                <form method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete" value="Delete">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            <?php }
                                            ?>
                                            <?php while($row = $result4->fetch_assoc()){ ?>
                                            <tr>
                                            <th><?php if(isset($row['content_id'])){echo $row['content_id'];} ?></th>
                                            <td><?php if(isset($row['content_name'])){echo $row['content_name'];} ?></td>
                                            <td><?php if(isset($row['content_desc'])){echo $row['content_desc'];} ?></td>
                                            <td><?php if(isset($row['content_type'])){echo $row['content_type'];} ?></td>
                                            <td><?php if(isset($row['content_status'])){echo $row['content_status'];} ?></td>
                                            <td><?php if(isset($row['content_price'])){echo $row['content_price'];} ?></td>
                                            <td><?php if(isset($row['content_theme'])){echo $row['content_theme'];} ?></td>
                                            <td><?php if(isset($row['content_hour']) && isset($row['content_min']) && isset($row['content_sec']))
                                            {echo $row['content_hour'].'h '.$row['content_min'].'m '.$row['content_sec'].'s ';} ?></td>
                                            <td><?php if(isset($row['content_year'])){echo $row['content_year'];} ?></td>
                                            <td><?php if(isset($row['content_lang'])){echo $row['content_lang'];} ?></td>
                                            <td scope="row">
                                                <form method="POST" action="videoupdate.php"class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-success btn-sm mr-2" name="view" value="View">Edit</button>
                                                </form>
                                                <form method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete" value="Delete">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            <?php }
                                            ?>
                                            <?php while($row = $result5->fetch_assoc()){ ?>
                                            <tr>
                                            <th><?php if(isset($row['content_id'])){echo $row['content_id'];} ?></th>
                                            <td><?php if(isset($row['content_name'])){echo $row['content_name'];} ?></td>
                                            <td><?php if(isset($row['content_desc'])){echo $row['content_desc'];} ?></td>
                                            <td><?php if(isset($row['content_type'])){echo $row['content_type'];} ?></td>
                                            <td><?php if(isset($row['content_status'])){echo $row['content_status'];} ?></td>
                                            <td><?php if(isset($row['content_price'])){echo $row['content_price'];} ?></td>
                                            <td><?php if(isset($row['content_theme'])){echo $row['content_theme'];} ?></td>
                                            <td><?php if(isset($row['content_hour']) && isset($row['content_min']) && isset($row['content_sec']))
                                            {echo $row['content_hour'].'h '.$row['content_min'].'m '.$row['content_sec'].'s ';} ?></td>
                                            <td><?php if(isset($row['content_year'])){echo $row['content_year'];} ?></td>
                                            <td><?php if(isset($row['content_lang'])){echo $row['content_lang'];} ?></td>
                                            <td scope="row">
                                                <form method="POST" action="videoupdate.php"class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-success btn-sm mr-2" name="view" value="View">Edit</button>
                                                </form>
                                                <form method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete" value="Delete">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            <?php }
                                            ?>
                                            <?php while($row = $result6->fetch_assoc()){ ?>
                                            <tr>
                                            <th><?php if(isset($row['content_id'])){echo $row['content_id'];} ?></th>
                                            <td><?php if(isset($row['content_name'])){echo $row['content_name'];} ?></td>
                                            <td><?php if(isset($row['content_desc'])){echo $row['content_desc'];} ?></td>
                                            <td><?php if(isset($row['content_type'])){echo $row['content_type'];} ?></td>
                                            <td><?php if(isset($row['content_status'])){echo $row['content_status'];} ?></td>
                                            <td><?php if(isset($row['content_price'])){echo $row['content_price'];} ?></td>
                                            <td><?php if(isset($row['content_theme'])){echo $row['content_theme'];} ?></td>
                                            <td><?php if(isset($row['content_hour']) && isset($row['content_min']) && isset($row['content_sec']))
                                            {echo $row['content_hour'].'h '.$row['content_min'].'m '.$row['content_sec'].'s ';} ?></td>
                                            <td><?php if(isset($row['content_year'])){echo $row['content_year'];} ?></td>
                                            <td><?php if(isset($row['content_lang'])){echo $row['content_lang'];} ?></td>
                                            <td scope="row">
                                                <form method="POST" action="videoupdate.php"class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-success btn-sm mr-2" name="view" value="View">Edit</button>
                                                </form>
                                                <form method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete" value="Delete">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            <?php }
                                            ?>
                                            <?php while($row = $result7->fetch_assoc()){ ?>
                                            <tr>
                                            <th><?php if(isset($row['content_id'])){echo $row['content_id'];} ?></th>
                                            <td><?php if(isset($row['content_name'])){echo $row['content_name'];} ?></td>
                                            <td><?php if(isset($row['content_desc'])){echo $row['content_desc'];} ?></td>
                                            <td><?php if(isset($row['content_type'])){echo $row['content_type'];} ?></td>
                                            <td><?php if(isset($row['content_status'])){echo $row['content_status'];} ?></td>
                                            <td><?php if(isset($row['content_price'])){echo $row['content_price'];} ?></td>
                                            <td><?php if(isset($row['content_theme'])){echo $row['content_theme'];} ?></td>
                                            <td><?php if(isset($row['content_hour']) && isset($row['content_min']) && isset($row['content_sec']))
                                            {echo $row['content_hour'].'h '.$row['content_min'].'m '.$row['content_sec'].'s ';} ?></td>
                                            <td><?php if(isset($row['content_year'])){echo $row['content_year'];} ?></td>
                                            <td><?php if(isset($row['content_lang'])){echo $row['content_lang'];} ?></td>
                                            <td scope="row">
                                                <form method="POST" action="videoupdate.php"class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-success btn-sm mr-2" name="view" value="View">Edit</button>
                                                </form>
                                                <form method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete" value="Delete">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            <?php }
                                            ?>
                                            <?php while($row = $result8->fetch_assoc()){ ?>
                                            <tr>
                                            <th><?php if(isset($row['content_id'])){echo $row['content_id'];} ?></th>
                                            <td><?php if(isset($row['content_name'])){echo $row['content_name'];} ?></td>
                                            <td><?php if(isset($row['content_desc'])){echo $row['content_desc'];} ?></td>
                                            <td><?php if(isset($row['content_type'])){echo $row['content_type'];} ?></td>
                                            <td><?php if(isset($row['content_status'])){echo $row['content_status'];} ?></td>
                                            <td><?php if(isset($row['content_price'])){echo $row['content_price'];} ?></td>
                                            <td><?php if(isset($row['content_theme'])){echo $row['content_theme'];} ?></td>
                                            <td><?php if(isset($row['content_hour']) && isset($row['content_min']) && isset($row['content_sec']))
                                            {echo $row['content_hour'].'h '.$row['content_min'].'m '.$row['content_sec'].'s ';} ?></td>
                                            <td><?php if(isset($row['content_year'])){echo $row['content_year'];} ?></td>
                                            <td><?php if(isset($row['content_lang'])){echo $row['content_lang'];} ?></td>
                                            <td scope="row">
                                                <form method="POST" action="videoupdate.php"class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-success btn-sm mr-2" name="view" value="View">Edit</button>
                                                </form>
                                                <form method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete" value="Delete">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            <?php }
                                            ?>
                                            <?php while($row = $result9->fetch_assoc()){ ?>
                                            <tr>
                                            <th><?php if(isset($row['content_id'])){echo $row['content_id'];} ?></th>
                                            <td><?php if(isset($row['content_name'])){echo $row['content_name'];} ?></td>
                                            <td><?php if(isset($row['content_desc'])){echo $row['content_desc'];} ?></td>
                                            <td><?php if(isset($row['content_type'])){echo $row['content_type'];} ?></td>
                                            <td><?php if(isset($row['content_status'])){echo $row['content_status'];} ?></td>
                                            <td><?php if(isset($row['content_price'])){echo $row['content_price'];} ?></td>
                                            <td><?php if(isset($row['content_theme'])){echo $row['content_theme'];} ?></td>
                                            <td><?php if(isset($row['content_hour']) && isset($row['content_min']) && isset($row['content_sec']))
                                            {echo $row['content_hour'].'h '.$row['content_min'].'m '.$row['content_sec'].'s ';} ?></td>
                                            <td><?php if(isset($row['content_year'])){echo $row['content_year'];} ?></td>
                                            <td><?php if(isset($row['content_lang'])){echo $row['content_lang'];} ?></td>
                                            <td scope="row">
                                                <form method="POST" action="videoupdate.php"class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-success btn-sm mr-2" name="view" value="View">Edit</button>
                                                </form>
                                                <form method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?php if(isset($row['content_id'])){echo $row['content_id'];}?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete" value="Delete">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            <?php }
                                            ?>
                                        </tbody>
                                    </table>
                                        <?php
                                }
                                else
                                {
                                    echo '<h1 class="text-center">No record Found</h1>';
                                }
                            ?>

                        </div>
                        <?php
                    }
                    else
                    {
                        echo "<script> window.alert('Query False'); </script>";
                    } ?>
                    
                <?php
            } ?>
            </section>
        </div>
      </main>
                    

      <?php
        include('./main/adminsidebar.php');
      ?>
      <?php
        include('./main/adminfooter.php');
      ?>
    

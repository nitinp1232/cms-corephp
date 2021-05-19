<?php

include "sidebar.php";

?>

<div class="alert alert-primary" role="alert"><button type="button" class="btn btn-outline-primary btn-lg" style="width:100%">Dash Board</button></div>
 
            <div class="row border">
           
            <div class="col-9 border">
            <span type="button" class="btn btn-success my-2" style="width:100%">Recent Posts</span>
            <div class="row">

            <?php
                        $sql = "SELECT * FROM `posts` WHERE `admin` = '$username' ORDER BY `sno` DESC";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)){
                          $title =    $row['title'];
                          $stitle =  substr($title,0,20);
                          $ctitle = ucfirst($stitle);
                          $sno =    $row['sno'];
                          $des =    $row['des'];
                          $sdes =  substr($des,0,15);
                          $cats =    $row['cats'];
                          $dt =    $row['dt'];
                          $img =    $row['img'];

                            echo '<div class="card col-4" style="width: 18rem;">
                            <img src="uploads/'.$img.'" class="card-img-top" alt="..." style="width:215px; height:120px;  margin-top: 6%;">
                            <div class="card-body">
                              <h5 class="card-title">'.$ctitle.'...</h5>
                              <p class="card-text">'.$sdes.'...</p>
                              <p class="card-text">Date: '.$dt.'</p>
                              <a href="post.php?sno='.$sno.'" class="btn btn-primary">View Post</a>
                            </div>
                          </div>                     
                          ';
                        }
                        ?>

</div>

</div>
<div class="col-3 border">
<span type="button" class="btn btn-success my-2" style="width:100%">Categories</span>

<?php
                        $sql = "SELECT * FROM `cats`";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)){
                          $catname =    $row['catname'];

                            echo ' <li>
                            <a href="#"  class="btn btn-outline-primary btn-sm">'.$catname.'</a>
                        </li><br>';
                        }
                        ?>

</div>
  
  




  </div>
  
    <?php
    include "footer.php";
    ?>
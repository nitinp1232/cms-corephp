<div class="col l3 #f3e5f5 purple lighten-5">
<div class="#e0f2f1 teal lighten-5"> 
<div class="collection teal">
      <a class="collection-item center">Search Posts</a></div>
      <div class="input-field center">
      <input type="text" name="search" id="search" placeholder="Search here......">
      <button type="submit" class="btn waves-effect waves-light center">Search</button>
      </div>
      
</div>

<div class="#e3f2fd blue lighten-5">

<div class="collection with-header teal">
      <a class="collection-item center">Trending Posts</a></div>
      <ul class="collection">

      <?php
                        $sql = "SELECT * FROM `posts` ORDER BY `posts`.`sno` DESC LIMIT 5";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)){
                          $title =    $row['title'];
                          $admin =    $row['admin'];
                          $des =    $row['des'];
                          $cats =    $row['cats'];
                          $dt =    $row['dt'];
                          $img =    $row['img'];

                            echo '<li class="collection-item">'.$title.'<p><b>By: </b>'.$admin.'</p></li>';
                        }
                        ?>


      
      </ul>
 </div>
 </div>
<?php
include 'includes/header.php';
?>



<div class="row">
    <div class="col l9 s12 m12">
    <?php
                        $sql = "SELECT * FROM `posts` ORDER BY `posts`.`sno` DESC";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)){
                          $title =    $row['title'];
                          $stitle =  substr($title,0,18);
                          $ctitle = ucfirst($stitle);
                          $admin =    $row['admin'];
                          $sno =    $row['sno'];
                          $des =    $row['des'];
                          $cats =    $row['cats'];
                          $dt =    $row['dt'];
                          $img =    $row['img'];

                            echo '  <div class="card col l3">
                            <div class="card-image"><span class="img1">
                            <img src="admin/uploads/'.$img.'" style="width:220px; height:170px; margin-top: 5%;" alt="Feature Image"></span>
                              
                             </div>
                              <div class="card-content">
                              <span class="card-title" style="font-size:20px"><b>'.$ctitle.'..</b></span>
                                </div>
                                  <div class="card-action">
                                  <p><b>Category:</b> '.$cats.'</p>
                                  <p><b>Post by:</b> '.$admin.'</p>
                                  <p><b>Date:</b> '.$dt.'</p>
                                     <a href="admin/post.php?sno='.$sno.'">View Post</a>
                                    </div>
                             </div>';
                        }
                        ?>








   
    
              

              

   








         
    </div>
  
  


<!-- sidebar div starts from here -->


<?php
include 'includes/sidebar.php';
?>


</div>

<?php
include 'includes/footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script>
$(document).ready(function(){

$('.img1').html('<img src="includes/img/fi.jpg" style="width:250px; height:150px">')


});

</script> -->
   
   
<?php

include "sidebar.php";
?>

<div class="jumbotron">
  <center><h1><?php echo $catname;  
  ?></h1></center>
 
  <hr class="my-4">




<?php
$catid = $_GET['catid'];
$sql = "SELECT * FROM `posts` WHERE `catid` = '$catid' ORDER BY `sno` DESC";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)){
    $title =    $row['title'];
    $des =    $row['des'];
    $sdes = substr($des, 0, 30);
    $dt =    $row['dt'];
    $admin =    $row['admin'];
    $sno =    $row['sno'];
    $img =    $row['img'];
    $catname =    $row['cats'];

  echo'
 

 <div class="media">
 <a href="post.php?sno='.$sno.'">
 <img src="uploads/'.$img.'" style="width:160px; height:80px;" class="mr-3" alt="Image" ></a>
 <div class="media-body">
 <span style="float:right"><b>Date: <b>'.$dt.'</span><br>
 <a href="post.php?sno='.$sno.'"> <h5>'.$title.'</h5></a>
  '.$sdes.'
 </div>
</div> <hr>';

}


?>

</div>

<?php
    include "footer.php";
    ?>
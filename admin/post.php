<?php

include "sidebar.php";

$sno = $_GET['sno'];
$sql = "SELECT * FROM `posts` WHERE `sno` = '$sno'";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)){
  $title =    $row['title'];
  $ctitle = ucfirst($title);
  $sno =    $row['sno'];
  $des =    $row['des'];
  $cats =    $row['cats'];
  $dt =    $row['dt'];
  $admin =    $row['admin'];
  $img =    $row['img'];

    echo '<div class="container">
    <div class="jumbotron"><center>
    <img src="uploads/'.$img.'" style="width:700px; height:250px; margin-top:-30px;">
      <h1 class="my-1">'.$ctitle.'</h1></center>
      <p class="lead">'.$des.'</p>
      <hr class="my-4">
      <span style="float:left;"><b>Published on: </b>'.$dt.'</span>
      <span style="float:right;"><b>Published By: </b>'.$admin.'</span><br>
      <span style="float:left;"><b>Category: </b>'.$cats.'</span><br><br>
      <a class="btn btn-warning btn-sm" href="editpost.php?sno='.$sno.'" role="button">Edit Post</a>
    </div>
    
    
    </div>
    ';
}
?>


<?php
    include "footer.php";
    ?>
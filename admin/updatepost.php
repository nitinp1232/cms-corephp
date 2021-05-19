<?php

include "db.php";



$title = $_POST['title'];
$sno = $_POST['sno'];
$des = $_POST['des'];
$cats = $_POST['cats'];
$dt = $_POST['dt'];
$img = $_FILES['img'];
$imgname = $_FILES['img']['name'];
$imgtmp = $_FILES['img']['tmp_name'];
$tm = time();
$filext = explode('.',$imgname);
$ext = end($filext);
$tm = time();
$upname = 'cms'.$tm.'.'.$ext;
$uploadfolder = "uploads/".$upname;
move_uploaded_file($imgtmp, $uploadfolder);



$sqlu = "UPDATE `posts` SET `title` = '$title', `des` = '$des',`cats` = '$cats',`dt` = '$dt',`img` = '$upname' WHERE `posts`.`sno` = $sno;";
$result = mysqli_query($con, $sqlu);

header("Location:post.php?sno=$sno");


?>
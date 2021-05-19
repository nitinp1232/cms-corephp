<?php


include "sidebar.php";

if(isset($_POST['title']))
{
$title = $_POST['title'];
$des = $_POST['des'];
$catid = $_POST['catid'];
$dt = $_POST['dt'];
$img = $_FILES['img'];
$imgname = $_FILES['img']['name'];
$imgtmp = $_FILES['img']['tmp_name'];
$imgtype = $_FILES['img']['type'];
$filext = explode('.',$imgname);
$ext = end($filext);
$tm = time();

$upname = 'cms'.$tm.'.'.$ext;

$uploadfolder = "uploads/".$upname;

move_uploaded_file($imgtmp, $uploadfolder);

print_r($img);

echo '<br>';
$tm = time();
echo $tm;
echo '<br>';
echo $upname;
echo '<br>';
print_r($filext);
echo '<br>';
echo $ext;
}




?>
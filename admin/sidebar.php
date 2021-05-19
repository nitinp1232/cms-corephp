<?php

include "db.php";
session_start();

if (!isset($_SESSION['username']))
{
    header("Location:index.php");
   
}
else
{
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];

}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin Panel</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="date.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body onload="myFunction()">
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>CMS</h3>
            </div>

            <ul class="list-unstyled components">
                <span style="margin-left:10px">Welcome <strong ><?php
                echo "$username </strong></span>";
                ?>

<center>
  <button type="button" style="width:80%" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Account Settings 
  </button> 
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#"><?php echo  $email; 
    ?></a>
    <a class="dropdown-item" href="logout.php">Log out</a></div><div class="dropdown-divider"></div>
    </center> <center><button type="button" style="width:100%" class="btn btn-warning" aria-haspopup="true" aria-expanded="false">
   Panel Menu 
  </button></center>
                <li class="active">
                <a href="dash.php">Dashboard</a>
                </li>
                <li>
                    <a href="addpost.php">Add Posts</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Categories</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <?php
                        $sql = "SELECT * FROM `cats`";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)){
                          $catname =    $row['catname'];
                          $sno =    $row['sno'];

                            echo ' <li>
                            <a href="cats.php?catid='.$sno.'">'.$catname.'</a>
                        </li>';
                        }
                        ?>
                        
                        
                    </ul>
                </li>
                <li>
                    <a href="#">Settings</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="/cms" class="download">Back to Site</a>
                </li>
                
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content" style="margin-top:-17px;">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <h2 class="center"> Welcome to CMS Admin Panel </h2>
                    <a href="logout.php" type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Logout</span>
                    </a>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
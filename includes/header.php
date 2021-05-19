<?php
$con = mysqli_connect('localhost', 'root', '','cms');

?>
 <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="includes/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo center">CMS</a>
        <!-- <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a> -->
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="/cms/admin">Admin/Login</a></li>
      
          
        </ul>
        <!-- <ul class="side-nav" id="mobile-menu">
          <li><a href="#">item1</a></li>
          <li><a href="#">item2</a></li>
          <li><a href="#">item3</a></li>
          <li><a href="#">item4</a></li>
        </ul> -->
      </div>
    </nav>
    </div>
    
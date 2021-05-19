<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../includes/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body style="background-image:url('../includes/img/bg1.jpg'); background-size:cover;">
<div class="row" style="margin-top:80px" >
<h3 class="center orange-text">Welcome to CMS </h3>
<div class="col l6 offset-l3 #e0f2f1 teal lighten-4">
<div class="card-panel center #e0f2f1 teal lighten-5">
<ul class="tabs">
<li class="tab"><a href="#signin">Sign in</a></li>
<li class="tab"><a href="#signup">Sign up</a></li>
</ul>
</div>
</div>
<div style="margin-top:0px #e0f2f1 teal lighten-4">
<div class="col l6 offset-l3 #e0f2f1 teal lighten-4" id="signin">
<div class="card-panel center">
 <h6>Welcome to CMS, Sign in Here</h6> 
 <form action="dashboard.php" method="post">
 <input placeholder="Username" id="username" name="username" type="text" class="validate">
 <input placeholder="Password" id="password" name="password" type="password" class="validate">
 <button class="btn waves-effect waves-light" type="submit" value="login" name="action">Login
   <i class="material-icons right">send</i>
 </button>
 </form>
 </div>
 </div>
<div class="col l6 offset-l3 #e0f2f1 teal lighten-4" id="signup"> 
<div class="card-panel center">
<h6>Welcome to CMS, Register Here</h6> 
<form action="dashboard.php" method="post">
<input placeholder="username" id="rusername" name="rusername" type="text" class="validate">
<input placeholder="E-mail ID" id="email" name="email" type="text" class="validate">
 <input placeholder="Password" id="password" name="password" type="password" class="validate">
 <input placeholder="Confirm Password" id="cpassword" name="cpassword" type="password" class="validate">
 <button class="btn waves-effect waves-light" type="submit" value="regi" name="action">Register
   <i class="material-icons right">send</i>
 </button>
 </form>
</div>
</div>
</div>
</div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../includes/js/materialize.min.js"></script>
      <script>$(document).ready(function(){
    $('.tabs').tabs();
  });</script>
      
     
    </body>
  </html>
        
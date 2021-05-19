<?php
include 'db.php';

if (isset($_POST['rusername'])){

    $username = $_POST['rusername'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword)
    {
       $sql = "INSERT INTO `users` (`username`, `email`, `password`, `dt`) 
       VALUES ('$username', '$email', '$password', current_timestamp())";

       $result = mysqli_query($con, $sql);

       echo "Register Successfully";
       header("Location:index.php"); 
    }
else{

    echo "Password not match";
}
}
else
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

       $result = mysqli_query($con, $sql);
     
     
       $num = mysqli_num_rows($result);

       if ($num > 0)
       {
             while( $row = mysqli_fetch_array($result))
             {
              $username = $row['username'];
             $email = $row['email']; 
session_start();
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;


header("Location:dash.php"); 
             }

       }

       else 
       {
           echo "You are not Register with us ";
       }
}

?>
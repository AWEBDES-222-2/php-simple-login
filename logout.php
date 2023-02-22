<?php
    session_start();
    if(isset($_COOKIE['cookie_name'])){
      setcookie('cookie_name','mizzy',time() - 1000000); //Deleting a Cookie
      $output = "You have deleted your cookie. You are now logged out!";
    }elseif($_SESSION['name'] != null){
      session_destroy();//Destroying a session
      $output = "You have deleted your session. You are now logged out!";
    }else{
      header('location: login.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Logout</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
    <body>
      <h3><?php echo $output;?></h3>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

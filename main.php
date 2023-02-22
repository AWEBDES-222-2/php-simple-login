<?php 
    session_start();
    if(isset($_COOKIE['cookie_name'])){
      $output = $_COOKIE['cookie_name'] . "(You have created a cookie!)";
    }elseif($_SESSION['name'] != null){
      $output = $_SESSION['name'] . "(You have created a session!)";
    }else{
      header('location: login.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Main Page</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
    <body>
      <h3>Hello <?php echo $output; ?></h3>
      <a href='logout.php'>Logout</a>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

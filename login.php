<?php
session_start();

  if (isset($_POST['btn_submit'])){
    if ($_POST['username'] == 'mizzy' && $_POST['password'] == 'pearl'){
      if (isset($_POST['rememberme'])){
        setcookie('cookie_name','mizzy',time() + 1000000); //Setting a Cookie
        header('location: main.php');
      }else{
        $_SESSION['name'] = "mizzy"; //Setting a Session
        header('location: main.php');
      }
          
    }else{
      echo "Invalid credentials!";
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login Page</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
      <form action="login.php" method="post">
        <input type="text" name="username" placeholder="username" required />
        <br/>
        <input type="password" name="password" placeholder="password" required/>
        <br/>
        <input type="checkbox" name="rememberme" value="Remember Me"/> Remember Me
        <br/>
        <input type="submit" name="btn_submit" value="Login"/>
      </form>

     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>


<?php 

require 'functions.php';

if (isset($_POST["registrasi"]) ) {

  if ( registrasi($_POST) > 0) {
    echo "<script>
          alert('user baru telah di tambahkan!');
          </script>";
  } else {
    echo mysqli_error($conn);
  }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="img-page"></div>
      <div class="form-login">
        <h1>REGISTER</h1>

        <form action="" method="POST">
          <label for="username">Username</label>
          <br />
          <input class="username" type="text" placeholder="Username" name="username" id="username"/>
          <br />
          <br />
          <br />
          <label for="password">Password</label>
          <br />
          <input class="password" type="password" placeholder="Password" name="password" id="password"/>
          <br />
          <br />
          <br />
          <label>Re-Password</label>
          <br />
          <input class="password" type="password" placeholder="Password" name="re-password" id="re-password" />
          <br />
          <button type="submit" name="registrasi">Sign Up</button>
        </form>
      </div>
    </div>
  </body>
</html>

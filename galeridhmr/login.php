<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/lgn.css">
  <title>Halaman Login</title>
</head>
<body>
  <div class="wrapper">
  <form action="proses_login.php" method="post">
    <h3><b>Login</b></h3>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button>Login</button>
        <div class="register">
        Don't have an account? <a href="register.php" id="register"><br>Sign Up</br></a>
</div>
</form>
</div>
</body>
</html>
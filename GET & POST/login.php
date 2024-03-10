<?php 
  if(isset($_POST["submit"])) {
    if($_POST["username"] == "rizky" && $_POST["password"] == "rizky") {
      header("Location: admin.php");
      exit;
    } else {
      $error = true;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN WITH PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-container">
    <form action="" method="post">
      <h2>Login</h2>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Username">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Username">

      <?php if(isset($error)) : ?>
        <p style="color: red; font-style : italic;">Password / Username salah</p>
      <?php endif; ?>

      <button type="submit" name="submit">Login</button>
    </form>
  </div>
</body>
</html>

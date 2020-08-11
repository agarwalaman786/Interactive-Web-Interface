<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
<form method="post" action="register.php">
        <div class="input-group">
      <input type="text" placeholder="Username..." name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <input type="email" placeholder="Email..." name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <input type="password" placeholder="Password..." name="password_1">
    </div>
    <div class="input-group">

      <input type="password" placeholder="Confirm Password..." name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p class="message" style="margin: 20px;">
        Already a member? <a href="login.php" style="color: #4CAF50;">Login</a>
    </p>
  </form>
</body>
</html>
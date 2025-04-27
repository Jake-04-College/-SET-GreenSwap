
<?php require __DIR__ . '/../private/templates/navbar.php';?>
<?php require __DIR__ . '/../private/functions.php' ?>
<?php
function validateLogin($inputUsername, $inputPassword, $storedUsername, $storedPassword) {
    return $inputUsername == "Testuser" && $inputPassword == "Password";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (validateLogin($_POST['email'], $_POST['psw'], $Username, $Password)) {
        
        $_SESSION['Username'] = $Username;
        $_SESSION['Active'] = true;
        header("location:index.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/login.css'>
    <script src='main.js'></script>
    <script src="https://kit.fontawesome.com/85df64fd4d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<form style="border:1px solid #ccc" method="POST" action="login.php">
  <div class="container">
    <h1>Login</h1>
    <p>Enter account details:</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>  <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>  <br>

    <div class="button">
      <button type="submit" class="signupbtn">Log In</button>
      <button class="newuser"><a href="register.php" class="newuser">New User?</a></button>
    </div>
  </div>
</form>
</body>
</html>

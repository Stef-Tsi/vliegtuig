<?php

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
<script src="https://use.fontawesome.com/d1341f9b7a.js?v=<?php echo time(); ?>">"></script>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"+
          charset="UTF-8">
    <title>Vliegtuigen</title>
</head>


<body>

<div class="header">
    <img src="image/back.png" alt="" class="center"  height="300" width="1600">
</div>


<ul>
    <li><a class="active" href="home.php">Login</a></li>
    <li><a href="vlucht_plannen.php">Vlucht Plannen</a></li>
    <li><a href="vliegtuigen.php">Vliegtuigen invoegen</a></li>
    <li><a href="hulp.php">Hulp en contact</a></li>


</ul>

<form action="action_page.php" method="post">
    <div class="imgcontainer">
        <img src="image/logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>



</body>
</html>
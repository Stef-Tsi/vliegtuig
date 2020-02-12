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
    <li><a href="vliegtuigen.php">Vliegtuigen toevoegengen</a></li>
    <li><a href="lijst.php">Vliegtuigen lijst</a></li>
    <li><a href="hulp.php">Hulp en contact</a></li>


</ul>



<div class="containerr">

    <div class="container">
        <form action="action_page.php">


            <h3<font color="black">If you got any problems with login into your account or with fuctions
                on the site please send a message behind and help desk will contact you as soon a possible.</font></h3>
            <br>
            <br>
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="lname">Email</label>
            <input type="text" id="lname" name="lastname" placeholder="pleace enter your email..">

            <label for="Workstation">Workstation</label>
            <select id="country" name="country">
                <option value="KLM">KLM</option>
                <option value="Dubai">Dubai</option>
                <option value="Brussels">Brussels</option>
            </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Please enter the error code or the problem that accurd" style="height:200px"></textarea>

            <input type="submit" value="Submit">

        </form>
    </div>




</body>
</html>
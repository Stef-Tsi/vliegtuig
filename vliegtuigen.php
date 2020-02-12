<?php
//waar staat de server
$host = "localhost";

//database naam
$dbname = "vliegtuig";

//gebruikernaam
$user = "root";

//wachtwoord
$password = "";

$pconn = new PDO("mysql:host=$host;dbname=$dbname",
    "root", "") or die();

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
    <li><a href="vliegtuigen.php">Vliegtuigen toevoegengen</a></li>
    <li><a href="lijst.php">Vliegtuigen lijst</a></li>
    <li><a href="hulp.php">Hulp en contact</a></li>


</ul>

<div id="container">
<form method="post">
    <h3 >Vliegtuig nummer:</h3><input  class="search" type="Text" name="nummer" placeholder="Vliegtuig nummer"/><br/>
    <h3>Type:</h3><input  class="search" type="Text" name="type" placeholder="Vliegtuig nummer"/><br/>
    <h3>Vlucht maatschapij:</h3><input type="Text" class="search" name="maatschapij" placeholder="Maatschapij"/><br/>
    <h3>Status:</h3><input type="Text" name="status" class="search" placeholder="status"/><br/>
    <h3>Foto URL:</h3><input type="Text" name="foto" class="search" placeholder="plaats hier de url"/><br/>

    <input type="submit" class="search" name="btnVerstuur" value="Submit"/>
</form>
</div>
<div class="containerr">





</body>
</html>

<?php
if (isset($_POST["btnVerstuur"])) {

    $lijst = array();

    if (empty($_POST["nummer"])) {
        echo "Er is geen nummer ingevuld!" . "<br/>";
    } else {
        echo "nummer: " . $_POST["nummer"] . "<br/>";

        $lijst[0] = $_POST["nummer"];
    }
    echo "<br>";
    if (empty($_POST["type"])) {
        echo "Er is geen dier ingevuld!" . "<br/>";
    } else {
        echo "type: " . $_POST["type"] . "<br/>";

        $lijst[1] = $_POST["type"];
    }
    echo "<br>";
    if (empty($_POST["maatschapij"])) {
        echo "Er is geen maatschapij ingevuld!" . "<br/>";
    } else {
        echo "maatschapij: " . $_POST["maatschapij"] . "<br/>";

        $lijst[2] = $_POST["maatschapij"];
    }
    echo "<br>";
    if (empty($_POST["status"])) {
        echo "Er is geen status ingevuld!" . "<br/>";
    } else {
        echo "status: " . $_POST["status"] . "<br/>";

        $lijst[3] = $_POST["status"];
    }
    echo "<br>";
    if (empty($_POST["foto"])) {
        echo "Er is geen foto ingevuld!" . "<br/>";
    } else {
        echo "foto: " . $_POST["foto"] . "<br/>";

        $lijst[4] = $_POST["foto"];
    }


    echo "<br>";


    $query = "INSERT INTO vliegtuigen VALUES ".
        "('$lijst[0]','$lijst[1]','$lijst[2]','$lijst[3]','$lijst[4]')";


    $stm = $pconn->prepare($query);
    if($stm->execute())
    {
        echo "correct uitgevoerd zit in db";
    }else echo "query in db mislukt ID bestaat al";

}

?>

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
    <li><a href="vliegtuigen.php">Vliegtuigen toevoegen</a></li>
    <li><a href="lijst.php">Vliegtuigen lijst</a></li>
    <li><a href="hulp.php">Hulp en contact</a></li>


</ul>

<?php
$query = "SELECT * FROM vliegtuigen"; //Query om vliegtuigen op te halen
$stm = $pconn->prepare($query);
if($stm->execute()){
    foreach($stm->fetchAll(PDO::FETCH_OBJ) as $vliegtuig) {
        echo "<li>";
        echo "===============<br/>";
        echo "<img class='vl' src='$vliegtuig->foto' alt='image/worst.jpg'><br/>";
        echo "<b>Vluchtnummer: <class='vlt'>".$vliegtuig->vliegtuig_nummer."</b><br/>";
        echo "<class='vlt'>".$vliegtuig->type."<br/>";
        echo "<class='vlt'>".$vliegtuig->maatschapij."<br/>";
        echo "<class='vlt'>".$vliegtuig->status."<br/>";

        echo "</li>";
    }
} else {
    echo "Er is iets misgegaan met het ophalen van de vliegtuigen.";
}
?>





</body>
</html>



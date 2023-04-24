<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include "azure.php";

$sql = "SELECT * FROM sko"; # sko er tabell navnet
$resultat = $kobling->query($sql); # henter ut fra DB

echo "<table id='sko'>";
echo "<tr>";
echo "<th> merke </th>";
echo "<th> modell </th>";
echo "<th> år</th>";
echo "<th> type sko såle</th>";
echo "<th> vann beskytene</th>";
echo "</th>";

# looper gjennom resultatet fra databasen
while($rad = $resultat->fetch_assoc()){
    $idbil = $rad['iDbil']; # idbil i burn teast må samsvare med feltnavn i DB
}



    ?>
</body>
</html>
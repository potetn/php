<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "azure.php";

        $sql = "SELECT idbruker, brukernavn FROM bruker ";
        $resultat = $conn->query($sql); # henter ut fra DB
 
        while($rad = $resultat->fetch_assoc()) { # loop gjennom alle brukere
            $idbruker = $rad['idbruker'];  
            $brukernavn = $rad['brukernavn'];
 
            echo "<a href='profil.php?bruker_id=$idbruker'>$brukernavn</a><br>";
        }
 
        ?>


</body>
</html>
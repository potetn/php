<?php
$server = "localhost";
$brukernavn = "root";
$passord = "";
$database = "sko"; #navn på database som ble angitt i DB model
# oppretter kobling med brukernavn og passord
$kobling = new mysqli($server,$brukernavn,$passord,$database);

#sjekker om det er feil med tilkobling til MySQL
if ($kobling->connect_error){
    die("Noe gikk galt:".$kobling->connect_error);
} else {
    echo "Tilkoblingen virker<br><br>";
}

$sql = "SELECT * FROM bil";
$resultat = $kobling->query($sql); # henter ut fra DB

# looper gjennom resultatet fra databasen
while($rad = $resultat->fetch_assoc()){
    $idbil = $rad['idb'];
    $merke = $rad['merke'];
    $modell = $rad['modell_navn'];
    $år = $rad['år'];
    $type = $rad['motor_type'];
    $hk = $rad['hestekrefter'];

    echo "$idbil,$merke,$modell,$år,$type,$hk<br>";
}

?>
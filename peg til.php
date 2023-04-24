<from method="POST">
    bilmerke
    <br><input type="text"name="skomerke"><br><br>
    Årsmodell
    <br><input type="number" name="aarmodell"><br>
    <br><input type="submit" name="leggtil" value="Legg til sko">
</form>

<?php
include "kobling.php";

if(isset($_POST["leggtil"])){
    $bilmerke = $_POST["skomerke"];
    $aar = $_POST["aarmodell"];

    $sql ="INSERT INTO sko tabel(farge,lengde,sålene,vann tette,sko liser,tonge,brede,høyde)VALUES('$bilmerke','$aar')";

    if($conn->query($sql)){
        echo "sko med merke $sko_merke og års model: $aar ble lagt til i databasen";
    }

}// slutt på if post isset

?>
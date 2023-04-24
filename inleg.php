<form method='POST'>
    Skriv ditt innlegg:<br>
    <textarea name="tekst_innlegg" cols="40" rows="5"></textarea><br>   
    <input type="submit" name='submit' value='Legg ut'><br><br>
</form>
<?php 
if(isset($_POST["submit"])) {
    include "azure.php";
    $tekst = $_POST["tekst_innlegg"];
    $sql = "INSERT INTO innlegg (tekst, idbruker, date) VALUES ('$tekst','$id', now() )";
 
    # sjekk om feil eller ble lagt til
    if($conn->query($sql)) {
        echo "Innlegg ble lagt til i databasen";
    } else {
        echo "Feilmelding: $conn->error";
    }
}
 
?>
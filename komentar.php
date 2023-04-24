<div class='innlegg'>
            <?php
            session_start(); 
                $sql = "SELECT * FROM innlegg WHERE idbruker='$id_fra_link' ORDER BY date DESC";
                $resultat = $conn->query($sql); # henter ut fra DB
 
                while($rad = $resultat->fetch_assoc()) { # loop gjennom alle brukere
                    $innlegg_tekst = $rad['tekst']; 
                    $dato_opprettet = $rad['date']; 
                    $idinnlegg = $rad['idinnlegg']; 
                    echo "<h4>$dato_opprettet </h4>
                          <p> $innlegg_tekst</p>";
                                       
                 
 
                    // lag form her
                    echo "
                    <form method='POST'>
                        <input name='tekst_kommentar' value='kommentar'>
                        <input name='idinnlegg' type='hidden' value='$idinnlegg'> 
                        <input type='submit' name='submit_kommentar' value='Svar'>
                    </form>
                    ";  
                } // end innlegg loop
                
                if(isset($_POST["submit_kommentar"])) {
                    $tekst = $_POST["tekst_kommentar"];
                    $idinnlegg = $_POST["idinnlegg"];
                    $id = $_SESSION['login_id'];
 
                    $sql = "INSERT INTO innlegg_kommentar (tekst, idbruker, idinnlegg, date) VALUES ('$tekst','$id', $idinnlegg, now() )";
                  
                    # sjekk om feil eller ble lagt til
                    if($conn->query($sql)) {
                        echo "Innlegg ble lagt til i databasen";
                    } else {
                        echo "Feilmelding: $conn->error";
                    }
                }
            ?>
 
        </div>
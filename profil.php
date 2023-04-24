
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profiler</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include "azure.php";
    
    $id_fra_link = $_GET['bruker_id'];//henter ut talle fra linken du trenger fra 1-6 fra ut valget 
 
    $sql = "SELECT * FROM bruker WHERE idbruker='$id_fra_link' "; // valg mellom id brukere//hente ut et utvalg av iformasjon og kun fra den brukeren som linken viser til


    $resultat = $conn->query($sql); # henter ut fra DB
 
    $rad = $resultat->fetch_assoc();
        $idbil = $rad['idbruker'];  # idbil i brun tekst må samsvare med feltnavn i DB
        $brukernavn = $rad['brukernavn'];
        $fornavn = $rad['fornavn'];
        $år = $rad['epost'];
        $type = $rad['skole'];
        $hk = $rad['bosted'];
        $beskrivelse = $rad['fodselsdato'];
        $bilde = $rad['bilde'];
 
    echo "<h1>$brukernavn</h1> 
        <h3>$fornavn, $år</h3>
        <p> $beskrivelse </p>
        <img src='img/$bilde' alt='bil bilde'>
               
        ";
        ?>
        
    </div>
       <?php 
       $id = $id_fra_link;


        
       include "opplode.php";

       include "inleg.php";

       include "komentar.php";
       ?>
      <div class='bilde_div'>
            <?php
                $sql = "SELECT * FROM media WHERE idbruker='$id_fra_link' ";
                $resultat = $conn->query($sql); # henter ut fra DB
 
                while($rad = $resultat->fetch_assoc()) { # loop gjennom alle brukere
                    $media_navn = $rad['media_navn'];  
                    echo "<img class='bilder'src='img/$media_navn'>";
                }
            
            ?>
        </div>
      
     
    
 
</body>
</html>
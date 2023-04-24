<?php
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "tobias.mysql.database.azure.com", "tobias123", "Disneyland@123", "rote_bok", 3306, MYSQLI_CLIENT_SSL);
?>
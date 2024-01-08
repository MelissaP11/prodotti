<!DOCTYPE html>
<html>
    <head></head>
<body>
<p align="center"><strong>Connessione al database</strong><br><br><br>
<?php
    $hostname="localhost";
    $username ="root";
    $password = "";
    $dbname = "dblogin";
    //connessione al server sql con selezione del database
    $conn = mysqli_connect($hostname , $username , $password , $dbname);
    if(!$conn)
        die("<br><br><strong>Errore nella connessione</strong>");
    else
        print "<br><br><strong>Connessione avvenuta corretamente</strong>";
    mysqlli_close($conn);
    print "<strong>Ora la connessione è chiusa</strong>";
?>
</body>
</html>
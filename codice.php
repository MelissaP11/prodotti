<!DOCTYPE html>
<html>
    <head></head>
<body>
<h1 style="font-size: 3; ">Elenco prodotti</h1>
<?php
    $hostname="localhost";
    $username ="root";
    $password = "";
    $dbname = "prodotti";
    //connessione al server sql con selezione del database
    $conn = mysqli_connect($hostname , $username , $password , $dbname);
    if(!$conn){
        die("<br><br><strong>Errore nella connessione</strong>");
        exit();
    }
    $codice=$_POST['codice'];
    $query="Select * from prodotto where codice_prodotto='$codice'";
    $risultato = mysqli_query($conn,$query);
    if(!$risultato){
        print "errore nel comando";
        exit();
    }
    $riga= mysqli_fetch_array($risultato);
    if ($riga){
        print "descrizione: ".$riga['descrizione']."<br>";
        print "prezzo_unitario: ".$riga['prezzo_unitario']."<br>";
        print "quantita: ".$riga['quantita'];
    }
    else{
        print "Attenzione!!! non ci sono prodotti presenti";
    }
    mysqli_close($conn);

?>
</body>
</html>
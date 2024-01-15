<DOCTYPE html>
    <html>
        <head>
        <title>dati inseriti</title> 
        </head>
            <body>
<?php
session_start();
$codice_prodotto = $_POST["codice_prodotto"];
$descrizione = $_POST["descrizione"];
$prezzo_unitario = $_POST["prezzo_unitario"];
$quantita = $_POST["quantita"];

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
$query= "Insert into prodotto(codice_prodotto , descrizione , prezzo_unitario , quantita)VALUES 
('$codice_prodotto' , '$descrizione' , $prezzo_unitario , $quantita)";
$risultato = mysqli_real_query($conn,$query);
if(!$risultato){
    print "errore nel comando sql ";
    exit();
} else {
    print "Registrazione avvenuta corretamente è stata inserita 1 riga";
    exit(); 
}
mysqli_close($conn);

?>
            </body>
            </html>
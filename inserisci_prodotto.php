<DOCTYPE html>
    <html>
        <head>
        <title>dati inseriti</title>
        <style>
            body {margin:0;}
            
            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background-color: #333;
              position: fixed;
              top: 0;
              width: 100%;
            }
            
            li {
              float: left;
            }
            
            li a {
              display: block;
              color: white;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
            }
            
            li a:hover:not(.active) {
              background-color: #0499aa;
            }
            
            .active {
              background-color: #0499aa;
            }
            </style>
        </head>
            <body>
        <ul>
            <li><a href="http://localhost/prodotti/homepage.html">Homepage</a></li>
            <li><a href="http://localhost/prodotti/elenco.php">Tabella prodotti</a></li>
            <li><a href="http://localhost/prodotti/codice_prodotto.html">Inserimento codice prodotto</a></li>
            <li><a href="http://localhost/prodotti/inserisci_prodotto.html"> Inserimento nuovo prodotto</a></li>  
        </ul>
        <br><br><br><br>
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
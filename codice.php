<!DOCTYPE html>
<html>
    <head>
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
            <li><a href="http://localhost/prodotti/accedi.html">Accedi</a></li>
            <li><a href="http://localhost/prodotti/registrazione.html">Registrati</a></li>
        </ul>
<br><br><br><br>


<h1 style="font-size: 3; ">Elenco prodotti</h1>
<p>Visione del codice inserito</p>

<?php
$user=$_COOKIE['user'];
$password=$_COOKIE['password'];
if($user == " || $password == "){
  print "campi vuoti";
  print "<br><a href='http://localhost/autenticazione/accedi.html'>Ritorna all'accedi</a>";

} else {
$query ="Select * from utenti where username='$user' && password='$password'";
$risultato = mysqli_query($conn,$query);
if(!$risultato){
  print "errore nel comando";
  exit();
}}












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

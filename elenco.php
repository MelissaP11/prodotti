<!DOCTYPE html>
<html>
    <head>
    <style>
            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background-color: #333;
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
            <li><a href="http://localhost/prodotti/elenco.php">Tabella prodotti</a></li>
            <li><a href="http://localhost/prodotti/codice_prodotto.html">Inserimento codice prodotto</a></li>
            <li><a href="http://localhost/prodotti/inserisci_prodotto.html"> Inserimento nuovo prodotto</a></li>  
          </ul>
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
    $query= "Select * from prodotto order by prezzo_unitario";
    $risultato = mysqli_query($conn,$query);
    if(!$risultato){
        print "errore nel comando";
        exit();
    }
    $riga = mysqli_fetch_array($risultato);
    if($riga){
        print "<table border= '2'>";
        print "<tr><td> Codice </td><td> Descrizione</td><td>Prezzo unitario</td><td>Quantita</td></tr>";
        while($riga){
            print"<tr><td>".$riga['codice_prodotto']."</td>";
            print "<td>".$riga['descrizione']."</td>";
            print "<td>".$riga['prezzo_unitario']."</td>";
            print "<td>".$riga['quantita']."</td></tr>";
            $riga= mysqli_fetch_array($risultato);
        }
        print "</table>";
    }
    else{
        print "Attenzione!!! non ci sono prodotti presenti";
    }
    mysqli_close($conn);

?>
</body>
</html>
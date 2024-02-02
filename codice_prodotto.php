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
    <br><br>
    <ul>
            <li><a href="http://localhost/prodotti/homepage.html">Homepage</a></li>
            <li><a href="http://localhost/prodotti/elenco.php">Tabella prodotti</a></li>
            <li><a href="http://localhost/prodotti/codice_prodotto.php">Inserimento codice prodotto</a></li>
            <li><a href="http://localhost/prodotti/inserimento_prodotto.php"> Inserimento nuovo prodotto</a></li>
            <li><a href="http://localhost/prodotti/accedi.html">Accedi</a></li>
            <li><a href="http://localhost/prodotti/registrazione.html">Registrati</a></li>
        </ul>
      <br><br>
      <?php
  
      if(!isset($_COOKIE['user'])) {
        print "Prima devi autenticarti";
        print "<br><a href='http://localhost/prodotti/accedi.html'>Autenticazione</a>";
      } else {
        
        
      

      ?>

    
          <br><br>
        <p style="font-size: 5 ">Ricerca prodotto<br><br>
        <form method='post' action='codice.php'>
        codice prodotto: <input type='text' name='codice' size='10'>
        <p>&nbsp;</p>
        <input type='submit' value='Visualizza'> &nbsp;&nbsp;&nbsp;
        <input type='reset' value='Annulla'>
        </form>
        </p>
      <?php } ?>
    </body>
    </html>
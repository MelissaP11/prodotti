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
            <li><a href="http://localhost/prodotti/codice_prodotto.php">Inserimento codice prodotto</a></li>
            <li><a href="http://localhost/prodotti/inserimento_prodotto.php"> Inserimento nuovo prodotto</a></li>
            <li><a href="http://localhost/prodotti/accedi.html">Accedi</a></li>
            <li><a href="http://localhost/prodotti/registrazione.html">Registrati</a></li>
        </ul>
            <br><br><br><br>
        <?php 
           $hostname="localhost";
           $username ="root";
           $password = "";
           $dbname = "prodotti";
           
           $conn = mysqli_connect($hostname , $username , $password , $dbname);
           if(!$conn){
               die("<br><br><strong>Errore nella connessione</strong>");
               exit();
           }
           session_start();
           $user=$_POST['user'];
           $password=$_POST['password'];

          
           if($user == " || $password == "){
                print "campi vuoti";
                print "<br><a href='http://localhost/prodotti/accedi.html'>Ritorna all'accedi</a>";

           } else 
           {
            $query ="Select * from utenti where username='$user' && password='$password'";
            $risultato = mysqli_query($conn,$query);
            if(!$risultato){
                print "errore nella query sql";
                exit();
            }
            $riga = mysqli_fetch_array($risultato);
            if($riga){
                print "Benvenuto"." ". $riga['Nome']." ".$riga['Cognome'];

                setcookie("user",$user,time()+60);
               
            }else{
                print "username o password errate";
                print "<br><a href='http://localhost/prodotti/registrazione.html'>Registrati</a>";
                print "<br><a href='http://localhost/prodotti/accedi.html'>Accedi</a>";
            }

           }
           mysqli_close($conn);
           ?>
    </body>
    </html>

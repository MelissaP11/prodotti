<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php 
           $hostname="localhost";
           $username ="root";
           $password = "";
           $dbname = "utenti";
           
           $conn = mysqli_connect($hostname , $username , $password , $dbname);
           if(!$conn){
               die("<br><br><strong>Errore nella connessione</strong>");
               exit();
           }
           session_start();
           $user=$_POST['user'];
           $nome=$_POST['nome'];
           $cognome=$_POST['cognome'];
           $password=$_POST['password'];




           $query= "insert into utenti(username , nome , cognome , password ) VALUES
           ('$user' , '$nome' , '$cognome' , '$password')";
           $risultato = mysqli_real_query($conn,$query);

                if(!$risultato){
                print "errore nell'inserimento: username già esistente";
                } else {
                    print "registrazione avvenuta corretamente";
                }
           mysqli_close($conn);
           ?>
    </body>
    </html>

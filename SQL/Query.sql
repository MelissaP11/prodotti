-- codice prodotto descrizione prezzo unitario quantità --
-- create database prodotti;
create table prodotto (
    codice_prodotto char(5) primary key,
    descrizione     VARCHAR(50) ,
    prezzo_unitario decimal(6,2),
    quantita        int
);

Insert into prodotto(codice_prodotto , descrizione , prezzo_unitario , quantita)VALUES
('A23DS' , 'quaderno' , 1.50 , 80),
('S476G' , 'penna' , 1 , 120),
('Q128P' , 'notes' , 1.80 , 90),
('LK87H' , 'matita' , 0.80 , 150),
('SW23A' , 'gomma' , 0.50 , 200),
('MN65F' , 'pennello' , 2.50 , 70),
('245DS' , 'pastelli' , 11.50 , 60),
('YT3DS' , 'tempere' , 10.50 , 120),
('JG54S' , 'post-it' , 1.50 , 20),
('RU53D' , 'libro' , 10.50 , 120);

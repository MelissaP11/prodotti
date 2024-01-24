
create table utenti (
    Username char(20) primary key,
    Nome     VARCHAR(50) ,
    Cognome  VARCHAR(50),
    Password VARCHAR(50)
);

Insert into utenti (username , nome , cognome , password )VALUES
('Paolo11' , 'Paolo' , 'Rossi' , 'PR11'),
('Bruno_22' , 'Bruno' , 'Blu' , 'Bruno.B22'),
('Luca_vitto' , 'Luca' , 'Vitto' , 'luca.vitto11'),
('Viola.P' , 'Viola' , 'Principi' , 'Viola.princi');

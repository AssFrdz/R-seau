create database Reseau;
Use reseau;
create table users(
id_user int AUTO_INCREMENT PRIMARY KEY,
email varchar(50),
pseudo varchar(50),
mdp varchar(50),
nom varchar(50),
prenom varchar(50),
popularite int,
profil_img_chemin text
);
create table galerie(
id_photo int AuTO_INCREMENT PRIMARY KEY,
chemin_photo text,
description text,
id_user int,
FOREIGN KEY (id_user) references Users(id_user) 
);
Create table aimer(
id_photo int,
id_user int,
aimer boolean,
foreign key(id_photo) references Galerie(id_photo),
foreign key(id_user) references Users(id_user)
);
create table commentaires(
id_photo int,
id_user int,
commentaire text,
foreign key(id_photo) references Galerie(id_photo),
foreign key(id_user) references Users(id_user)
);
drop table FILM;
drop table REALISATEUR;

create table REALISATEUR
(IdReal int(4) primary key not null auto_increment,
 NomReal varchar(100) not null,
 PrenomReal varchar(100) not null,
 AnneeNaissance YEAR(4) not null,
 Biographie longtext);

create table FILM
(IdFilm int(4) primary key not null auto_increment,
 NomFilm varchar(100) not null,
 Realisateur int(4) not null ,
 AnneeRealisation YEAR(4) not null ,
 Genre varchar(100) not null );

ALTER TABLE FILM ADD foreign key (Realisateur) REFERENCES REALISATEUR(IdReal);
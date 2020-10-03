--drop table FILM;

create table FILM
(IdFilm int(4) primary key,
NomFilm varchar(20),
Realisateur int(4),
AnneeRealisation YEAR(4),
Genre varchar(20));

create table REALISATEUR
(IdReal int(4) primary key,
NomReal varchar(20),
PrenomRal varchar(20),
AnneeNaissance DATE,
Biographie text);

ALTER TABLE FILM ADD foreign key (Realisateur) REFERENCES REALISATEUR(IdReal);
create database SINEMKT;
use SINEMKT;

create table admin(
id int not null auto_increment primary key,
login varchar(100),
password text
);

create table poduit(
id int not null auto_increment primary key,
nom varchar(100),
prix int,
quantite int,
description text,
image text
);




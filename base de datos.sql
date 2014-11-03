create database restaurante

CREATE TABLE menus
(
 id serial,
 nombre       varchar(100),
 categoria    varchar(100)   not null,
 precio       double precision not null, 
 primary key(id)
) 

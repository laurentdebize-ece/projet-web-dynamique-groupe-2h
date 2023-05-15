CREATE DATABASE IF NOT EXISTS gifty;
USE gifty;

DROP TABLE IF EXISTS Users;
DROP TABLE IF EXISTS Statut;
DROP TABLE IF EXISTS Domaine;
DROP TABLE IF EXISTS Carte;
DROP TABLE IF EXISTS Achat;

CREATE TABLE Statut
(
    id        int PRIMARY KEY AUTO_INCREMENT,
    nomStatut varchar(20) NOT NULL
);

CREATE TABLE Domaine
(
    id         int PRIMARY KEY AUTO_INCREMENT,
    nomDomaine varchar(20) NOT NULL
);

CREATE TABLE Users
(
    id       int PRIMARY KEY AUTO_INCREMENT,
    nom      varchar(20) NOT NULL,
    prenom   varchar(20) NOT NULL,
    mot_de_passe varchar(32) NOT NULL,
    email    varchar(50) NOT NULL,
    phone    varchar(10) NOT NULL,
    statut   int         NOT NULL,
    domaine  int
);


CREATE TABLE Carte
(
    id          int PRIMARY KEY AUTO_INCREMENT,
    partenaire  int,
    prix        int,
    nomCarte    varchar(50),
    description_carte varchar(100)
);

CREATE TABLE Achat
(
    id        int PRIMARY KEY AUTO_INCREMENT,
    idCarte   int        NOT NULL,
    code      varchar(6) NOT NULL,
    dateAchat date       NOT NULL,
    acheteur  int        NOT NULL
);

INSERT INTO statut
VALUES (NULL, 'Administrateur');
INSERT INTO statut
VALUES (NULL, 'Utilisateur');
INSERT INTO statut
VALUES (NULL, 'Partenaire');

INSERT INTO Users
VALUES (NULL, 'Reinert', 'Aurélien', MD5('whleutwc'), 'aurelien.reinert@edu.ece.fr', '0670987563', 1, NULL);

COMMIT;
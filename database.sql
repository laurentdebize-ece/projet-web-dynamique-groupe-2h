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
    date_ajout  date,
    partenaire  varchar(25),
    prix        int,
    nomCarte    varchar(50),
    description_carte varchar(200),
    img  varchar(50),
    mots_clefs  varchar(100)
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
VALUES (NULL, 'Reinert', 'Aurélien', MD5('whleutwc'), 'aurelien.reinert@edu.ece.fr', '0670987563', 1, NULL),
(NULL, 'Cougnard', 'Gael', MD5('123456789'), 'gael.cougnard@edu.ece.fr', '0649515524', 1, NULL),
(NULL, 'Patoz', 'Guillaume', MD5('123456789'), 'guillaume.patoz@edu.ece.fr', '0657895112', 2, NULL);


INSERT INTO Carte
VALUES (NULL, '2023-05-21', 'decathlon', 25, 'football', "Profitez d'une réduction de 50% sur des cours de football auprès de nos partenaires.", "../assets/1.jpg", "exterieur, découverte"),
(NULL, '2023/02/12', 'decathlon', 25, 'velo', "Visitez la magnifique région qu'est le Parc du Pilat en famille. Location de matériel inclus.", "../assets/velo.jpg", "exterieur, découverte, en famille"),
(NULL, '2022/05/10', 'Lyon métropole', 10, 'piscine', "Profitez d'une réduction de 50% sur les forfaits mensuel d'entrainement d'aquabike, d'aquadanse, d'aquagym et d'aquarunning dans une piscine municipale.", "../assets/3.jpg", "interieur, découverte"),
(NULL, '2022/10/11', 'Val Thorens', 375, 'ski', "Profitez d'un forfait saisonnier à prix réduit !", "../assets/2.jpg", "exterieur, sensation forte"),
(NULL, '2022/07/01', 'Mc Donald', 2, 'repas', "Profitez de 90% de réduction sur votre prochaine note.", "../assets/macdo.jpg", "interieur");


COMMIT;
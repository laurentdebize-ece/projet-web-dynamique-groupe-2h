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
    id           int PRIMARY KEY AUTO_INCREMENT,
    nom          varchar(20) NOT NULL,
    prenom       varchar(20) NOT NULL,
    mot_de_passe varchar(32) NOT NULL,
    email        varchar(50) NOT NULL,
    phone        varchar(10) NOT NULL,
    statut       int         NOT NULL,
    domaine      int
);


CREATE TABLE Carte
(
    id                int PRIMARY KEY AUTO_INCREMENT,
    date_ajout        date,
    partenaire        int,
    prix              int,
    nomCarte          varchar(50),
    description_carte varchar(200),
    img               varchar(50),
    mots_clefs        varchar(100)
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
VALUES (NULL, 'Reinert', 'Aurélien', MD5('whleutwc'), 'aurelien.reinert@edu.ece.fr', '0670987563', 1, NULL);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Décathlon', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 1);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Amazon Video', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 2);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Intersport', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 1);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Canal', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 2);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Salomon', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 1);INSERT INTO Users
VALUES (NULL, 'Reinert', 'RMC Sport', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 2);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Gaumont', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 3);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Europa Pack', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 4);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Rosignol', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 1);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Pathé', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 3);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Disney', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 4);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Lazer Game', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 3);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Nike', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 1);INSERT INTO Users
VALUES (NULL, 'Reinert', 'VTT', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 4);INSERT INTO Users
VALUES (NULL, 'Reinert', 'HBO', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 2);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Chamrousse', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 4);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Addidas', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 1);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Escape Game', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 3);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Netflix', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 2);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Puma', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 1);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Play Station', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 3);INSERT INTO Users
VALUES (NULL, 'Reinert', 'L`équipe', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 2);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Nintendo', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 2);INSERT INTO Users
VALUES (NULL, 'Reinert', 'La Cluza', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 4);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Motor Sport', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 4);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Ami', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 5);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Champion', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 5);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Nike', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 5);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Dior', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 5);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Louis Vuitton', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 5);INSERT INTO Users
VALUES (NULL, 'Reinert', 'H&M', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 5);INSERT INTO Users
VALUES (NULL, 'Reinert', 'GP Exlorer', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 4);INSERT INTO Users
VALUES (NULL, 'Reinert', 'Eneide', 23, 'aurelien.reinert@edu.ece.fr', '0670987563', 3, 4);

INSERT INTO Domaine
VALUES (1, 'Sport');INSERT INTO Domaine
VALUES (2, 'Multimedia');INSERT INTO Domaine
VALUES (3, 'Interieur');INSERT INTO Domaine
VALUES (4, 'Sensation');INSERT INTO Domaine
VALUES (5, 'Mode');


INSERT INTO Carte
VALUES (NULL, '2023-05-21', '1', 25, 'football', "Profitez d'une réduction de 50% sur des cours de football auprès de nos partenaires.", "../assets/1.jpg", "exterieur, découverte"),
(NULL, '2023/02/12', '1', 25, 'velo', "Visitez la magnifique région qu'est le Parc du Pilat en famille. Location de matériel inclus.", "../assets/veloo.jpg", "exterieur, découverte, en famille"),
(NULL, '2022/05/10', '3', 10, 'piscine', "Profitez d'une réduction de 50% sur les forfaits mensuel d'entrainement d'aquabike, d'aquadanse, d'aquagym et d'aquarunning dans une piscine municipale.", "../assets/3.jpg", "interieur, découverte"),
(NULL, '2022/10/11', '8', 375, 'ski', "Profitez d'un forfait saisonnier à prix réduit !", "../assets/2.jpg", "exterieur, sensation forte"),
(NULL, '2022/07/01', '9', 2, 'repas', "Profitez de 90% de réduction sur votre prochaine note.", "../assets/mcdo.jpg", "interieur");


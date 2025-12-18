-- création de la base de données:
CREATE DATABASE IF NOT EXISTS ASSAD;

-- selection de la base de données:
USE ASSAD;

-- création de la table Habitats:
CREATE TABLE IF NOT EXISTS habitats(
    id_habitat INT AUTO_INCREMENT,
    nom_habitat VARCHAR(100),
    typeclimat VARCHAR(200),
    description_habitat VARCHAR(2000),
    zonezoo VARCHAR(300),
    PRIMARY KEY (id_habitat)
);

-- création de la table Animaux:
CREATE TABLE IF NOT EXISTS animaux(
    id_animal INT AUTO_INCREMENT,
    nom_animal VARCHAR(100),
    espèce VARCHAR(100),
    alimentation VARCHAR(100),
    image VARCHAR(500),
    paysorigine VARCHAR(100),
    description_animal VARCHAR(2000),
    habitat_id INT,
    PRIMARY KEY (id_animal),
    FOREIGN KEY (habitat_id) REFERENCES habitats(id_habitat)
);

-- création de la table Utilisateurs:
CREATE TABLE IF NOT EXISTS utilisateurs(
    id_user INT AUTO_INCREMENT,
    nom_user VARCHAR(255),
    email VARCHAR(300),
    role VARCHAR(100),
    motpasse_hash VARCHAR(100),
    PRIMARY KEY (id_user)
);

-- création de la table Visites:
CREATE TABLE IF NOT EXISTS visites(
    id_visite INT AUTO_INCREMENT,
    titre_visite VARCHAR(100),
    dateheure DATETIME,
    langue VARCHAR(100),
    capacite_max INT,
    statut BOOLEAN,
    duree INT,
    prix FLOAT,
    id_guide INT,
    PRIMARY KEY (id_visite),
    FOREIGN KEY (id_guide) REFERENCES utilisateurs(id_user)
);

-- création de la table Etapes:
CREATE TABLE IF NOT EXISTS etapes(
    id_etape INT AUTO_INCREMENT,
    titre_etape VARCHAR(255),
    description_etape VARCHAR(2000),
    ordre_etape INT,
    visite_id INT,
    PRIMARY KEY (id_etape),
    FOREIGN KEY (visite_id) REFERENCES visites(id_visite)
);

-- création de la table Reservation:
create table IF NOT EXISTS reservations(
    id_reservation INT AUTO_INCREMENT,
    visite_id INT,
    user_id INT,
    nbpersonnes INT,
    date_reservation DATETIME DEFAULT CURRENT_DATE,
    PRIMARY KEY (id_reservation),
    FOREIGN KEY (visite_id) REFERENCES visites(id_visite),
    FOREIGN KEY (user_id) REFERENCES utilisateurs(id_user)
);

-- création de la table :
create table IF NOT EXISTS commentaires(
    id_commentaire INT AUTO_INCREMENT,
    visite_id INT,
    user_id INT,
    note INT,
    texte VARCHAR(1000),
    date_commentaire DATETIME DEFAULT CURRENT_DATE,
    PRIMARY KEY (id_commentaire),
    FOREIGN KEY (visite_id) REFERENCES visites(id_visite),
    FOREIGN KEY (user_id) REFERENCES utilisateurs(id_user)
);
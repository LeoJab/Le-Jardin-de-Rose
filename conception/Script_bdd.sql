-- Suppression de la BDD si déjà existante, et création de la BDD
DROP DATABASE LeJardinDeRose;

CREATE DATABASE LeJardinDeRose;

USE LeJardinDeRose;

-- Création des tables
CREATE TABLE categorie(
   idCategorie INT AUTO_INCREMENT,
   nom VARCHAR(128) ,
   PRIMARY KEY(idCategorie)
);

CREATE TABLE questionFrequente(
   idQuestionFrequente INT AUTO_INCREMENT,
   question VARCHAR(256) ,
   reponse TEXT,
   visible BOOLEAN,
   PRIMARY KEY(idQuestionFrequente)
);

CREATE TABLE role(
   idRole INT AUTO_INCREMENT,
   Nom VARCHAR(50) ,
   PRIMARY KEY(idRole)
);

CREATE TABLE utilisateur(
   idUtilisateur INT AUTO_INCREMENT,
   nom VARCHAR(128) ,
   prenom VARCHAR(128) ,
   email VARCHAR(256) ,
   telephone VARCHAR(10) ,
   role VARCHAR(50) ,
   idRole INT NOT NULL,
   PRIMARY KEY(idUtilisateur),
   FOREIGN KEY(idRole) REFERENCES role(idRole)
);

CREATE TABLE produit(
   idProduit INT AUTO_INCREMENT,
   nom VARCHAR(256) ,
   description TEXT,
   photo TEXT,
   dateAjout DATE,
   visible BOOLEAN,
   idCategorie INT,
   PRIMARY KEY(idProduit),
   FOREIGN KEY(idCategorie) REFERENCES categorie(idCategorie)
);

CREATE TABLE devis(
   idDevis INT AUTO_INCREMENT,
   dateDevis DATETIME,
   idProduit INT,
   idUtilisateur INT,
   PRIMARY KEY(idDevis),
   FOREIGN KEY(idProduit) REFERENCES produit(idProduit),
   FOREIGN KEY(idUtilisateur) REFERENCES utilisateur(idUtilisateur)
);

CREATE TABLE contact(
   idContact INT AUTO_INCREMENT,
   intitule VARCHAR(256) ,
   message TEXT,
   dateContact DATETIME,
   idUtilisateur INT,
   PRIMARY KEY(idContact),
   FOREIGN KEY(idUtilisateur) REFERENCES utilisateur(idUtilisateur)
);

CREATE TABLE tag(
   idTag INT AUTO_INCREMENT,
   nom VARCHAR(128) ,
   idProduit INT,
   PRIMARY KEY(idTag),
   FOREIGN KEY(idProduit) REFERENCES produit(idProduit)
);

-- Insertion des données
INSERT INTO role (Nom) VALUES ("Client"), ("Admin");

INSERT INTO utilisateur (nom, prenom, email, telephone, role, idRole) VALUES
("Durand", "Claire", "claire.durand@example.com", "0601020304", "Client", 1),
("Martin", "Julien", "julien.martin@example.com", "0605060708", "Client", 1),
("Moreau", "Sophie", "sophie.moreau@example.com", "0611121314", "Client", 1),
("Lemoine", "Antoine", "antoine.lemoine@example.com", "0622232425", "Admin", 2),
("Dubois", "Luc", "luc.dubois@example.com", "0633343536", "Admin", 2);

INSERT INTO categorie (nom) VALUES
("Bouquets"),
("Plantes d'intérieur"),
("Compositions florales");

INSERT INTO produit (nom, description, photo, dateAjout, visible, idCategorie) VALUES
("Bouquet Romantique", "Roses rouges et feuillage", "https://loremflickr.com/640/480", "2025-04-15", true, 1),
("Plante Monstera", "Feuilles larges tropicales", "https://loremflickr.com/640/480", "2025-03-22", true, 2),
("Compo Mariage", "Fleurs blanches pour cérémonie", "https://loremflickr.com/640/480", "2025-01-30", true, 3),
("Bouquet Printanier", "Mélange de fleurs de saison", "https://loremflickr.com/640/480", "2025-02-14", true, 1),
("Plante Cactus", "Petit cactus facile à entretenir", "https://loremflickr.com/640/480", "2025-05-01", false, 2),
("Compo Anniversaire", "Arrangement coloré festif", "https://loremflickr.com/640/480", "2025-04-02", true, 3);

INSERT INTO devis (dateDevis, idProduit, idUtilisateur) VALUES
("2025-05-05 10:15:00", 1, 1),
("2025-05-06 14:30:00", 4, 2),
("2025-05-07 09:00:00", 3, 3);

INSERT INTO contact (intitule, message, dateContact, idUtilisateur) VALUES
("Demande de livraison", "Est-ce possible de livrer à domicile ?", "2025-04-20 11:00:00", 1),
("Disponibilité produit", "Le bouquet printanier est-il en stock ?", "2025-04-25 15:45:00", 2),
("Question devis", "Combien de temps le devis est-il valable ?", "2025-04-28 09:20:00", 3);

INSERT INTO tag (nom, idProduit) VALUES
("Amour", 1),
("Mariage", 3),
("Cactus", 5),
("Coloré", 6);

INSERT INTO questionFrequente (question, reponse, visible) VALUES
("Livrez-vous à domicile ?", "Oui, nous livrons dans toute la région.", true),
("Quels sont vos horaires ?", "Du lundi au samedi de 9h à 19h.", true),
("Peut-on personnaliser un bouquet ?", "Oui, contactez-nous pour une composition sur mesure.", true),
("Acceptez-vous les paiements en ligne ?", "Oui, via carte ou PayPal.", false);
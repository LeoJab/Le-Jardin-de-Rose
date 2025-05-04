-- Suppression de la BDD si déjà existante, et création de la BDD
DROP DATABASE LeJardinDeRose;

CREATE DATABASE LeJardinDeRose;

USE LeJardinDeRose;

-- Création des tables
CREATE TABLE Categorie(
   IdCategorie INT AUTO_INCREMENT,
   Nom VARCHAR(128) ,
   PRIMARY KEY(IdCategorie)
);

CREATE TABLE QuestionFrequente(
   IdQuestionFrequente INT AUTO_INCREMENT,
   Question VARCHAR(256) ,
   Reponse TEXT,
   Visible BOOLEAN,
   PRIMARY KEY(IdQuestionFrequente)
);

CREATE TABLE Role(
   IdRole INT AUTO_INCREMENT,
   Nom VARCHAR(128) ,
   PRIMARY KEY(IdRole)
);

CREATE TABLE Utilisateur(
   IdUtilisateur INT AUTO_INCREMENT,
   Nom VARCHAR(128) ,
   Prenom VARCHAR(128) ,
   Email VARCHAR(256) ,
   Telephone VARCHAR(10) ,
   IdRole INT NOT NULL,
   PRIMARY KEY(IdUtilisateur),
   FOREIGN KEY(IdRole) REFERENCES Role(IdRole)
);

CREATE TABLE Produit(
   IdProduit INT AUTO_INCREMENT,
   Nom VARCHAR(256) ,
   Description TEXT,
   DateAjout DATE,
   Visible BOOLEAN,
   IdCategorie INT,
   PRIMARY KEY(IdProduit),
   FOREIGN KEY(IdCategorie) REFERENCES Categorie(IdCategorie)
);

CREATE TABLE Devis(
   IdDevis INT AUTO_INCREMENT,
   DateDevis DATETIME,
   IdProduit INT,
   IdUtilisateur INT,
   PRIMARY KEY(IdDevis),
   FOREIGN KEY(IdProduit) REFERENCES Produit(IdProduit),
   FOREIGN KEY(IdUtilisateur) REFERENCES Utilisateur(IdUtilisateur)
);

CREATE TABLE Contact(
   IdContact INT AUTO_INCREMENT,
   Intitule VARCHAR(256) ,
   Message TEXT,
   DateContact DATETIME,
   IdUtilisateur INT,
   PRIMARY KEY(IdContact),
   FOREIGN KEY(IdUtilisateur) REFERENCES Utilisateur(IdUtilisateur)
);

CREATE TABLE Tag(
   IdTag INT AUTO_INCREMENT,
   Nom VARCHAR(128) ,
   IdProduit INT,
   PRIMARY KEY(IdTag),
   FOREIGN KEY(IdProduit) REFERENCES Produit(IdProduit)
);

-- Insertion des données
INSERT INTO Role (Nom) VALUES
("Admin"),
("Client");

INSERT INTO Categorie (Nom) VALUES
("Fleurs coupées"),
("Plantes en pot"),
("Bouquets pour événements"),
("Décorations florales"),
("Accessoires pour fleurs");

INSERT INTO Utilisateur (Nom, Prenom, Email, Telephone, IdRole) VALUES
("Durand", "Pierre", "pierre.durand@email.com", "0102030405", 1),
("Lemoine", "Claire", "claire.lemoine@email.com", "0105060708", 2),
("Martin", "Julien", "julien.martin@email.com", "0112233445", 2),
("Dupont", "Sophie", "sophie.dupont@email.com", "0123456789", 2),
("Leclerc", "Marc", "marc.leclerc@email.com", "0135791357", 1);

INSERT INTO QuestionFrequente (Question, Reponse, Visible) VALUES
("Quelles sont vos heures d'ouverture ?", "Nous sommes ouverts du lundi au samedi, de 9h à 18h.", TRUE),
("Faites-vous des livraisons ?", "Oui, nous offrons des services de livraison dans toute la région.", TRUE),
("Quelles fleurs sont adaptées pour un mariage ?", "Nous proposons des roses, pivoines, et lys pour les mariages.", TRUE),
("Proposez-vous des compositions florales personnalisées ?", "Oui, nous réalisons des compositions sur mesure selon vos besoins.", TRUE),
("Est-ce que vos plantes sont faciles à entretenir ?", "Nous sélectionnons des plantes adaptées à tous les niveaux d'entretien.", TRUE);

INSERT INTO Produit (Nom, Description, DateAjout, Visible, IdCategorie) VALUES
("Rose rouge", "Fleur rouge élégante, parfaite pour toute occasion.", "2025-05-01", TRUE, 1),
("Orchidée blanche", "Plante en pot avec des fleurs blanches et délicates.", "2025-04-15", TRUE, 2),
("Bouquet mariage", "Un bouquet élégant de roses et pivoines, idéal pour un mariage.", "2025-04-10", TRUE, 3),
("Vase en verre", "Vase transparent en verre, idéal pour vos compositions florales.", "2025-03-20", TRUE, 4),
("Fleurs séchées", "Des fleurs séchées, parfaites pour une décoration à long terme.", "2025-03-05", TRUE, 5);

INSERT INTO Devis (DateDevis, IdProduit, IdUtilisateur) VALUES
("2025-05-02 14:30:00", 1, 2),
("2025-05-03 09:00:00", 2, 3),
("2025-05-04 16:45:00", 3, 4),
("2025-05-05 11:30:00", 4, 5),
("2025-05-06 15:00:00", 5, 2);

INSERT INTO Contact (Intitule, Message, DateContact, IdUtilisateur) VALUES
("Demande de livraison", "Bonjour, je voudrais savoir si vous livrez dans ma ville.", "2025-05-02 10:00:00", 2),
("Question sur les fleurs pour mariage", "Je cherche un bouquet de mariage, pouvez-vous me conseiller ? ", "2025-05-03 14:20:00", 3),
("Plantes d'intérieur", "Avez-vous des plantes faciles à entretenir pour l'intérieur ?", "2025-05-04 09:15:00", 4),
("Commande de fleurs séchées", "Je souhaiterais acheter des fleurs séchées pour ma maison.", "2025-05-05 12:30:00", 5),
("Demande d'informations sur les vases", "Je voudrais savoir si vous avez des vases en gros modèles.", "2025-05-06 10:45:00", 2);

INSERT INTO Tag (Nom, IdProduit) VALUES
("Romantique", 1),
("Mariage", 2),
("Décoration", 3),
("Événement", 4),
("Artisanat", 5);
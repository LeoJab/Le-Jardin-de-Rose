// UTILISATEUR
SELECT * FROM Utilisateur WHERE IdUtilisateur = :id

// PRODUIT
SELECT * FROM Produit
SELECT * FROM Produit WHERE Visible IS
SELECT * FROM Produit WHERE Nom LIKE 
SELECT * FROM Produit INNER JOIN Categorie AS Categorie.IdCategorie = Produit.IdCategorie

// DEVIS
SELECT * FROM Devis
SELECT * FROM Devis ORDER BY DateDevis
SELECT * FROM Devis WHERE IdDevis =
SELECT * FROM Devis WHERE IdUtilisateur =

// CONTACT
SELECT * FROM Contact 
SELECT * FROM Contact ORDER BY DateContact
SELECT * FROM Contact WHERE IdContact =
SELECT * FROM Contact WHERE IdUtilisateur =

// TAG
SELECT * FROM Tag WHERE IdProduit =

// CATEGORIE
SELECT * FROM Categorie 
SELECT * FROM Categorie WHERE IdCategorie =

// QUESTION FREQUENTE
SELECT * FROM QuestionFrequente
SELECT * FROM QuestionFrequente ORDER BY Visible
SELECT * FROM QuestionFrequente WHERE Visible IS
SELECT * FROM QuestionFrequente WHERE Visible IS True LIMIT
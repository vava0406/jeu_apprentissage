USE Jeu;

-- Table Utilisateurs
CREATE TABLE Utilisateurs (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(255) UNIQUE NOT NULL,
    MotDePasse VARCHAR(255) NOT NULL,
    Prenom VARCHAR(50),
    Nom VARCHAR(50)
);

-- Table QuizzTermines
CREATE TABLE QuizzTermines (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    FOREIGN KEY (UserID) REFERENCES Utilisateurs(ID),
    DateTerminaison DATETIME,
    Resultat INT, -- Exemple d'un champ pour le résultat du quiz (peut être adapté selon les besoins)
    Score INT
);

select * from Utilisateurs ; 

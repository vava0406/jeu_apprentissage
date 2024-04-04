USE test;

CREATE TABLE CP(
	ID INT AUTO_INCREMENT PRIMARY KEY,
    Score INT
);

CREATE TABLE Ce1(
	ID INT AUTO_INCREMENT PRIMARY KEY,
    Score INT
);

CREATE TABLE Ce2(
	ID INT AUTO_INCREMENT PRIMARY KEY,
    Score INT
);

CREATE TABLE Cm1(
	ID INT AUTO_INCREMENT PRIMARY KEY,
    Score INT
);

CREATE TABLE Cm2(
	ID INT AUTO_INCREMENT PRIMARY KEY,
    Score INT
);

CREATE TABLE Score (
	ID INT AUTO_INCREMENT PRIMARY KEY,
	CpID INT,
    Ce1ID INT,
    Ce2ID INT,
    Cm1ID INT,
    Cm2ID INT,
	FOREIGN KEY (CpID) REFERENCES CP(ID),
    FOREIGN KEY (Ce1ID) REFERENCES Ce1(ID),
    FOREIGN KEY (Ce2ID) REFERENCES Ce2(ID),
    FOREIGN KEY (Cm1ID) REFERENCES Cm1(ID),
    FOREIGN KEY (Cm2ID) REFERENCES Cm2(ID)
);

-- Table Utilisateurs
CREATE TABLE Utilisateurs (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(255) UNIQUE NOT NULL,
    MotDePasse VARCHAR(255) NOT NULL,
    Prenom VARCHAR(50),
    Nom VARCHAR(50),
    Score INT,
    FOREIGN KEY (Score) REFERENCES Score(ID)
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

CREATE TABLE Niveaux (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(10) NOT NULL
);

CREATE TABLE Utilisateurs (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(255) UNIQUE NOT NULL,
    MotDePasse VARCHAR(255) NOT NULL,
    Prenom VARCHAR(50),
    Nom VARCHAR(50)
);

CREATE TABLE Reponses_CM2_francais (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);

CREATE TABLE Reponses_CM2_maths (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);

CREATE TABLE Reponses_CM2_anglais (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);

CREATE TABLE Reponses_CM1_francais (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);

CREATE TABLE Reponses_CM1_maths (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);

CREATE TABLE Reponses_CM1_anglais (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);

CREATE TABLE Reponses_CE2_francais (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);

CREATE TABLE Reponses_CE2_maths (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);

CREATE TABLE Reponses_CE2_anglais (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);

CREATE TABLE Reponses_CE1_francais (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);

CREATE TABLE Reponses_CE1_maths (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);

CREATE TABLE Reponses_CE1_anglais (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);

CREATE TABLE Reponses_CE1_CG (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);

CREATE TABLE Reponses_CP_francais (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);

CREATE TABLE Reponses_CP_maths (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);

CREATE TABLE Reponses_CP_anglais (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    reponse VARCHAR(255) NOT NULL,
    reponse_correcte VARCHAR(255) NOT NULL,
    nom_question VARCHAR(255) NOT NULL
);
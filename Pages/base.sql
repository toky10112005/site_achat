CREATE DATABASE Coffre;
USE Coffre;

-- Table produits
CREATE TABLE produits (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(100),
  description TEXT,
  prix DECIMAL(10,2),
  stock INT,
  image VARCHAR(255)
);

CREATE TABLE categories (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(100) NOT NULL,
  description TEXT
);


-- Table utilisateurs
CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  mot_de_passe VARCHAR(255),
  role ENUM('client','admin') DEFAULT 'client'
);

-- Table commandes
CREATE TABLE commandes (
  id INT PRIMARY KEY AUTO_INCREMENT,
  utilisateur_id INT,
  date DATETIME DEFAULT CURRENT_TIMESTAMP,
  statut ENUM('en_attente', 'envoyée', 'annulée') DEFAULT 'en_attente'
);

-- Table détails commandes
CREATE TABLE commande_details (
  id INT PRIMARY KEY AUTO_INCREMENT,
  commande_id INT,
  produit_id INT,
  quantite INT,
  prix DECIMAL(10,2)
);

ALTER TABLE produits
ADD COLUMN categorie_id INT,
ADD FOREIGN KEY (categorie_id) REFERENCES categories(id);

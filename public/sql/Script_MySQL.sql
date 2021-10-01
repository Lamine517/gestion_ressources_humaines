-- CREATE DATABASE GESTION_RH
-- DROP TABLE IF EXISTS Type_Conge ;
CREATE TABLE Type_Conge (Code_Type_conge VARCHAR(15),
libelle_Type_conge VARCHAR(255),
PRIMARY KEY (Code_Type_conge)) ENGINE=InnoDB;

-- DROP TABLE IF EXISTS Bulletin ;
CREATE TABLE Bulletin (Code_Bulletin VARCHAR(15)  ,
Mois_Bulletin DATE,
Annee_Bulletin DATE,
NbrHeure_Bulletin INT,
Num_employee INT,
PRIMARY KEY (Code_Bulletin)) ENGINE=InnoDB;

-- DROP TABLE IF EXISTS Formation ;
CREATE TABLE Formation (Num_Formation INT  ,
Libelle_Formation VARCHAR(255),
Date_Formation DATE,
Duree_Formation VARCHAR(15),
PRIMARY KEY (Num_Formation)) ENGINE=InnoDB;

-- DROP TABLE IF EXISTS Conge ;
CREATE TABLE Conge (Id_Conge VARCHAR(15)  ,
DateDepart_Conge DATE,
DateFin_Conge DATE,
Nature_Conge VARCHAR(255),
Code_Type_conge VARCHAR(15),
Num_employee INT,
PRIMARY KEY (Id_Conge)) ENGINE=InnoDB;

-- DROP TABLE IF EXISTS Abscences ;
CREATE TABLE Abscences (Id_Abscences VARCHAR(15) ,
Date_Abscences DATE,
Duree_Abscences VARCHAR(15),
Motif_Abscences VARCHAR(255),
Num_employee INT,
PRIMARY KEY (Id_Abscences)) ENGINE=InnoDB;

-- DROP TABLE IF EXISTS CV ;
CREATE TABLE CV (Id_CV VARCHAR(15)  ,
Nom_CV VARCHAR(255),
Prenom_CV VARCHAR(255),
Specialite_CV VARCHAR(255),
Id_Offre_Emploie VARCHAR(15),
PRIMARY KEY (Id_CV)) ENGINE=InnoDB;

-- DROP TABLE IF EXISTS Employee ;
CREATE TABLE Employee (Num_employee INT  ,
Nom VARCHAR(255),
Prenom VARCHAR(255),
Sexe VARCHAR(15),
DateNaiss DATE,
Mariage BOOL,
NbrEnfant INT,
LieuNaiss VARCHAR(50),
Poste VARCHAR(255),
Service VARCHAR(255),
DateEmploi DATE,
Diplome VARCHAR(255),
Id_mouvement VARCHAR(15),
Id_Poste VARCHAR(15),
Id_contrat VARCHAR(15),
Num_Categorie INT,
Code_bulletin VARCHAR(15),
PRIMARY KEY (Num_employee)) ENGINE=InnoDB;

-- DROP TABLE IF EXISTS Offre_Emploie ;
CREATE TABLE Offre_Emploie (Id_Offre_Emploie VARCHAR(15)  ,
DateDemande DATE,
LibelleDemande VARCHAR(255),
Id_mouvement VARCHAR(15),
PRIMARY KEY (Id_Offre_Emploie)) ENGINE=InnoDB;

-- DROP TABLE IF EXISTS Mouvement ;
CREATE TABLE Mouvement (Id_mouvement VARCHAR(15)  ,
MotifDepart VARCHAR(255),
DateDepart DATE,
Id_offre_emploie VARCHAR(15),
PRIMARY KEY (Id_mouvement)) ENGINE=InnoDB;

-- DROP TABLE IF EXISTS Contrat ;
CREATE TABLE Contrat (Id_contrat VARCHAR(15)  ,
type_Contrat VARCHAR(255),
Num_employee INT,
Code_Cotisation VARCHAR(15),
PRIMARY KEY (Id_contrat)) ENGINE=InnoDB;

-- DROP TABLE IF EXISTS Cotisation ;
CREATE TABLE Cotisation (Code_Cotisation VARCHAR(15)  ,
Libelle_Cotisation VARCHAR(255),
PRIMARY KEY (Code_Cotisation)) ENGINE=InnoDB;

-- DROP TABLE IF EXISTS Categorie_Employee ;
CREATE TABLE Categorie_Employee (Num_Categorie INT  ,
Libelle_Categorie VARCHAR(255),
PRIMARY KEY (Num_Categorie)) ENGINE=InnoDB;

-- DROP TABLE IF EXISTS Poste ;
CREATE TABLE Poste (Id_Poste VARCHAR(15)  ,
Libelle_Poste VARCHAR(255),
PRIMARY KEY (Id_Poste)) ENGINE=InnoDB;

-- DROP TABLE IF EXISTS Realiser ;
CREATE TABLE Realiser (Num_employee INT  ,
Num_Formation INT,
PRIMARY KEY (Num_employee,
 Num_Formation)) ENGINE=InnoDB;

ALTER TABLE Bulletin ADD CONSTRAINT FK_Bulletin_Num_employee FOREIGN KEY (Num_employee) REFERENCES Employee (Num_employee);

ALTER TABLE Conge ADD CONSTRAINT FK_Conge_Code_Type_conge FOREIGN KEY (Code_Type_conge) REFERENCES Type_Conge (Code_Type_conge);
ALTER TABLE Conge ADD CONSTRAINT FK_Conge_Num_employee FOREIGN KEY (Num_employee) REFERENCES Employee (Num_employee);
ALTER TABLE Abscences ADD CONSTRAINT FK_Abscences_Num_employee FOREIGN KEY (Num_employee) REFERENCES Employee (Num_employee);
ALTER TABLE CV ADD CONSTRAINT FK_CV_Id_Offre_Emploie FOREIGN KEY (Id_Offre_Emploie) REFERENCES Offre_Emploie (Id_Offre_Emploie);
ALTER TABLE Employee ADD CONSTRAINT FK_Employee_Id_mouvement FOREIGN KEY (Id_mouvement) REFERENCES Mouvement (Id_mouvement);
ALTER TABLE Employee ADD CONSTRAINT FK_Employee_Id_Poste FOREIGN KEY (Id_Poste) REFERENCES Poste (Id_Poste);
ALTER TABLE Employee ADD CONSTRAINT FK_Employee_Id_contrat FOREIGN KEY (Id_contrat) REFERENCES Contrat (Id_contrat);
ALTER TABLE Employee ADD CONSTRAINT FK_Employee_Num_Categorie FOREIGN KEY (Num_Categorie) REFERENCES Categorie_Employee (Num_Categorie);
ALTER TABLE Employee ADD CONSTRAINT FK_Employee_Code_bulletin FOREIGN KEY (Code_bulletin) REFERENCES Bulletin (Code_Bulletin);
ALTER TABLE Offre_Emploie ADD CONSTRAINT FK_Offre_Emploie_Id_mouvement FOREIGN KEY (Id_mouvement) REFERENCES Mouvement (Id_mouvement);
ALTER TABLE Mouvement ADD CONSTRAINT FK_Mouvement_Id_offre_emploie FOREIGN KEY (Id_offre_emploie) REFERENCES Offre_Emploie (Id_Offre_Emploie);
ALTER TABLE Contrat ADD CONSTRAINT FK_Contrat_Num_employee FOREIGN KEY (Num_employee) REFERENCES Employee (Num_employee);
ALTER TABLE Contrat ADD CONSTRAINT FK_Contrat_Code_Cotisation FOREIGN KEY (Code_Cotisation) REFERENCES Cotisation (Code_Cotisation);
ALTER TABLE Realiser ADD CONSTRAINT FK_Realiser_Num_employee FOREIGN KEY (Num_employee) REFERENCES Employee (Num_employee);
ALTER TABLE Realiser ADD CONSTRAINT FK_Realiser_Num_Formation FOREIGN KEY (Num_Formation) REFERENCES Formation (Num_Formation);

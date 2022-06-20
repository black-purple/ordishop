CREATE TABLE client(
    idCl INT PRIMARY KEY AUTO_INCREMENT,
    unameCl VARCHAR(30),
    pwCl VARCHAR(30),
    nomCl VARCHAR(30),
    prenomCl VARCHAR(30),
    telCl VARCHAR(30),
    adresseCl VARCHAR(30),
    typeCl VARCHAR(30)
);
CREATE TABLE commande(
    idCom INT PRIMARY KEY AUTO_INCREMENT,
    dateCom Date,
    modePaimentCom VARCHAR(30),
    totalPrix FLOAT,
    idCl INT,
    FOREIGN KEY(idCl) REFERENCES client(idCl)
);
CREATE TABLE produit(
    idProd INT PRIMARY KEY AUTO_INCREMENT,
    prixPod FLOAT,
    reductionProd FLOAT,
    marqueProd VARCHAR(30),
    descrProd VARCHAR(250),
    qteProd INT
);
CREATE TABLE frounisseur(
    idFrn INT PRIMARY KEY AUTO_INCREMENT,
    adresseFrn VARCHAR(250),
    telFrn VARCHAR(13)
);
CREATE TABLE commentaire(
    idComt INT PRIMARY KEY AUTO_INCREMENT,
    descrComt VARCHAR(250)
);
CREATE TABLE avis(
    idComt INT,
    FOREIGN KEY(idComt) REFERENCES commentaire(idComt),
    idProd INT,
    FOREIGN KEY(idProd) REFERENCES produit(idProd),
    idCl INT,
    FOREIGN KEY(idCl) REFERENCES client(idCl),
    PRIMARY KEY(idComt, idProd, idCl)
);
CREATE TABLE ligneCommande(
    idCom INT,
    FOREIGN KEY(idCom) REFERENCES commande(idCom),
    idProd INT,
    FOREIGN KEY(idProd) REFERENCES produit(idProd),
    PRIMARY KEY(idCom, idProd),
    qteCommande INT
);
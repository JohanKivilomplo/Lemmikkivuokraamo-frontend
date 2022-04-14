DROP DATABASE IF EXISTS lemmikkivuokraamo;

CREATE DATABASE lemmikkivuokraamo;

USE lemmikkivuokraamo;

CREATE table ASIAKAS (
	asiakasnro INT PRIMARY KEY AUTO_INCREMENT,
    etunimi VARCHAR(100) NOT NULL,
    sukunimi VARCHAR(100) NOT NULL,
    sposti VARCHAR(100) NOT NULL,
    puhnro INT(15) NOT NULL,
    osoite VARCHAR(100) NOT NULL,
    postinro INT(5) NOT NULL,
    postitmp VARCHAR(100) NOT NULL,
    UNIQUE(asiakasnro)
);

CREATE TABLE LAJI (
    lajinimi INT PRIMARY KEY AUTO_INCREMENT,
    lajinro VARCHAR(255)
);

CREATE TABLE ELAIN (
    elainID INT PRIMARY KEY AUTO_INCREMENT,
    lajinro VARCHAR(255) NOT NULL,
    hinta INT NOT NULL,
    tietoa TEXT NOT NULL,
    rotu TEXT NOT NULL,
    UNIQUE(elainID)
);

CREATE table VUOKRA (
    vuokrausnro INT PRIMARY KEY AUTO_INCREMENT,
    asiakasnro INT NOT NULL,
    apvm DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    lpvm DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    tila CHAR(1),
    UNIQUE(vuokrausnro),
FOREIGN KEY (asiakasnro) REFERENCES ASIAKAS(asiakasnro)
);

CREATE TABLE KAMPPANJA (
    vuokrausnro INT NOT NULL PRIMARY KEY,
    elainID INT,
    info TEXT NOT NULL,
    apvm DATE,
    lpvm DATE,
    FOREIGN KEY (vuokrausnro) REFERENCES VUOKRA(vuokrausnro),
    FOREIGN KEY (elainID) REFERENCES ELAIN(elainID)
);

CREATE Table palaute (
    palautenro INT(255) PRIMARY KEY AUTO_INCREMENT,
    etunimi VARCHAR(255) NOT NULL,
    sukunimi VARCHAR(255) NOT NULL,
    sposti VARCHAR(255) NOT NULL,
    puhnro INT(255) NOT NULL,
    palaute TEXT NOT NULL
);

CREATE Table oheistuotteet (
    tuote TEXT NOT NULL,
    maara INT NOT NULL,
    elainID INT NOT NULL,
    info TEXT,
    FOREIGN KEY (elainID) REFERENCES ELAIN(elainID)
);
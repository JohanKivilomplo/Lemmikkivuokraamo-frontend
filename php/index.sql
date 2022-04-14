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
    lajinro INT PRIMARY KEY AUTO_INCREMENT,
    lajinimi VARCHAR(255)
);

CREATE TABLE ELAIN (
    elainID INT PRIMARY KEY AUTO_INCREMENT,
    lajinro INT NOT NULL,
    hinta INT NOT NULL,
    tietoa TEXT NOT NULL,
    rotu TEXT NOT NULL,
    UNIQUE(elainID),
FOREIGN KEY (lajinro) REFERENCES LAJI(lajinro)
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
    hinta INT NOT NULL,
    maara INT NOT NULL,
    elainID INT NOT NULL,
    info TEXT,
    FOREIGN KEY (elainID) REFERENCES ELAIN(elainID)
);

INSERT INTO LAJI(lajinimi)
    VALUES
    ("Koirat"),
    ("Kissat"),
    ("Kilpikonnat"),
    ("Linnut"),
    ("Lampaat & vuohet"),
    ("Hevoset ja ponit")
;
INSERT INTO ELAIN(rotu, hinta, tietoa, lajinro)
    VALUES
    ("Kultainennoutaja", "30", "Nimi : CARITA",1),
    ("Sfinx", "30", "Nimi: JOHAN",2),
    ("Ragdoll", "30", "Nimi: LIISA",2),
    ("Shetlanninponi", "100", "Nimi: JONI",6),
    ("Mäyräkoira", "30", "Nimi: BENJAMIN",1),
    ("Nelivarvaskilpikonna", "40", "Nimi:  MUIKEA-MARKO", 3),
    ("Punakorvakilpikonna", "40", "Nimi:  KOVA-KALLE", 3)

;
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
    salasana VARCHAR(100) NOT NULL,
    username VARCHAR(150) UNIQUE,
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
    etunimi VARCHAR(100) NOT NULL,
    sukunimi VARCHAR(100) NOT NULL,
    apvm DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    lpvm DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    lisatietoa TEXT NOT NULL, 
    lajinro INT NOT NULL,
    UNIQUE(vuokrausnro)
);

CREATE TABLE KAMPPANJA (
    kamppanjaID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    elainID INT,
    lajinro INT,
    info TEXT NOT NULL,
    apvm DATE,
    lpvm DATE,
    UNIQUE(kamppanjaID),
    FOREIGN KEY (elainID) REFERENCES ELAIN(elainID),
    FOREIGN KEY (lajinro) REFERENCES LAJI(lajinro)
    
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
    lajinro INT NOT NULL,
    info TEXT,
    FOREIGN KEY (lajinro) REFERENCES LAJI(lajinro)
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
    ("Mäyräkoira", "30", "Nimi: BENJAMIN",1),
    ("Sfinx", "30", "Nimi: JOHAN",2),
    ("Ragdoll", "30", "Nimi: LIISA",2),
    ("Papukaija", "25", "Nimi: LEILA",4),
    ("Tirppa", "20", "Nimi: TOMMI",4),
    ("Shetlanninponi", "100", "Nimi: JONI",6),
    ("Friisiläinen", "100", "Nimi: Pertti", 6),
    ("Suomenhevonen", "100", "Nimi: Freya", 6),
    ("Suomenlammas", "50", "Nimi: Esteri", 5),
    ("Afrikanpikkuvuohi", "50", "Nimi: Lucifer", 5),
    ("Nelivarvaskilpikonna", "40", "Nimi:  MUIKEA-MARKO", 3),
    ("Punakorvakilpikonna", "40", "Nimi:  KOVA-KALLE", 3)

;


INSERT INTO KAMPPANJA(elainID, lajinro, info, apvm, lpvm)
    VALUES
    (2, NULL, "Benjaminin vuokraajalle koiran korkokengät kaupanpäälle(Kamppanja pakollinen koska koira ei lähde muuten mihinkään)", 2022-05-01,2023-05-01),
    (NULL,2, "Kissan vuokraajalle mikätahansa oheistuote puoleen hintaan", "2022-05-01","2022-07-01"),
    (NULL,2, "Kissanhiekka kaupan päälle vuokrauksen yhteydessä", "2022-05-01","2022-07-01"),
    (NULL,3, "Kilpikonnan kiilloitus ennen vuokran alkamista", "2022-05-14","2022-06-14"),
    (NULL,6, "Hevosen vuokraajalle hoitaja mukaan samaan rahaan. Tottelee käskystä lähes yhtähyvin kuin hevonen", "2022-06-01","2022-09-01"),
    (NULL,4, "Linnun vuokraajalle gps kaulapanta mukaan, one size fits all.", "2022-10-01","2023-04-01"),
    (NULL,1, "Koiran vuokraajalle puruluita niin paljon kuin saa suussa ulos kannettua.", "2022-05-01","2024-05-01")

;

INSERT INTO oheistuotteet(tuote,hinta,maara,lajinro,info)
VALUES
("Puruluu","8,5","200",1,"Pidä karvaturrisi suu terveenä."),

("Kissan hiekka","10","100",2,"Paakkuuntuva kissan hiekka."),
("Kristalli hiekka","12","50",2,"Sekoitettava kristallinen kissan hiekka."),

("Ninjato","50","5",3,"Leonardo leads."),
("Bo","50","5",3,"Donatello does machines."),
("Sai","50","5",3,"Raphael is cool but rude."),
("Nunchaku","50","5",3,"Michelangelo is a party dude."),

("Auringonkukansiemeniä","4","20",4,"Ravitsevaa ruokaa linnuille. Titityy."),

("Turkinhoitopaketti","20","10",5,"Eläimen turkin harjaaminen voi olla hyvin rauhoittavaa."),

("Harja","12","50",6,"Hevosen turkin ja harjaksen...harjaukseen."),

("Koirien korkokengät","15","4",1,"Jos koirasi on hieman epävarma pituudestaan on tämä oiva asuste")
;

INSERT INTO asiakas(etunimi,sukunimi,sposti,puhnro,osoite,postinro,postitmp,salasana,username)
VALUES
("Tiina","Säkkijärvi","tiina.säkkij@gmail.com","0406543218","Kekkiläkatu 23","12331","Hattula","","Tiinuska"),
("Pekka","Heikkinen","pekkahei@hotmail.com","0405654961","Kaarnapolku 55","34521","Jokela","","PekkaHeikkinen"),
("Vilho","Westerinen","vwest@outlook.fi","0504564351","Möykkymäki 95","234523","Närpiö","","West"),
("Hanna","Koilinen","HKsininen@suomi24.fi","0446541651","Siivouskuja 32","3244234","Loimaa","","KoilinenH"),
("Pietu","Reppuli","baggins@hotmail.com","0506146158","501 Buckland Road","3472","Auckland","","Bilbo"),
("Sakke","Ensiö","enska@gmail.com","08421548","Monument street 451","97685","Wasteland","","Enska"),
("Kaarina","Poikkila","poikki@hotmail.com","0505165168","Puukuja 11","45689","Kannelmäki","","Kaarna"),
("Diandra","Riihilä","driihi@outlook.fi","0406516515","High-port 79","00456","Turmiola","","DD")
;

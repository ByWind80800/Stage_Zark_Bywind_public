DROP DATABASE IF EXISTS Modele_logique;

CREATE DATABASE IF NOT EXISTS Modele_logique;
USE Modele_logique;
# -----------------------------------------------------------------------------
#       TABLE : IMAGE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS IMAGE
 (
   IDIMG INTEGER(2) NOT NULL  ,
   IDTYPEMEDIA INTEGER(2) NOT NULL  ,
   CHEMINIMG TEXT NULL  
   , PRIMARY KEY (IDIMG) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE IMAGE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_IMAGE_TYPE_MEDIA
     ON IMAGE (IDTYPEMEDIA ASC);

# -----------------------------------------------------------------------------
#       TABLE : TYPE_EVENEMENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPE_EVENEMENT
 (
   IDTYPEEVENT INTEGER(2) NOT NULL  ,
   LIBELLETYPEEVENT CHAR(50) NULL  
   , PRIMARY KEY (IDTYPEEVENT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : EVENEMENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS EVENEMENT
 (
   IDEVENT INTEGER(2) NOT NULL  ,
   LIBELLEEVENT CHAR(30) NULL  ,
   DESCRIPTIFEVENT TEXT NULL  
   , PRIMARY KEY (IDEVENT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ACTUALITE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ACTUALITE
 (
   IDACTU INTEGER(2) NOT NULL  ,
   IDTYPEMEDIA INTEGER(2) NOT NULL  ,
   TITREACTU CHAR(30) NULL  ,
   TEXTEACTU TEXT NULL  ,
   DATEACTU DATE NULL  
   , PRIMARY KEY (IDACTU) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ACTUALITE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ACTUALITE_TYPE_MEDIA
     ON ACTUALITE (IDTYPEMEDIA ASC);

# -----------------------------------------------------------------------------
#       TABLE : ELUCM
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ELUCM
 (
   IDELU INTEGER(2) NOT NULL  ,
   NOMELU CHAR(30) NULL  ,
   PRENOMELU CHAR(30) NULL  ,
   FONCTIONELU CHAR(70) NULL  ,
   PHOTOELU TEXT NULL  
   , PRIMARY KEY (IDELU) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : NOUVEAUTE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS NOUVEAUTE
 (
   IDNOUVEAUTE INTEGER(2) NOT NULL  ,
   IDTYPEMEDIA INTEGER(2) NOT NULL  ,
   LIBELLENOUVEAUTE CHAR(32) NULL  ,
   DESCRIPTIF TEXT NULL  ,
   DATENOUVEAUTE DATE NULL  
   , PRIMARY KEY (IDNOUVEAUTE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE NOUVEAUTE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_NOUVEAUTE_TYPE_MEDIA
     ON NOUVEAUTE (IDTYPEMEDIA ASC);

# -----------------------------------------------------------------------------
#       TABLE : USERS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS USERS
 (
   IDUSERS INTEGER(2) NOT NULL  ,
   NOM CHAR(30) NULL  ,
   PRENOM CHAR(20) NULL  ,
   LOGIN CHAR(50) NULL  ,
   MDP CHAR(50) NULL  ,
   DROIT BOOL NULL  
   , PRIMARY KEY (IDUSERS) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : TYPE_MEDIA
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPE_MEDIA
 (
   IDTYPEMEDIA INTEGER(2) NOT NULL  ,
   LIBELLEMEDIA CHAR(32) NULL  
   , PRIMARY KEY (IDTYPEMEDIA) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ENTREPRISES
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ENTREPRISES
 (
   IDENTREPRISES INTEGER(2) NOT NULL  ,
   NOMENTREPRISE CHAR(70) NULL  ,
   NOMGÉRANT CHAR(30) NULL  ,
   CORPSMETIER CHAR(50) NULL  
   , PRIMARY KEY (IDENTREPRISES) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : VIDEO
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS VIDEO
 (
   IDVID INTEGER(2) NOT NULL  ,
   IDTYPEMEDIA INTEGER(2) NOT NULL  ,
   CHEMINVID TEXT NULL  
   , PRIMARY KEY (IDVID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE VIDEO
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_VIDEO_TYPE_MEDIA
     ON VIDEO (IDTYPEMEDIA ASC);

# -----------------------------------------------------------------------------
#       TABLE : CORRESPONDRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CORRESPONDRE
 (
   IDEVENT INTEGER(2) NOT NULL  ,
   IDTYPEEVENT INTEGER(2) NOT NULL  
   , PRIMARY KEY (IDEVENT,IDTYPEEVENT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CORRESPONDRE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CORRESPONDRE_EVENEMENT
     ON CORRESPONDRE (IDEVENT ASC);

CREATE  INDEX I_FK_CORRESPONDRE_TYPE_EVENEMENT
     ON CORRESPONDRE (IDTYPEEVENT ASC);

# -----------------------------------------------------------------------------
#       TABLE : POSSEDER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS POSSEDER
 (
   IDEVENT INTEGER(2) NOT NULL  ,
   IDIMG INTEGER(2) NOT NULL  
   , PRIMARY KEY (IDEVENT,IDIMG) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE POSSEDER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_POSSEDER_EVENEMENT
     ON POSSEDER (IDEVENT ASC);

CREATE  INDEX I_FK_POSSEDER_IMAGE
     ON POSSEDER (IDIMG ASC);

# -----------------------------------------------------------------------------
#       TABLE : AJOUTER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS AJOUTER
 (
   IDUSERS INTEGER(2) NOT NULL  ,
   IDACTU INTEGER(2) NOT NULL  ,
   IDIMG INTEGER(2) NOT NULL  ,
   IDNOUVEAUTE INTEGER(2) NOT NULL  
   , PRIMARY KEY (IDUSERS,IDACTU,IDIMG,IDNOUVEAUTE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE AJOUTER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_AJOUTER_USERS
     ON AJOUTER (IDUSERS ASC);

CREATE  INDEX I_FK_AJOUTER_ACTUALITE
     ON AJOUTER (IDACTU ASC);

CREATE  INDEX I_FK_AJOUTER_IMAGE
     ON AJOUTER (IDIMG ASC);

CREATE  INDEX I_FK_AJOUTER_NOUVEAUTE
     ON AJOUTER (IDNOUVEAUTE ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE IMAGE 
  ADD FOREIGN KEY FK_IMAGE_TYPE_MEDIA (IDTYPEMEDIA)
      REFERENCES TYPE_MEDIA (IDTYPEMEDIA) ;


ALTER TABLE ACTUALITE 
  ADD FOREIGN KEY FK_ACTUALITE_TYPE_MEDIA (IDTYPEMEDIA)
      REFERENCES TYPE_MEDIA (IDTYPEMEDIA) ;


ALTER TABLE NOUVEAUTE 
  ADD FOREIGN KEY FK_NOUVEAUTE_TYPE_MEDIA (IDTYPEMEDIA)
      REFERENCES TYPE_MEDIA (IDTYPEMEDIA) ;


ALTER TABLE VIDEO 
  ADD FOREIGN KEY FK_VIDEO_TYPE_MEDIA (IDTYPEMEDIA)
      REFERENCES TYPE_MEDIA (IDTYPEMEDIA) ;


ALTER TABLE CORRESPONDRE 
  ADD FOREIGN KEY FK_CORRESPONDRE_EVENEMENT (IDEVENT)
      REFERENCES EVENEMENT (IDEVENT) ;


ALTER TABLE CORRESPONDRE 
  ADD FOREIGN KEY FK_CORRESPONDRE_TYPE_EVENEMENT (IDTYPEEVENT)
      REFERENCES TYPE_EVENEMENT (IDTYPEEVENT) ;


ALTER TABLE POSSEDER 
  ADD FOREIGN KEY FK_POSSEDER_EVENEMENT (IDEVENT)
      REFERENCES EVENEMENT (IDEVENT) ;


ALTER TABLE POSSEDER 
  ADD FOREIGN KEY FK_POSSEDER_IMAGE (IDIMG)
      REFERENCES IMAGE (IDIMG) ;


ALTER TABLE AJOUTER 
  ADD FOREIGN KEY FK_AJOUTER_USERS (IDUSERS)
      REFERENCES USERS (IDUSERS) ;


ALTER TABLE AJOUTER 
  ADD FOREIGN KEY FK_AJOUTER_ACTUALITE (IDACTU)
      REFERENCES ACTUALITE (IDACTU) ;


ALTER TABLE AJOUTER 
  ADD FOREIGN KEY FK_AJOUTER_IMAGE (IDIMG)
      REFERENCES IMAGE (IDIMG) ;


ALTER TABLE AJOUTER 
  ADD FOREIGN KEY FK_AJOUTER_NOUVEAUTE (IDNOUVEAUTE)
      REFERENCES NOUVEAUTE (IDNOUVEAUTE) ;


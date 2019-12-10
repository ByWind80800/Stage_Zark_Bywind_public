DROP DATABASE IF EXISTS Modele_Logique;

CREATE DATABASE IF NOT EXISTS Modele_Logique;
USE Modele_Logique;
# -----------------------------------------------------------------------------
#       TABLE : IMAGE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS IMAGE
 (
   IDIMG DB_INTEGER(2) NOT NULL  ,
   IDTYPEMEDIA DB_INTEGER(2) NOT NULL  ,
   CHEMINIMG DB_TEXT(1000) NULL  
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
   IDTYPEEVENT DB_INTEGER(2) NOT NULL  ,
   LIBELLETYPEEVENT DB_TEXT, 50 NULL  
   , PRIMARY KEY (IDTYPEEVENT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : EVENEMENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS EVENEMENT
 (
   IDEVENT DB_INTEGER(2) NOT NULL  ,
   IDTYPEEVENT DB_INTEGER(2) NOT NULL  ,
   IDIMG DB_INTEGER(2) NOT NULL  ,
   LIBELLEEVENT DB_TEXT, 30 NULL  ,
   DESCRIPTIFEVENT DB_TEXT(1000) NULL  
   , PRIMARY KEY (IDEVENT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE EVENEMENT
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_EVENEMENT_TYPE_EVENEMENT
     ON EVENEMENT (IDTYPEEVENT ASC);

CREATE  INDEX I_FK_EVENEMENT_IMAGE
     ON EVENEMENT (IDIMG ASC);

# -----------------------------------------------------------------------------
#       TABLE : ACTUALITE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ACTUALITE
 (
   IDACTU DB_INTEGER(2) NOT NULL  ,
   IDTYPEMEDIA DB_INTEGER(2) NOT NULL  ,
   TITREACTU DB_TEXT, 30 NULL  ,
   TEXTEACTU DB_TEXT(1000) NULL  ,
   DATEACTU DB_DATE(8) NULL  
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
   IDELU DB_INTEGER(2) NOT NULL  ,
   NOMELU DB_TEXT, 30 NULL  ,
   PRENOMELU DB_TEXT, 30 NULL  ,
   FONCTIONELU DB_TEXT, 70 NULL  ,
   PHOTOELU DB_TEXT(1000) NULL  
   , PRIMARY KEY (IDELU) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : NOUVEAUTE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS NOUVEAUTE
 (
   IDNOUVEAUTE DB_INTEGER(2) NOT NULL  ,
   IDTYPEMEDIA DB_INTEGER(2) NOT NULL  ,
   LIBELLENOUVEAUTE DB_TEXT, 32 NULL  ,
   DESCRIPTIF DB_TEXT(1000) NULL  ,
   DATENOUVEAUTE DB_DATE(8) NULL  
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
   IDUSERS DB_INTEGER(2) NOT NULL  ,
   NOM DB_TEXT, 30 NULL  ,
   PRENOM DB_TEXT, 20 NULL  ,
   LOGIN DB_TEXT, 50 NULL  ,
   MDP DB_TEXT, 50 NULL  ,
   DROIT DB_INTEGER(1) NULL  
   , PRIMARY KEY (IDUSERS) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : TYPE_MEDIA
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPE_MEDIA
 (
   IDTYPEMEDIA DB_INTEGER(2) NOT NULL  ,
   LIBELLEMEDIA DB_TEXT, 32 NULL  
   , PRIMARY KEY (IDTYPEMEDIA) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ENTREPRISES
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ENTREPRISES
 (
   IDENTREPRISES DB_INTEGER(2) NOT NULL  ,
   NOMENTREPRISE DB_TEXT, 70 NULL  ,
   NOMGÉRANT DB_TEXT, 30 NULL  ,
   CORPSMETIER DB_TEXT, 50 NULL  
   , PRIMARY KEY (IDENTREPRISES) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : VIDEO
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS VIDEO
 (
   IDVID DB_INTEGER(2) NOT NULL  ,
   IDTYPEMEDIA DB_INTEGER(2) NOT NULL  ,
   CHEMINVID DB_TEXT(1000) NULL  
   , PRIMARY KEY (IDVID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE VIDEO
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_VIDEO_TYPE_MEDIA
     ON VIDEO (IDTYPEMEDIA ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE IMAGE 
  ADD FOREIGN KEY FK_IMAGE_TYPE_MEDIA (IDTYPEMEDIA)
      REFERENCES TYPE_MEDIA (IDTYPEMEDIA) ;


ALTER TABLE EVENEMENT 
  ADD FOREIGN KEY FK_EVENEMENT_TYPE_EVENEMENT (IDTYPEEVENT)
      REFERENCES TYPE_EVENEMENT (IDTYPEEVENT) ;


ALTER TABLE EVENEMENT 
  ADD FOREIGN KEY FK_EVENEMENT_IMAGE (IDIMG)
      REFERENCES IMAGE (IDIMG) ;


ALTER TABLE ACTUALITE 
  ADD FOREIGN KEY FK_ACTUALITE_TYPE_MEDIA (IDTYPEMEDIA)
      REFERENCES TYPE_MEDIA (IDTYPEMEDIA) ;


ALTER TABLE NOUVEAUTE 
  ADD FOREIGN KEY FK_NOUVEAUTE_TYPE_MEDIA (IDTYPEMEDIA)
      REFERENCES TYPE_MEDIA (IDTYPEMEDIA) ;


ALTER TABLE VIDEO 
  ADD FOREIGN KEY FK_VIDEO_TYPE_MEDIA (IDTYPEMEDIA)
      REFERENCES TYPE_MEDIA (IDTYPEMEDIA) ;


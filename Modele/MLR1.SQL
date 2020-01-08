DROP DATABASE IF EXISTS MLR1;

CREATE DATABASE IF NOT EXISTS MLR1;
USE MLR1;
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
   IDTYPEEVENT INTEGER(2) NOT NULL  ,
   IDIMG INTEGER(2) NOT NULL  ,
   LIBELLEEVENT CHAR(30) NULL  ,
   DESCRIPTIFEVENT TEXT NULL  
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
   NOMGERANT CHAR(30) NULL  ,
   CORPSMETIER CHAR(50) NULL   ,
   TELEPHONE CHAR(14) NULL  ,
   PRIMARY KEY (IDENTREPRISES)
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

INSERT INTO `actualite` (`IDACTU`, `IDTYPEMEDIA`, `TITREACTU`, `TEXTEACTU`, `DATEACTU`) VALUES
(2, 3, 'titre 2', 'Texte 2', '2019-06-01'),
(3, 3, 'titre 3', 'Texte 3', '2019-05-24');

INSERT INTO `elucm` (`IDELU`, `NOMELU`, `PRENOMELU`, `FONCTIONELU`, `PHOTOELU`) VALUES
(1, 'ARCHER', 'Marie-Hélène', 'Autre retraité', 'photo'),
(2, 'BERTRAND', 'René', 'Retraité de la fonction publique', 'photo'),
(3, 'CHANTEMESSE', 'Marie-Claude', 'Sans profession déclarée', 'photo'),
(4, 'COURIOL', 'Pierre', 'Artisan', 'photo'),
(5, 'DURAND', 'Daniel', 'Retraité salarié privé', 'photo'),
(6, 'DUSSAUD', 'François', 'Etudiant', 'photo'),
(7, 'FARGIER', 'Jean-Marc', 'Professeur du secondaire', 'photo'),
(8, 'REY', 'Jean-Pierre', 'Retraité de la fonction publique', 'photo'),
(10, 'SANCIER', 'Jean-Denis', 'Retraité salarié privé', 'photo'),
(11, 'SIGAUD', 'Daniel', 'Retraité artisans commerçant', 'photo'),
(12, 'SURREL', 'Stéphanie', 'Employé', 'photo');

INSERT INTO `entreprises` (`IDENTREPRISES`, `NOMENTREPRISE`, `NOMGERANT`, `CORPSMETIER`, `TELEPHONE`) VALUES
(1, 'Salaison Nicolas Frères', 'NICOLAS BERNARD JOSPEH MARIE', 'Charcuteries', '04 71 03 80 82'),
(2, 'Brassserie artisanale Ouroboros', 'Guillaume Olivier GUFFLET', 'Brassserie', '09 54 84 47 49'),
(3, 'Auberge de la Tour', 'AYDOGAN TUNCAY', 'Bar-Restaurant-Épicerie', '04 71 03 94 34'),
(4, 'Gîte des Barthes', 'Karen et Francois Bertrand', 'Logement', '06 71 69 01 65'),
(5, 'Auberge de la Tour', 'Toun Aydogan', 'Logement', '04 71 03 94 34'),
(6, 'Gîte du Couderc', 'Mr et Mme Elie NICOLAS-ROMIEUX', 'Logement', '04 44 43 93 12'),
(7, 'Mairie de Freycenet-la-Tour', 'Jean-Marc FARGIER', 'Mairie', '04 71 03 83 55'),
(8, 'Pharmacie Le Monastier sur Gazeille', 'Aurore ROUSSON', 'Pharmacie', '04 71 03 93 08');

INSERT INTO `image` (`IDIMG`, `IDTYPEMEDIA`, `CHEMINIMG`) VALUES
(9, 1, 'photos_paysage/les_sucs_autour_de_freycenet_la_tour/f0538666.jpg'),
(11, 1, 'photos_paysage/église de la mairie.jpg'),
(12, 1, 'fichier_du_20190611074734.jpg'),
(14, 1, 'fichier_du_20190611075017.jpg');

INSERT INTO `petitjournal` (`IdJournal`, `cheminJournal`) VALUES
(1, 'LeptitjournalF2010.pdf');

INSERT INTO `type_media` (`IDTYPEMEDIA`, `LIBELLEMEDIA`) VALUES
(1, 'IMAGE'),
(2, 'VIDEO'),
(3, 'ACTUALITE');

INSERT INTO `users` (`IDUSERS`, `NOM`, `PRENOM`, `LOGIN`, `MDP`, `DROIT`) VALUES
(1, 'Fargier', 'Jean-Marc', 'J-MFargier', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

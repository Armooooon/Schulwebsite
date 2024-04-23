-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Pestalozzi
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Pestalozzi
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Pestalozzi` DEFAULT CHARACTER SET utf8 ;
USE `Pestalozzi` ;

-- -----------------------------------------------------
-- Table `Pestalozzi`.`adresse`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`adresse` (
  `idadresse` INT NOT NULL AUTO_INCREMENT,
  `strasse` VARCHAR(255) NULL,
  `plz` VARCHAR(255) NULL,
  `ort` VARCHAR(255) NULL,
  PRIMARY KEY (`idadresse`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`personfunktion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`personfunktion` (
  `idpersonfunktion` INT NOT NULL AUTO_INCREMENT,
  `funktion` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idpersonfunktion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`person`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`person` (
  `idperson` INT NOT NULL AUTO_INCREMENT,
  `vorname` VARCHAR(255) NOT NULL,
  `nachname` VARCHAR(255) NULL,
  `adresse_idadresse` INT NOT NULL,
  `personfunktion_idpersonfunktion` INT NOT NULL,
  PRIMARY KEY (`idperson`),
  INDEX `fk_person_adresse_idx` (`adresse_idadresse` ASC)  ,
  INDEX `fk_person_personfunktion1_idx` (`personfunktion_idpersonfunktion` ASC)  ,
  CONSTRAINT `fk_person_adresse`
    FOREIGN KEY (`adresse_idadresse`)
    REFERENCES `Pestalozzi`.`adresse` (`idadresse`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_person_personfunktion1`
    FOREIGN KEY (`personfunktion_idpersonfunktion`)
    REFERENCES `Pestalozzi`.`personfunktion` (`idpersonfunktion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`benutzer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`benutzer` (
  `idbenutzer` INT NOT NULL AUTO_INCREMENT,
  `benutzername` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `person_idperson` INT NOT NULL,
  PRIMARY KEY (`idbenutzer`),
  UNIQUE INDEX `benutzername_UNIQUE` (`benutzername` ASC) ,
  INDEX `fk_benutzer_person1_idx` (`person_idperson` ASC) ,
  CONSTRAINT `fk_benutzer_person1`
    FOREIGN KEY (`person_idperson`)
    REFERENCES `Pestalozzi`.`person` (`idperson`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`datei`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`datei` (
  `iddatei` INT NOT NULL AUTO_INCREMENT,
  `dateiname` VARCHAR(255) NOT NULL,
  `dateipfad` VARCHAR(255) NOT NULL,
  `hochgeladen_am` DATETIME NULL,
  `benutzer_idbenutzer` INT NOT NULL,
  PRIMARY KEY (`iddatei`),
  INDEX `fk_datei_benutzer1_idx` (`benutzer_idbenutzer` ASC)  ,
  CONSTRAINT `fk_datei_benutzer1`
    FOREIGN KEY (`benutzer_idbenutzer`)
    REFERENCES `Pestalozzi`.`benutzer` (`idbenutzer`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`essensplan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`essensplan` (
  `idessensplan` INT NOT NULL AUTO_INCREMENT,
  `von` DATE NOT NULL,
  `bis` DATE NOT NULL,
  `datei_iddatei` INT NOT NULL,
  PRIMARY KEY (`idessensplan`),
  INDEX `fk_essensplan_datei1_idx` (`datei_iddatei` ASC)  ,
  CONSTRAINT `fk_essensplan_datei1`
    FOREIGN KEY (`datei_iddatei`)
    REFERENCES `Pestalozzi`.`datei` (`iddatei`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`elternrat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`elternrat` (
  `idelternrat` INT NOT NULL AUTO_INCREMENT,
  `titel` VARCHAR(255) NOT NULL,
  `person_idperson` INT NOT NULL,
  PRIMARY KEY (`idelternrat`),
  INDEX `fk_elternrat_person1_idx` (`person_idperson` ASC)  ,
  CONSTRAINT `fk_elternrat_person1`
    FOREIGN KEY (`person_idperson`)
    REFERENCES `Pestalozzi`.`person` (`idperson`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`faq`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`faq` (
  `idfaq` INT NOT NULL AUTO_INCREMENT,
  `question` VARCHAR(255) NOT NULL,
  `answer` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idfaq`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`apps`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`apps` (
  `datei_iddatei` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`datei_iddatei`),
  CONSTRAINT `fk_apps_datei1`
    FOREIGN KEY (`datei_iddatei`)
    REFERENCES `Pestalozzi`.`datei` (`iddatei`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`foerderverein`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`foerderverein` (
  `idfoerderverein` INT NOT NULL AUTO_INCREMENT,
  `person_idperson` INT NOT NULL,
  `status` ENUM('Mitglied', 'Vorstand') NOT NULL,
  PRIMARY KEY (`idfoerderverein`),
  INDEX `fk_foerdervereinvorstand_person1_idx` (`person_idperson` ASC)  ,
  CONSTRAINT `fk_foerdervereinvorstand_person1`
    FOREIGN KEY (`person_idperson`)
    REFERENCES `Pestalozzi`.`person` (`idperson`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`termin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`termin` (
  `idtermin` INT NOT NULL AUTO_INCREMENT,
  `von` DATE NOT NULL,
  `bis` DATE NULL,
  `terminname` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idtermin`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`praktikum`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`praktikum` (
  `idpraktikum` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idpraktikum`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`messe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`messe` (
  `idmesse` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idmesse`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`messe_has_termin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`messe_has_termin` (
  `messe_idmesse` INT NOT NULL AUTO_INCREMENT,
  `termin_idtermin` INT NOT NULL,
  PRIMARY KEY (`messe_idmesse`, `termin_idtermin`),
  INDEX `fk_messe_has_termin_termin1_idx` (`termin_idtermin` ASC)  ,
  INDEX `fk_messe_has_termin_messe1_idx` (`messe_idmesse` ASC)  ,
  CONSTRAINT `fk_messe_has_termin_messe1`
    FOREIGN KEY (`messe_idmesse`)
    REFERENCES `Pestalozzi`.`messe` (`idmesse`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_messe_has_termin_termin1`
    FOREIGN KEY (`termin_idtermin`)
    REFERENCES `Pestalozzi`.`termin` (`idtermin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`praktikum_has_termin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`praktikum_has_termin` (
  `praktikum_idpraktikum` INT NOT NULL AUTO_INCREMENT,
  `termin_idtermin` INT NOT NULL,
  PRIMARY KEY (`praktikum_idpraktikum`, `termin_idtermin`),
  INDEX `fk_praktikum_has_termin_termin1_idx` (`termin_idtermin` ASC)  ,
  INDEX `fk_praktikum_has_termin_praktikum1_idx` (`praktikum_idpraktikum` ASC)  ,
  CONSTRAINT `fk_praktikum_has_termin_praktikum1`
    FOREIGN KEY (`praktikum_idpraktikum`)
    REFERENCES `Pestalozzi`.`praktikum` (`idpraktikum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_praktikum_has_termin_termin1`
    FOREIGN KEY (`termin_idtermin`)
    REFERENCES `Pestalozzi`.`termin` (`idtermin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`textbaustein`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`textbaustein` (
  `idtextbaustein` VARCHAR(255) NOT NULL,
  `textbausteintext` VARCHAR(5000) NOT NULL,
  `person_idperson` INT NOT NULL,
  PRIMARY KEY (`idtextbaustein`),
  INDEX `fk_textbaustein_person1_idx` (`person_idperson` ASC)  ,
  CONSTRAINT `fk_textbaustein_person1`
    FOREIGN KEY (`person_idperson`)
    REFERENCES `Pestalozzi`.`person` (`idperson`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`Schulsprecher`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`Schulsprecher` (
  `idSchulsprecher` INT NOT NULL AUTO_INCREMENT,
  `schulsprecherKlasse` VARCHAR(255) NOT NULL,
  `person_idperson` INT NOT NULL,
  PRIMARY KEY (`idSchulsprecher`),
  INDEX `fk_Schulsprecher_person1_idx` (`person_idperson` ASC)  ,
  CONSTRAINT `fk_Schulsprecher_person1`
    FOREIGN KEY (`person_idperson`)
    REFERENCES `Pestalozzi`.`person` (`idperson`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pestalozzi`.`termin_has_adresse`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pestalozzi`.`termin_has_adresse` (
  `termin_idtermin` INT NOT NULL AUTO_INCREMENT,
  `adresse_idadresse` INT NOT NULL,
  PRIMARY KEY (`termin_idtermin`, `adresse_idadresse`),
  INDEX `fk_termin_has_adresse_adresse1_idx` (`adresse_idadresse` ASC)  ,
  INDEX `fk_termin_has_adresse_termin1_idx` (`termin_idtermin` ASC)  ,
  CONSTRAINT `fk_termin_has_adresse_termin1`
    FOREIGN KEY (`termin_idtermin`)
    REFERENCES `Pestalozzi`.`termin` (`idtermin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_termin_has_adresse_adresse1`
    FOREIGN KEY (`adresse_idadresse`)
    REFERENCES `Pestalozzi`.`adresse` (`idadresse`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

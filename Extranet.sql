-- MySQL Script generated by MySQL Workbench
-- 02/25/16 09:40:50
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`department`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`department` (
  `id_department` INT NOT NULL,
  `label_department` VARCHAR(64) NULL,
  `creat_at` DATETIME NULL,
  `edit_at` DATETIME NULL,
  `edit_by` INT NULL,
  `departmentcol` VARCHAR(45) NULL,
  PRIMARY KEY (`id_department`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`users` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(64) NULL,
  `email` VARCHAR(64) NULL,
  `password` VARCHAR(255) NULL,
  `edit_at` DATETIME NULL,
  `del_at` DATETIME NULL,
  `online` TINYINT(1) NULL,
  `id_department` INT NOT NULL,
  `name` VARCHAR(64) NULL,
  `firstname` VARCHAR(64) NULL,
  PRIMARY KEY (`id_user`),
  INDEX `fk_users_department_idx` (`id_department` ASC),
  CONSTRAINT `fk_users_department`
    FOREIGN KEY (`id_department`)
    REFERENCES `mydb`.`department` (`id_department`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`newsletter`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`newsletter` (
  `id_newsletter` INT NOT NULL,
  `content` TEXT NULL,
  `creat_at` DATETIME NULL,
  `edit_at` DATETIME NULL,
  `id_status` VARCHAR(32) NULL,
  `edit_by` INT NULL,
  `creat_by` INT NULL,
  `del_by` INT NULL,
  `id_department` INT NOT NULL,
  PRIMARY KEY (`id_newsletter`),
  INDEX `fk_newsletter_department1_idx` (`id_department` ASC),
  CONSTRAINT `id_department`
    FOREIGN KEY (`id_department`)
    REFERENCES `mydb`.`department` (`id_department`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`target`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`target` (
  `id_target` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(64) NULL,
  PRIMARY KEY (`id_target`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pages` (
  `id_page` INT NOT NULL AUTO_INCREMENT,
  `content` TEXT NULL,
  `slug` VARCHAR(64) NULL,
  `title` VARCHAR(64) NULL,
  `online` TINYINT(1) NULL,
  `creat_at` DATETIME NULL,
  `creat_by` INT NULL,
  `edit_at` DATETIME NULL,
  `edit_by` INT NULL,
  `del_at` DATETIME NULL,
  `del_by` INT NULL,
  `id_media` INT NULL,
  `target_id_target` INT NOT NULL,
  PRIMARY KEY (`id_page`),
  INDEX `fk_pages_target1_idx` (`target_id_target` ASC),
  CONSTRAINT `id_target`
    FOREIGN KEY (`target_id_target`)
    REFERENCES `mydb`.`target` (`id_target`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`table1_copy1_copy1_copy1_copy1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`table1_copy1_copy1_copy1_copy1` (
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tchat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tchat` (
  `id_message` INT NOT NULL,
  `message` TEXT NULL,
  `datetime` INT NULL,
  `id_department` INT NOT NULL,
  PRIMARY KEY (`id_message`),
  INDEX `fk_tchat_department1_idx` (`id_department` ASC),
  CONSTRAINT `id_department`
    FOREIGN KEY (`id_department`)
    REFERENCES `mydb`.`department` (`id_department`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`status_newsletter`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`status_newsletter` (
  `id_status` INT NOT NULL,
  `label` VARCHAR(32) NULL,
  PRIMARY KEY (`id_status`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`media_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`media_type` (
  `id_media_type` INT NOT NULL AUTO_INCREMENT,
  `media_type` VARCHAR(32) NULL,
  PRIMARY KEY (`id_media_type`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`email_placeholder`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`email_placeholder` (
  `id_placeholder` INT NOT NULL,
  `placeolder` VARCHAR(64) NULL,
  PRIMARY KEY (`id_placeholder`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`email`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`email` (
  `id_mail` INT NOT NULL,
  `email_emetter` VARCHAR(64) NULL,
  `email_receiver` VARCHAR(64) NULL,
  `subject` VARCHAR(64) NULL,
  `content` TEXT NULL,
  `date_email_sender` DATETIME NULL,
  `date_email_receiver` DATETIME NULL,
  `id_user_from` INT NULL,
  `id_uder_to` INT NULL,
  `del_at_from` DATETIME NULL,
  `del_at_to` DATETIME NULL,
  `id_placeholder_senders` INT NULL,
  `id_placeholder_receiver` INT NOT NULL,
  PRIMARY KEY (`id_mail`),
  INDEX `fk_email_email_placeholder1_idx` (`id_placeholder_senders` ASC),
  INDEX `fk_email_email_placeholder1_idx1` (`id_placeholder_receiver` ASC),
  CONSTRAINT `id_placeholder_senders`
    FOREIGN KEY (`id_placeholder_senders`)
    REFERENCES `mydb`.`email_placeholder` (`id_placeholder`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_placeholder_receiver`
    FOREIGN KEY (`id_placeholder_receiver`)
    REFERENCES `mydb`.`email_placeholder` (`id_placeholder`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`media`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`media` (
  `id_media` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(255) NULL,
  `src` VARCHAR(255) NULL,
  `name` VARCHAR(255) NULL,
  `origin_name` VARCHAR(255) NULL,
  `edit_at` DATETIME NULL,
  `edit_by` INT NULL,
  `del_at` DATETIME NULL,
  `del_by` INT NULL,
  PRIMARY KEY (`id_media`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
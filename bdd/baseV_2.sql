DROP TABLE IF EXISTS `Bus` ; 
CREATE TABLE `Bus` (`id_bus` int AUTO_INCREMENT NOT NULL, 
	`num_bus` INT(4), 
	PRIMARY KEY (`id_bus`) ) ENGINE=InnoDB;  
DROP TABLE IF EXISTS `Trajet` ; 
CREATE TABLE `Trajet` (`id_trajet` int AUTO_INCREMENT NOT NULL, 
	`id_arret` INT NOT NULL, 
	`id_arret_arrivee` INT NOT NULL, 
	PRIMARY KEY (`id_trajet`) ) ENGINE=InnoDB;  
DROP TABLE IF EXISTS `Arret` ; 
CREATE TABLE `Arret` (`id_arret` int AUTO_INCREMENT NOT NULL, 
	`nom_arret` VARCHAR(60), 
	PRIMARY KEY (`id_arret`) ) ENGINE=InnoDB;  
DROP TABLE IF EXISTS `lier` ; 
CREATE TABLE `lier` (`id_bus` int AUTO_INCREMENT NOT NULL, 
	`id_trajet` INT NOT NULL, 
	PRIMARY KEY (`id_bus`,  `id_trajet`) ) ENGINE=InnoDB;  
DROP TABLE IF EXISTS `Arret_int` ; 
CREATE TABLE `Arret_int` (`id_trajet` int AUTO_INCREMENT NOT NULL, 
	`id_arret` INT NOT NULL, 
	`ordre_arret` INT(3), 
	PRIMARY KEY (`id_trajet`,  `id_arret`) ) ENGINE=InnoDB;  
DROP TABLE IF EXISTS `passage` ; 
CREATE TABLE passage (`id_bus` int AUTO_INCREMENT NOT NULL, 
	`id_arret` INT NOT NULL, 
	`horaire` TIME, 
	PRIMARY KEY (`id_bus`,  `id_arret`) ) ENGINE=InnoDB;
	  
ALTER TABLE `Trajet` ADD CONSTRAINT `FK_Trajet_id_arret` FOREIGN KEY (`id_arret`) REFERENCES `Arret` (`id_arret`); 
ALTER TABLE `Trajet` ADD CONSTRAINT `FK_Trajet_id_arret_arrivee` FOREIGN KEY (`id_arret_arrivee`) REFERENCES `Arret` (`id_arret`); 
ALTER TABLE `lier` ADD CONSTRAINT `FK_lier_id_bus` FOREIGN KEY (`id_bus`) REFERENCES `Bus` (`id_bus`); 
ALTER TABLE `lier` ADD CONSTRAINT `FK_lier_id_trajet` FOREIGN KEY (`id_trajet`) REFERENCES `Trajet` (`id_trajet`); 
ALTER TABLE `Arret_int` ADD CONSTRAINT `FK_Arret_int_id_trajet` FOREIGN KEY (`id_trajet`) REFERENCES `Trajet` (`id_trajet`); 
ALTER TABLE `Arret_int` ADD CONSTRAINT `FK_Arret_int_id_arret` FOREIGN KEY (`id_arret`) REFERENCES `Arret` (`id_arret`); 
ALTER TABLE `passage` ADD CONSTRAINT `FK_passage_id_bus` FOREIGN KEY (`id_bus`) REFERENCES `Bus` (`id_bus`); 
ALTER TABLE `passage` ADD CONSTRAINT `FK_passage_id_arret` FOREIGN KEY (`id_arret`) REFERENCES `Arret` (`id_arret`);
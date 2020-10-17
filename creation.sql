CREATE TABLE `genre`(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nomgenre` VARCHAR(255) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`id`) USING BTREE
);
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=7
;


CREATE TABLE `realisateur` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nomreal` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_bin',
	`prenomreal` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_bin',
	`naissancereal` YEAR NULL DEFAULT NULL,
	`biographie` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_bin',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=7
;

CREATE TABLE `film` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nomfilm` VARCHAR(255) NULL DEFAULT '0' COLLATE 'utf8mb4_bin',
	`anneereal` YEAR NULL DEFAULT '2000',
	`synopsis` LONGTEXT NULL DEFAULT NULL COLLATE 'utf8mb4_bin',
	`genre_id` INT(11) NULL DEFAULT NULL,
	`real_id` INT(11) NULL DEFAULT NULL,
	`urlaffiche` VARCHAR(255) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=8
;


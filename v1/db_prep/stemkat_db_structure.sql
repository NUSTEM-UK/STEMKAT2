SET NAMES utf8mb4;


DROP TABLE IF EXISTS `careers`;

CREATE TABLE `careers`(
	`uniqueID` INT AUTO_INCREMENT,
	`id` CHAR(12),
	`unknown` TEXT ,
	`liked` TEXT ,
	`disliked` TEXT,
	`unsure` TEXT,
	`timestamp` DATETIME NOT NULL,
	`gender` CHAR(1),
	`yeargroup` TINYINT(3) UNSIGNED NOT NULL,
	`likesci` TINYINT(3) UNSIGNED NOT NULL,
	`goodsci` TINYINT(3) UNSIGNED NOT NULL,
	PRIMARY KEY (`uniqueID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TRIGGER IF EXISTS add_datetime_careers;
CREATE TRIGGER add_datetime_careers BEFORE INSERT ON careers
	FOR EACH ROW SET NEW.timestamp = now();
/* Creates data structure - SQL table where job titles are stored as TEXT*/
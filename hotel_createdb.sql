SET time_zone = "+05:30";

--
-- Database: `hotel`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `A_id` INT AUTO_INCREMENT,
  `username` VARCHAR(20),
  `password` VARCHAR(20),
  UNIQUE (`username`,`password`),
  PRIMARY KEY(`A_id`)
);

CREATE TABLE IF NOT EXISTS `customer` (
    `C_id` INT AUTO_INCREMENT,
    `name` VARCHAR(30) NOT NULL,
    `address` VARCHAR(60) NOT NULL,
    `mobile_number` NUMERIC(10) NOT NULL,
    `check_in` DATE NOT NULL,
    `check_out` DATE NOT NULL,
    `no_of_people` INT,
    PRIMARY KEY(`C_id`)
);

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` CHAR(4),
  `C_id` INT,
  FOREIGN KEY(`C_id`) REFERENCES `customer`(`C_id`)
);

CREATE TABLE IF NOT EXISTS `room_status` (
  `room_id` CHAR(4),
  `status` INT NOT NULL,
  `type` VARCHAR(20),
  PRIMARY KEY( `room_id`)
);

CREATE TABLE IF NOT EXISTS `room_type` (
  `type` VARCHAR(20),
  `price` INT NOT NULL,
  `max_people` INT NOT NULL,
  PRIMARY KEY(`type`)
);

CREATE TABLE IF NOT EXISTS `pays` (
  `I_id` INT,
  `C_id` INT NOT NULL,
  `payment_method` VARCHAR(15) NOT NULL DEFAULT "Credit Card",
  PRIMARY KEY(`I_id`)
);

CREATE TABLE IF NOT EXISTS `bill` (
  `I_id` INT,
  `check_out` DATE,
  `total_bill` INT NOT NULL,
  FOREIGN KEY(`I_id`) REFERENCES `pays`(`I_id`)
);

CREATE TABLE IF NOT EXISTS `restaurant` (
  `RC_id` INT AUTO_INCREMENT,
  `RC_name` VARCHAR(30),
  `mobile_number` NUMERIC(10) NOT NULL,
  `no_of_people` INT,
  `bill` INT DEFAULT 0,
  `date` DATE NOT NULL,
  `time` Time NOT NULL,
  PRIMARY KEY(`RC_id`)
);

CREATE TABLE IF NOT EXISTS `employee` (
    `E_name` VARCHAR(30),
    `E_id` INT AUTO_INCREMENT,
    `E_phone` NUMERIC(10),
    `E_dept` VARCHAR(20),
    `E_salary` INT,
    PRIMARY KEY(`E_id`) 
);

INSERT INTO admin (`username`, `password`) VALUES ("atharva", "nord@45");
INSERT INTO admin (`username`, `password`) VALUES ("Ghanshyam", "gp@1234");
INSERT INTO room_type (`type` ,`price` ,`max_people`) VALUES ("single", 2000, 2);
INSERT INTO room_type (`type` ,`price` ,`max_people`) VALUES ("deluxe", 4000, 3);
INSERT INTO room_type (`type` ,`price` ,`max_people`) VALUES ("luxury", 6000, 4);
INSERT INTO room_type (`type` ,`price` ,`max_people`) VALUES ("guest_house", 9000, 7);
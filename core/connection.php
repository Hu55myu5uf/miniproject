<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db='baby';
$conn = mysqli_connect($server, $username, $password,$db) or die("Failed to connect");






/*
CREATE TABLE `baby`.`child` ( `id` INT NOT NULL AUTO_INCREMENT , `last_name` VARCHAR(100) NOT NULL , `first_name` VARCHAR(100) NOT NULL , `middle_name` VARCHAR(100) NOT NULL , `dob` DATE NOT NULL , `place_of_occurance` VARCHAR(100) NOT NULL , `local_government` VARCHAR(100) NOT NULL , `state` VARCHAR(100) NOT NULL , `gender` VARCHAR(100) NOT NULL , `weight` VARCHAR(100) NOT NULL , `delivery_time` TIME(6) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;



CREATE TABLE `baby`.`mother` ( `id` INT NOT NULL AUTO_INCREMENT , `child_id` INT NOT NULL , `last_name` VARCHAR(100) NOT NULL , `first_name` INT(100) NOT NULL , `middle_name` INT(100) NOT NULL , `age` INT(100) NOT NULL , `marital_status` VARCHAR(100) NOT NULL , `Nationality` VARCHAR(100) NOT NULL , `state` VARCHAR(100) NOT NULL , `tribe` VARCHAR(100) NOT NULL , `occupation` VARCHAR(100) NOT NULL , `phone_number` VARCHAR(100) NOT NULL , `address` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;



CREATE TABLE `baby`.`father` ( `id` INT NOT NULL AUTO_INCREMENT , `child_id` INT(100) NOT NULL , `last_name` VARCHAR(100) NOT NULL , `first_name` VARCHAR(100) NOT NULL , `middle_name` VARCHAR(100) NOT NULL , `age` INT(100) NOT NULL , `marital_status` VARCHAR(100) NOT NULL , `Nationality` VARCHAR(100) NOT NULL , `state` VARCHAR(100) NOT NULL , `tribe` VARCHAR(100) NOT NULL , `occupation` VARCHAR(100) NOT NULL , `phone_number` VARCHAR(100) NOT NULL , `address` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

*/

?>




##
## Drop and Create Database
##
DROP DATABASE IF EXISTS `bookmarkproject`;
CREATE DATABASE IF NOT EXISTS `bookmarkproject`;
USE `bookmarkproject`;

##
##Create User and assign privileges
##
DROP USER 'root2'@'localhost';
FLUSH PRIVILEGES;
CREATE USER 'root2'@'localhost' IDENTIFIED BY 'qwerty';
GRANT ALL ON `bookmarkproject`.* TO 'root2'@'localhost';

##
## Table structure for table `bookmarks`
##
DROP TABLE IF EXISTS `bookmarks`;
CREATE TABLE `bookmarks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Link` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
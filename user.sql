CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) DEFAULT NULL,
  `passwd` varchar(40) DEFAULT NULL,
  `nick_name` varchar(50) DEFAULT NULL,
  `company_name` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`uname`,`passwd`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8
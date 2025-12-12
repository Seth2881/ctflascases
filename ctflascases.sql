CREATE TABLE `utilisateurs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(64) NOT NULL,
  `mot_de_passe` varchar(32) NOT NULL,
  `date_inscription` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=UTF8;

CREATE TABLE `winners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(64) NOT NULL,
  `pseudo` VARCHAR(64) NOT NULL,
  `date_inscription` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=UTF8;

INSERT INTO utilisateurs (pseudo,mot_de_passe,date_inscription) VALUES ('mrPatate','76419c58730d9f35de7ac538c2fd6737',NOW())
CREATE DATABASE `GBAF` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

-- GBAF.account definition

CREATE TABLE `account` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `reponse` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- GBAF.acteurs definition

CREATE TABLE `acteurs` (
  `id_acteur` int(11) NOT NULL AUTO_INCREMENT,
  `acteur` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `logo` longblob,
  PRIMARY KEY (`id_acteur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- GBAF.post definition

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_acteur` int(11) NOT NULL,
  `post` varchar(255) NOT NULL,
  `date_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- GBAF.votes definition

CREATE TABLE `votes` (
  `id_user` int(11) NOT NULL,
  `id_acteur` int(11) NOT NULL,
  `vote` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 07 Novembre 2019 à 18:04
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `jour08`
--

-- --------------------------------------------------------

--
-- Structure de la table `etage`
--

CREATE TABLE IF NOT EXISTS `etage` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `numéro` int(11) NOT NULL,
  `superficie` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `etage`
--

INSERT INTO `etage` (`ID`, `nom`, `numéro`, `superficie`) VALUES
(1, 'RDC', 0, 500),
(2, 'R+1', 1, 500);

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE IF NOT EXISTS `etudiants` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `n` text NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `naissance` date NOT NULL,
  `sexe` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `etudiants`
--

INSERT INTO `etudiants` (`ID`, `n`, `prenom`, `naissance`, `sexe`, `email`) VALUES
(1, 'Zimmermann', 'Cyril', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
(2, 'Soriano,', 'Jessica', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
(3, 'Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
(4, 'Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
(5, 'Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
(6, 'Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io');

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

CREATE TABLE IF NOT EXISTS `salles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `id_etage` int(11) NOT NULL,
  `capacite` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `salles`
--

INSERT INTO `salles` (`ID`, `nom`, `id_etage`, `capacite`) VALUES
(1, 'Lounge', 1, 100),
(2, 'Studio Son', 1, 5),
(3, 'Broadcasting', 2, 50),
(4, 'Bocal Peda', 2, 4),
(5, 'Coworking', 2, 80),
(6, 'Studio Video', 2, 5);

	
SELECT *  FROM etudiants;


SELECT `nom`,`capacite` FROM `salles`;

SELECT COUNT(*) FROM etudiants;

SELECT SUM(superficie)
FROM etage;

SELECT * FROM etudiants WHERE YEAR(CURRENT_DATE) - YEAR(naissance) < 18;
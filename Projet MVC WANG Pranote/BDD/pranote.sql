-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 05 Mai 2021 à 11:00
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pranote`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
`NumCours` int(50) NOT NULL,
  `NomCours` varchar(50) DEFAULT NULL,
  `NUMEN` varchar(50) NOT NULL,
  `DateCours` date NOT NULL,
  `HeureCours` time(6) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`NumCours`, `NomCours`, `NUMEN`, `DateCours`, `HeureCours`) VALUES
(1, 'PHP', '123', '2021-04-26', '08:00:00.000000'),
(2, 'CEJM', '234', '2021-04-26', '10:00:00.000000'),
(3, 'Francais', '345', '2021-04-26', '13:00:00.000000'),
(4, 'Anglais', '456', '2021-04-26', '15:00:00.000000'),
(5, 'AP', '123', '2021-04-27', '08:00:00.000000');

-- --------------------------------------------------------

--
-- Structure de la table `dateheure`
--

CREATE TABLE IF NOT EXISTS `dateheure` (
  `DateCours` varchar(50) NOT NULL DEFAULT '',
  `HeureCours` varchar(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `devoir`
--

CREATE TABLE IF NOT EXISTS `devoir` (
  `NumDevoir` varchar(50) NOT NULL DEFAULT '',
  `DateDevoir` date DEFAULT NULL,
  `DureeDevoir` time(6) DEFAULT NULL,
  `NUMEN` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `devoir`
--

INSERT INTO `devoir` (`NumDevoir`, `DateDevoir`, `DureeDevoir`, `NUMEN`) VALUES
('1', '2021-04-27', '10:00:00.000000', '123'),
('2', '2021-04-29', '10:00:00.000000', '234');

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE IF NOT EXISTS `eleve` (
  `INE` varchar(50) NOT NULL DEFAULT '',
  `NomEleve` varchar(50) DEFAULT NULL,
  `PrenomEleve` varchar(50) DEFAULT NULL,
  `DateNaiss` datetime(6) DEFAULT NULL,
  `ClassEleve` varchar(50) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `mdp` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `eleve`
--

INSERT INTO `eleve` (`INE`, `NomEleve`, `PrenomEleve`, `DateNaiss`, `ClassEleve`, `email`, `mdp`) VALUES
('54365', 'wang', 'catherine', '2002-04-26 00:00:00.000000', 'BTS SIO', 'catherine@gmail.com', '12m');

-- --------------------------------------------------------

--
-- Structure de la table `faire`
--

CREATE TABLE IF NOT EXISTS `faire` (
  `INE` varchar(50) NOT NULL DEFAULT '',
  `NumDevoir` varchar(50) NOT NULL DEFAULT '',
  `Note` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE IF NOT EXISTS `professeur` (
  `NUMEN` varchar(50) NOT NULL DEFAULT '',
  `Nomprof` varchar(50) DEFAULT NULL,
  `PrenomProf` varchar(50) DEFAULT NULL,
  `DateNaiss` date DEFAULT NULL,
  `Diplome` varchar(50) DEFAULT NULL,
  `Spécialité` varchar(50) DEFAULT NULL,
  `ClasseProf` varchar(50) DEFAULT NULL,
  `emailP` varchar(200) NOT NULL,
  `mdpP` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `professeur`
--

INSERT INTO `professeur` (`NUMEN`, `Nomprof`, `PrenomProf`, `DateNaiss`, `Diplome`, `Spécialité`, `ClasseProf`, `emailP`, `mdpP`) VALUES
('123', 'vert', 'jean-francois', '1990-08-26', 'capes', 'programmation', 'BTS SIO', 'jean-francois@gmail.com', 'non'),
('234', 'pierrond vialard', 'herve', '1975-06-26', 'capes', 'cejm', 'BTS SIO', '', ''),
('345', 'morel', 'christine', '1970-08-26', 'capes', 'francais', 'BTS SIO', '', ''),
('456', 'bijleveld', 'oui', '1980-08-26', 'capes', 'anglais', 'BTS SIO', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `suivre`
--

CREATE TABLE IF NOT EXISTS `suivre` (
  `INE` varchar(50) NOT NULL DEFAULT '',
  `NumCours` varchar(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
 ADD PRIMARY KEY (`NumCours`), ADD KEY `NUMEN` (`NUMEN`), ADD KEY `DateCours` (`DateCours`,`HeureCours`);

--
-- Index pour la table `dateheure`
--
ALTER TABLE `dateheure`
 ADD PRIMARY KEY (`DateCours`,`HeureCours`);

--
-- Index pour la table `devoir`
--
ALTER TABLE `devoir`
 ADD PRIMARY KEY (`NumDevoir`), ADD KEY `NUMEN` (`NUMEN`);

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
 ADD PRIMARY KEY (`INE`);

--
-- Index pour la table `faire`
--
ALTER TABLE `faire`
 ADD PRIMARY KEY (`INE`,`NumDevoir`), ADD KEY `NumDevoir` (`NumDevoir`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
 ADD PRIMARY KEY (`NUMEN`);

--
-- Index pour la table `suivre`
--
ALTER TABLE `suivre`
 ADD PRIMARY KEY (`INE`,`NumCours`), ADD KEY `NumCours` (`NumCours`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
MODIFY `NumCours` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

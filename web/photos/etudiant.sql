-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 31 Mai 2015 à 17:39
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db577335663`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
`id_etudiant` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `statut` enum('1','2','3','4') DEFAULT NULL,
  `poste` varchar(20) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `html` enum('1','2','3','4','5') DEFAULT NULL,
  `css` enum('1','2','3','4','5') DEFAULT NULL,
  `php` enum('1','2','3','4','5') DEFAULT NULL,
  `javascript` enum('1','2','3','4','5') DEFAULT NULL,
  `mysql` enum('1','2','3','4','5') DEFAULT NULL,
  `linux` enum('1','2','3','4','5') DEFAULT NULL,
  `presentation` varchar(255) DEFAULT NULL,
  `date_inscription` date DEFAULT NULL,
  `url_projet1` varchar(100) DEFAULT NULL,
  `desc_projet1` varchar(50) DEFAULT NULL,
  `url_projet2` varchar(100) DEFAULT NULL,
  `desc_projet2` varchar(50) DEFAULT NULL,
  `url_projet3` varchar(100) DEFAULT NULL,
  `desc_projet3` varchar(50) DEFAULT NULL,
  `url_projet4` varchar(100) DEFAULT NULL,
  `desc_projet4` varchar(50) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etudiant`, `nom`, `prenom`, `password`, `email`, `ville`, `statut`, `poste`, `photo`, `date_naissance`, `html`, `css`, `php`, `javascript`, `mysql`, `linux`, `presentation`, `date_inscription`, `url_projet1`, `desc_projet1`, `url_projet2`, `desc_projet2`, `url_projet3`, `desc_projet3`, `url_projet4`, `desc_projet4`) VALUES
(1, 'Manez', 'Catherine', NULL, 'mc.manez@gmail.com', NULL, NULL, '', 'catherine_manez.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', 'wf3.veyatif.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Hauducoeur', 'Thierry', NULL, 'thierry.hauducoeur@gmail.com', NULL, NULL, '', 'thierry-hauducoeur.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', 'wf3.veyatif.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Attias', 'Edwige', NULL, 'edwige.attias75@gmail.com', 'PARIS', NULL, '', 'edwige_attias.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', 'wf3.veyatif.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'PLANTIER', 'Ingrid', 'samalad971', 'ingrid.plantier@gmail.com', 'PALAISEAU', '2', NULL, 'ingridplantier.jpg', '1982-03-26', '4', '4', '3', '2', '3', '1', 'Passionée par l''entrepreneuriat, je suis dans les starting blocks pour participer au développement de votre activité sur le web ! De préférence dans une startup, une TPE, une structure à taille humaine.', '0000-00-00', 'wf3.veyatif.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'BOUZIDI', 'Amir', 'amirb', 'amir.bouzidi@ymail.com', NULL, NULL, 'Développeur Back-end', 'amir_bouzidi.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'DILLENSCHNEIDER', 'Steven', NULL, 'sdillenschneider@gmail.com', NULL, NULL, NULL, 'steven_dillenschneider.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Habbani', 'Samih', NULL, 'samihhabbani@gmail.com', 'Barcelone', NULL, 'Développeur web', 'samih_habbani.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'VACHET', 'Pierre-Yves', NULL, 'pierreyves.vachet@gmail.com', NULL, NULL, NULL, 'pierre_yves_vachet.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'V.', 'Cedric', NULL, 'cedric.versaci@gmail.com', NULL, NULL, NULL, 'cedric_versaci.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'BOULANGER', 'Nathan', NULL, 'nathanboulanger97@gmail.com', NULL, NULL, NULL, 'nathan_boulanger.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'BRILLON', 'Thomas', NULL, 'contact@e-motionweb.fr', NULL, NULL, NULL, 'thomas_brillon.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'RASO', 'Chrystelle', NULL, 'chrystelleraso@orange.fr', NULL, NULL, NULL, 'chrystelle_raso.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
 ADD PRIMARY KEY (`id_etudiant`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
MODIFY `id_etudiant` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

SET NAMES 'utf8';

-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2014 at 09:56 AM
-- Server version: 5.5.37
-- PHP Version: 5.4.4-14+deb7u9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dicoapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `aperture`
--

CREATE TABLE IF NOT EXISTS `aperture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aperture` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Dumping data for table `aperture`
--

INSERT INTO `aperture` (`id`, `aperture`) VALUES
(1, 'Ferm&eacutee'),
(2, 'Pr&eacute-Ferm&eacutee'),
(3, 'Mi-Ferm&eacutee'),
(4, 'Moyenne'),
(5, 'Mi-Ouverte'),
(6, 'Pr&eacute-Ouverte'),
(7, 'Ouverte');

-- --------------------------------------------------------

--
-- Table structure for table `pointArticulation`
--

CREATE TABLE IF NOT EXISTS `pointArticulation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `point` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pointArticulation`
--

INSERT INTO `pointArticulation` (`id`, `point`) VALUES
(1, 'Ant&eacuterieur'),
(2, 'Quasi-Ant&eacuterieur'),
(3, 'Central'),
(4, 'Quasi-Post&eacuterieur'),
(5, 'Post&eacuterieur');

-- --------------------------------------------------------

--
-- Table structure for table `voyelle`
--

CREATE TABLE IF NOT EXISTS `voyelle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phoneme` varchar(10) CHARACTER SET latin1 NOT NULL,
  `arrondie` tinyint(1) DEFAULT NULL,
  `aperture` int(20) NOT NULL,
  `pointArticulation` int(11) NOT NULL,
  `motRP` varchar(20) CHARACTER SET latin1 DpointArticulationEFAULT NULL,
  `motGA` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `phraseRP` text CHARACTER SET latin1,
  `phraseGA` text CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=181 ;

--
-- Dumping data for table `voyelle`
--

INSERT INTO `voyelle` (`id`, `phoneme`, `arrondie`, `aperture`, `pointArticulation`, `motRP`, `motGA`, `phraseRP`, `phraseGA`) VALUES
(1, 'i:', 0, 1, 1, '', '', '', ''),
(2, 'u:', 1, 1, 5, '', '', '', ''),
(3, '&#618;', 0, 2, 2, '', '', '', ''),
(4, '&#650;', 1, 2, 4, '', '', '', ''),
(5, 'e', 0, 3, 1, 'b<b>e</b>d', 'd<b>a</b>te', '', ''),
(6, '&#601;', NULL, 4, 3, '', '', '', ''),
(7, '&#604;:', 0, 5, 3, '', '', '', ''),
(8, '&#652;', 0, 5, 5, '', '', '', ''),
(9, '&#596;:', 1, 5, 5, '', '', '', ''),
(10, '&aelig;', 0, 6, 1, '', '', '', ''),
(11, '&#593;', 0, 7, 5, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
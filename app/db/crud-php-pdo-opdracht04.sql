-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 22 apr 2024 om 13:31
-- Serverversie: 8.0.31
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Nailstudio`
--
CREATE DATABASE IF NOT EXISTS `Nailstudio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `Nailstudio`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Afspraak`
--

DROP TABLE IF EXISTS `Afspraak`;
CREATE TABLE IF NOT EXISTS `Afspraak` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Kleur1` varchar(10) NOT NULL,
  `Kleur2` varchar(10) NOT NULL,
  `Kleur3` varchar(10) NOT NULL,
  `Kleur4` varchar(10) NOT NULL,
  `Telefoon_nummer` varchar(20) NOT NULL,
  `Email_adres` varchar(50) NOT NULL,
  `Datum_afspraak` datetime NOT NULL,
  `Behandeling` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

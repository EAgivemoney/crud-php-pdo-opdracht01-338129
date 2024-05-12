-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 12 mei 2024 om 20:40
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
-- Database: `nailstudio`
--
CREATE DATABASE IF NOT EXISTS `nailstudio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `nailstudio`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `afspraak`
--

DROP TABLE IF EXISTS `afspraak`;
CREATE TABLE IF NOT EXISTS `afspraak` (
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `afspraak`
--

INSERT INTO `afspraak` (`Id`, `Kleur1`, `Kleur2`, `Kleur3`, `Kleur4`, `Telefoon_nummer`, `Email_adres`, `Datum_afspraak`, `Behandeling`) VALUES
(1, '#d72d2d', '#00ffd5', '#16ff05', '#ff00c8', '+31 6 987 654 32', 'eggman@gmail.com', '2024-05-07 10:42:00', 'Nagelbijt arrangment'),
(2, '#68d3ee', '#87da0b', '#fdb4b4', '#155127', '+31 6 123 456 78', 'eggman@gmail.com', '2024-05-07 14:50:00', 'Nagelreparatie per nagel'),
(3, '#f20d0d', '#55c399', '#cdb204', '#0045e6', '+31 6 123 456 78', 'eggman@gmail.com', '2024-05-12 23:59:00', 'Nagelbijt arrangment'),
(4, '#00ff91', '#ff0000', '#1100ff', '#2ff415', '+31 6 987 654 32', 'gjskhsfdj@fsoiijsd.com', '2024-05-12 23:59:00', 'Luxe manicure');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

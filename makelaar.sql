-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 jan 2021 om 08:58
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makelaar`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `home`
--

CREATE TABLE `home` (
  `idHome` int(11) NOT NULL,
  `aFloors` int(10) NOT NULL,
  `aRooms` int(24) NOT NULL,
  `Height` float NOT NULL,
  `Width` float NOT NULL,
  `Depth` float NOT NULL,
  `Area` varchar(255) NOT NULL,
  `Rent_Mortgage` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `home`
--

INSERT INTO `home` (`idHome`, `aFloors`, `aRooms`, `Height`, `Width`, `Depth`, `Area`, `Rent_Mortgage`, `Price`, `image`) VALUES
(1, 2, 5, 5, 4, 6, ' Rotterdam Nesselande', ' Huur', 1550, ' img/a2.jpg'),
(2, 2, 4, 20, 15, 25, 'Rotterdam Alexander', 'Huur', 1450, 'img/a3.jpg'),
(3, 3, 5, 20, 25, 30, ' Nieuwerkerk a/d ijssel', ' Koop', 762000, ' img/a3.jpg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`idHome`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `home`
--
ALTER TABLE `home`
  MODIFY `idHome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

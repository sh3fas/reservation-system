-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018 m. Kov 20 d. 13:39
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autorezervas1`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `automobiliai`
--

CREATE TABLE `automobiliai` (
  `aid` smallint(4) UNSIGNED NOT NULL,
  `numeris` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `draudimas` date DEFAULT NULL,
  `marke` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modelis` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `metai` date DEFAULT NULL,
  `tipas` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `turis` smallint(4) UNSIGNED DEFAULT NULL,
  `kuras` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kaina` smallint(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `automobiliai`
--

INSERT INTO `automobiliai` (`aid`, `numeris`, `draudimas`, `marke`, `modelis`, `metai`, `tipas`, `turis`, `kuras`, `kaina`) VALUES
(1, 'JDK090', '2018-02-23', 'Volvo', 'V70', '2004-09-01', 'Universalas', 2400, 'Dyzelinas', 20),
(2, 'JDK744', '2018-10-17', 'Volvo', 'S60', '2008-01-01', 'Sedanas', 2400, 'Dyzelinas', 15),
(3, 'JCR246', '2019-01-15', 'Nissan', 'Quashqai', '2017-06-01', 'Visureigis', 1500, 'Dyzelinas', 18),
(4, 'KNN542', '2018-10-11', 'Nissan', 'Qashqai', '2009-01-01', 'Visureigis', 1800, 'Dyzelinas', 18),
(5, 'ADI123', '2018-10-15', 'Audi', 'TT', '2015-09-01', 'Kupė', 1984, 'Benzinas', 14),
(6, 'VGZ325', '2017-12-19', 'Volkswagen', 'Touran', '2011-01-01', 'Vienatūris', 1968, 'Dyzelinas', 19),
(7, 'MZD365', '2018-05-14', 'Mazda', '3', '2009-06-01', 'Hečbekas', 1600, 'Benzinas', 15),
(8, 'FBU921', '2018-06-09', 'Mazda', '3', '2010-11-01', 'Sedanas', 2000, 'Benzinas', 16),
(9, 'MZD633', '2018-09-06', 'Mazda', '6', '2010-11-01', 'Sedanas', 1999, 'Benzinas', 15);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'Pamoka Framework', 'pamoka-framework', 'Frameworko naujas item'),
(2, 'hfdh', 'hfdh', 'ghgfh');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `rezervavimas`
--

CREATE TABLE `rezervavimas` (
  `rid` int(9) UNSIGNED NOT NULL,
  `aid` smallint(4) UNSIGNED NOT NULL,
  `vid` smallint(6) UNSIGNED NOT NULL,
  `nuo` datetime NOT NULL,
  `iki` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `rezervavimas`
--

INSERT INTO `rezervavimas` (`rid`, `aid`, `vid`, `nuo`, `iki`) VALUES
(48, 8, 8, '2017-12-04 00:00:00', '2017-12-13 00:00:00'),
(50, 1, 2, '2018-10-02 10:00:00', '2018-10-04 10:00:00');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `vartotojai`
--

CREATE TABLE `vartotojai` (
  `vid` smallint(6) UNSIGNED NOT NULL,
  `vardas` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pavarde` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefonas` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `epastas` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `vartotojai`
--

INSERT INTO `vartotojai` (`vid`, `vardas`, `pavarde`, `telefonas`, `epastas`) VALUES
(1, 'Jonas', 'Jonaitis', '865212345', 'jonas@gmail.com'),
(2, 'Ona', 'Jonaitiene', '+370652321', ''),
(8, 'Mantas', 'Adomenas', '+370633924', 'as@gmail.com'),
(9, 'marius', 'jonaitis', '+370633924', 'as@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automobiliai`
--
ALTER TABLE `automobiliai`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `rezervavimas`
--
ALTER TABLE `rezervavimas`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `aid` (`aid`),
  ADD KEY `vid` (`vid`);

--
-- Indexes for table `vartotojai`
--
ALTER TABLE `vartotojai`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `automobiliai`
--
ALTER TABLE `automobiliai`
  MODIFY `aid` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rezervavimas`
--
ALTER TABLE `rezervavimas`
  MODIFY `rid` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `vartotojai`
--
ALTER TABLE `vartotojai`
  MODIFY `vid` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Apribojimai eksportuotom lentelėm
--

--
-- Apribojimai lentelei `rezervavimas`
--
ALTER TABLE `rezervavimas`
  ADD CONSTRAINT `rezervavimas_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `automobiliai` (`aid`),
  ADD CONSTRAINT `rezervavimas_ibfk_2` FOREIGN KEY (`vid`) REFERENCES `vartotojai` (`vid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

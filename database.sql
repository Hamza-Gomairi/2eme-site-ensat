-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 11:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personne`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--
-- Creation: Feb 16, 2022 at 09:34 PM
-- Last update: Feb 24, 2022 at 09:51 PM
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `CAP` varchar(100) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Ville` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `idd` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `class`:
--

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `CAP`, `Nom`, `Prenom`, `Adresse`, `Ville`, `Email`, `Photo`, `idd`) VALUES
(16, 'gm25092001', 'Gomairi', 'Hamza', 'LOTS INES RUE AIN ASERDOUN N 14', 'Tangier', 'hamzagu@gmail.com', 'ALAMI.png', 12);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--
-- Creation: Feb 18, 2022 at 03:49 PM
-- Last update: Feb 24, 2022 at 09:51 PM
--

CREATE TABLE `notes` (
  `module` varchar(100) NOT NULL,
  `NOM` varchar(100) NOT NULL,
  `CAP` varchar(100) NOT NULL,
  `TAS` int(10) NOT NULL,
  `BAS` int(10) NOT NULL,
  `ELN` int(10) NOT NULL,
  `PW` int(10) NOT NULL,
  `OP` int(10) NOT NULL,
  `C` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `notes`:
--

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`module`, `NOM`, `CAP`, `TAS`, `BAS`, `ELN`, `PW`, `OP`, `C`) VALUES
('', 'Gomairi', 'gm25092001', 13, 13, 15, 20, 13, 16);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
-- Creation: Feb 16, 2022 at 07:54 PM
-- Last update: Feb 24, 2022 at 09:51 PM
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `NOM` varchar(100) NOT NULL,
  `CAP` varchar(100) NOT NULL,
  `etat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `user`:
--

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `NOM`, `CAP`, `etat`) VALUES
(3, 'Amechnoue', 'amechnouephp', 'prof'),
(21, 'Gomairi', 'gm25092001', 'etudiant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`module`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table class
--

--
-- Metadata for table notes
--

--
-- Metadata for table user
--

--
-- Metadata for database personne
--
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

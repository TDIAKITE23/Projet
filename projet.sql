-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2022 at 04:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `NOM` varchar(30) DEFAULT NULL,
  `PRENOM` varchar(30) DEFAULT NULL,
  `MAIL` varchar(30) DEFAULT NULL,
  `MDP` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `NOM`, `PRENOM`, `MAIL`, `MDP`) VALUES
(1, 'DIAKITE', 'TIEMOKODJAN', 'tiemokodjandiakite@gmail.com', 'projet'),
(2, 'SAAD', 'MARIA', 'mariasaad2003@gmail.com', 'projet');

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

CREATE TABLE `classe` (
  `ID` int(11) NOT NULL,
  `NOM` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classe`
--

INSERT INTO `classe` (`ID`, `NOM`) VALUES
(1, 'terminale'),
(2, 'première'),
(3, 'seconde');

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `ID` int(11) NOT NULL,
  `ID_CLASSES` int(11) DEFAULT NULL,
  `NOM` varchar(30) DEFAULT NULL,
  `PRENOM` varchar(30) DEFAULT NULL,
  `MAIL` varchar(30) DEFAULT NULL,
  `MDP` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`ID`, `ID_CLASSES`, `NOM`, `PRENOM`, `MAIL`, `MDP`) VALUES
(1, 1, 'RICK', 'RIRI', 'RICK@GMAIL.COM', 'rick'),
(2, 1, 'YOUNESS', 'ESSABRI', 'youness@gmail.com', 'oui'),
(15, 1, 'KHODADIN', 'SAARAH', 'tabassumkhodadin@hotmail.com', 'Saarah'),
(16, 1, 'SAMAHA', 'ELIO', 'ELIO@GMAIL.COM', 'etu'),
(17, 1, 'CAREL', 'JUSTIN', 'JUSTIN@GMAIL.COM', 'etu'),
(18, 1, 'GUINDY', 'BIDO', 'bido@gmail.com', 'etu'),
(19, 1, 'YATTASSAYE', 'MOHAMED', 'yatt@gmail.com', 'etu'),
(20, 2, 'KHOURY', 'GEORGE', 'GEORGE@GMAIL.COM', 'etu'),
(21, 2, 'VERT', 'LUIGI', 'LUIGI@GMAIL.COM', 'etu'),
(22, 2, 'KART', 'MARIO', 'MARIO@GMAIL.COM', 'etu'),
(23, 2, 'PEACH', 'PRINCESSE', 'PEACH@GMAIL.COM', 'etu'),
(24, 2, 'BELLE', 'LA', 'BELLE@GMAIL.COM', 'etu'),
(25, 2, 'BETE', 'ELA', 'BETE@GMAIL.COM', 'etu'),
(26, 2, 'MARX', 'KARL', 'KARL@GMAIL.COM', 'etu'),
(27, 3, 'REDDINGTON', 'RAYMOND', 'RAY@GMAIL.COM', 'etu'),
(28, 3, 'HOLLAND', 'TOM', 'TOM@GMAIL.COM', 'etu'),
(29, 3, 'PARKER', 'PETER', 'PETER@GMAIL.COM', 'etu'),
(30, 3, 'KENT', 'CLARK', 'CLARK@GMAIL.COM', 'etu'),
(31, 3, 'LANE', 'LOUIS', 'LOUIS@GMAIL.COM', 'etu'),
(32, 3, 'MAN', 'SUPER', 'SUPERMAN@GMAIL.COM', 'etu'),
(33, 3, 'MAN', 'IRON', 'IRONMAN@GMAIL.COM', 'etu');

-- --------------------------------------------------------

--
-- Table structure for table `etu_prof`
--

CREATE TABLE `etu_prof` (
  `ID_ETU` int(11) DEFAULT NULL,
  `ID_PROF` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `matieres`
--

CREATE TABLE `matieres` (
  `ID` int(11) NOT NULL,
  `ID_CLASSES` int(11) DEFAULT NULL,
  `NOM` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matieres`
--

INSERT INTO `matieres` (`ID`, `ID_CLASSES`, `NOM`) VALUES
(1, 3, 'MATHS'),
(2, 3, 'PHYSIQUE-CHIME'),
(4, 3, 'BIOLOGIE'),
(5, 1, 'Philosophie'),
(7, 3, 'HIST-GEO'),
(8, 3, 'EPS'),
(9, 3, 'ANGLAIS 1'),
(10, 2, 'ANGLAIS 2'),
(11, 1, 'ANGLAIS 3'),
(12, 2, 'MATHS2'),
(13, 1, 'MATHS3'),
(14, 2, 'PHYSIQUE-CHIMIE2'),
(15, 1, 'PHYSIQUE-CHIMIE3'),
(16, 2, 'BIOLOGIE2'),
(17, 1, 'BIOLOGIE3'),
(18, 2, 'HIST-GEO2'),
(19, 2, 'EPS2');

-- --------------------------------------------------------

--
-- Table structure for table `professeurs`
--

CREATE TABLE `professeurs` (
  `ID` int(11) NOT NULL,
  `ID_CLASSES` int(11) DEFAULT NULL,
  `ID_MATIERES` int(11) DEFAULT NULL,
  `NOM` varchar(30) DEFAULT NULL,
  `PRENOM` varchar(30) DEFAULT NULL,
  `MAIL` varchar(30) DEFAULT NULL,
  `MDP` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professeurs`
--

INSERT INTO `professeurs` (`ID`, `ID_CLASSES`, `ID_MATIERES`, `NOM`, `PRENOM`, `MAIL`, `MDP`) VALUES
(1, 1, 13, 'VONNEBUL', 'NATHAN', 'NATHAN@GMAIL.COM', 'projet'),
(8, 1, 5, 'WAOU', 'GEORGETTE', 'georgettewaou@gmail.com', 'prof'),
(9, 1, 1, 'US', 'AMERICA', 'americaus@gmail.com', 'prof'),
(10, 1, 15, 'EINSTEIN', 'ALBER', 'albert@gmail.com', 'prof'),
(11, 1, 17, 'SISSOKO', 'MR', 'sissoko@gmail.com', 'prof'),
(12, 2, 10, 'TRUMP', 'DONALD', 'trump@gmail.com', 'prof'),
(13, 2, 12, 'TRAORE', 'SEKOU', 'sekou@gmail.com', 'prof'),
(14, 2, 14, 'DEMBELE', 'ELVIS', 'elvis@gmail.com', 'prof'),
(15, 2, 16, 'MENDEL', 'GREGORE', 'mendel@gmail.com', 'prof'),
(16, 2, 18, 'CHARLEMAGNE', 'ROI', 'roi@gmail.com', 'prof'),
(17, 2, 19, 'MESSI', 'LIONEL', 'messi@gmail.com', 'prof'),
(18, 3, 1, 'SOUGANE', 'OUMAR', 'sougane@gmail.com', 'prof'),
(19, 3, 2, 'DIALL', 'MR', 'diall@gmail.com', 'prof'),
(20, 3, 4, 'DARWIN', 'CHARLE', 'darwin@gmail.com', 'prof'),
(21, 3, 7, 'LOUIS', 'XIV', 'louis@gmail.com', 'prof'),
(22, 3, 8, 'RONALDO', 'CRISTIANO', 'ronaldo@gmail.com', 'prof'),
(23, 3, 9, 'BIDEN', 'JOE', 'joe@gmail.com', 'prof');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_CLASSES` (`ID_CLASSES`);

--
-- Indexes for table `etu_prof`
--
ALTER TABLE `etu_prof`
  ADD KEY `ID_ETU` (`ID_ETU`),
  ADD KEY `ID_PROF` (`ID_PROF`);

--
-- Indexes for table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_CLASSES` (`ID_CLASSES`);

--
-- Indexes for table `professeurs`
--
ALTER TABLE `professeurs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_CLASSES` (`ID_CLASSES`),
  ADD KEY `ID_MATIERES` (`ID_MATIERES`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `classe`
--
ALTER TABLE `classe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `professeurs`
--
ALTER TABLE `professeurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`ID_CLASSES`) REFERENCES `classe` (`ID`);

--
-- Constraints for table `etu_prof`
--
ALTER TABLE `etu_prof`
  ADD CONSTRAINT `etu_prof_ibfk_1` FOREIGN KEY (`ID_ETU`) REFERENCES `etudiant` (`ID`),
  ADD CONSTRAINT `etu_prof_ibfk_2` FOREIGN KEY (`ID_PROF`) REFERENCES `professeurs` (`ID`);

--
-- Constraints for table `matieres`
--
ALTER TABLE `matieres`
  ADD CONSTRAINT `matieres_ibfk_1` FOREIGN KEY (`ID_CLASSES`) REFERENCES `classe` (`ID`);

--
-- Constraints for table `professeurs`
--
ALTER TABLE `professeurs`
  ADD CONSTRAINT `professeurs_ibfk_1` FOREIGN KEY (`ID_CLASSES`) REFERENCES `classe` (`ID`),
  ADD CONSTRAINT `professeurs_ibfk_2` FOREIGN KEY (`ID_MATIERES`) REFERENCES `matieres` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

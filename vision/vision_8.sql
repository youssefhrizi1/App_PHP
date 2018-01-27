-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 10:08 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vision`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id_agent` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `cin` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id_agent`, `nom`, `prenom`, `cin`, `email`, `pwd`) VALUES
(47, 'youssef', 'hrizi', '09931443', 'youssef12hrizi@gmail.com', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `ArticlesID` int(11) NOT NULL,
  `Ref_art` varchar(50) NOT NULL,
  `Nom_art` varchar(50) DEFAULT NULL,
  `Prix_art` double DEFAULT NULL,
  `Commentaire_art` varchar(50) NOT NULL,
  `ClientID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `ClientID` int(11) NOT NULL,
  `Tel_cli` varchar(20) NOT NULL,
  `Ta_ag` varchar(50) NOT NULL,
  `Nom_cli` varchar(20) NOT NULL,
  `Prenom_cli` varchar(20) NOT NULL,
  `Adresse_cli` varchar(50) NOT NULL,
  `Portable_cli` varchar(20) NOT NULL,
  `Email_cli` varchar(50) NOT NULL,
  `DateTime_cli` datetime NOT NULL DEFAULT '2017-10-07 11:40:00',
  `AgentID` int(11) NOT NULL,
  `D` date NOT NULL DEFAULT '2011-01-26'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `com` varchar(255) NOT NULL,
  `datecom` date NOT NULL DEFAULT '2011-01-26',
  `id_agent` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presence_entrer`
--

CREATE TABLE `presence_entrer` (
  `PREID` int(11) NOT NULL,
  `date_entrer` datetime NOT NULL DEFAULT '2017-01-26 14:30:00',
  `cin` varchar(10) NOT NULL,
  `dj` date NOT NULL DEFAULT '2017-01-26'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `presence_entrer`
--

INSERT INTO `presence_entrer` (`PREID`, `date_entrer`, `cin`, `dj`) VALUES
(65, '2017-11-15 10:02:57', '09931443', '2017-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `presence_sortir`
--

CREATE TABLE `presence_sortir` (
  `PRSID` int(11) NOT NULL,
  `date_sortir` datetime NOT NULL DEFAULT '2017-01-26 14:30:00',
  `cin` varchar(10) NOT NULL,
  `djs` date NOT NULL DEFAULT '2017-01-26'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `presence_sortir`
--

INSERT INTO `presence_sortir` (`PRSID`, `date_sortir`, `cin`, `djs`) VALUES
(58, '2017-11-15 10:03:14', '09931443 ', '2017-11-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id_agent`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ArticlesID`),
  ADD KEY `FK_clart` (`ClientID`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ClientID`),
  ADD KEY `FK_agid` (`AgentID`);

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agent` (`id_agent`);

--
-- Indexes for table `presence_entrer`
--
ALTER TABLE `presence_entrer`
  ADD PRIMARY KEY (`PREID`),
  ADD KEY `FK_clart` (`cin`);

--
-- Indexes for table `presence_sortir`
--
ALTER TABLE `presence_sortir`
  ADD PRIMARY KEY (`PRSID`),
  ADD KEY `FK_clart` (`cin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id_agent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `ArticlesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `ClientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `presence_entrer`
--
ALTER TABLE `presence_entrer`
  MODIFY `PREID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `presence_sortir`
--
ALTER TABLE `presence_sortir`
  MODIFY `PRSID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

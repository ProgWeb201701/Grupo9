-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jul-2017 às 03:24
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabtcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `areainteresse`
--

CREATE TABLE `areainteresse` (
  `codareai` bigint(20) UNSIGNED NOT NULL,
  `nomareai` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `codava` bigint(20) UNSIGNED NOT NULL,
  `notava` decimal(2,2) DEFAULT NULL,
  `parava` text,
  `arqava` varchar(100) DEFAULT NULL,
  `codavar` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliador`
--

CREATE TABLE `avaliador` (
  `codavar` bigint(20) UNSIGNED NOT NULL,
  `codprof` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `coordenadortcc`
--

CREATE TABLE `coordenadortcc` (
  `codcoo` bigint(20) UNSIGNED NOT NULL,
  `nomcoo` varchar(100) DEFAULT NULL,
  `titcoo` varchar(100) DEFAULT NULL,
  `inscoo` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `coordenadortcc`
--

INSERT INTO `coordenadortcc` (`codcoo`, `nomcoo`, `titcoo`, `inscoo`) VALUES
(1, 'adalberto', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `coddis` bigint(20) UNSIGNED NOT NULL,
  `nomdis` varchar(100) DEFAULT NULL,
  `turdis` varchar(100) DEFAULT NULL,
  `semdis` int(50) DEFAULT NULL,
  `codcoo` int(11) DEFAULT NULL,
  `codtcc` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `monografia`
--

CREATE TABLE `monografia` (
  `codmono` int(11) NOT NULL,
  `arquivo` varchar(40) DEFAULT NULL,
  `datamono` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orientador`
--

CREATE TABLE `orientador` (
  `codorir` bigint(20) UNSIGNED NOT NULL,
  `codprof` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orientando`
--

CREATE TABLE `orientando` (
  `codori` bigint(20) UNSIGNED NOT NULL,
  `nomori` varchar(100) DEFAULT NULL,
  `curori` varchar(100) DEFAULT NULL,
  `matori` int(50) DEFAULT NULL,
  `codorir` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `orientando`
--

INSERT INTO `orientando` (`codori`, `nomori`, `curori`, `matori`, `codorir`) VALUES
(1, 'gilberto', 'es', 1615, NULL),
(2, 'mayla', 'cc', 1966, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `codprof` bigint(20) UNSIGNED NOT NULL,
  `nomprof` varchar(100) DEFAULT NULL,
  `titprof` varchar(100) DEFAULT NULL,
  `instprof` varchar(100) DEFAULT NULL,
  `codareai` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`codprof`, `nomprof`, `titprof`, `instprof`, `codareai`) VALUES
(1, 'luis', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tcc`
--

CREATE TABLE `tcc` (
  `codtcc` bigint(20) UNSIGNED NOT NULL,
  `tittcc` varchar(100) DEFAULT NULL,
  `protcc` varchar(100) DEFAULT NULL,
  `dtdeftcc` date DEFAULT NULL,
  `codava` int(11) DEFAULT NULL,
  `codori` int(11) DEFAULT NULL,
  `coddis` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tcc`
--

INSERT INTO `tcc` (`codtcc`, `tittcc`, `protcc`, `dtdeftcc`, `codava`, `codori`, `coddis`) VALUES
(1, 'tcc do gilberto', NULL, '2017-09-01', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areainteresse`
--
ALTER TABLE `areainteresse`
  ADD PRIMARY KEY (`codareai`),
  ADD UNIQUE KEY `codareai` (`codareai`);

--
-- Indexes for table `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`codava`),
  ADD UNIQUE KEY `codava` (`codava`);

--
-- Indexes for table `avaliador`
--
ALTER TABLE `avaliador`
  ADD PRIMARY KEY (`codavar`),
  ADD UNIQUE KEY `codavar` (`codavar`);

--
-- Indexes for table `coordenadortcc`
--
ALTER TABLE `coordenadortcc`
  ADD PRIMARY KEY (`codcoo`),
  ADD UNIQUE KEY `codcoo` (`codcoo`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`coddis`),
  ADD UNIQUE KEY `coddis` (`coddis`);

--
-- Indexes for table `monografia`
--
ALTER TABLE `monografia`
  ADD PRIMARY KEY (`codmono`);

--
-- Indexes for table `orientador`
--
ALTER TABLE `orientador`
  ADD PRIMARY KEY (`codorir`),
  ADD UNIQUE KEY `codorir` (`codorir`);

--
-- Indexes for table `orientando`
--
ALTER TABLE `orientando`
  ADD PRIMARY KEY (`codori`),
  ADD UNIQUE KEY `codori` (`codori`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`codprof`),
  ADD UNIQUE KEY `codprof` (`codprof`);

--
-- Indexes for table `tcc`
--
ALTER TABLE `tcc`
  ADD PRIMARY KEY (`codtcc`),
  ADD UNIQUE KEY `codtcc` (`codtcc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areainteresse`
--
ALTER TABLE `areainteresse`
  MODIFY `codareai` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `codava` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `avaliador`
--
ALTER TABLE `avaliador`
  MODIFY `codavar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coordenadortcc`
--
ALTER TABLE `coordenadortcc`
  MODIFY `codcoo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `coddis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `monografia`
--
ALTER TABLE `monografia`
  MODIFY `codmono` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orientador`
--
ALTER TABLE `orientador`
  MODIFY `codorir` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orientando`
--
ALTER TABLE `orientando`
  MODIFY `codori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `codprof` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tcc`
--
ALTER TABLE `tcc`
  MODIFY `codtcc` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

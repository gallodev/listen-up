-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 30-Jul-2018 às 04:48
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listenup`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `TB_MUSICA`
--

CREATE TABLE `TB_MUSICA` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(255) COLLATE utf8_bin NOT NULL,
  `CAMINHO` varchar(255) COLLATE utf8_bin NOT NULL,
  `ARTISTA` varchar(255) COLLATE utf8_bin NOT NULL,
  `FK_ID_GENERO` int(11) NOT NULL,
  `TAGS` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `QTD_CLIQUE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `TB_MUSICA`
--

INSERT INTO `TB_MUSICA` (`ID`, `NOME`, `CAMINHO`, `ARTISTA`, `FK_ID_GENERO`, `TAGS`, `QTD_CLIQUE`) VALUES
(1, 'MARCIO ALBERTO GALLO', 'upload/MARCIO ALBERTO GALLO.mp3', 'xxxx', 2, '#teste', 3),
(2, 'MARCIO ALBERTO GALLO', 'upload/MARCIO ALBERTO GALLO.mp3', 'xxxx', 2, '#teste', 0),
(3, 'Rabetão', 'upload/Rabetão.mp3', 'Mc Lan', 4, '#funk #lançamento ', 0),
(4, 'Musica legal', 'upload/Musica legal.mp3', 'Nx zero', 2, '#cool', 1),
(5, 'Corpo Sensual', 'upload/Corpo Sensual.mp3', 'Pablo Vitar', 4, '#gls', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TB_MUSICA`
--
ALTER TABLE `TB_MUSICA`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `TB_MUSICA`
--
ALTER TABLE `TB_MUSICA`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Maio-2017 às 17:12
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `frases`
--

CREATE TABLE `frases` (
  `id` int(11) NOT NULL,
  `texto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entendi` int(11) NOT NULL DEFAULT '0',
  `n_entendi` int(11) NOT NULL DEFAULT '0',
  `entendi_pouco` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `frases`
--

INSERT INTO `frases` (`id`, `texto`, `entendi`, `n_entendi`, `entendi_pouco`) VALUES
(8, 'modo desktop', 25, 5, 0),
(7, 'modo desktop', 9, 4, 6),
(6, 'celular modo responsivo', 0, 0, 0),
(9, 'teste modo desktop', 0, 0, 0),
(10, 'modo desktop', 0, 0, 0),
(11, 'ABCD', 15, 8, 3),
(12, 'ABCD', 0, 0, 0),
(13, 'hoje e quinta-feira ', 0, 0, 0),
(14, 'hoje e quinta-feira ', 0, 0, 0),
(15, 'quinta-feira desktop ok', 0, 0, 0),
(16, 'quinta-feira desktop ok', 0, 0, 0),
(17, 'quinta-feira mobile ok', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `frases`
--
ALTER TABLE `frases`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `frases`
--
ALTER TABLE `frases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Nov-2018 às 18:59
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `id_dados` int(10) UNSIGNED NOT NULL,
  `empresa_id_empresa` int(10) UNSIGNED NOT NULL,
  `origem_id_origem` int(10) UNSIGNED NOT NULL,
  `destino_id_destino` int(10) UNSIGNED NOT NULL,
  `data_ida` date DEFAULT NULL,
  `data_volta` date DEFAULT NULL,
  `duracao_voo` int(11) DEFAULT NULL,
  `preco_voo` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id_dados`, `empresa_id_empresa`, `origem_id_origem`, `destino_id_destino`, `data_ida`, `data_volta`, `duracao_voo`, `preco_voo`) VALUES
(1, 0, 1, 1, '2018-11-04', '2018-11-30', 8, 1234),
(2, 1, 1, 1, '2018-11-04', '2018-11-30', 8, 1234),
(3, 1, 1, 1, '2018-11-06', '2018-11-22', 8, 650);

-- --------------------------------------------------------

--
-- Estrutura da tabela `destino`
--

CREATE TABLE `destino` (
  `id_destino` int(10) UNSIGNED NOT NULL,
  `nome_destino` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `destino`
--

INSERT INTO `destino` (`id_destino`, `nome_destino`) VALUES
(1, 'Rio de Janeiro'),
(2, 'Rio de Janeiro'),
(3, 'SÃ£o Paulo'),
(4, 'Rio Grande do Sul'),
(5, 'Amazonas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(10) UNSIGNED NOT NULL,
  `nome_empresa` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome_empresa`) VALUES
(1, 'Azul'),
(2, 'Avianca'),
(3, 'Gol'),
(4, 'LATAM'),
(5, 'Tam');

-- --------------------------------------------------------

--
-- Estrutura da tabela `origem`
--

CREATE TABLE `origem` (
  `id_origem` int(10) UNSIGNED NOT NULL,
  `nome_origem` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `origem`
--

INSERT INTO `origem` (`id_origem`, `nome_origem`) VALUES
(1, 'BrasÃ­lia'),
(2, 'Minas-Gerais'),
(3, 'Tocantins'),
(4, 'Bahia'),
(5, 'MaranhÃ£o');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`id_dados`),
  ADD KEY `dados_FKIndex1` (`empresa_id_empresa`),
  ADD KEY `dados_FKIndex2` (`origem_id_origem`),
  ADD KEY `dados_FKIndex3` (`destino_id_destino`);

--
-- Indexes for table `destino`
--
ALTER TABLE `destino`
  ADD PRIMARY KEY (`id_destino`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indexes for table `origem`
--
ALTER TABLE `origem`
  ADD PRIMARY KEY (`id_origem`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dados`
--
ALTER TABLE `dados`
  MODIFY `id_dados` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destino`
--
ALTER TABLE `destino`
  MODIFY `id_destino` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `origem`
--
ALTER TABLE `origem`
  MODIFY `id_origem` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

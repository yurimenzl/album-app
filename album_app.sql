-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05/07/2019 às 19:18
-- Versão do servidor: 10.0.38-MariaDB-0ubuntu0.16.04.1
-- Versão do PHP: 7.2.11-2+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `album_app`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `id_artist` int(11) NOT NULL,
  `album_name` varchar(255) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `albums`
--

INSERT INTO `albums` (`id`, `id_artist`, `album_name`, `year`) VALUES
(1, 1, 'Liberation', 2018),
(2, 4, 'Hypnotize', 2005),
(3, 3, 'Joanne', 2016),
(4, 2, 'Egypt Station', 2018),
(5, 5, 'Brasil Afora', 2009),
(6, 7, 'Album Test', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `twitter_handle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `artists`
--

INSERT INTO `artists` (`id`, `artist_name`, `twitter_handle`) VALUES
(1, 'Cristina Aguillera', 'xtina'),
(2, 'Paul Mcartney', 'PaulMcCartney'),
(3, 'Lady Gaga', 'ladygaga'),
(4, 'System of a Down', 'officialsoad'),
(5, 'Os Paralamas do Sucesso', 'os_paralamas'),
(6, 'Yuri Celaschi', 'ymc'),
(7, 'Yuri Celaschi', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'b23f8d6eedd93231c22a1a0c07d7cbd8');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Mar-2023 às 04:59
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `alien_invader`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `personagem`
--

CREATE TABLE `personagem` (
  `cod_personagem` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `personagem` varchar(100) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `pais` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `personagem`
--

INSERT INTO `personagem` (`cod_personagem`, `nome`, `login`, `senha`, `email`, `personagem`, `sexo`, `pais`) VALUES
(31, 'Rodrigo Cinelli', 'Rodrigo Cinelli3ba14', '5a4ce726', 'rodcinelli@gmail.com', 'Rodrigo Cinelli', 'masculino', 'Brasil'),
(32, 'Rodrigo Cinelli', 'Rodrigo Cinelliba201', 'f2c8a6dd', 'rodcinelli@gmail.com', 'Rodrigo Cinelli', 'masculino', 'Brasil');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `personagem`
--
ALTER TABLE `personagem`
  ADD PRIMARY KEY (`cod_personagem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `personagem`
--
ALTER TABLE `personagem`
  MODIFY `cod_personagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

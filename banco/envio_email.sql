-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/05/2023 às 15:35
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `envio_email`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `bdcadastro`
--

CREATE TABLE `bdcadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `bdcadastro`
--

INSERT INTO `bdcadastro` (`id`, `nome`, `email`) VALUES
(1, 'Yasmin Carvalho', 'yasmin.carvalho99@hotmail.com'),
(4, 'Carvalho', 'yasmin.c.carvalho@ba.estudante.senai.br');

-- --------------------------------------------------------

--
-- Estrutura para tabela `p_login`
--

CREATE TABLE `p_login` (
  `id` int(11) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `usuario` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `p_login`
--

INSERT INTO `p_login` (`id`, `senha`, `usuario`) VALUES
(1, 'teste', 'Yasmin');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `bdcadastro`
--
ALTER TABLE `bdcadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `p_login`
--
ALTER TABLE `p_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bdcadastro`
--
ALTER TABLE `bdcadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `p_login`
--
ALTER TABLE `p_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

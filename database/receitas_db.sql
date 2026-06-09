-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/06/2026 às 04:57
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `receitas_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `cpf` varchar(14) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `created_at`, `cpf`, `data_nascimento`) VALUES
(1, 'Maria Milani', 'mariagabriela5024@gmail.com', '$2y$10$OrXRRnch8VWfv6.NQYyYruZ5bQ14D1sjqvQZYtW5uiYZuJy3fivaK', '2026-05-23 00:39:20', '15435251990', '2007-04-05'),
(13, 'Matheus Aliski', 'matheus@gmail.com', '$2y$10$DWY.CUaedm306MDyxETLZuGSqwLj3FLWUfiRwhV.92fqUX7NQhVSu', '2026-06-09 02:08:09', '14352768290', '2005-10-20'),
(14, 'Eduardo Alves', 'Eduardo@gmail.com', '$2y$10$1ar3ckrwGg3iSEJdD.kZs.ulBspCZ0IlYhzcZBiUh7VruhDTh/BqO', '2026-06-09 02:09:50', '18427498709', '2006-06-02'),
(15, 'Alessandro', 'alessandro@gmail.com', '$2y$10$MwieZw2o./0mYxWwmoagbO6LJW/86mY/TTICypeertzWysEcPS242', '2026-06-09 02:11:10', '18739874630', '2007-04-04');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

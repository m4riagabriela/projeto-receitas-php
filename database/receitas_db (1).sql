-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/06/2026 às 03:27
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
-- Estrutura para tabela `receitas`
--

CREATE TABLE `receitas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descricao` text NOT NULL,
  `modo_preparo` text NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `receitas`
--

INSERT INTO `receitas` (`id`, `titulo`, `descricao`, `modo_preparo`, `usuario_id`, `created_at`) VALUES
(2, 'Bolo Simples', 'Bolo simples com poucos ingredientes', 'Ingredientes (12 porções)\r\naçúcar\r\n2 xícaras (chá) de açúcar\r\nfarinha de trigo\r\n3 xícaras (chá) de farinha de trigo\r\nmargarina\r\n4 colheres (sopa) de margarina\r\novo\r\n3 ovos\r\nleite\r\n1 e 1/2 xícara (chá) de leite\r\nfermento em pó químico\r\n1 colher (sopa) bem cheia de fermento em pó\r\nModo de preparo\r\nModo de preparo : 40min\r\n1\r\nBata as claras em neve e reserve.\r\n\r\n2\r\nMisture as gemas, a margarina e o açúcar até obter uma massa homogênea.\r\n\r\n3\r\nAcrescente o leite e a farinha de trigo aos poucos, sem parar de bater.\r\n\r\n4\r\nPor último, adicione as claras em neve e o fermento.\r\n\r\n5\r\nDespeje a massa em uma forma grande de furo central untada e enfarinhada.\r\n\r\n6\r\nAsse em forno médio 180 °C, preaquecido, por aproximadamente 40 minutos ou ao furar o bolo com um garfo, este saia limpo.', 1, '2026-05-31 23:54:47');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `created_at`) VALUES
(1, 'MARIA MILANI', 'mariagabriela5024@gmail.com', '$2y$10$q0yHmaea0G4ce9W7xivYWOavXPkt3YgIc.E0/e9ZURniQz4GjEoQy', '2026-05-23 00:39:20'),
(2, 'Maria Linda', 'marialinda@gmail.com', '$2y$10$O4/Duw/B4iQsvmH9sUO36.bsxqE.p0a1BZZ0CkTs40GQ8SIsZfx0e', '2026-06-01 00:27:50'),
(6, 'Maria Linda', 'marialinda2@gmail.com', '$2y$10$R1gXAE14eXw8q63V0cpXKuPam0ioHMWfN/vBhY21DQ5EY/KQfQOBm', '2026-06-01 00:32:10');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

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
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `receitas`
--
ALTER TABLE `receitas`
  ADD CONSTRAINT `receitas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/02/2025 às 01:20
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `terapia_integrativas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `profissionais`
--

CREATE TABLE `profissionais` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `especialidade` varchar(255) DEFAULT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `profissionais`
--

INSERT INTO `profissionais` (`id`, `nome`, `especialidade`, `image`) VALUES
(1, 'Helena', 'Acumputura', 'https://img.freepik.com/fotos-premium/adsasd_129180-3386.jpg?ga=GA1.1.345808142.1738189526&semt=ais_hybrid'),
(2, 'Valesca ', 'Massagem', 'https://img.freepik.com/free-photo/front-view-woman-working-spa_23-2150911764.jpg?uid=R165984995&ga=GA1.1.345808142.1738189526&semt=ais_hybrid'),
(3, 'Marcos', 'Pilates', 'https://img.freepik.com/free-photo/before-workout-bearded-man-holdinga-mat-workout_259150-57017.jpg?uid=R165984995&ga=GA1.1.345808142.1738189526&semt=ais_hybrid');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessoes`
--

CREATE TABLE `sessoes` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `terapeuta_id` int(11) DEFAULT NULL,
  `terapia_id` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `terapias`
--

CREATE TABLE `terapias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `terapias`
--

INSERT INTO `terapias` (`id`, `nome`, `descricao`, `image`) VALUES
(1, 'Acupuntura', 'Encontrar soluções para necessidades complexas', 'https://img.freepik.com/fotos-gratis/terapeuta-de-close-up-fazendo-acupuntura_23-2148815317.jpg?semt=ais_hybrid'),
(2, 'Pilates', 'Otimizando suas habilidades individuais', 'https://plus.unsplash.com/premium_photo-1663046045743-7ce2a49d82e7?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'),
(3, 'Massagem', '*lorem ispum dolor sit comminucate', 'https://images.unsplash.com/photo-1519823551278-64ac92734fb1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `nome`, `cpf`, `telefone`, `email`, `senha`) VALUES
(1, '', 'Erick Prado', NULL, NULL, 'erick@gmail.com', '$2y$10$D7fS.StEkp5k8EXdBLu7uubUn0J/Nmzeh3vYyhfhZY/k7eyBfFKBm'),
(2, '', 'Luiz', NULL, NULL, 'luiz@gmail.com', '$2y$10$qTknMgKivcbcu5ifsZ0C3uBGnB3n8igKmry1rWCHUlWymUc.pCFvC'),
(3, '', 'Leticia', NULL, NULL, 'le@gmail.com', '$2y$10$3Dd3l7zYKSuCJBZad.XwJ.2T6xGF3tq//lV0RqwdfoLAhYz7b3odC'),
(4, '', 'neymar', NULL, NULL, 'ney@gmail.com', '$2y$10$GbUR5PHM6GDU.LkNT.EjBuxJ16SPnRprjqDzJIbdoWn8d36LQqg/y'),
(6, 'ronaldinho', 'Ronaldinho', NULL, NULL, NULL, '$2y$10$N78eQgUkVWMzX4bbEQX/QeB8wKegq1T2Gw92tsDQxcyWd/6O2qROy'),
(7, 'teste', 'Teste', NULL, NULL, NULL, '$2y$10$PN3OxNdMvnQgNNRdjNI3q.W/PFvlPMlbDW9OU.guzFUGu/ajy1SUi');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `profissionais`
--
ALTER TABLE `profissionais`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sessoes`
--
ALTER TABLE `sessoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `terapeuta_id` (`terapeuta_id`),
  ADD KEY `terapia_id` (`terapia_id`);

--
-- Índices de tabela `terapias`
--
ALTER TABLE `terapias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `profissionais`
--
ALTER TABLE `profissionais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `sessoes`
--
ALTER TABLE `sessoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `terapias`
--
ALTER TABLE `terapias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `sessoes`
--
ALTER TABLE `sessoes`
  ADD CONSTRAINT `sessoes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `sessoes_ibfk_2` FOREIGN KEY (`terapeuta_id`) REFERENCES `profissionais` (`id`),
  ADD CONSTRAINT `sessoes_ibfk_3` FOREIGN KEY (`terapia_id`) REFERENCES `terapias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

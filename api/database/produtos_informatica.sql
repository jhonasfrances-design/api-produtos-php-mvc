-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 18/05/2026 às 23:13
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
-- Banco de dados: `produtos_informatica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE DATABASE produtos_informatica;

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(5, 'Acessórios'),
(3, 'Armazenamento'),
(6, 'Componentes'),
(1, 'Computadores'),
(2, 'Periféricos'),
(4, 'Redes'),
(8, 'teste thays');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` text DEFAULT NULL,
  `preco` double NOT NULL,
  `estoque` int(11) NOT NULL DEFAULT 0,
  `categoria_id` int(11) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `estoque`, `categoria_id`, `data_cadastro`) VALUES
(1, 'Notebook Lenovo IdeaPad 3', 'Notebook com Ryzen 5, 8GB RAM e SSD 256GB', 2899.9, 20, 1, '2025-11-14 14:26:25'),
(2, 'Desktop Gamer Ryzen 7', 'PC Gamer com RTX 3060, 16GB RAM, SSD 1TB', 7999, 8, 1, '2025-11-14 14:26:25'),
(3, 'Mouse Logitech M720', 'Mouse wireless multi-dispositivo', 199.99, 40, 2, '2025-11-14 14:26:25'),
(4, 'Teclado Mecânico Redragon Kumara', 'Teclado mecânico com switches Outemu', 249.9, 25, 2, '2025-11-14 14:26:25'),
(5, 'HD Seagate 1TB', 'HD interno SATA 7200 RPM', 299.99, 30, 3, '2025-11-14 14:26:25'),
(6, 'SSD Kingston NV2 500GB', 'SSD NVMe PCIe 4.0', 349, 50, 3, '2025-11-14 14:26:25'),
(7, 'Roteador TP-Link Archer C6', 'Roteador Gigabit Dual-Band AC1200', 229.99, 20, 4, '2025-11-14 14:26:25'),
(8, 'Switch 8 Portas TP-Link', 'Switch Fast Ethernet 8 portas', 119.99, 15, 4, '2025-11-14 14:26:25'),
(9, 'Headset HyperX Cloud Stinger', 'Headset gamer leve e confortável', 289.9, 22, 5, '2025-11-14 14:26:25'),
(10, 'Webcam Logitech C270', 'Webcam HD 720p', 169.99, 18, 5, '2025-11-14 14:26:25'),
(11, 'Memória RAM 8GB DDR4', 'Memória Corsair 2666MHz', 159.9, 35, 6, '2025-11-14 14:26:25'),
(12, 'Placa de Vídeo GTX 1650', 'Placa de vídeo Nvidia 4GB GDDR5', 1099, 12, 6, '2025-11-14 14:26:25');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

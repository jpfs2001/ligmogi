-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jul-2019 às 23:14
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ligmogi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercios`
--

CREATE TABLE `comercios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `site` varchar(45) DEFAULT NULL,
  `resumo` mediumtext,
  `facebook` varchar(45) DEFAULT NULL,
  `atividade` varchar(120) DEFAULT NULL,
  `capa` tinyint(4) NOT NULL,
  `icone` mediumtext,
  `banner` mediumtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comercios`
--

INSERT INTO `comercios` (`id`, `nome`, `email`, `site`, `resumo`, `facebook`, `atividade`, `capa`, `icone`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'AltaBeer', 'altabeer@comercio.com', 'www.redbeard.com.br', 'A L T A M I R', 'facebook.com/altamir.junior', 'Farbicação de cerveja', 1, NULL, NULL, '2019-07-09 03:00:50', '2019-07-09 03:00:50'),
(2, 'AltaBeer', 'altabeer@comercio.com', 'www.redbeard.com.br', 'A L T A M I R', 'facebook.com/altamir.junior', 'Farbicação de cerveja', 1, NULL, NULL, '2019-07-09 03:03:52', '2019-07-09 03:03:52'),
(19, 'asdfdsa', 'sad', 'sad', 'sda', 'sad', 'sda', 0, NULL, NULL, '2019-07-09 04:17:29', '2019-07-09 04:17:29'),
(20, 'asdfdsa', 'sad', 'sad', 'sda', 'sad', 'sda', 0, NULL, NULL, '2019-07-09 04:17:39', '2019-07-09 04:17:39'),
(21, 'fsa', NULL, NULL, NULL, NULL, NULL, 0, NULL, '49949644_243721116526321_5484991124701446144_n.jpg', '2019-07-10 04:07:41', '2019-07-10 04:07:41'),
(22, 'asd', NULL, NULL, NULL, NULL, NULL, 1, NULL, '21369573_1462137293902218_3167238876832024828_n.png', '2019-07-10 04:10:53', '2019-07-10 04:10:53'),
(23, 'abacate', NULL, NULL, NULL, NULL, NULL, 0, '21369573_1462137293902218_3167238876832024828_n.png', '49949644_243721116526321_5484991124701446144_n.jpg', '2019-07-10 04:12:54', '2019-07-10 04:12:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id` int(11) NOT NULL,
  `comercios_id` int(11) NOT NULL,
  `rua` varchar(90) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `latitude` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `enderecoscol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `comercios_id` int(11) NOT NULL,
  `seg` varchar(45) NOT NULL,
  `ter` varchar(45) NOT NULL,
  `quar` varchar(45) NOT NULL,
  `quin` varchar(45) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `sab` varchar(45) NOT NULL,
  `dom` varchar(45) NOT NULL,
  `feriado` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefones`
--

CREATE TABLE `telefones` (
  `id` int(11) NOT NULL,
  `comercios_id` int(11) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `whats` tinyint(5) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `telefones`
--

INSERT INTO `telefones` (`id`, `comercios_id`, `telefone`, `created_at`, `updated_at`, `whats`) VALUES
(17, 19, 'sad', '2019-07-09 04:17:30', '2019-07-09 04:17:30', 0),
(18, 20, 'sad', '2019-07-09 04:17:40', '2019-07-09 04:17:40', 0),
(19, 21, NULL, '2019-07-10 04:07:41', '2019-07-10 04:07:41', 0),
(20, 22, NULL, '2019-07-10 04:10:53', '2019-07-10 04:10:53', 0),
(21, 23, NULL, '2019-07-10 04:12:54', '2019-07-10 04:12:54', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '$2y$10$zSi7FS6e8JNgBkvPW16M8.Fg2yg/mrwSYt1TMX51.Ch5lmocX2q4S', '2019-07-06 03:07:35', '2019-07-06 03:07:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comercios`
--
ALTER TABLE `comercios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_table1_comercios_idx` (`comercios_id`);

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_horarios_comercios1_idx` (`comercios_id`);

--
-- Indexes for table `telefones`
--
ALTER TABLE `telefones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_relefones_comercios1_idx` (`comercios_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comercios`
--
ALTER TABLE `comercios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telefones`
--
ALTER TABLE `telefones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fk_table1_comercios` FOREIGN KEY (`comercios_id`) REFERENCES `comercios` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `fk_horarios_comercios1` FOREIGN KEY (`comercios_id`) REFERENCES `comercios` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `telefones`
--
ALTER TABLE `telefones`
  ADD CONSTRAINT `fk_relefones_comercios1` FOREIGN KEY (`comercios_id`) REFERENCES `comercios` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

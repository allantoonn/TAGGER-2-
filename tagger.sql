-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2018 às 09:27
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tagger`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `discord` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `assunto`, `mensagem`, `facebook`, `discord`, `youtube`, `nome`, `sobrenome`, `telefone`) VALUES
(25, '', '', '', '', '', '', '', '', ''),
(26, '', '', '', '', '', '', '', '', ''),
(27, 'demetrius2597@hotmail.com', '1', '1', '1', '1', '1', '1', '1', '1'),
(28, 'demetrius2597@hotmail.com', 'asd', 'asd', 'asd', 'asd', 'asd', 'asdasd', 'asd', 'asd'),
(29, 'demetrius2597@hotmail.com', 'asd', 'asd', 'asd', 'asd', 'asd', 'asdasd', 'asd', 'asd'),
(30, 'demetrius2597@hotmail.com', '1', '1', '11', '1', '1', 'asd', 'asd', '3456345735'),
(31, 'demetrius2597@hotmail.com', '1', '1', '11', '1', '1', 'asd', 'asd', '3456345735'),
(32, 'demetrius2597@hotmail.com', '1', '1', '1', '1', '1', '1', '1', '1'),
(33, 'demetrius2597@hotmail.com', '1', '1', '1', '1', '1', '1', '1', '1'),
(34, 'demetrius2597@hotmail.com', '1', '1', '1', '1', '1', '1', '1', '1'),
(35, 'demetrius2597@hotmail.com', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(36, 'demetrius2597@hotmail.com', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

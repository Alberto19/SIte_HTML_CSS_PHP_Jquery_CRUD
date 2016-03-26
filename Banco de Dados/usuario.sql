-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Mar-2016 às 19:21
-- Versão do servidor: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tecweb_trabalho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Idade` int(3) NOT NULL,
  `Sexo` varchar(11) NOT NULL,
  `Estado civil` varchar(30) NOT NULL,
  `CPF` int(11) NOT NULL,
  `Data de nascimento` date NOT NULL,
  `Nome da Imagem` varchar(30) NOT NULL,
  `Login` varchar(35) NOT NULL,
  `Senha` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `Nome`, `Idade`, `Sexo`, `Estado civil`, `CPF`, `Data de nascimento`, `Nome da Imagem`, `Login`, `Senha`) VALUES
(1, 'junior', 19, 'masculino', 'solteiro', 2147483647, '0000-00-00', '', 'junior', '190896'),
(2, 'junior', 19, 'Masculino', 'Solteiro', 2147483647, '0000-00-00', '', 'ana', '190896'),
(3, 'junior', 19, 'Masculino', 'Solteiro', 3, '2014-08-30', '', 'ana', '190896'),
(4, 'junior', 19, 'Masculino', 'Solteiro', 2147483647, '2020-08-21', '', 'juniorsafado', '190896');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

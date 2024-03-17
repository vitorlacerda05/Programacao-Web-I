-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Jun-2019 às 18:07
-- Versão do servidor: 5.5.58
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpbd`
--
CREATE DATABASE IF NOT EXISTS `phpbd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phpbd`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario`
--

DROP TABLE IF EXISTS `formulario`;
CREATE TABLE IF NOT EXISTS `formulario` (
  `idformulario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cpf` char(12) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `numero` char(5) NOT NULL,
  `cep` char(10) NOT NULL,
  `estado` char(2) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `formacao` varchar(45) NOT NULL,
  `op1` varchar(45) NOT NULL,
  `op2` varchar(45) NOT NULL,
  `op3` varchar(45) NOT NULL,
  `op4` varchar(45) NOT NULL,
  `op5` varchar(45) NOT NULL,
  `op6` varchar(45) NOT NULL,
  PRIMARY KEY (`idformulario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `formulario`
--

INSERT INTO `formulario` (`idformulario`, `nome`, `email`, `cpf`, `endereco`, `numero`, `cep`, `estado`, `cidade`, `sexo`, `formacao`, `op1`, `op2`, `op3`, `op4`, `op5`, `op6`) VALUES
(1, 'wda', 'wad@gmail.com', 'wad', 'wda', 'wad', 'dwa', 'SP', 'Caconde', 'Feminino', 'PÃ³s GraduaÃ§Ã£o', '', '', '', 'Android', '', 'Concordo com os termos da InstituiÃ§Ã£o'),
(2, 'wda', 'wad@gmail.com', 'wad', 'wda', 'wad', 'dwa', 'SP', 'Caconde', 'Feminino', 'PÃ³s GraduaÃ§Ã£o', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

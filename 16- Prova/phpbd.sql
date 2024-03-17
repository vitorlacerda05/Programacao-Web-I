-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 23-Ago-2019 às 13:33
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
  `idcursos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `cursos` varchar(40) NOT NULL,
  `plano1` varchar(40) NOT NULL,
  `plano2` varchar(40) NOT NULL,
  `plano3` varchar(40) NOT NULL,
  `plano4` varchar(40) NOT NULL,
  PRIMARY KEY (`idcursos`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `formulario`
--

INSERT INTO `formulario` (`idcursos`, `nome`, `email`, `nascimento`, `sexo`, `cursos`, `plano1`, `plano2`, `plano3`, `plano4`) VALUES
(2, 'Gabriel', 'gabriel@gmail.com', '2019-08-22', 'Masculino', 'AdministraÃ§Ã£o', '', 'Bolsa', '', ''),
(3, 'Lara', 'lara@gmail.com', '2019-08-06', 'Feminino', 'Direito', '', 'Bolsa', 'Prouni', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

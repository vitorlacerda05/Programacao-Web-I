-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 02-Ago-2019 às 13:46
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
-- Database: `bdphp`
--
CREATE DATABASE IF NOT EXISTS `bdphp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdphp`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `graduacao`
--

DROP TABLE IF EXISTS `graduacao`;
CREATE TABLE IF NOT EXISTS `graduacao` (
  `idform` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `nascimento` date NOT NULL,
  `endereco` varchar(40) NOT NULL,
  `numero` int(5) NOT NULL,
  `cep` varchar(12) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `formacao` varchar(30) NOT NULL,
  `curso1` varchar(10) NOT NULL,
  `curso2` varchar(10) NOT NULL,
  `curso3` varchar(10) NOT NULL,
  `curso4` varchar(10) NOT NULL,
  `curso5` varchar(20) NOT NULL,
  `termos` varchar(40) NOT NULL,
  PRIMARY KEY (`idform`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `graduacao`
--

INSERT INTO `graduacao` (`idform`, `nome`, `email`, `cpf`, `nascimento`, `endereco`, `numero`, `cep`, `estado`, `cidade`, `sexo`, `formacao`, `curso1`, `curso2`, `curso3`, `curso4`, `curso5`, `termos`) VALUES
(1, 'gabriel', 'coala@gmail.com', '232.213.312-12', '2019-07-05', 'rua 13', 13, '13770000', 'MG', 'PoÃ§os de Caudas', 'masculino', 'GraduaÃ§Ã£o', '0', '0', '0', 'Android', 'OrientaÃ§Ã£o Objeto', 'Concordo com os Termos'),
(2, 'coala', 'gabriel@gmail.com', '111.111.111-11', '2002-12-17', 'Rua 9 agosto', 666, '13720-000', 'SP', 'SÃ£o JosÃ© do Rio Pardo', 'masculino', 'ensino medio', 'Java', '0', '0', '0', '0', 'Concordo com os Termos'),
(3, 'Vitor', 'vitin@gmail.com', '222.222.222-22', '2002-12-17', 'Rua Homze', 17, '13720-000', 'MG', 'Santo AndrÃ©', 'femino', 'ensino medio', '0', '0', 'Cc', 'Android', '0', 'Concordo com os Termos'),
(4, 'Rubinhoooo', 'rubinhooo@ooo.ooo', '333.333.333-33', '3333-03-03', 'Trinta e trez', 33, '33333-333', 'MG', 'PoÃ§os de Caudas', 'masculino', 'PÃ³s GraduaÃ§Ã£o', '0', '0', '0', '0', 'OrientaÃ§Ã£o Objeto', 'Concordo com os Termos');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 13-Dez-2019 às 01:13
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivo`
--

CREATE TABLE IF NOT EXISTS `arquivo` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `arquivo` varchar(40) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Extraindo dados da tabela `arquivo`
--

INSERT INTO `arquivo` (`codigo`, `arquivo`, `data`) VALUES
(34, '1a0ef45b917f6e2acff7a0b70c90d17b.jpg', '2019-12-12 21:24:30'),
(35, 'bf94eca9f6d7648e7ee66cf91db8b5e4.jpg', '2019-12-12 21:24:35'),
(36, '43c022d14946908ddf4a0f08ad7c17a9.jpg', '2019-12-12 21:24:41'),
(37, '89a11c639d99aa624ea9302fd489a63a.jpg', '2019-12-12 21:24:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

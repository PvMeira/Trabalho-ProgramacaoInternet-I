-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 18/06/2016 às 14h16min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `library`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `writer` varchar(100) NOT NULL,
  `pages` varchar(100) NOT NULL,
  `stash` int(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `book`
--

INSERT INTO `book` (`id`, `name`, `writer`, `pages`, `stash`) VALUES
(3, 'livro_1', 'teste Autor', '199', 0),
(4, 'livro_2', 'teste Autor', '199', 13),
(5, 'livro_3', 'teste Autor', '199', 15),
(6, 'livro_4', 'teste Autor', '199', 14),
(7, 'livro_5', 'teste Autor', '199', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `rentCount` int(11) NOT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `is` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `client`
--

INSERT INTO `client` (`name`, `phone`, `mail`, `cpf`, `address`, `rentCount`, `id`) VALUES
('JoÃ£o Paulo de Zouza', '(51)321456789', 'Zouza@teste.com', '86874787878', 'Rua Palmeiras do pinhal', 3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `employee`
--

INSERT INTO `employee` (`name`, `phone`, `mail`, `cpf`, `address`, `id`) VALUES
('teste', '5454545455', 'pv.ciria@gmail.com', '86874787878', '', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rent`
--

CREATE TABLE IF NOT EXISTS `rent` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `rentDate` varchar(50) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_book` int(11) DEFAULT NULL,
  `id_employee` int(11) DEFAULT NULL,
  `avaliable` varchar(50) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Extraindo dados da tabela `rent`
--

INSERT INTO `rent` (`id`, `rentDate`, `id_client`, `id_book`, `id_employee`, `avaliable`) VALUES
(20, '11/11/2222', 3, 5, 2, 'Devolvido'),
(21, '11/11/2222', 3, 6, 2, 'Devolvido'),
(22, '11/11/2222', 3, 6, 2, 'Devolvido'),
(23, '11/11/2222', 3, 6, 2, 'Devolvido');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

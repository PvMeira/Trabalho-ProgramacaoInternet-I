-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 01/06/2016 às 06h18min
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
  `stash` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `book`
--

INSERT INTO `book` (`id`, `name`, `writer`, `pages`, `stash`) VALUES
(1, 'teste', 'teste Autor', '199', '5'),
(2, 'teste3', 'teste Autor3', '1993', '3'),
(3, 'DONE', 'teste Autor', '199', '3'),
(4, 'DONE', 'teste Autor', '199', '3'),
(5, 'DONE', 'teste Autor', '199', '3'),
(6, 'DONE', 'teste Autor', '199', '3'),
(7, 'DONE', 'teste Autor', '199', '3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `neighborhood` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `house` varchar(100) NOT NULL,
  `extra` varchar(100) NOT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `is` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `client`
--

INSERT INTO `client` (`name`, `phone`, `mail`, `cpf`, `neighborhood`, `street`, `house`, `extra`, `id`) VALUES
('teste', '5454545455', 'pv.ciria@gmail.com', '86874787878', 'teste bairro', 'teste rua', 'teste ap', 'teste complemento', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `neighborhood` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `house` varchar(100) NOT NULL,
  `extra` varchar(100) NOT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `employee`
--

INSERT INTO `employee` (`name`, `phone`, `mail`, `cpf`, `neighborhood`, `street`, `house`, `extra`, `id`) VALUES
('teste', '5454545455', 'pv.ciria@gmail.com', '86874787878', 'teste bairro', 'teste rua', 'teste ap', 'teste complemento', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

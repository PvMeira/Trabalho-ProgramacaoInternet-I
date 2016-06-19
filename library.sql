-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 19/06/2016 às 07h34min
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `book`
--

INSERT INTO `book` (`id`, `name`, `writer`, `pages`, `stash`) VALUES
(6, 'Harry Potter:As Reliquias da Morte pt2', 'teste Autor', '199', 13),
(8, 'Harry Potter: As reliquias Da Morte  pt1', 'J.K.Rolling', '345', 20),
(9, 'Dump Guide To Java', 'Just Another man', '342', 0),
(10, 'Dump Guide To PHP', 'Just Another man', '342', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `client`
--

INSERT INTO `client` (`name`, `phone`, `mail`, `cpf`, `address`, `rentCount`, `id`) VALUES
('Joao Paulo de Zouza ', '(51)321456789', 'Zouza@teste.com', '86874787878', 'Rua Palmeiras do pinhal', 1, 3),
('Pedro Vitor ', '(51)321317896', 'pc.stefa@not.com', '38388383838838', 'Rua Palmeiras do pinhal', 0, 4),
('Cliente 01', '(41)1443.4444', 'cliente01@test.com', '78945612301', 'Rua imaginaria 01', 0, 6),
('Cliente 02', '(41)1443.4444', 'cliente02@test.com', '78945612302', 'Rua imaginaria 02', 0, 7),
('Cliente 03', '(41)1443.4444', 'cliente03@test.com', '78945612303', 'Rua imaginaria 03', 0, 8),
('Cliente 04', '(41)1443.4444', 'cliente04@test.com', '78945612304', 'Rua imaginaria 04', 0, 9),
('Cliente 05', '(41)1443.4444', 'cliente05@test.com', '78945612305', 'Rua imaginaria 05', 0, 10),
('Cliente 06', '(41)1443.4444', 'cliente06@test.com', '78945612306', 'Rua imaginaria 06', 0, 11);

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
  `id_position` int(11) NOT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `employee`
--

INSERT INTO `employee` (`name`, `phone`, `mail`, `cpf`, `address`, `id_position`, `id`) VALUES
('Maria Regina', '(51)321456789', 'pc.stefa@not.com', '38388383838838', 'Rua Palmeiras do pinhal', 2, 3),
('Sonia Silva', '(51)321317896', 's.silva@teste.com', '86874787878', 'Rua Palmeiras do pinhal', 1, 4),
('Luiza Cunha ', '(51)321456789', 'lzc@yahoo.com', '86874787878', 'Rua Palmeiras do pinhal', 3, 5),
('FÃ¡bio Souza', '(51)321456789', 'fsouza198@gmail.com', '86874787878', 'Rua Palmeiras do pinhal', 2, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(1, 'Atendente'),
(2, 'Bibliotecario(a)'),
(3, 'Gerente');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Extraindo dados da tabela `rent`
--

INSERT INTO `rent` (`id`, `rentDate`, `id_client`, `id_book`, `id_employee`, `avaliable`) VALUES
(20, '11/11/2222', 3, 5, 2, 'Devolvido'),
(21, '11/11/2222', 3, 6, 2, 'Devolvido'),
(22, '11/11/2222', 3, 6, 2, 'Devolvido'),
(23, '11/11/2222', 3, 6, 2, 'Devolvido'),
(24, '11/11/2222', 3, 4, 2, 'Devolvido'),
(25, '11/11/2017', 3, 6, 2, 'Devolvido'),
(26, '11/11/2015', 4, 4, 2, 'Devolvido'),
(27, '11/11/2016', 4, 6, 2, 'Devolvido'),
(28, '11/11/2222', 4, 4, 2, 'Devolvido'),
(29, '11/11/2222', 4, 4, 2, 'Devolvido'),
(30, '19/06/2016', 5, 8, 2, 'Devolvido'),
(31, '11/11/2016', 3, 8, 2, 'Devolvido'),
(32, '11/11/2222', 3, 6, 2, 'Devolvido'),
(33, '11/11/2015', 3, 6, 2, 'Devolvido'),
(34, '11/11/2016', 3, 6, 2, 'Devolvido'),
(35, '11/11/2017', 3, 6, 2, 'Devolvido'),
(36, '11/11/2017', 3, 6, 2, 'Devolvido'),
(37, '11/11/2222', 3, 6, 2, 'Alugado');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

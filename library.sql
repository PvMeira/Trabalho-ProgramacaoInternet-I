-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 22/06/2016 às 02h21min
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `book`
--

INSERT INTO `book` (`id`, `name`, `writer`, `pages`, `stash`) VALUES
(8, 'Harry Potter: As reliquias Da Morte  ', 'J.K.Rolling', '345', 20),
(12, 'Spring FrameWork', 'Henrique Lobos Jr', '266', 1),
(13, 'ReflexÃµes e AnotaÃ§Ãµes JAVA', 'Eduardo Guerra', '155', 4),
(14, 'Jsf and Jpa JAVA', 'Gilliard Correro', '345', 5),
(15, 'Spring Boot ', 'Jeff Malec', '345', 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `client`
--

INSERT INTO `client` (`name`, `phone`, `mail`, `cpf`, `address`, `rentCount`, `id`) VALUES
('Joao Paulo de Zouza ', '(51)321456789', 'Zouza@teste.com', '86874787078', 'Rua Palmeiras do pinhal', -1, 3),
('Cliente ', '(41)1443.4444', 'cliente03@test.com', '78945612303', 'Rua imaginaria 03', 0, 8),
('Cliente 04', '(41)1443.4444', 'cliente04@test.com', '78945612304', 'Rua imaginaria 04', 1, 9),
('Cliente 05', '(41)1443.4444', 'cliente05@test.com', '78945612305', 'Rua imaginaria 05', 0, 10),
('Cliente 06', '(41)1443.4444', 'cliente06@test.com', '78945612306', 'Rua imaginaria 06', 0, 11),
('Juliana Cunha', '(51)81654329', 'jcunha123@uol.com', '987.635.878.01', 'Rua fernando Queiroz apt 801 bloco A', 0, 12),
('Fulano', '55.9898.7654', 'pc.stefa@not.com', '869.874.456.66', 'Rua Palmeiras do pinhal', 0, 13);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `employee`
--

INSERT INTO `employee` (`name`, `phone`, `mail`, `cpf`, `address`, `id_position`, `id`) VALUES
('Maria Regina', '(51)321456789', 'pc.stefa@not.com', '38388383838838', 'Rua Palmeiras do pinhal', 2, 3),
('Luiza Cunha ', '(51)321456789', 'lzc@yahoo.com', '86874787878', 'Rua Palmeiras do pinhal', 3, 5),
('FÃ¡bio Souza', '(51)321456789', 'fsouza198@gmail.com', '86874787878', 'Rua Palmeiras do pinhal', 2, 6),
('Geraldo Frutuoso Da Silva', '(51) 87654321', 'gfrut@gmail.com', '78945612300', 'Rua da fruta ', 2, 7),
('Jaqueline Fernandez', '(51) 87654321', 'jque@gmail.com', '987.564.234.11', 'Rua fernando Pirez apt 101 bloco B', 2, 8),
('JoÃ£o Paulo Pinto', '44.9876.0098', 'Zouza@teste.com', '333.876.765.09', 'Rua Palmeiras do pinhal', 3, 9);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Extraindo dados da tabela `rent`
--

INSERT INTO `rent` (`id`, `rentDate`, `id_client`, `id_book`, `id_employee`, `avaliable`) VALUES
(31, '11/11/2016', 3, 8, 2, 'Devolvido'),
(32, '11/11/2222', 3, 6, 2, 'Devolvido'),
(33, '11/11/2015', 3, 6, 2, 'Devolvido'),
(34, '11/11/2016', 3, 6, 2, 'Devolvido'),
(35, '11/11/2017', 3, 6, 2, 'Devolvido'),
(36, '11/11/2017', 3, 6, 2, 'Devolvido'),
(37, '11/11/2222', 3, 6, 2, 'Devolvido'),
(38, '20/11/2015', 8, 6, 3, 'Devolvido'),
(39, '21/11/2015', 8, 11, 3, 'Devolvido'),
(40, '06/02/2016', 3, 6, 3, 'Devolvido'),
(41, '06/22/2016', 11, 8, 7, 'Devolvido'),
(42, '06/21/2016', 12, 12, 8, 'Devolvido'),
(43, '06/22/2016', 12, 12, 8, 'Devolvido'),
(44, '06/22/2016', 12, 6, 8, 'Devolvido'),
(45, '06/30/2016', 12, 6, 8, 'Devolvido'),
(46, '06/24/2016', 9, 12, 8, 'Alugado'),
(47, '06/22/2016', 13, 15, 8, 'Devolvido');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

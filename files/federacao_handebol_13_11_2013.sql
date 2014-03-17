-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 13/11/2013 às 20h55min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `federacao_handebol`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arbitro`
--

CREATE TABLE IF NOT EXISTS `arbitro` (
  `id_arbitro` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cpf` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id_arbitro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `arbitro`
--

INSERT INTO `arbitro` (`id_arbitro`, `nome`, `telefone`, `cpf`) VALUES
(1, 'JoÃ£o de Barro', '(11)1111-1111', '111.111.111-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE IF NOT EXISTS `dados` (
  `id_dados` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jogador_id_jogador` int(10) unsigned NOT NULL,
  `tempo_id_tempo` int(10) unsigned NOT NULL,
  `advertencia` int(10) unsigned DEFAULT NULL,
  `punicao` int(10) unsigned DEFAULT NULL,
  `desqualificacao` int(10) unsigned DEFAULT NULL,
  `relatorio` int(10) unsigned DEFAULT NULL,
  `gol` int(11) NOT NULL,
  PRIMARY KEY (`id_dados`),
  KEY `dados_FKIndex1` (`tempo_id_tempo`),
  KEY `dados_FKIndex2` (`jogador_id_jogador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id_dados`, `jogador_id_jogador`, `tempo_id_tempo`, `advertencia`, `punicao`, `desqualificacao`, `relatorio`, `gol`) VALUES
(1, 1, 1, 2, 1, 1, 1, 4),
(2, 3, 1, 1, 3, 1, 6, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE IF NOT EXISTS `jogador` (
  `id_jogador` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time_id_time` int(10) unsigned NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `cpf` varchar(16) DEFAULT NULL,
  `numero` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_jogador`),
  KEY `jogador_FKIndex1` (`time_id_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `jogador`
--

INSERT INTO `jogador` (`id_jogador`, `time_id_time`, `nome`, `data_nascimento`, `cpf`, `numero`) VALUES
(1, 1, 'Lucas Carvalho', '2013-10-04', '111.111.111-11', 41),
(3, 1, 'Lucas Andrade', '2013-10-01', '111.111.111-11', 5),
(4, 2, 'Eduardo', '2013-11-13', '1133133', 22),
(5, 3, 'maria de fatima', '2013-11-13', '111.111.111-11', 60),
(6, 3, 'robertao', '1111-11-11', '111.111.111-11', 55),
(7, 3, 'arthur', '0000-00-00', '111.111.111-11', 11),
(8, 3, 'chris', '2013-12-30', '111.111.111-11', 40),
(9, 3, 'fabiane', '2013-12-30', '111.111.111-11', 38);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE IF NOT EXISTS `jogo` (
  `id_jogo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `espectadores` int(10) unsigned DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `localizacao` varchar(200) DEFAULT NULL,
  `data_jogo` datetime DEFAULT NULL,
  `duracao` double DEFAULT NULL,
  `total_7metros` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_jogo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id_jogo`, `espectadores`, `cidade`, `localizacao`, `data_jogo`, `duracao`, `total_7metros`) VALUES
(1, 100, 'Brasilia', 'Estádio Nacional', '2013-10-03 00:00:00', 2, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo_time`
--

CREATE TABLE IF NOT EXISTS `jogo_time` (
  `jogo_id_jogo` int(10) unsigned NOT NULL,
  `time_id_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`jogo_id_jogo`,`time_id_time`),
  KEY `jogo_has_time_FKIndex1` (`jogo_id_jogo`),
  KEY `jogo_has_time_FKIndex2` (`time_id_time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jogo_time`
--

INSERT INTO `jogo_time` (`jogo_id_jogo`, `time_id_time`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnico`
--

CREATE TABLE IF NOT EXISTS `tecnico` (
  `id_tecnico` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cpf` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id_tecnico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tecnico`
--

INSERT INTO `tecnico` (`id_tecnico`, `nome`, `telefone`, `cpf`) VALUES
(1, 'Lucas', '(61)1111-1111', '111.111.111-11'),
(2, 'Kaisa', '11131', '123123123'),
(3, 'maria eduarda', '(11)1111-1111', '123.312.312-31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tempo`
--

CREATE TABLE IF NOT EXISTS `tempo` (
  `id_tempo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jogo_id_jogo` int(10) unsigned NOT NULL,
  `tiro_7metros` int(10) unsigned DEFAULT NULL,
  `tempo_tecnico` int(10) unsigned DEFAULT NULL,
  `placar_time1` int(10) unsigned DEFAULT NULL,
  `placar_time2` int(10) unsigned DEFAULT NULL,
  `tipo` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_tempo`),
  KEY `tempo_FKIndex1` (`jogo_id_jogo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tempo`
--

INSERT INTO `tempo` (`id_tempo`, `jogo_id_jogo`, `tiro_7metros`, `tempo_tecnico`, `placar_time1`, `placar_time2`, `tipo`) VALUES
(1, 1, 8, 2, 10, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `id_time` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tecnico_id_tecnico` int(10) unsigned NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `data_fundacao` date DEFAULT NULL,
  `presidente` varchar(100) DEFAULT NULL,
  `telefone` varchar(16) DEFAULT NULL,
  `pontos` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_time`),
  KEY `time_FKIndex1` (`tecnico_id_tecnico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `time`
--

INSERT INTO `time` (`id_time`, `tecnico_id_tecnico`, `nome`, `categoria`, `endereco`, `data_fundacao`, `presidente`, `telefone`, `pontos`) VALUES
(1, 1, 'CRFlamengo', 'Masculino', 'Rio de Janeiro', '2013-12-12', 'Jesus Cristo', '(11)1111-1111', 31),
(2, 2, 'Brasiliense', 'seila', 'df', '2013-11-07', 'vargas', '0123213123', 5),
(3, 3, 'FantaLaranjaFC', 'mirim', 'sobralcity', '2014-08-13', 'Kubicthecka', '(11)1111-1111', 9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

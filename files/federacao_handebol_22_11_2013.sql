-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 22/11/2013 às 04h00min
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
  `gol` int(10) unsigned DEFAULT NULL,
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
-- Estrutura da tabela `dados_campeonato`
--

CREATE TABLE IF NOT EXISTS `dados_campeonato` (
  `id_dados_campeonato` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time_id_time` int(10) unsigned NOT NULL,
  `pontos` int(10) unsigned DEFAULT NULL,
  `jogos` int(10) unsigned DEFAULT NULL,
  `vitorias` int(10) unsigned DEFAULT NULL,
  `empates` int(10) unsigned DEFAULT NULL,
  `derrotas` int(10) unsigned DEFAULT NULL,
  `gols` int(10) unsigned DEFAULT NULL,
  `gols_levados` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_dados_campeonato`),
  KEY `dados_campeonato_FKIndex1` (`time_id_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `dados_campeonato`
--

INSERT INTO `dados_campeonato` (`id_dados_campeonato`, `time_id_time`, `pontos`, `jogos`, `vitorias`, `empates`, `derrotas`, `gols`, `gols_levados`) VALUES
(1, 1, 4, 13, 10, 1, 2, 10, 1),
(2, 2, 2, 13, 5, 5, 3, 4, 1);

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
  `data_jogo` date DEFAULT NULL,
  `hora_jogo` time DEFAULT NULL,
  `duracao` double DEFAULT NULL,
  `total_7metros` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_jogo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id_jogo`, `espectadores`, `cidade`, `localizacao`, `data_jogo`, `hora_jogo`, `duracao`, `total_7metros`) VALUES
(1, 100, 'Brasilia', 'Estádio Nacional', '2013-10-03', '00:00:00', 2, 8),
(2, 0, '1', '1', '2013-12-31', '23:59:00', 23, 0),
(3, 0, '1', '1', '2013-12-31', '23:59:00', 23, 0),
(4, 0, '1', '1', '2013-12-31', '23:59:00', 23, 0),
(5, 0, '1', '1', '2013-12-31', '23:59:00', 23, 0),
(6, 0, '1', '1', '2013-12-31', '23:59:00', 23, 0),
(7, 0, '1', '1', '2013-12-31', '23:59:00', 23, 0),
(8, 0, '1', '1', '2013-12-01', '23:59:00', 23, 0),
(9, 0, '1', '1', '2013-12-31', '23:59:00', 23, 0),
(10, 0, '1', '1', '2013-12-31', '23:59:00', 23, 0),
(11, 0, '11', '1', '2013-01-01', '00:00:00', 0, 0),
(12, 0, '1', '1', '2013-12-31', '23:59:00', 23, 0),
(13, 0, '1', '1', '2013-12-31', '23:59:00', 23, 0),
(14, 0, '1', '1', '2013-12-31', '23:59:00', 23, 0),
(15, 0, '1', '123', '2013-12-31', '23:59:00', 23, 0),
(16, 0, '1', '1', '2013-12-31', '23:58:00', 22, 0),
(17, 1, '1', '1', '2013-12-31', '23:58:00', 23, 0),
(18, 1, '1', '1', '2013-12-31', '23:59:00', 23, 0),
(19, 5555, '5555', '5555', '5555-05-05', '05:05:00', 5, 0),
(20, 1, '33', '33', '3333-03-03', '03:03:00', 3, 0),
(21, 3, '3', '3', '3333-03-03', '03:03:00', 3, 0),
(22, 1, '1', '1', '2013-12-01', '23:59:00', 1, 0),
(23, 1, '1', '1', '2013-12-31', '23:58:00', 1, 0),
(24, 1, '1', '1', '2013-12-31', '23:59:00', 1, 0),
(25, 1, '1', '11', '2013-12-31', '23:59:00', 1, 0),
(26, 1, '1', '1', '2013-12-31', '23:59:00', 1, 0),
(27, 1, '1', '1', '2013-12-31', '23:59:00', 1, 0),
(28, 1, '1', '123', '2013-12-31', '23:59:00', 1, 0),
(29, 1, '1', '1', '2013-12-31', '23:59:00', 1, 0),
(30, 1, '1', '1', '2013-12-31', '23:59:00', 1, 0),
(31, 1, '1', '1', '2013-12-31', '23:59:00', 1, 0),
(32, 1, '1', '1', '2013-12-31', '23:59:00', 1, 0),
(33, 1, '1', '1', '2013-12-31', '23:59:00', 1, 0),
(34, 1, '1', '1', '2013-12-31', '23:59:00', 1, 0),
(35, 1, '1', '1', '2013-11-30', '23:59:00', 1, 0),
(36, 1, '1', '1', '2013-12-31', '23:59:00', 1, 0),
(37, 1, 'asd', 'asd', '2013-12-31', '23:59:00', 1, 0),
(38, 1, '1', '1', '2013-12-31', '23:59:00', 1, 0);

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
(0, 1),
(0, 2),
(0, 3),
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(1, 1, 1, 2, 11, 10, 1);

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
  PRIMARY KEY (`id_time`),
  KEY `time_FKIndex1` (`tecnico_id_tecnico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `time`
--

INSERT INTO `time` (`id_time`, `tecnico_id_tecnico`, `nome`, `categoria`, `endereco`, `data_fundacao`, `presidente`, `telefone`) VALUES
(1, 1, 'CRFlamengo', 'Masculino', 'Rio de Janeiro', '2013-12-12', 'Jesus Cristo', '(11)1111-1111'),
(2, 2, 'Brasiliense', 'seila', 'df', '2013-11-07', 'vargas', '0123213123'),
(3, 3, 'FantaLaranjaFC', 'mirim', 'sobralcity', '2014-08-13', 'Kubicthecka', '(11)1111-1111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

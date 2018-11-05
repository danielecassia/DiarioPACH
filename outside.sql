-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 05/11/2018 às 17:43
-- Versão do servidor: 5.7.24
-- Versão do PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `outside`
--
CREATE DATABASE IF NOT EXISTS `outside` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `outside`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_outros`
--

DROP TABLE IF EXISTS `tb_outros`;
CREATE TABLE `tb_outros` (
  `cd_outros` int(11) NOT NULL,
  `cd_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_post`
--

DROP TABLE IF EXISTS `tb_post`;
CREATE TABLE `tb_post` (
  `cd_post` int(11) NOT NULL,
  `cd_user` int(11) NOT NULL,
  `humor` int(11) DEFAULT NULL,
  `sintomas` varchar(100) DEFAULT NULL,
  `texto` varchar(3000) DEFAULT NULL,
  `peso` decimal(10,2) DEFAULT NULL,
  `agua` decimal(10,2) DEFAULT NULL,
  `sono` decimal(10,2) DEFAULT NULL,
  `atv_fisica` int(11) DEFAULT NULL,
  `remedio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tb_post`
--

INSERT INTO `tb_post` (`cd_post`, `cd_user`, `humor`, `sintomas`, `texto`, `peso`, `agua`, `sono`, `atv_fisica`, `remedio`) VALUES
(1, 3, 1, 'nada', 'teste teste teste teste teste teste\r\nteste teste teste teste teste teste\r\nteste teste teste teste teste teste\r\nteste teste teste teste teste teste\r\nteste teste teste teste teste teste\r\nteste teste teste teste teste teste\r\nteste teste teste teste teste teste\r\nteste teste teste teste teste teste', '56.50', '2.00', '8.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `cd_user` int(11) NOT NULL,
  `nm_user` varchar(45) NOT NULL,
  `dt_nasc` datetime NOT NULL,
  `email` varchar(45) NOT NULL,
  `sexo` char(1) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tb_user`
--

INSERT INTO `tb_user` (`cd_user`, `nm_user`, `dt_nasc`, `email`, `sexo`, `senha`) VALUES
(3, 'João Souza', '2018-11-13 00:00:00', 'joaosouza@gmail.com', 'm', '123456');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tb_outros`
--
ALTER TABLE `tb_outros`
  ADD PRIMARY KEY (`cd_outros`,`cd_post`),
  ADD KEY `fk_cd_post` (`cd_post`);

--
-- Índices de tabela `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`cd_post`),
  ADD KEY `fk_cd_user` (`cd_user`);

--
-- Índices de tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`cd_user`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tb_outros`
--
ALTER TABLE `tb_outros`
  MODIFY `cd_outros` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `cd_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `cd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `tb_outros`
--
ALTER TABLE `tb_outros`
  ADD CONSTRAINT `fk_cd_post` FOREIGN KEY (`cd_post`) REFERENCES `tb_post` (`cd_post`);

--
-- Restrições para tabelas `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `fk_cd_user` FOREIGN KEY (`cd_user`) REFERENCES `tb_user` (`cd_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

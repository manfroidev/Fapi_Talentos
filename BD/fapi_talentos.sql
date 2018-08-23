-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Ago-2018 às 15:54
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fapi_talentos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(2) NOT NULL,
  `usuario_nome` varchar(255) DEFAULT NULL,
  `usuario_sobrenome` varchar(255) DEFAULT NULL,
  `usuario_email` varchar(255) DEFAULT NULL,
  `usuario_tipo_cadastro` varchar(255) DEFAULT NULL,
  `usuario_cursando` varchar(50) DEFAULT NULL,
  `usuario_senha` varchar(255) DEFAULT NULL,
  `usuario_perfil` int(2) DEFAULT NULL,
  `usuario_termos_uso` varchar(50) DEFAULT NULL,
  `usuario_status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_nome`, `usuario_sobrenome`, `usuario_email`, `usuario_tipo_cadastro`, `usuario_cursando`, `usuario_senha`, `usuario_perfil`, `usuario_termos_uso`, `usuario_status`) VALUES
(1, 'admin', 'admin', 'admin@fapi-pinhais.edu.br', 'admin', NULL, '21232f297a57a5a743894a0e4a801fc3', 0, 'Aceito os Termos', 1),
(2, 'Aluno', 'Fapi', 'aluno@fapi-pinhais.edu.br', 'Aluno/Ex-Alunos', 'Cursando', 'ca0cd09a12abade3bf0777574d9f987f', 1, 'Aceito o Termo', 1),
(3, 'Recursos Humanos', 'Fapi', 'rh@fapi-pinhais.edu.br', 'admin', NULL, '87e4210c7d7e6dbf9a659a8329577bce', 2, 'Aceito o Termo', 1),
(4, 'Empresa', 'Parceira', 'empresa@empresa.com.br', 'Empresa', NULL, '04299e213f5391ede16784de41dd847d', 3, 'Aceito o Termo', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

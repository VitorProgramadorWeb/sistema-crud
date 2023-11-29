-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/11/2023 às 15:51
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbcrud`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblcliente`
--

CREATE TABLE `tblcliente` (
  `id` int(4) UNSIGNED NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nascimento` date NOT NULL,
  `renda` double(6,2) UNSIGNED DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `cnpj` varchar(14) DEFAULT NULL,
  `rua` varchar(200) DEFAULT NULL,
  `numero` int(4) UNSIGNED DEFAULT NULL,
  `complemento` varchar(200) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `telefone_residencial` varchar(12) DEFAULT NULL,
  `telefone_celular` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblcliente`
--

INSERT INTO `tblcliente` (`id`, `nome`, `email`, `nascimento`, `renda`, `cpf`, `cnpj`, `rua`, `numero`, `complemento`, `uf`, `cidade`, `cep`, `telefone_residencial`, `telefone_celular`) VALUES
(1, 'Maria Joaquina', 'maria@gmail.com', '1998-11-03', 3999.95, '75481245619', '12345678941', 'Benjamin Constante', 123, 'perto do carrefour', 'GO', 'Anápolis', '75846123', '659587452', '658457932'),
(2, '', '', '0000-00-00', 0.00, '', '', '', 0, '', 'GO', 'anapolis', '', '', ''),
(3, '', '', '0000-00-00', 0.00, '', '', '', 0, '', 'GO', 'anapolis', '', '', ''),
(4, 'Vítor Menezes Oliveira', 'vitor@gmail.com', '2003-01-22', 9999.00, '1235649798', '32165498', 'Rua não sei onde', 112, 'Complementado', 'GO', 'anapolis', '78943653', '555555555', '999999999'),
(5, '', '', '0000-00-00', 9999.99, '', '', '', 0, '', 'GO', 'anapolis', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblcliente`
--
ALTER TABLE `tblcliente`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

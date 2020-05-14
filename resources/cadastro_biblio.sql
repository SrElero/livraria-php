-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Maio-2020 às 20:51
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_biblio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `created`, `modified`) VALUES
(1, 'Joaquim da Silva', '111.222.555.86', '(41) 99887-7543', 'joaquim.silva@gmail.com', '2020-05-14 00:10:51', NULL),
(2, 'Yuri Bernard Souza', '222.333.666-89', '(45) 9673-4541', 'yurib@gmail.com', '2020-05-14 00:12:11', NULL),
(3, 'Pedro Silveira', '528.666.789-85', '(42) 99637-7455', 'pedrosil@yahoo.com.br', '2020-05-14 00:19:08', NULL),
(4, 'Tasso Elero Cervi', '111.222.333-44', '(41) 99999-9999', 'cervitasso@gmail.com', '2020-05-14 00:19:55', NULL),
(5, 'Marcos Pedro', '111.555.666-88', '(41) 98822-4357', 'pedrom@gmail.com', '2020-05-14 00:23:18', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `devolucoes`
--

CREATE TABLE `devolucoes` (
  `id` int(10) NOT NULL,
  `cod_livro` int(5) NOT NULL,
  `cpf_cliente` varchar(15) NOT NULL,
  `data_devolucao` date NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `devolucoes`
--

INSERT INTO `devolucoes` (`id`, `cod_livro`, `cpf_cliente`, `data_devolucao`, `created`) VALUES
(3, 25666, '111.000.222-33', '2020-05-15', '2020-05-14 18:17:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `id` int(8) NOT NULL,
  `cpf_cliente` varchar(15) NOT NULL,
  `cod_livro` int(5) NOT NULL,
  `data` date NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`id`, `cpf_cliente`, `cod_livro`, `data`, `created`) VALUES
(2, '111.000.222-33', 25666, '2020-05-11', '2020-05-14 18:09:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(10) NOT NULL,
  `cod_livro` int(5) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `autor` varchar(150) NOT NULL,
  `ano` int(4) DEFAULT NULL,
  `edicao` int(3) DEFAULT NULL,
  `editora` varchar(150) NOT NULL,
  `disponivel` varchar(3) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `cod_livro`, `isbn`, `nome`, `autor`, `ano`, `edicao`, `editora`, `disponivel`, `created`, `modified`) VALUES
(3, 25666, '000-00-0000-000-0', 'O Código da Vinci', 'Dan Brown', 2007, 2, 'Panda Books', 'SIM', '2020-05-14 18:11:20', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `devolucoes`
--
ALTER TABLE `devolucoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `isbn` (`isbn`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `devolucoes`
--
ALTER TABLE `devolucoes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

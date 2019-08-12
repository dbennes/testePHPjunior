-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Ago-2019 às 14:07
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpjuniorteste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(120) DEFAULT NULL,
  `CPF` int(32) DEFAULT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  `EMAIL` varchar(80) DEFAULT NULL,
  `TELEFONE` int(30) DEFAULT NULL,
  `ENDERECO` varchar(150) DEFAULT NULL,
  `CIDADE` varchar(80) DEFAULT NULL,
  `ESTADO` varchar(80) DEFAULT NULL,
  `IMAGEM_USUARIO` varchar(124) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOME`, `CPF`, `DATA_NASCIMENTO`, `EMAIL`, `TELEFONE`, `ENDERECO`, `CIDADE`, `ESTADO`, `IMAGEM_USUARIO`) VALUES
(11, 'Daniel Bennis', 170000000, '1998-03-17', 'dbennes97@gmail.com', 2147483647, 'Av. Carlos Larcerda', 'Itaboraí', 'Rio de Janeiro', 'assets/img/masculino.png'),
(12, 'Sarah Borges', 170000000, '1998-08-16', 'dbennes97@gmail.com', 2147483647, 'Av. Carlos Larcerda', 'Itaboraí', 'Rio de Janeiro', 'assets/img/feminino.png'),
(16, 'Bruna Silva', 170000000, '1996-08-25', 'dbennes97@gmail.com', 2147483647, 'Rua Santana Antas', 'Antas', 'Bahia', 'assets/img/feminino.png'),
(17, 'Fernando Marcus', 170000000, '1985-02-05', 'dbennes97@gmail.com', 2147483647, 'Rua Barcos', 'Aroeiras', 'Paraíba', 'assets/img/masculino.png'),
(18, 'Mariana Bonfim', 170000000, '1999-02-15', 'dbennes97@gmail.com', 2147483647, 'Rua Marcio', 'Cachoeiro de Itapemirim', 'Espírito Santo', 'assets/img/feminino.png'),
(19, 'Leandro Oliveira', 170000000, '1999-12-25', 'teste@email.com', 2147483647, 'Vila Esperança', 'Itaboraí', 'Rio de Janeiro', 'assets/img/masculino.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

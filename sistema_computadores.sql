-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jan-2020 às 02:26
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_computadores`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `computadores`
--

CREATE TABLE `computadores` (
  `codigo` int(10) NOT NULL,
  `marca_computador` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `modelo_computador` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `placa_mae` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mem_ram` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `hd_computador` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `marca_hd` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `velocidade` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `computadores`
--

INSERT INTO `computadores` (`codigo`, `marca_computador`, `modelo_computador`, `placa_mae`, `mem_ram`, `hd_computador`, `marca_hd`, `velocidade`, `foto`) VALUES
(1, 'Samsung', 'samsung essentials', 'intel graphics 620', '4gb', '1tb', 'samsung', '500MB/s', 'asdasd.png'),
(2, 'Lenovo', 'Lenovo Ideapad S145', 'intel graphics 620', '8gb', '2tb', 'AMD', '300MB/s', 'asdasd.png'),
(3, 'Dell', 'Dell Inspiron i15-3583-M3XP', 'nvidia', '2gb', '1tb', 'nvidia', '400MB/s', 'asdasd.png'),
(4, 'TOSHIBA', 'XYZ', 'NVIDIA', '16GB', '500GB', 'Intel', '3.5GHz', '2020.01.10-04.28.07.png'),
(5, 'Samsung', 'Samsung Essentials', 'Asus', '8gb', '1tb', 'NVIDIA', '3.5GHz', '2020.01.10-04.36.18.jpg'),
(6, 'acer', 'acer aspire', 'nvidia', '4gb', '2tb', 'asus', '2.3ghz', '2020.01.10-21.13.42.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `computadores`
--
ALTER TABLE `computadores`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `computadores`
--
ALTER TABLE `computadores`
  MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

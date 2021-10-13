-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Jul-2021 às 21:09
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario-dpego`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `Filename` varchar(100) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(110) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `data_nasc` date NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `rg` varchar(30) NOT NULL,
  `renda` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `telefone`, `sexo`, `data_nasc`, `cidade`, `estado`, `endereco`, `senha`, `cpf`, `rg`, `renda`) VALUES
(0, 'nome', 'email', 'telefone', 'sexo', '0000-00-00', 'cidade', 'estado', 'endereco', 'senha', 'cpf', 'rg', 0),
(20210, 'João Pedro Oliveira', 'JoaoPedroOliveira@gmail.com', '(062) 35513759', 'masculino', '2021-07-06', 'Goiânia', 'Goiás', 'Rua Abner Silva Sarrazin', '123', '041.903.040-93', '131.233.42', 1100),
(20211, 'Rafaela da Costa', 'RafaeladaCosta@gmail.com', '(062) 986602300', 'feminino', '2021-07-06', 'Goiânia', 'Goiás', 'Rua Adriano Carvalho Leitão', '123', '130.763.686-13', '32.323.23', 1100),
(20212, 'João Guilherme da Paz', 'JoaoGuilhermedaPaz@hotmail.com', '(062) 35512020', 'feminino', '2021-07-27', 'Goiânia', 'Goiás', 'Rua Agatha Rezende de', '123', '378.371.978-01', '232.23.21.1', 1100),
(20213, 'Caio Araújo', 'CaioAraujo@hotmail.com', '(062) 35511133', 'masculino', '2021-07-28', 'Goiânia', 'Goiás', 'Rua Aline Medeiros Barboza', '123', '414.340.858-99', '56.6.3.234.32', 2200),
(20214, 'Cauã Barros', 'CauaBarros@yahoo.com.br', '(062) 35513302', 'masculino', '2021-07-29', 'Goiânia', 'Goiás', 'Rua Amanda Alves Bezerra', '123', '446.989.018-98', '67.835.89.33', 2201),
(20215, 'João Felipe Alves', 'JoaoFelipeAlves@terra.com.br', '(062) 35511643', 'masculino', '2021-07-30', 'Goiânia', 'Goiás', 'Rua Amanda de Oliveira', '123', '447.293.458-27', '928.22.222', 2202),
(20216, 'Rafael Ferreira', 'RafaelFerreira@yahoo.com.br', '(062) 35513302', 'masculino', '2021-07-31', 'Goiânia', 'Goiás', 'Rua Ana Carolina Firmino', '123', '457.841.698-40', '22.56.29.5', 3800),
(20217, 'Ian da Mota', 'IandaMota@hotmail.com', '(062) 35511643', 'masculino', '0000-00-00', 'Goiânia', 'Goiás', 'Rua Ana Clara Nunes', '123', '472.085.158-40', '924.442.43', 3600),
(20218, 'Dr. Caio Rezende', 'DrCaioRezende@hotmail.com', '(062) 996900743', 'masculino', '0000-00-00', 'Goiânia', 'Goiás', 'Rua Ana Claudia Nunes', '123', '484.869.248-20', '928.283.92', 3500),
(20219, 'Alícia Martins', 'AlíciaMartins@pandora.be', '(062) 996175398', 'feminino', '0000-00-00', 'Goiânia', 'Goiás', 'Rua Ana Luiza Teixeira', '123', '505.400.878-07', '273938737', 3678),
(20220, 'Nathan Santos', 'NathanSantos@yahoo.com.br', '(062) 35513714', 'feminino', '0000-00-00', 'Goiânia', 'Goiás', 'Rua André Bueno de', '123', '508.985.478-57', '273.2112.22', 5500),
(20221, 'Dr. Vinicius da Rocha', 'DrViniciusdaRocha@hotmail.com', '(062) 999967460', 'masculino', '0000-00-00', 'Goiânia', 'Goiás', 'Rua Anna Beatriz Nogueira', '123', '513.080.058-30', '2348.736.38', 5501),
(20222, 'Juliana Freitas', 'JulianaFreitas@hotmail.com', '(062) 35513203', 'feminino', '0000-00-00', 'Goiânia', 'Goiás', 'Rua Anna Clara Pinto', '123', '605.869.413-20', '39862222', 5502),
(20223, 'Srta. Agatha Mendes', 'SrtaAgathaMendes@yahoo.com.br', '(062) 984025728', 'feminino', '0000-00-00', 'Goiânia', 'Goiás', 'Rua Beatriz Cairo Duarte', '123', '054.345.985-30', '234827', 5503),
(20224, 'Jair Messias Bolsonaro', 'Bolsonaro@yahoo.com.br', '(062) 999551370', 'masculino', '0000-00-00', 'Goiânia', 'Goiás', 'Rua Beatriz Garcia Matsumoto', '123', '444.322.768-80', '284827098', 1200),
(20225, 'Luiz Inacio Lula Da Silva', 'SofiaTeixeira@bol.com.br', '(062) 35510075', 'masculino', '0000-00-00', 'Goiânia', 'Goiás', 'Rua Beatriz Santos Domingues', '123', '035.586.968-09', '274.28.920', 4000),
(20226, 'Maria bonita', 'AnaCarolinaCorreia@bol.com.br', '(062) 35510048', 'feminino', '0000-00-00', 'Goiânia', 'Goiás', 'Rua Bianca Pereira da', '123', '054.123.222-10', '2344.245.5', 1000);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

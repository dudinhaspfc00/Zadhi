-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Set-2025 às 19:52
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdzadhi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadm`
--

CREATE TABLE `tbadm` (
  `codadm` int(11) NOT NULL,
  `email` varchar(90) DEFAULT NULL,
  `senha` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbclientes`
--

CREATE TABLE `tbclientes` (
  `codcliente` int(11) NOT NULL,
  `nome` varchar(90) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `senha` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbclientes`
--

INSERT INTO `tbclientes` (`codcliente`, `nome`, `email`, `senha`) VALUES
(1, 'i', 'i', '042dc4512fa3d391c5170cf3aa61e6a638f84342');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprodutos`
--

CREATE TABLE `tbprodutos` (
  `codproduto` int(11) NOT NULL,
  `produto` varchar(90) NOT NULL,
  `preco` varchar(90) NOT NULL,
  `modelo` varchar(90) NOT NULL,
  `genero` varchar(90) NOT NULL,
  `foto` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbprodutos`
--

INSERT INTO `tbprodutos` (`codproduto`, `produto`, `preco`, `modelo`, `genero`, `foto`) VALUES
(1, 'Vestido Azul', 'R$349,99', 'Vestido Longo Azul', 'Fem', '10da97aef8d57c23105932e6b688ca4a.png'),
(2, 'Vestido Rosa', 'R$399,99', 'Vestido Longo Com Glitter Rosa', 'Fem', '20f00987b4b4a8d5ea92b24fee2ecbcb.png'),
(3, 'Vestido Vermelho', 'R$299,99', 'Vestido Curto Vermelho', 'Fem', '5c00fce82da0196c51ae4f2c4bec9723.png'),
(4, 'Camiseta Cinza', 'R$299,99', 'Camiseta Cinza', 'Masc', '8e77aa5dd9bd8f3f315c0ce7a675f5f4.png'),
(5, 'Blazer Preta', 'R$499,99', 'Blazer Preta', 'Masc', '0cf8904141c1fbdda64da93ef384549f.png'),
(6, 'Calça Preta', 'R$319,99', 'Calça Preta', 'Masc', '7d15692e79b7d0835a2e3093c728f10a.png'),
(7, 'Vestido Roxo Longo ', 'R$349,99', 'Vestido Curto Roxo', 'Fem ', 'b9369075794b8c417cd3e2193e7621c5.jpg'),
(8, 'Vestido Longo Marrom', 'R$ 349,99', 'Vestido Longo Marrom', 'Fem', '5f1609f2f537ff4a9e7ee2de573dc012.jpg'),
(9, 'Vestido Longo Vermelho', 'R$ 349,99', 'Vestido Longo Vermelho', 'Fem', '45202efa800e1b55fc41f8641bd07941.jpg'),
(10, 'Vestido Longo Roxo Glitter ', 'R$ 399,99', 'Vestido Longo Roxo Glitter ', 'Fem', 'cdecbc2dded2a36416d533a37a9033c8.jpg'),
(11, 'Vestido Longo Azul Glitter ', 'R$399,99 ', 'Vestido Longo Azul Glitter ', 'Fem', '2384484b0d0a594fff0a187131818666.jpg'),
(12, 'Vestido Longo Verde Glitter ', 'R$ 399,99', 'Vestido Longo Verde Glitter ', 'Fem', '70bd8b5bd09da83b2a42a62537cea3f3.jpg'),
(13, 'Vestido Curto Rosa', 'R$299,99', 'Vestido Curto Rosa', 'Fem', 'ee3f99e7296acc79963c83bc9728d02a.jpg'),
(14, 'Vestido Curto Azul', 'R$299,99', 'Vestido Curto Azul', 'Fem', 'ace7224e0e23d9f3b62cf81e0ec13155.jpg'),
(15, 'Vestido Curto Preto', 'R$299,99', 'Vestido Curto Preto', 'Fem', '9b858cedcd6e26c55ab03a2871acf1cf.jpg'),
(16, 'Camiseta Preta', 'R$299,99', 'Camiseta Preta', 'Masc', 'e973a47ab6476ad1f8993b31479a1ceb.jpg'),
(17, 'Camiseta Branca', 'R$ 299,99', 'Camiseta Branca', 'Masc', 'f6befd81495d38f0ab9028dd66681a55.jpg'),
(18, 'Camiseta Azul', 'R$ 299,99', 'Camiseta Azul', 'Masc', '0b0ba0e6c8e506224d2c81b112c8b85e.jpg'),
(19, 'Blazer Azul', 'R$499,99', 'Blazer Azul', 'Masc', '97ed07eb6ca887b42bb42028e137546e.jpg'),
(20, 'Blazer Cinza', 'R$499,99', 'Blazer Cinza', 'Masc', '09af0c428f15ef09deda8ef94cbb2e2d.jpg'),
(21, 'Blazer Marrom', 'R$ 499,99', 'Blazer  Marrom', 'Masc', '829b84af0bfdba033d262bffb1ee228f.jpg'),
(22, 'Calça Azul', 'R$ 319,99', 'Calça Azul', 'Masc', '5c0d209b61d844141b48a2c576703af4.jpg'),
(23, 'Calça Verde', 'R$ 319,99', 'Calça Verde', 'Masc', 'fcc5fe77027b8315a86037e92fc43516.jpg'),
(24, 'Calça Marrom', 'R$ 319,99', 'Calça Marrom', 'Masc', 'a109ea25a1b6b254ad024686c0f4c027.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbadm`
--
ALTER TABLE `tbadm`
  ADD PRIMARY KEY (`codadm`);

--
-- Índices para tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`codcliente`);

--
-- Índices para tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  ADD PRIMARY KEY (`codproduto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadm`
--
ALTER TABLE `tbadm`
  MODIFY `codadm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `codcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  MODIFY `codproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

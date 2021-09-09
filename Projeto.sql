-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Set-2021 às 02:15
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adocoes`
--

CREATE TABLE `adocoes` (
  `IdAdocao` int(10) UNSIGNED NOT NULL,
  `Data_Adocao` datetime NOT NULL,
  `IdUsuario` int(10) UNSIGNED NOT NULL,
  `IdAnimal` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `adocoes`
--

INSERT INTO `adocoes` (`IdAdocao`, `Data_Adocao`, `IdUsuario`, `IdAnimal`) VALUES
(20, '2020-12-18 22:13:10', 1, 46);

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal`
--

CREATE TABLE `animal` (
  `IdAnimal` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Porte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Raca` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Imagem` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Disponivel` char(1) COLLATE utf8_unicode_ci NOT NULL COMMENT '0 = ADOTADO; 1 = DISPONIVEL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `animal`
--

INSERT INTO `animal` (`IdAnimal`, `Nome`, `Tipo`, `Porte`, `Raca`, `Imagem`, `Descricao`, `Disponivel`) VALUES
(24, 'Jose', 'Tucano', 'Gigantesco', 'Pimpao', 'Papagaioverdadeiro.jpg', NULL, '1'),
(27, 'Thor', 'Cachorro', 'Grande', 'Doberman', 'hqdefault.jpg', NULL, '1'),
(34, 'Frigga', 'Cachorro', 'MÃ©dio', 'RND', '310209-305936-1649412-filhotes-de-dobermann.jpg', 'Cachorro dÃ³cil, muito brincalhÃ£o e companheiro.\r\nVermifugado, com todas as doses das vacinas.', '1'),
(46, 'FRED', 'pÃ¡ssaro', 'mÃ©dio', 'tucano', 'tucano.jpg.jpg', 'bem colorido', '0'),
(47, 'FRED', 'tucano', 'mÃ©dio', 'tucano', 'tucano.jpg.jpg', 'muito colorido', '1'),
(48, 'Rex', 'Cachorro', 'Medio', 'Vira lata', 'cachorro_teste.jpg', 'Foi abandonado e precisa de um lar.', '1'),
(49, 'Thor', 'Cachorro', 'Pequeno', 'Vira lata', 'cachorro_teste2.png', 'Foi abandonado e precisa de um lar.', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacoes`
--

CREATE TABLE `doacoes` (
  `IdDoacao` int(10) UNSIGNED NOT NULL,
  `Data_Doacao` datetime NOT NULL,
  `Valor` int(11) NOT NULL,
  `IdUsuario` int(10) UNSIGNED NOT NULL,
  `IdOng` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ong`
--

CREATE TABLE `ong` (
  `IdOng` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CNPJ` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `Endereco` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Telefone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `ong`
--

INSERT INTO `ong` (`IdOng`, `Nome`, `CNPJ`, `Endereco`, `Email`, `Telefone`) VALUES
(1, 'Ong Teste 1', '12321321345465', 'wqeqweqweqwe', 'tatiane@automotobras.com.br', '21312213321'),
(2, 'Ong Teste 2', '123.123.123-12', '123123qwe', 'teste@teste.com', '(45)56445-6'),
(3, 'Ong Teste 3', '123.213.213454-65', '123123qwe', 'teste@teste.com', '(45)56445-6'),
(4, 'Ong Teste 4', '123.456.895-74', 'Rua Ramiro Barcelos, 67', 'amoga@gmail.com', '(51)99872-6'),
(5, 'Ong Teste 5', '123.456.895-74', 'Rua Ramiro Barcelos, 67', 'amoga@gmail.com', '(51)99872-6'),
(6, 'Ong Teste 6', '12.421.412/9412-41', 'tal', 'testr@gmail.com', '(41)2421-41'),
(7, 'Ong Teste 7', '12.345.678/9123-45', 'Rua Ramiro Barcelos, 67', 'amoga@gmail.com', '(51)99872-6'),
(8, 'Ong Teste 8', '12.132.132/3122-13', '12213', 'asd123@123.com', '(12)31322-3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CPF` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `Telefone` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Endereco` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin` char(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Nome`, `CPF`, `Telefone`, `Email`, `Endereco`, `Senha`, `admin`) VALUES
(1, 'teste', '465654465', '445654', 'teste@teste.com', 'asdasdasdasd', '123', '1'),
(12, 'Raul Acunha', '04504504505', '51981818904', 'raulacunha@hotmail.com', 'manoel de souza moraes', '230600', NULL),
(16, 'Giovane', 'tal', '5197134245', 'ghiggi1234@gmail.com', 'harmonia', '123', NULL),
(17, 'Douglas', '036.665.820', '(51)99872-6', 'douglas@gmail.com', 'Rua Judith Provin da Motta, 640', 'dodi123', NULL),
(22, 'bruno', '123.213.213', '(13)22112-3', 'bruno.conrad12@gmail.com', '22133211331', '123', NULL),
(40, 'GIOVANE', '242.141.241-24', '(51)9713-4245', 'giovane@gmail.com', 'Rua Jaco Fink', '1234', NULL),
(51, 'joao', '132.113.213-21', '(13)12112-3321', 'joao@novo.com', 'asdas', '$2y$10$EOQz/2kBGPWT15qHQ8.kcuq64jOte3LjuhNW1BSRhNy9u8wiYZhrm', NULL),
(52, 'joao', '132.113.213-21', '(13)12112-3321', 'pedro@novo.com', 'asdas', '$2y$10$5rA7lbrVRs7CQxJG8b67buF2a9RtZ3lW/7linLOPcz.tt/piPtayO', NULL),
(53, 'teste', '123.123.123-31', '(11)23211-3231', 'joao@teste.com', 'asd', '$2y$10$Tp5Za9QJHvFn1K2iQXhwAuwEO4CLTJUai9EU8CUODWFhtwBGxmcc2', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adocoes`
--
ALTER TABLE `adocoes`
  ADD PRIMARY KEY (`IdAdocao`),
  ADD KEY `fk_Ado_Usuario` (`IdUsuario`),
  ADD KEY `fk_Ado_Animal` (`IdAnimal`);

--
-- Índices para tabela `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`IdAnimal`),
  ADD KEY `IdAnimal` (`IdAnimal`);
ALTER TABLE `animal` ADD FULLTEXT KEY `Disponivel` (`Disponivel`);

--
-- Índices para tabela `doacoes`
--
ALTER TABLE `doacoes`
  ADD PRIMARY KEY (`IdDoacao`),
  ADD KEY `fk_Doa_Usuario` (`IdUsuario`),
  ADD KEY `IdOng` (`IdOng`);

--
-- Índices para tabela `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`IdOng`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adocoes`
--
ALTER TABLE `adocoes`
  MODIFY `IdAdocao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `animal`
--
ALTER TABLE `animal`
  MODIFY `IdAnimal` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `doacoes`
--
ALTER TABLE `doacoes`
  MODIFY `IdDoacao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de tabela `ong`
--
ALTER TABLE `ong`
  MODIFY `IdOng` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `adocoes`
--
ALTER TABLE `adocoes`
  ADD CONSTRAINT `fk_Ado_Animal` FOREIGN KEY (`IdAnimal`) REFERENCES `animal` (`IdAnimal`),
  ADD CONSTRAINT `fk_Ado_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`);

--
-- Limitadores para a tabela `doacoes`
--
ALTER TABLE `doacoes`
  ADD CONSTRAINT `fk_Doa_Ong` FOREIGN KEY (`IdOng`) REFERENCES `ong` (`IdOng`),
  ADD CONSTRAINT `fk_Doa_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

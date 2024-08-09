-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/08/2024 às 22:38
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_notas_alunos_v2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `ID_ALUN` int(11) NOT NULL,
  `NOME` varchar(30) DEFAULT NULL,
  `ID_SAL` int(11) DEFAULT NULL,
  `ID_NOTAS` int(11) DEFAULT NULL,
  `ATIVO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`ID_ALUN`, `NOME`, `ID_SAL`, `ID_NOTAS`, `ATIVO`) VALUES
(1, 'pedro', 1, 1, 'sim'),
(2, 'mariana', 2, 2, 'sim');

-- --------------------------------------------------------

--
-- Estrutura para tabela `artes`
--

CREATE TABLE `artes` (
  `ID_ARTE` int(11) NOT NULL,
  `N1_ARTE` decimal(10,0) DEFAULT NULL,
  `N2_ARTE` decimal(10,0) DEFAULT NULL,
  `N3_ARTE` decimal(10,0) DEFAULT NULL,
  `N4_ARTE` decimal(10,0) DEFAULT NULL,
  `MEDI_ARTE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `artes`
--

INSERT INTO `artes` (`ID_ARTE`, `N1_ARTE`, `N2_ARTE`, `N3_ARTE`, `N4_ARTE`, `MEDI_ARTE`) VALUES
(1, 7, 7, 7, 7, 7),
(2, 7, 7, 7, 7, 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `bio`
--

CREATE TABLE `bio` (
  `ID_BIO` int(11) NOT NULL,
  `N1_BIO` decimal(10,0) DEFAULT NULL,
  `N2_BIO` decimal(10,0) DEFAULT NULL,
  `N3_BIO` decimal(10,0) DEFAULT NULL,
  `N4_BIO` decimal(10,0) DEFAULT NULL,
  `MEDI_BIO` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `bio`
--

INSERT INTO `bio` (`ID_BIO`, `N1_BIO`, `N2_BIO`, `N3_BIO`, `N4_BIO`, `MEDI_BIO`) VALUES
(1, 7, 7, 7, 7, 7),
(2, 7, 7, 7, 7, 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `filosofia`
--

CREATE TABLE `filosofia` (
  `ID_FILO` int(11) NOT NULL,
  `N1_FILO` decimal(10,0) DEFAULT NULL,
  `N2_FILO` decimal(10,0) DEFAULT NULL,
  `N3_FILO` decimal(10,0) DEFAULT NULL,
  `N4_FILO` decimal(10,0) DEFAULT NULL,
  `MEDI_FILO` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `filosofia`
--

INSERT INTO `filosofia` (`ID_FILO`, `N1_FILO`, `N2_FILO`, `N3_FILO`, `N4_FILO`, `MEDI_FILO`) VALUES
(1, 7, 7, 7, 7, 7),
(2, 7, 7, 7, 7, 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `fisi`
--

CREATE TABLE `fisi` (
  `ID_FISI` int(11) NOT NULL,
  `N1_FISI` decimal(10,0) DEFAULT NULL,
  `N2_FISI` decimal(10,0) DEFAULT NULL,
  `N3_FISI` decimal(10,0) DEFAULT NULL,
  `N4_FISI` decimal(10,0) DEFAULT NULL,
  `MEDI_FISI` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `fisi`
--

INSERT INTO `fisi` (`ID_FISI`, `N1_FISI`, `N2_FISI`, `N3_FISI`, `N4_FISI`, `MEDI_FISI`) VALUES
(1, 0, 0, 0, 0, 0),
(2, 7, 7, 7, 7, 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `geo`
--

CREATE TABLE `geo` (
  `ID_GEO` int(11) NOT NULL,
  `N1_GEO` decimal(10,0) DEFAULT NULL,
  `N2_GEO` decimal(10,0) DEFAULT NULL,
  `N3_GEO` decimal(10,0) DEFAULT NULL,
  `N4_GEO` decimal(10,0) DEFAULT NULL,
  `MEDI_GEO` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `geo`
--

INSERT INTO `geo` (`ID_GEO`, `N1_GEO`, `N2_GEO`, `N3_GEO`, `N4_GEO`, `MEDI_GEO`) VALUES
(1, 7, 7, 7, 7, 7),
(2, 7, 7, 7, 7, 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `gram`
--

CREATE TABLE `gram` (
  `ID_GRAM` int(11) NOT NULL,
  `N1_GRAM` decimal(10,0) DEFAULT NULL,
  `N2_GRAM` decimal(10,0) DEFAULT NULL,
  `N3_GRAM` decimal(10,0) DEFAULT NULL,
  `N4_GRAM` decimal(10,0) DEFAULT NULL,
  `MEDI_GRAM` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `gram`
--

INSERT INTO `gram` (`ID_GRAM`, `N1_GRAM`, `N2_GRAM`, `N3_GRAM`, `N4_GRAM`, `MEDI_GRAM`) VALUES
(1, 7, 7, 7, 7, 7),
(2, 7, 7, 7, 7, 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `hist`
--

CREATE TABLE `hist` (
  `ID_HIST` int(11) NOT NULL,
  `N1_HIST` decimal(10,0) DEFAULT NULL,
  `N2_HIST` decimal(10,0) DEFAULT NULL,
  `N3_HIST` decimal(10,0) DEFAULT NULL,
  `N4_HIST` decimal(10,0) DEFAULT NULL,
  `MEDI_HIST` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `hist`
--

INSERT INTO `hist` (`ID_HIST`, `N1_HIST`, `N2_HIST`, `N3_HIST`, `N4_HIST`, `MEDI_HIST`) VALUES
(1, 7, 7, 7, 7, 7),
(2, 7, 7, 7, 7, 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `mat`
--

CREATE TABLE `mat` (
  `ID_MAT` int(11) NOT NULL,
  `N1_MAT` decimal(10,0) DEFAULT NULL,
  `N2_MAT` decimal(10,0) DEFAULT NULL,
  `N3_MAT` decimal(10,0) DEFAULT NULL,
  `N4_MAT` decimal(10,0) DEFAULT NULL,
  `MEDI_MAT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `mat`
--

INSERT INTO `mat` (`ID_MAT`, `N1_MAT`, `N2_MAT`, `N3_MAT`, `N4_MAT`, `MEDI_MAT`) VALUES
(1, 7, 7, 7, 7, 7),
(2, 7, 7, 7, 7, 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `notas`
--

CREATE TABLE `notas` (
  `ID_NOTAS` int(11) NOT NULL,
  `ID_MAT` int(11) DEFAULT NULL,
  `ID_QUIM` int(11) DEFAULT NULL,
  `ID_ARTE` int(11) DEFAULT NULL,
  `ID_BIO` int(11) DEFAULT NULL,
  `ID_FILO` int(11) DEFAULT NULL,
  `ID_FISI` int(11) DEFAULT NULL,
  `ID_GEO` int(11) DEFAULT NULL,
  `ID_GRAM` int(11) DEFAULT NULL,
  `ID_HIST` int(11) DEFAULT NULL,
  `ID_SOCIO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `notas`
--

INSERT INTO `notas` (`ID_NOTAS`, `ID_MAT`, `ID_QUIM`, `ID_ARTE`, `ID_BIO`, `ID_FILO`, `ID_FISI`, `ID_GEO`, `ID_GRAM`, `ID_HIST`, `ID_SOCIO`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `primeiro_medio`
--

CREATE TABLE `primeiro_medio` (
  `ID_SAL` int(11) NOT NULL,
  `ID_ALUN` int(11) DEFAULT NULL,
  `ID_NOTAS` int(11) DEFAULT NULL,
  `NUM_SAL` int(11) DEFAULT NULL,
  `FAIXA` varchar(30) DEFAULT NULL,
  `TIPO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `primeiro_medio`
--

INSERT INTO `primeiro_medio` (`ID_SAL`, `ID_ALUN`, `ID_NOTAS`, `NUM_SAL`, `FAIXA`, `TIPO`) VALUES
(1, 2, 2, 2, '1_ano', 'medio');

-- --------------------------------------------------------

--
-- Estrutura para tabela `quim`
--

CREATE TABLE `quim` (
  `ID_QUIM` int(11) NOT NULL,
  `N1_QUIM` decimal(10,0) DEFAULT NULL,
  `N2_QUIM` decimal(10,0) DEFAULT NULL,
  `N3_QUIM` decimal(10,0) DEFAULT NULL,
  `N4_QUIM` decimal(10,0) DEFAULT NULL,
  `MEDI_QUIM` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `quim`
--

INSERT INTO `quim` (`ID_QUIM`, `N1_QUIM`, `N2_QUIM`, `N3_QUIM`, `N4_QUIM`, `MEDI_QUIM`) VALUES
(1, 0, 0, 0, 0, 0),
(2, 7, 7, 7, 7, 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `salas`
--

CREATE TABLE `salas` (
  `ID_SAL` int(11) NOT NULL,
  `NOME_SAL` varchar(30) DEFAULT NULL,
  `FAIXA` varchar(30) NOT NULL,
  `TIPO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `salas`
--

INSERT INTO `salas` (`ID_SAL`, `NOME_SAL`, `FAIXA`, `TIPO`) VALUES
(1, 'sexto_fundament', '6_ano', 'fundamental'),
(2, 'primeiro_medio', '1_ano', 'medio');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sexto_fundament`
--

CREATE TABLE `sexto_fundament` (
  `ID_SAL` int(11) NOT NULL,
  `ID_ALUN` int(11) DEFAULT NULL,
  `ID_NOTAS` int(11) DEFAULT NULL,
  `NUM_SAL` int(11) DEFAULT NULL,
  `FAIXA` varchar(30) DEFAULT NULL,
  `TIPO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sexto_fundament`
--

INSERT INTO `sexto_fundament` (`ID_SAL`, `ID_ALUN`, `ID_NOTAS`, `NUM_SAL`, `FAIXA`, `TIPO`) VALUES
(1, 1, 1, 1, '6_ano', 'fundamental');

-- --------------------------------------------------------

--
-- Estrutura para tabela `socio`
--

CREATE TABLE `socio` (
  `ID_SOCIO` int(11) NOT NULL,
  `N1_SOCIO` decimal(10,0) DEFAULT NULL,
  `N2_SOCIO` decimal(10,0) DEFAULT NULL,
  `N3_SOCIO` decimal(10,0) DEFAULT NULL,
  `N4_SOCIO` decimal(10,0) DEFAULT NULL,
  `MEDI_SOCIO` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `socio`
--

INSERT INTO `socio` (`ID_SOCIO`, `N1_SOCIO`, `N2_SOCIO`, `N3_SOCIO`, `N4_SOCIO`, `MEDI_SOCIO`) VALUES
(1, 7, 7, 7, 7, 7),
(2, 7, 7, 7, 7, 7);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`ID_ALUN`),
  ADD KEY `ID_SAL` (`ID_SAL`),
  ADD KEY `ID_NOTAS` (`ID_NOTAS`);

--
-- Índices de tabela `artes`
--
ALTER TABLE `artes`
  ADD PRIMARY KEY (`ID_ARTE`);

--
-- Índices de tabela `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`ID_BIO`);

--
-- Índices de tabela `filosofia`
--
ALTER TABLE `filosofia`
  ADD PRIMARY KEY (`ID_FILO`);

--
-- Índices de tabela `fisi`
--
ALTER TABLE `fisi`
  ADD PRIMARY KEY (`ID_FISI`);

--
-- Índices de tabela `geo`
--
ALTER TABLE `geo`
  ADD PRIMARY KEY (`ID_GEO`);

--
-- Índices de tabela `gram`
--
ALTER TABLE `gram`
  ADD PRIMARY KEY (`ID_GRAM`);

--
-- Índices de tabela `hist`
--
ALTER TABLE `hist`
  ADD PRIMARY KEY (`ID_HIST`);

--
-- Índices de tabela `mat`
--
ALTER TABLE `mat`
  ADD PRIMARY KEY (`ID_MAT`);

--
-- Índices de tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`ID_NOTAS`),
  ADD KEY `matfk` (`ID_MAT`),
  ADD KEY `quimfk` (`ID_QUIM`),
  ADD KEY `artefk` (`ID_ARTE`),
  ADD KEY `biofk` (`ID_BIO`),
  ADD KEY `filofk` (`ID_FILO`),
  ADD KEY `fisifk` (`ID_FISI`),
  ADD KEY `geofk` (`ID_GEO`),
  ADD KEY `gramfk` (`ID_GRAM`),
  ADD KEY `histfk` (`ID_HIST`),
  ADD KEY `sociofk` (`ID_SOCIO`);

--
-- Índices de tabela `primeiro_medio`
--
ALTER TABLE `primeiro_medio`
  ADD PRIMARY KEY (`ID_SAL`),
  ADD KEY `ID_ALUN` (`ID_ALUN`),
  ADD KEY `ID_NOTAS` (`ID_NOTAS`),
  ADD KEY `NUM_SAL` (`NUM_SAL`);

--
-- Índices de tabela `quim`
--
ALTER TABLE `quim`
  ADD PRIMARY KEY (`ID_QUIM`);

--
-- Índices de tabela `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`ID_SAL`);

--
-- Índices de tabela `sexto_fundament`
--
ALTER TABLE `sexto_fundament`
  ADD PRIMARY KEY (`ID_SAL`),
  ADD KEY `ID_ALUN` (`ID_ALUN`),
  ADD KEY `ID_NOTAS` (`ID_NOTAS`),
  ADD KEY `NUM_SAL` (`NUM_SAL`);

--
-- Índices de tabela `socio`
--
ALTER TABLE `socio`
  ADD PRIMARY KEY (`ID_SOCIO`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `quim`
--
ALTER TABLE `quim`
  MODIFY `ID_QUIM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `alunos_ibfk_1` FOREIGN KEY (`ID_SAL`) REFERENCES `salas` (`ID_SAL`),
  ADD CONSTRAINT `alunos_ibfk_2` FOREIGN KEY (`ID_NOTAS`) REFERENCES `notas` (`ID_NOTAS`);

--
-- Restrições para tabelas `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `artefk` FOREIGN KEY (`ID_ARTE`) REFERENCES `artes` (`ID_ARTE`),
  ADD CONSTRAINT `biofk` FOREIGN KEY (`ID_BIO`) REFERENCES `bio` (`ID_BIO`),
  ADD CONSTRAINT `filofk` FOREIGN KEY (`ID_FILO`) REFERENCES `filosofia` (`ID_FILO`),
  ADD CONSTRAINT `fisifk` FOREIGN KEY (`ID_FISI`) REFERENCES `fisi` (`ID_FISI`),
  ADD CONSTRAINT `geofk` FOREIGN KEY (`ID_GEO`) REFERENCES `geo` (`ID_GEO`),
  ADD CONSTRAINT `gramfk` FOREIGN KEY (`ID_GRAM`) REFERENCES `gram` (`ID_GRAM`),
  ADD CONSTRAINT `histfk` FOREIGN KEY (`ID_HIST`) REFERENCES `hist` (`ID_HIST`),
  ADD CONSTRAINT `matfk` FOREIGN KEY (`ID_MAT`) REFERENCES `mat` (`ID_MAT`),
  ADD CONSTRAINT `quimfk` FOREIGN KEY (`ID_QUIM`) REFERENCES `quim` (`ID_QUIM`),
  ADD CONSTRAINT `sociofk` FOREIGN KEY (`ID_SOCIO`) REFERENCES `socio` (`ID_SOCIO`);

--
-- Restrições para tabelas `primeiro_medio`
--
ALTER TABLE `primeiro_medio`
  ADD CONSTRAINT `primeiro_medio_ibfk_1` FOREIGN KEY (`ID_ALUN`) REFERENCES `alunos` (`ID_ALUN`),
  ADD CONSTRAINT `primeiro_medio_ibfk_2` FOREIGN KEY (`ID_NOTAS`) REFERENCES `notas` (`ID_NOTAS`),
  ADD CONSTRAINT `primeiro_medio_ibfk_3` FOREIGN KEY (`NUM_SAL`) REFERENCES `salas` (`ID_SAL`);

--
-- Restrições para tabelas `sexto_fundament`
--
ALTER TABLE `sexto_fundament`
  ADD CONSTRAINT `sexto_fundament_ibfk_1` FOREIGN KEY (`ID_ALUN`) REFERENCES `alunos` (`ID_ALUN`),
  ADD CONSTRAINT `sexto_fundament_ibfk_2` FOREIGN KEY (`ID_NOTAS`) REFERENCES `notas` (`ID_NOTAS`),
  ADD CONSTRAINT `sexto_fundament_ibfk_3` FOREIGN KEY (`NUM_SAL`) REFERENCES `salas` (`ID_SAL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

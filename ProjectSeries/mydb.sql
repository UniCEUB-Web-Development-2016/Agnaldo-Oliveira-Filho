-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Maio-2016 às 04:35
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ator`
--

CREATE TABLE `ator` (
  `idt_ator` int(11) NOT NULL,
  `nme_ator` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ator`
--

INSERT INTO `ator` (`idt_ator`, `nme_ator`) VALUES
(1, 'Emilia Clarke');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ator_temporada`
--

CREATE TABLE `ator_temporada` (
  `idt_ator_temporada` int(11) NOT NULL,
  `cod_temporada` int(11) NOT NULL,
  `cod_ator` int(11) NOT NULL,
  `primeira_participacao` int(11) NOT NULL,
  `ultima_participacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ator_temporada`
--

INSERT INTO `ator_temporada` (`idt_ator_temporada`, `cod_temporada`, `cod_ator`, `primeira_participacao`, `ultima_participacao`) VALUES
(5, 1, 1, 2, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `idt_categoria` int(11) NOT NULL,
  `nme_categoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idt_categoria`, `nme_categoria`) VALUES
(1, 'Medieval');

-- --------------------------------------------------------

--
-- Estrutura da tabela `diretor`
--

CREATE TABLE `diretor` (
  `idt_diretor` int(11) NOT NULL,
  `nme_diretor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `diretor`
--

INSERT INTO `diretor` (`idt_diretor`, `nme_diretor`) VALUES
(1, 'Jeremy Podeswa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `episodio`
--

CREATE TABLE `episodio` (
  `idt_episodio` int(11) NOT NULL,
  `cod_temporada` int(11) NOT NULL,
  `cod_diretor` int(11) NOT NULL,
  `nme_episodio` varchar(45) NOT NULL,
  `duracao` time NOT NULL,
  `dta_lancamento` datetime NOT NULL,
  `sinopse` text NOT NULL,
  `link_trailer` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `episodio`
--

INSERT INTO `episodio` (`idt_episodio`, `cod_temporada`, `cod_diretor`, `nme_episodio`, `duracao`, `dta_lancamento`, `sinopse`, `link_trailer`) VALUES
(2, 1, 1, 'Home', '00:54:00', '2016-05-01 00:00:00', 'Bran treina com o Corvo de Três Olhos. Em Porto Real, Jaime aconselha Tommen. \nTyrion exige boas notícias, mas terá que fazê-las por si mesmo. Em Castelo Negro, a Patrulha da Noite apoia Thorne.\n Ramsay Bolton propõe um plano, e Balon Greyjoy cogita outras propostas.', 'https://www.youtube.com/watch?v=neZ0TiaxFaY');

-- --------------------------------------------------------

--
-- Estrutura da tabela `part_especial`
--

CREATE TABLE `part_especial` (
  `idt_part_especial` int(11) NOT NULL,
  `cod_episodio` int(11) NOT NULL,
  `cod_ator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `part_especial`
--

INSERT INTO `part_especial` (`idt_part_especial`, `cod_episodio`, `cod_ator`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil_usuario`
--

CREATE TABLE `perfil_usuario` (
  `idt_perfil_usuario` int(11) NOT NULL,
  `nme_perfil` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil_usuario`
--

INSERT INTO `perfil_usuario` (`idt_perfil_usuario`, `nme_perfil`) VALUES
(1, 'FranR'),
(2, ''),
(3, ''),
(4, 'AgnaldoFilho');

-- --------------------------------------------------------

--
-- Estrutura da tabela `series`
--

CREATE TABLE `series` (
  `idt_serie` int(11) NOT NULL,
  `cod_categoria` int(11) NOT NULL,
  `name_series` varchar(100) NOT NULL,
  `initials` varchar(10) NOT NULL,
  `year_series` int(11) NOT NULL,
  `resumo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `series`
--

INSERT INTO `series` (`idt_serie`, `cod_categoria`, `name_series`, `initials`, `year_series`, `resumo`) VALUES
(1, 1, 'Game of Thrones', 'GoT', 2011, 'GoT é foda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_episodio_usuario`
--

CREATE TABLE `status_episodio_usuario` (
  `idt_status_episodio_usuario` int(11) NOT NULL,
  `nme_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `status_episodio_usuario`
--

INSERT INTO `status_episodio_usuario` (`idt_status_episodio_usuario`, `nme_status`) VALUES
(1, 'Assistindo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `temporada`
--

CREATE TABLE `temporada` (
  `idt_temporada` int(11) NOT NULL,
  `cod_serie` int(11) NOT NULL,
  `num_temporada` int(11) NOT NULL,
  `ano_temporada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `temporada`
--

INSERT INTO `temporada` (`idt_temporada`, `cod_serie`, `num_temporada`, `ano_temporada`) VALUES
(1, 1, 6, 2016);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idt_usuario` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `senha` text NOT NULL,
  `cod_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idt_usuario`, `first_name`, `last_name`, `email`, `birthdate`, `senha`, `cod_perfil`) VALUES
(2, 'Franciele', 'Rodrigues', 'fran-rodrigues@hotmail.com', '1992-10-06', '456dfg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_episodio`
--

CREATE TABLE `usuario_episodio` (
  `idt_usuario_episodio` int(11) NOT NULL,
  `cod_episodio` int(11) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `cod_status` int(11) NOT NULL,
  `avaliacao` int(11) NOT NULL,
  `dta_atualizacao` datetime NOT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ator`
--
ALTER TABLE `ator`
  ADD PRIMARY KEY (`idt_ator`);

--
-- Indexes for table `ator_temporada`
--
ALTER TABLE `ator_temporada`
  ADD PRIMARY KEY (`idt_ator_temporada`),
  ADD KEY `fk_ator_temporada_temporada1` (`cod_temporada`),
  ADD KEY `fk_ator_temporada_ator1` (`cod_ator`),
  ADD KEY `fk_ator_temporada_episodio1` (`primeira_participacao`),
  ADD KEY `fk_ator_temporada_episodio2` (`ultima_participacao`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idt_categoria`);

--
-- Indexes for table `diretor`
--
ALTER TABLE `diretor`
  ADD PRIMARY KEY (`idt_diretor`);

--
-- Indexes for table `episodio`
--
ALTER TABLE `episodio`
  ADD PRIMARY KEY (`idt_episodio`),
  ADD KEY `fk_episodio_temporada1` (`cod_temporada`),
  ADD KEY `fk_episodio_diretor1` (`cod_diretor`);

--
-- Indexes for table `part_especial`
--
ALTER TABLE `part_especial`
  ADD PRIMARY KEY (`idt_part_especial`),
  ADD KEY `fk_episodio_ator_episodio1` (`cod_episodio`),
  ADD KEY `fk_episodio_ator_ator1` (`cod_ator`);

--
-- Indexes for table `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  ADD PRIMARY KEY (`idt_perfil_usuario`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`idt_serie`),
  ADD KEY `fk_series_categoria1` (`cod_categoria`);

--
-- Indexes for table `status_episodio_usuario`
--
ALTER TABLE `status_episodio_usuario`
  ADD PRIMARY KEY (`idt_status_episodio_usuario`);

--
-- Indexes for table `temporada`
--
ALTER TABLE `temporada`
  ADD PRIMARY KEY (`idt_temporada`),
  ADD KEY `fk_temporada_series1` (`cod_serie`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idt_usuario`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_usuario_perfil_usuario1` (`cod_perfil`);

--
-- Indexes for table `usuario_episodio`
--
ALTER TABLE `usuario_episodio`
  ADD PRIMARY KEY (`idt_usuario_episodio`),
  ADD KEY `fk_usuario_episodio_episodio1` (`cod_episodio`),
  ADD KEY `fk_usuario_episodio_usuario1` (`cod_usuario`),
  ADD KEY `fk_usuario_episodio_status_episodio_usuario1` (`cod_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ator`
--
ALTER TABLE `ator`
  MODIFY `idt_ator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ator_temporada`
--
ALTER TABLE `ator_temporada`
  MODIFY `idt_ator_temporada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idt_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `diretor`
--
ALTER TABLE `diretor`
  MODIFY `idt_diretor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `episodio`
--
ALTER TABLE `episodio`
  MODIFY `idt_episodio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `part_especial`
--
ALTER TABLE `part_especial`
  MODIFY `idt_part_especial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  MODIFY `idt_perfil_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `idt_serie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `status_episodio_usuario`
--
ALTER TABLE `status_episodio_usuario`
  MODIFY `idt_status_episodio_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `temporada`
--
ALTER TABLE `temporada`
  MODIFY `idt_temporada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idt_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario_episodio`
--
ALTER TABLE `usuario_episodio`
  MODIFY `idt_usuario_episodio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ator_temporada`
--
ALTER TABLE `ator_temporada`
  ADD CONSTRAINT `fk_ator_temporada_ator1` FOREIGN KEY (`cod_ator`) REFERENCES `ator` (`idt_ator`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ator_temporada_episodio1` FOREIGN KEY (`primeira_participacao`) REFERENCES `episodio` (`idt_episodio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ator_temporada_episodio2` FOREIGN KEY (`ultima_participacao`) REFERENCES `episodio` (`idt_episodio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ator_temporada_temporada1` FOREIGN KEY (`cod_temporada`) REFERENCES `temporada` (`idt_temporada`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `episodio`
--
ALTER TABLE `episodio`
  ADD CONSTRAINT `fk_episodio_diretor1` FOREIGN KEY (`cod_diretor`) REFERENCES `diretor` (`idt_diretor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_episodio_temporada1` FOREIGN KEY (`cod_temporada`) REFERENCES `temporada` (`idt_temporada`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `part_especial`
--
ALTER TABLE `part_especial`
  ADD CONSTRAINT `fk_episodio_ator_ator1` FOREIGN KEY (`cod_ator`) REFERENCES `ator` (`idt_ator`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_episodio_ator_episodio1` FOREIGN KEY (`cod_episodio`) REFERENCES `episodio` (`idt_episodio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `series`
--
ALTER TABLE `series`
  ADD CONSTRAINT `fk_series_categoria1` FOREIGN KEY (`cod_categoria`) REFERENCES `categoria` (`idt_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `temporada`
--
ALTER TABLE `temporada`
  ADD CONSTRAINT `fk_temporada_series1` FOREIGN KEY (`cod_serie`) REFERENCES `series` (`idt_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_perfil_usuario1` FOREIGN KEY (`cod_perfil`) REFERENCES `perfil_usuario` (`idt_perfil_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario_episodio`
--
ALTER TABLE `usuario_episodio`
  ADD CONSTRAINT `fk_usuario_episodio_episodio1` FOREIGN KEY (`cod_episodio`) REFERENCES `episodio` (`idt_episodio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_episodio_status_episodio_usuario1` FOREIGN KEY (`cod_status`) REFERENCES `status_episodio_usuario` (`idt_status_episodio_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_episodio_usuario1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`idt_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

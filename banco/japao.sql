-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/06/2024 às 04:20
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
-- Banco de dados: `japao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_comentarios`
--

CREATE TABLE `tb_comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comentario` varchar(600) NOT NULL,
  `stts` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_comentarios`
--

INSERT INTO `tb_comentarios` (`id`, `nome`, `email`, `comentario`, `stts`) VALUES
(1, 'seila', 'seila@seila.com', 'asdjoadsahdukilahwdikbnfilaskncjdklsncilasmcanckasncoanmolcmaslodas', 'ativado'),
(5, 'pericles', 'pericles@peri.com', 'meuoodkaopsda', 'ativado'),
(11, 'asak', '123', 'dfsafhjaosfjaosf window.location.href', 'ativado'),
(12, 'João da Silva', 'joao.silva@example.com', 'Ótimo site, parabéns pelo trabalho!', 'ativado'),
(13, 'Maria Souza', 'maria.souza@example.com', 'Excelente conteúdo, estou aprendendo muito!', 'ativado'),
(14, 'José Santos', 'jose.santos@example.com', 'Gostei muito das informações, obrigado!', 'ativado'),
(15, 'Ana Oliveira', 'ana.oliveira@example.com', 'Interessante, vou recomendar para meus amigos!', 'ativado'),
(16, 'Pedro Ferreira', 'pedro.ferreira@example.com', 'Muito bom, continuem com o excelente trabalho!', 'ativado'),
(17, 'João Silva', 'joao.silva@example.com', 'Muito bom o conteúdo!', 'ativado'),
(18, 'Maria Oliveira', 'maria.oliveira@example.com', 'Gostei bastante do artigo.', 'ativado'),
(19, 'Carlos Santos', 'carlos.santos@example.com', 'Excelente abordagem sobre o tema.', 'ativado'),
(20, 'Ana Costa', 'ana.costa@example.com', 'Achei muito interessante!', 'ativado'),
(21, 'Pedro Almeida', 'pedro.almeida@example.com', 'Informações úteis e claras.', 'ativado'),
(22, 'Fernanda Lima', 'fernanda.lima@example.com', 'Texto bem explicativo, parabéns!', 'ativado'),
(23, 'Rafael Pereira', 'rafael.pereira@example.com', 'Conteúdo muito relevante.', 'ativado'),
(24, 'Juliana Melo', 'juliana.melo@example.com', 'Adorei o artigo, muito bom!', 'ativado'),
(25, 'Bruno Fernandes', 'bruno.fernandes@example.com', 'Informações valiosas, obrigado!', 'ativado'),
(26, 'Patrícia Souza', 'patricia.souza@example.com', 'Gostei bastante do conteúdo.', 'ativado'),
(27, 'Ricardo Monteiro', 'ricardo.monteiro@example.com', 'Artigo bem completo e informativo.', 'ativado'),
(28, 'Carolina Rocha', 'carolina.rocha@example.com', 'Parabéns pelo excelente conteúdo!', 'ativado'),
(29, 'Mateus Barbosa', 'mateus.barbosa@example.com', 'Muito útil e bem escrito.', 'ativado'),
(30, 'Beatriz Campos', 'beatriz.campos@example.com', 'Achei o texto muito esclarecedor.', 'desativado'),
(31, 'Luiz Gomes', 'luiz.gomes@example.com', 'Artigo muito interessante e informativo.', 'desativado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(5) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `permissao` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`, `email`, `senha`, `permissao`) VALUES
(1, 'gusth01', 'gust@gust.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'adm'),
(3, 'asak', 'asak@asak.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'nd'),
(4, 'fsafasfas', 'gust@fsafsa.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', NULL),
(5, 'pericles', 'pericles@peri.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL),
(6, 'meu nome', 'meunome@meunome.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_comentarios`
--
ALTER TABLE `tb_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_comentarios`
--
ALTER TABLE `tb_comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

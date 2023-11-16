-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 14/05/2023 às 04:16
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `appfit2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `exercicios`
--

CREATE TABLE `exercicios` (
  `id_exercicios` int(100) NOT NULL,
  `dia` int(100) DEFAULT NULL,
  `exercicios` varchar(250) DEFAULT NULL,
  `fk_nivel_exerc` int(100) DEFAULT NULL,
  `fk_objetivo_exercicio` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `exercicios`
--

INSERT INTO `exercicios` (`id_exercicios`, `dia`, `exercicios`, `fk_nivel_exerc`, `fk_objetivo_exercicio`) VALUES
(1, 1, '2 minutos de intervalo entre as series, 3 series de 12 para todos exercicios - Marcha estacionária, - Agachamento, Bicicleta no ar', 1, 2),
(2, 2, '2 minutos de intervalo entre as series, 3 series de 12 para todos exercicios - Elevação do quadril, - Polichinelo, - Abdominais', 1, 2),
(3, 3, '2 minutos de intervalo entre as series, 3 series de 12 para todos exercicios. - Flexão de braço, - Pranchas, - corrida parado 10 segundos', 1, 2),
(4, 1, 'Intervalo de 1 minuto em cada serie, 3 series de 12 repetições em cada exercicio, - Polichinelo, - Flexão, - Agachamento', 2, 2),
(5, 2, 'Intervalo de 1 minuto em cada serie, 3 series de 12 repetições em cada exercicio, - Pular corda, - Elevação de perna, - Afundo', 2, 2),
(6, 3, 'Intervalo de 1 minuto em cada serie, 3 series de 12 repetições em cada exercicio, - Corrida parado 10 segundos, - Remada, - Abdominal', 2, 2),
(7, 1, 'Intervalo de 40 segundos em cada serie, 4 series de 15 repetições em cada exercicio, - Polichinelo, - Flexão, - Agachamento, -Abdominal', 3, 2),
(8, 2, 'Intervalo de 40 segundos em cada serie, 4 series de 15 repetições em cada exercicio, - Corrida parado 10 segundos, - Afundo, - Burpree, - Remada', 3, 2),
(9, 3, 'Intervalo de 40 segundos em cada serie, 4 series de 15 repetições em cada exercicio, - Pular corda, - flexao inclinado, - Barra, - Elevação de pernas', 3, 2),
(10, 1, 'Intervalo de até 3 minutos em cada serie, 2 series de 15 repetições em cada exercicio, -Polichinelo, - Agachamento, - Elevação de pernas', 4, NULL),
(11, 2, 'Intervalo de até 3 minutos em cada serie, 2 series de 15 repetições em cada exercicio, - Abdominal, - Corrida parado , - Remada ', 4, NULL),
(12, 1, 'Intervalo de 2 minutos entre as series, 3 series de 10 repetições para cada exercicio, - Flexão de braços, - Barra fixa, - Flexão hindu', 1, 1),
(13, 2, 'Intervalo de 2 minutos entre as series, 3 series de 10 repetições para cada exercicio, - Agachamento, - Terra, - Avanço', 1, 1),
(14, 3, 'Intervalo de 2 minutos entre as series, 3 series de 10 repetições para cada exercicio, - Rosca direta, - Triceps frances, - Rosca concentrada', 1, 1),
(15, 1, 'Intervalo de 1 minutos entre as series, 3 series de 15 repetições para cada exercicio, - Rosca direta, - Triceps frances, - Rosca concentrada', 2, 1),
(16, 2, 'Intervalo de 1 minutos entre as series, 3 series de 15 repetições para cada exercicio, - Barra fixa, - Flexão de braço, - Flexão Hiindu ', 2, 1),
(17, 3, 'Intervalo de 1 minutos entre as series, 3 series de 15 repetições para cada exercicio, - Agachamento, - Terra, - Avanço', 2, 1),
(18, 1, 'Intervalo de 40 segundos entre as series, 4 series de 15 repetições para cada exercicio, - Barra fixa, - Flexão de braço, - Flexão Hiindu, - Elevação lateral ', 3, 1),
(19, 2, 'Intervalo de 40 segundos entre as series, 4 series de 15 repetições para cada exercicio, - Agachamento, - Terra, - Avanço, - Afundo ', 3, 1),
(20, 3, 'Intervalo de 40 segundos entre as series, 4 series de 15 repetições para cada exercicio, - Rosca direta, - Triceps Frances, - Rosca concentrada, - Mergulho ', 3, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `genero`
--

CREATE TABLE `genero` (
  `sexo` varchar(50) DEFAULT NULL,
  `id_genero` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `genero`
--

INSERT INTO `genero` (`sexo`, `id_genero`) VALUES
('Masculino', 1),
('Feminino', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `nivel`
--

CREATE TABLE `nivel` (
  `id_nivel` int(100) NOT NULL,
  `nivel_ex` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `nivel_ex`) VALUES
(1, 'iniciante'),
(2, 'intermediario'),
(3, 'avançado'),
(4, 'qualidade de vida');

-- --------------------------------------------------------

--
-- Estrutura para tabela `objetiv`
--

CREATE TABLE `objetiv` (
  `objetivo` varchar(50) DEFAULT NULL,
  `id_objetivo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `objetiv`
--

INSERT INTO `objetiv` (`objetivo`, `id_objetivo`) VALUES
('Ganhar Peso', 1),
('Perder Peso', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `refeicoes`
--

CREATE TABLE `refeicoes` (
  `refeicao` varchar(200) DEFAULT NULL,
  `ordem` int(10) DEFAULT NULL,
  `id_refeicao` int(100) NOT NULL,
  `fk_objetivo_refeicao` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `refeicoes`
--

INSERT INTO `refeicoes` (`refeicao`, `ordem`, `id_refeicao`, `fk_objetivo_refeicao`) VALUES
('xícara de café com leite desnatado + fatias de pão integral com ovos mexidos +  fatias de abacate + 1 laranja', 1, 1, 1),
('1 maçã com casca + 10 unidades de castanha de caju', 2, 2, 1),
('peito de peru grelhado + arroz integral + sopa de feijão + salada crua de repolho, cenoura e cebola, temperada com 1 colher de chá de azeite de oliva e limão + 1 ameixa', 3, 3, 1),
('sanduíche integral de frango grelhado com alface e tomate', 4, 4, 1),
('atum com 2 batatas médias com casca + salada de beterraba e cenoura cozida, temperada com 1 colher de chá de azeite de oliva', 5, 5, 1),
('ovo cozido', 6, 6, 1),
('ovos mexidos + suco verde', 1, 7, 2),
(' iogurte natural ou desnatado com farelo de aveia', 2, 8, 2),
('arroz, batata-doce ou mandioca, com moderação, peito de frango, brócolis, folhas como alface, agrião, rúcula, chicória, couve, ', 3, 9, 2),
('fruta + farelo de aveia', 4, 10, 2),
('salada de folhas, legumes cozidos e peixe ou frango grelhado', 5, 11, 2),
('morangos ou outra fruta de sua preferência', 6, 12, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `userinfo`
--

CREATE TABLE `userinfo` (
  `altura` int(100) NOT NULL,
  `idade` int(100) NOT NULL,
  `peso` int(100) NOT NULL,
  `data_projeto` datetime NOT NULL DEFAULT current_timestamp(),
  `id_info` int(100) NOT NULL,
  `fk_usuario` int(100) DEFAULT NULL,
  `fk_genero` int(100) DEFAULT NULL,
  `fk_objetivo` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `userinfo`
--

INSERT INTO `userinfo` (`altura`, `idade`, `peso`, `data_projeto`, `id_info`, `fk_usuario`, `fk_genero`, `fk_objetivo`) VALUES
(180, 30, 120, '2023-05-06 21:19:42', 15, 3, 1, 1),
(200, 30, 80, '2023-05-06 21:26:48', 16, 12, 1, 2),
(185, 30, 100, '2023-05-06 21:49:54', 17, 11, 2, 2),
(150, 26, 54, '2023-05-07 19:23:35', 18, 13, 1, 1),
(150, 26, 60, '2023-05-08 13:39:34', 19, 14, 2, 2),
(178, 27, 70, '2023-05-13 17:56:23', 20, 15, 1, 1),
(150, 20, 62, '2023-05-13 22:48:06', 21, 16, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `senha` varchar(250) NOT NULL,
  `id` int(100) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `fk_id_userinfo` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`senha`, `id`, `usuario`, `fk_id_userinfo`) VALUES
('$2y$10$7v.7A3gdIC.Bo5vCWNwbNeiQ93yYfdhBUC/qBCF.J7np3mgSjMpAO', 3, 'teste', 15),
('$2y$10$IqyAphOtzI6Baaxp53zuUO1sPJXXTSaMXBwRMHQjjyDY7EO9wV9Pu', 11, 'novo', 17),
('$2y$10$/jh58t5d7zmsc29PIYx/lusyG0q6/PW9wQrQ13131LCe.JL98HDIC', 12, 'nov', 16),
('$2y$10$TiwSbJrj/ph0mijJG7zGSOL5aywSugGaLUl42SkjAPovdA3BBMjOu', 13, 'usuario', 18),
('$2y$10$74b7S7bv5/lZNsCfaOozcOK56EAdCjwuvRUXsSaicDhqdkcldqjkK', 14, 'admin', 19),
('$2y$10$6nbNYHsyyeJzH82RAawFp.03rguVjXO9y9qir6N/mep/uQamC4.Ru', 15, 'augusto', 20),
('$2y$10$Ybi7gAf5lNTOvF8vJ7RHAeNkMieKZL8AuRNXdxwNg/b1oRhGn6BEW', 16, 'useer', 21);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `exercicios`
--
ALTER TABLE `exercicios`
  ADD PRIMARY KEY (`id_exercicios`),
  ADD KEY `fk_nivel_exerc` (`fk_nivel_exerc`),
  ADD KEY `fk_objetivo_exercicio` (`fk_objetivo_exercicio`);

--
-- Índices de tabela `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Índices de tabela `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id_nivel`);

--
-- Índices de tabela `objetiv`
--
ALTER TABLE `objetiv`
  ADD PRIMARY KEY (`id_objetivo`);

--
-- Índices de tabela `refeicoes`
--
ALTER TABLE `refeicoes`
  ADD PRIMARY KEY (`id_refeicao`),
  ADD KEY `fk_objetivo_refeicao` (`fk_objetivo_refeicao`);

--
-- Índices de tabela `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `fk_usuario` (`fk_usuario`),
  ADD KEY `fk_genero` (`fk_genero`),
  ADD KEY `fk_objetivo` (`fk_objetivo`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `fk_id_userinfo` (`fk_id_userinfo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `exercicios`
--
ALTER TABLE `exercicios`
  MODIFY `id_exercicios` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id_nivel` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `objetiv`
--
ALTER TABLE `objetiv`
  MODIFY `id_objetivo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `refeicoes`
--
ALTER TABLE `refeicoes`
  MODIFY `id_refeicao` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id_info` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `exercicios`
--
ALTER TABLE `exercicios`
  ADD CONSTRAINT `exercicios_ibfk_1` FOREIGN KEY (`fk_nivel_exerc`) REFERENCES `nivel` (`id_nivel`),
  ADD CONSTRAINT `exercicios_ibfk_2` FOREIGN KEY (`fk_objetivo_exercicio`) REFERENCES `objetiv` (`id_objetivo`);

--
-- Restrições para tabelas `refeicoes`
--
ALTER TABLE `refeicoes`
  ADD CONSTRAINT `refeicoes_ibfk_1` FOREIGN KEY (`fk_objetivo_refeicao`) REFERENCES `objetiv` (`id_objetivo`);

--
-- Restrições para tabelas `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `userinfo_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `userinfo_ibfk_2` FOREIGN KEY (`fk_genero`) REFERENCES `genero` (`id_genero`),
  ADD CONSTRAINT `userinfo_ibfk_3` FOREIGN KEY (`fk_objetivo`) REFERENCES `objetiv` (`id_objetivo`);

--
-- Restrições para tabelas `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`fk_id_userinfo`) REFERENCES `userinfo` (`id_info`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

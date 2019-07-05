-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Mar-2019 às 15:02
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetophp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso_restrito`
--

CREATE TABLE `acesso_restrito` (
  `pk_restrito` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acesso_restrito`
--

INSERT INTO `acesso_restrito` (`pk_restrito`, `nome`, `telefone`, `email`, `login`, `senha`) VALUES
(1, 'Agnes Breznaj', '21998563461', 'agnesb@gmail.com', 'agnes_breznaj', '12345678'),
(2, 'Isla Davies', '2132045691', 'davies_isla@gmail.com', 'isla_davies', '12345678'),
(3, 'Olivia Thomas', '2134072893', 'olivia_thomas@gmail.com', 'olivia_thomas', '12345678'),
(4, 'Eva Smith', '2132875128', 'evasmith@gmail.com', 'eva_smith', '12345678');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codcliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sexo` enum('F','M') NOT NULL,
  `cpf` varchar(13) NOT NULL,
  `idade` date NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `cidade` tinytext NOT NULL,
  `estado` enum('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO') NOT NULL,
  `res` varchar(12) NOT NULL,
  `cel` varchar(13) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codcliente`, `nome`, `sexo`, `cpf`, `idade`, `endereco`, `cep`, `cidade`, `estado`, `res`, `cel`, `senha`) VALUES
(1, 'Leticia Nogueira', 'F', '06187539841', '1988-11-22', 'Rua JosÃ© Saramago, 13', '22986582', 'Blumenau', 'SC', '4730942386', '47997634512', '12345678'),
(2, 'Lena Sawamura', 'F', '05198438525', '1986-08-14', 'Rua Anita Garibaldi, 13', '22965008', 'Santa Catarina', 'SC', '4730458732', '47997634512', '12345678'),
(3, 'Thiago Almeida', 'M', '05164387652', '1990-10-19', 'Rua Graciliano Ramos, 87', '22287956', 'Rio de Janeiro', 'RJ', '2138458732', '21997623409', '12345678'),
(4, 'Allen Schneider', 'M', '05064927512', '1974-11-25', 'Rua IlÃ­ada, 65', '67590041', 'Porto Alegre', 'RS', '5130456782', '5199562085', '12345678'),
(6, 'Marcela Alves', 'F', '05164328753', '1990-07-13', 'Rua das Rosas, 53', '22223-543', 'Rio de Janeiro', 'RJ', '2130754321', '21998658721', '12345678');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `codcontato` int(11) NOT NULL,
  `nome` text NOT NULL,
  `email` varchar(80) NOT NULL,
  `assunto` enum('elogio','reclamacao','duvida','sugestao','depoimento') NOT NULL,
  `mensagem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`codcontato`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(1, 'Leonardo Lopes', 'leonardo_lopes@gmail.com', 'duvida', 'Quando vÃ£o lanÃ§ar o novo kit da Copic?'),
(2, 'Marcela Alves', 'marcela@gmail.com', 'duvida', 'Quando chegam mais cadernos da Muji?');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emailcli`
--

CREATE TABLE `emailcli` (
  `codemail` int(11) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emailcli`
--

INSERT INTO `emailcli` (`codemail`, `email`) VALUES
(1, 'leticia_nogueira@gmail.com'),
(2, 'lena_sawamura@gmail.com'),
(3, 'thiagoalmeida@gmail.com'),
(4, 'allen_schneider@gmail.com'),
(6, 'marcela@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `codpedido` int(11) NOT NULL,
  `codcliente` int(11) NOT NULL,
  `codproduto` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `sub` float(10,2) NOT NULL,
  `total` float(10,2) NOT NULL,
  `datacompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`codpedido`, `codcliente`, `codproduto`, `qtd`, `sub`, `total`, `datacompra`) VALUES
(1, 2, 1, 1, 40.00, 40.00, '2019-03-08'),
(2, 1, 1, 1, 40.00, 40.00, '2019-03-08'),
(3, 3, 2, 1, 639.00, 639.00, '2019-03-08'),
(4, 1, 1, 1, 40.00, 40.00, '2019-03-08'),
(5, 1, 7, 1, 24.00, 64.00, '2019-03-08'),
(6, 1, 18, 1, 35.00, 99.00, '2019-03-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codproduto` int(11) NOT NULL,
  `nomeproduto` varchar(100) NOT NULL,
  `descricao` varchar(2000) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `preco` float(10,2) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codproduto`, `nomeproduto`, `descricao`, `categoria`, `preco`, `imagem`) VALUES
(1, 'Kit de LÃ¡pis Katie Leamon Vol.I', 'Celebre a alegria de lÃ¡pis em papel com este kit de 7 lÃ¡pis hexagonais de Katie Leamon.<br/><br/>Os lÃ¡pis tÃªm detalhe tipogrÃ¡fico com acabamento dourado, para adicionar estilo Ã s suas sessÃµes de escrita.<br/><br/>Detalhes:<br/><br/><ul><li>Kit de 7 lÃ¡pis com variedade de intensidades</li><li>Detalhe em ouro</li><li>Cada cor tem sua prÃ³pria intensidade e a caixa contÃ©m todas as 3 cores e intensidades: HB, B, 2B</li><li>Caixa estilizada</li><li>Fabricado na Inglaterra</li></ul>', 'LÃ¡pis & Lapiseira', 40.00, '532572.jpeg'),
(2, 'Kit Derwent Inktense 72 Cores', 'A linha Inktense tem o pigmento mais intenso que qualquer outro lÃ¡pis aquarelÃ¡vel e, uma vez ativado com Ã¡gua, ele se torna permanente e nÃ£o dissolve mais. Com essa caracterÃ­stica, Ã© possÃ­vel sobrepor inÃºmeras camadas de cor sem afetar as camadas inferiores.<br>\r\n<br/>\r\nOs lÃ¡pis Derwent Inktense sÃ£o extremamente versÃ¡teis e podem ser usados na pintura de telas ou tecidos, ou ainda usados a seco.<br>\r\n<br/>\r\nKit completo com todas as 71 cores da linha Inktense e mais o lÃ¡pis preto Outliner para criar traÃ§os insolÃºveis.', 'LÃ¡pis & Lapiseira', 639.00, '3f0274c92a3ff97cd940ff6f7d867c4f.jpg'),
(3, 'ColeÃ§Ã£o Sketching Derwent', 'Deixe sua imaginaÃ§Ã£o fluir com essa maravilhosa coleÃ§Ã£o Sketching da Derwent! Sketch Ã© um estilo desenho e ilustraÃ§Ã£o mais solto e expressivo, e este conjunto foi feito especialmente para isso. <br/>\r\n<br/>\r\nContÃ©m:<br/>\r\n<br/>\r\n<ul>\r\n<li>3 blocos de grafite (macio, mÃ©dio e duro)</li>\r\n<li>3 blocos de carvÃ£o (claro, mÃ©dio e escuro)</li>\r\n<li>3 lÃ¡pis sketching solÃºveis (4B, HB e 8B)</li>\r\n<li>1 lÃ¡pis de desenho (Terracotta)</li>\r\n<li>1 lÃ¡pis carvÃ£o branco</li>\r\n<li>1 lÃ¡pis carvÃ£o mÃ©dio</li>\r\n</ul>', 'LÃ¡pis & Lapiseira', 79.00, '62042654b75f1f692dc15c5edcade7c8.jpg'),
(4, 'Kit Derwent Sketching', 'Uma escolha maravilhosa para desenhos Ã  mÃ£o livre ou designs mais arrojados, permitindo a mais completa e espontÃ¢nea liberdade de expressÃ£o. O grafite extra macio e amplo percorre suavemente o papel para desenhos que vÃ£o desde traÃ§os leves a trabalhos mais detalhados. Derwent Sketching vem em 3 tons versÃ¡teis, que se misturam perfeitamente, criando variaÃ§Ãµes sutis de tons.<br/>\r\n<br/>\r\nEste estojo de metal contÃ©m 6 lÃ¡pis macios, perfeitos para desenhos detalhados e esboÃ§os Ã  mÃ£o livre. Apontador gratuito incluso.', 'LÃ¡pis & Lapiseira', 47.00, '84006c3f60ddb4ee61bce928adfc07ea.jpg'),
(5, 'Kit de LÃ¡pis Katie Leamon Vol.II', 'Celebre a alegria de lÃ¡pis em papel com este kit de 7 lÃ¡pis hexagonais de Katie Leamon.<br/>\r\n<br/>\r\nOs lÃ¡pis tÃªm detalhe tipogrÃ¡fico com acabamento dourado, para adicionar estilo Ã s suas sessÃµes de escrita.<br/>\r\n<br/>\r\nDetalhes:<br/>\r\n<br/>\r\n<ul>\r\n<li>Kit de 6 lÃ¡pis com variedade de intensidades</li>\r\n<li>LÃ¡pis carpenter HB</li>\r\n<li>Detalhe em ouro</li>\r\n<li>Cada cor tem sua prÃ³pria intensidade e a caixa contÃ©m todas as 3 cores e intensidades: HB, B, 2B</li>\r\n<li>Caixa estilizada</li>\r\n<li>Fabricado na Inglaterra</li>\r\n</ul>', 'LÃ¡pis & Lapiseira', 45.00, '48356065cec0807854086744cd78da3f.jpeg'),
(6, 'Kit de 6 Canetas Iconic', 'DÃª um toque de alegria Ã  sua escrita com as canetas Iconic. Estas canetas esferogrÃ¡ficas possuem base de tinta Ã  Ã³leo preta.<br/>\r\n<br/>\r\nA ponta Ã© uma finÃ­ssima esfera de 0.38mm, o que a torna providencial para escrever em pequenos espaÃ§os, alÃ©m de fazer rascunhos e tomar notas em geral.<br/>\r\n<br/>\r\nCom uma variedade de designs adorÃ¡veis, as canetas Iconic sÃ£o perfeitas para alegrar seu espaÃ§o de estudo ou trabalho.<br/>\r\n<br/>\r\nDetalhes:<br/>\r\n<br/>\r\n<ul>\r\n<li>Caneta esferogrÃ¡fica com push-top</li>\r\n<li>Tinta com base de Ã³leo</li>\r\n<li>Ponta: 0.38mm</li>\r\n<li>Tamanho: 141mm x 10mm</li>\r\n<li>Fabricado na CorÃ©ia do Sul </li>\r\n</ul>', 'Canetas', 32.00, 'a0b5858e6adb5d38c535f4aab3c62eb0.jpg'),
(7, 'Canetas Rifle Paper Co.', 'As canetas da Rifle Paper Co. sÃ£o perfeitas para o dia-a-dia.<br/>\r\n<br/>\r\nCom belÃ­ssimos padrÃµes de design, essas canetas possuem ponta de 0.7mm com tinta preta, e sÃ£o o presente perfeito para quem gosta de itens de papelaria e escritÃ³rio.<br/>\r\n<br/>\r\nDetalhes:<br/>\r\n<br/>\r\n<ul>\r\n<li>Tinta preta</li>\r\n<li>AÃ§o inoxidÃ¡vel com detalhe dourado</li>\r\n<li>Possibilidade de recarga da tinta</li>\r\n<li>Ponta de 0.7mm</li>\r\n</ul>', 'Canetas', 24.00, 'ea52816cdef8b315de8d38f1d6a8efab.jpg'),
(8, 'Kit Livework Ponta Dupla', 'FaÃ§a as pÃ¡ginas do seu planner se destacarem com as canetas em tons pastÃ©is de ponta dupla da Livework. Este kit de 5 canetas tem 10 cores individuais que sÃ£o perfeitas para marcaÃ§Ãµes baseadas em cor, muito comuns em estudos, para sublinhar e marcar em geral.<br/>\r\n<br/>\r\nPerfeitas para economizar espaÃ§o no estojo dos fÃ£s de canetas, cada caneta tem um design gÃªmeo com uma ponta fina em uma extremidade, e uma ponta ampla na outra.<br/>\r\n<br/>\r\nIdeais para estudantes e pessoas que gostam de organizaÃ§Ã£o em suas anotaÃ§Ãµes, as canetas Livework sÃ£o maravilhosas para trazer mais cor Ã s suas anotaÃ§Ãµes<br/>\r\n<br/>\r\nDetalhes:<br/>\r\n<br/>\r\n<ul>\r\n<li>Kit com 5 canetas de ponta dupla</li>\r\n<li>Ponta fina em uma extremidade e ampla na outra</li>\r\n<li>10 cores: rosa, verde azulado, laranja, azul, amarelo, roxo, menta, rosa claro, azul celeste e cinza</li>\r\n<li>Tinta Ã  base de Ã¡lcool e ponta de fibra</li>\r\n<li>Fabricado na CorÃ©ia do Sul</li>\r\n</ul>', 'Canetas', 28.00, 'bf3e0a504fe8faccc0e0686f73f92d17.jpg'),
(9, 'Kit Copic Sketch 36 Cores', 'Kit com 36 cores pre-selecionadas do modelo Copic Sketch. Grande variedade de cores que permitem variaÃ§Ã£o de tons.', 'Marcadores', 120.00, '1da8c453995e26374530d36fd8652815.jpg'),
(10, 'Kit Copic Ciao 24 Cores', 'Kit com 24 cores pre-selecionadas do modelo Copic Ciao.', 'Marcadores', 83.00, '5fa65953c1aef3526de3dfbcc429cada.jpg'),
(11, 'Guache Winsor & Newton', 'Popular entre designers, ilustradores e artistas comerciais, o Guache Winsor & Newton Ã© perfeito para criar artes vibrantes. Todos os tons sÃ£o misturÃ¡veis entre si e podem ser usados em conjunto com as aquarelas profissionais Winsor & Newton para um efeito matte.', 'Tintas', 12.00, '511864a5632addadd8c351f86110d707.jpg'),
(12, 'Aquarela Winsor & Newton', 'Mais de 170 anos depois, a aguarela Winsor & Newton continua a ser formulada e fabricada de acordo com os princÃ­pios fundadores da empresa, para criar uma gama incomparÃ¡vel de aguarela, que oferece aos artistas a escolha mais ampla e equilibrada de pigmentos com a maior permanÃªncia possÃ­vel. Hoje, a gama de aguarela Winsor & Newton beneficia dos avanÃ§os contÃ­nuos em tecnologia e mÃ©todos de produÃ§Ã£o de pigmentos, com base nos jÃ¡ elevados padrÃµes da empresa para produzir cores ainda mais brilhantes, mais transparentes e mais estÃ¡veis. Muitas das formulaÃ§Ãµes permanecem as mesmas, provando que nÃ£o podem ser melhoradas. Este conjunto leve contÃ©m uma seleÃ§Ã£o de 24 cores. Verifique na carta de cores os tons disponÃ­veis. Os conteÃºdos podem variar.', 'Tintas', 81.00, 'de9eb600829c4519026e51f34abae7eb.jpg'),
(13, 'Kit de PincÃ©is Winsor & Newton', 'Desde 1866, Winsor & Newton como "O melhor pincel de aguarela do mundo" Os pincÃ©is da gama sÃ©rie 7 tÃªm caracterÃ­sticas Ãºnicas, o seu cabo Ã© mais longo que os tradicionais e possui uma ponta mais longa e afiada. Dentro da gama padrÃ£o da sÃ©rie 7 existem 13 tamanhos diferentes. O fabrico Ã© feito usando os melhores pÃªlos disponÃ­veis para permitir uma maior elasticidade e uma resistÃªncia forte, garantindo que recupera constantemente a sua forma inicial. PossuÃ­ uma forma semelhante a uma espada, feita de pÃªlos verdadeiros, Marta Siberiana Kolinsky, como resultado das baixas temperaturas na regiÃ£o Leste da SibÃ©ria. ExtraordinÃ¡ria capacidade controlo e fluidez.', 'Pinceis', 45.00, 'ef33d19f8ed1fe431004ee0c39112157.jpg'),
(14, 'Borracha Muji', 'Borracha plÃ¡stica nas cores preta ou branca da Muji. ', 'Acessorios', 7.00, '76dd8942def76f61dc3968d4cc8b5b88.jpg'),
(15, 'Estojo Livework', 'O gracioso estojo da Livework Ã© ideal para vocÃª armazenar seus pertences e mantÃª-los sempre Ã  mÃ£o. Discreto, mas bastante espaÃ§oso, ele Ã© perfeito para o uso no dia-a-dia tanto de estudantes, quanto de trabalhadores e atÃ© aficionados por arte.', 'Acessorios', 23.00, '6c977993da0cfdea2a49033b606df9a0.jpg'),
(16, 'Grafites Pentel', 'Kit de grafites da marca Pentel, modelo Ain Stein. DisponÃ­vel em B, 2B, H, 2H, HB, e nas espessuras 0.3, 0.5, 0.7 e 0.9', 'Acessorios', 11.00, '872b2e0885cac6df1fa71b1002ef6a21.jpg'),
(17, 'Bloco Canson Aquarelle', 'O bloco Canson XLÂ® Aquarela tÃªm 30 folhas de papel de 300 g/mÂ² de qualidade para estudantes, ideais para diversas tÃ©cnicas de pintura com aquarela e com Ã¡gua. Tratamento resistente ao bolor. <br/>\r\n<br/>\r\nDetalhes: <br/>\r\n<br/>\r\n<ul>\r\n<li>Quantidade: 30 folhas</li>\r\n<li>Peso ou espessura: 300 g/mÂ²</li>\r\n<li>TÃ©cnicas recomendadas: Ideal para: Aquarela, guache e acrÃ­lico.</li>\r\n<li>Formato: Bloco A4 - 21 x 29,7 cm</li>\r\n<li>Cores e texturas: Prensado a frio.</li>\r\n</ul>', 'Blocos de Desenho', 30.00, '2b53ac4a1020bc38f8b7f8d1e0431c23.jpg'),
(18, 'Bloco Canson Marker', 'O bloco Canson XLÂ® Marker Papel semitransparente, muito branco e muito suave para desenho de esquemas. Ã‰ resistente Ã  Ã¡gua e tem um revestimento de proteÃ§Ã£o que impede a penetraÃ§Ã£o da tinta. A tinta permanece na superfÃ­cie e nÃ£o atravessa o papel. <br/>\r\n<br/>\r\nDetalhes:<br/>\r\n<br/>\r\n<ul>\r\n<li>Quantidade: 100 folhas</li>\r\n<li>Peso ou espessura: 70 g/mÂ²</li>\r\n<li>TÃ©cnicas recomendadas: Ideal para: todos os tipos de marcadores, incluindo Ã  base de Ã¡lcool ou solventes.</li>\r\n<li>Formato: Bloco A4 - 21 x 29,7 cm</li>\r\n<li>Cores e texturas: Muito branco e muito suave</li>\r\n</ul>', 'Blocos de Desenho', 35.00, '5785edec981b0a59f451a6c6773075e7.jpg'),
(19, 'Caderno Muji', 'Os belos cadernos minimalistas da Muji agora disponÃ­veis para vocÃª! Excelentes para desenhos ou simplesmente para anotaÃ§Ãµes, os cadernos Muji contam com 30 folhas A5 que podem ser pautadas, quadriculadas ou lisas, Ã  sua escolha!', 'Cadernos', 25.00, 'f14c11ae5ea0ccd2135d6c12d0f3d160.jpeg'),
(23, 'Cadernos Rifle Paper Co.', 'Se vocÃª gosta de design de papelaria, entÃ£o provavelmente jÃ¡ conhece as belas ilustraÃ§Ãµes de Rifle Paper Co''s. A maneira perfeita para adicionar mais estilo Ã  sua escrivaninha Ã© se dando estes belos cadernos ilustrados com padrÃµes florais.<br/> <br/> Os cadernos Rifle Paper Co. incluem 3 cadernos finos, ideais para se carregar numa bolsa ou mochila sem ocupar muito espaÃ§o, alÃ©m de serem presentes ideais para qualquer fÃ£ de papelaria.<br/> <br/> Detalhes:<br/> <ul> <li>Total de 50 folhas</li> <li>Borda costurada</li> <li>IlustraÃ§Ã£o exclusiva de capa</li> <li>64 pÃ¡ginas pautadas</li> <li>Cada caderno mede aproximadamente 21.5 x 15.3cm</li> </ul>', 'Cadernos', 27.00, '225110.jpg'),
(24, 'Planner Semanal Seeso', 'Organize a sua semana com o Planner Semanal da Seeso. Este planner super estiloso tira o mÃ¡ximo proveito de seu design minimalista, com um design monocromÃ¡tico inspirado em jornal, perfeito para se destacar na sua escrivaninha para que vocÃª nunca mais perca um compromisso.<br/> <br/>  Este belo planner conta com 50 folhas no total, sendo 30 do planner semanal, e 20 para anotaÃ§Ãµes livres, dividas entre pauta, pontilhado e sem pauta. Isso mesmo, escreva ou desenhe o que seu coraÃ§Ã£o desejar. O planner da Seeso vem em um estojo de vinil para que vocÃª possa transportÃ¡-lo sem riscos.<br/> <br/> Detalhes:<br/> <br/> <ul> <li>Total de 50 folhas</li> <li>Tamanho A4</li> <li>30 folhas semanais e 20 folhas livres para anotaÃ§Ãµes</li> <li>Estojo PVC tamanho A4 incluÃ­do</li> <li>Fabricado na Coreia com design exclusivo da Seeso</li> </ul>', 'Agendas & Planners', 17.00, '40968.jpg'),
(25, 'Agenda Ban.do', 'AdorÃ¡veis, prÃ¡ticos e com um slogan inconstestÃ¡vel, as agendas da Ban.do sÃ£o perfeitas para anotaÃ§Ãµes dos seus compromissos mais importantes.<br/> <br/>  Com borda em espiral, elas sÃ£o bastante prÃ¡ticas e altamente portÃ¡teis, para que vocÃª sempre as tenha Ã  mÃ£o.<br/> <br/> Detalhes:<br/> <br/> <ul> <li>160 pÃ¡ginas pautadas e perfuradas</li> <li>Espiral</li> <li>Extremidades arredondadas</li> <li>PÃ¡gina extra com um pequeno estojo</li> <li>PÃ¡ginas datadas</li> <li>Tamanho mÃ©dio</li> <li>Medidas: 17.8 x 22.9cm</li> </ul>', 'Agendas & Planners', 32.00, '345504.jpg'),
(26, 'Adesivos Variados Iconic', 'Escreva seus lembretes com estilo com este kit de adesivos vintage da Iconic. Com 8 designs diferentes, ilustrados com graciosas ilustraÃ§Ãµes, este caderno de adesivos Ã© uma maravilhosa adiÃ§Ã£o Ã  sua mesa ou escrivaninha<br/> <br/>  Detalhes:<br/> <br/> <ul> <li>Design vintage</li> <li>Kit com adesivos variados</li> <li>8 designs diferentes</li> <li>Cada bloco de adesivo vem com 30 unidades</li> <li>DimensÃµes do caderno: 80 x 150mm</li> <li>Fabricado na Coreia do Sul</li> </ul>', 'Notas Autoadesivas', 21.00, '904820.jpg'),
(27, 'Kit de Adesivos Midori Vol. I', 'Este belo kit de adesivos vem com um adorÃ¡vel grupo de cachorros prontos para decorar seus cadernos, agendas e anotaÃ§Ãµes em geral.<br/> <br/> Perfeito para ser usado como marcador de pÃ¡ginas em um planner, este kit de adesivos traz 10 designs de cachorros diferentes. FÃ£s de poodles e pugs ficarÃ£o igualmente felizes com este kit, que Ã© o presente perfeito para qualquer um que ame cachorros<br/> <br/> Detalhes:<br/> <br/> <ul> <li>100 adesivos no total</li> <li>DimensÃµes: 7.5 x 16cm</li> <li>Fabricado no JapÃ£o pela Midori</li> </ul>', 'Notas Autoadesivas', 12.00, '902838.jpg'),
(28, 'Kit de Adesivos Midori Vol. II', 'Chegou a vez dos fÃ£s de gatos! Um adorÃ¡vel kit de adesivos que fazem a decoraÃ§Ã£o perfeita para o seu planner, agenda, caderno ou anotaÃ§Ã£o.<br/> <br/> Perfeito para ser usado como marcador de pÃ¡ginas em um planner, este kit de adesivos traz 10 designs de gatos diferentes, sendo o presente perfeito para qualquer um que ame gatos.<br/> <br/> Detalhes:<br/> <br/> <ul> <li>100 adesivos no total (10 de cada design)</li> <li>DimensÃµes: 7.5 x 16cm</li> <li>Fabricado no JapÃ£o pela Midori</li> </ul>', 'Notas Autoadesivas', 12.00, '747659.jpg'),
(29, 'Kit Washi Tape', 'MastÃ© Ã© a autÃªntica washi tape japonesa para decorar e organizar suas coisas e ideias.<br/> <br/> Papel japonÃªs extra fino e ultra resistente. Cola de alta aderÃªncia que nÃ£o descola, nÃ£o deixa resÃ­duos e permite reposicionamento. Formato compacto (apenas 35mm de diÃ¢metro).<br/> <br/> Detalhes:<br/> <br/> <ul> <li>Largura: 20mm</li> <li>Comprimento: 7m</li> <li>DiÃ¢metro: 35mm</li> </ul>', 'Diversos', 20.00, '523396.png'),
(30, 'Kit Washi Tape Vol. II', 'MastÃ© Ã© a autÃªntica washi tape japonesa para decorar e organizar suas coisas e ideias.<br/>\r\n<br/>\r\nPapel japonÃªs extra fino e ultra resistente. Cola de alta aderÃªncia que nÃ£o descola, nÃ£o deixa resÃ­duos e permite reposicionamento. Formato compacto (apenas 35mm de diÃ¢metro).<br/>\r\n<br/>\r\nDetalhes:<br/>\r\n<br/>\r\n<ul>\r\n<li>Largura: 20mm</li>\r\n<li>Comprimento: 7m</li>\r\n<li>DiÃ¢metro: 35mm</li>\r\n</ul>', 'Diversos', 25.00, '45e987a0dd62f04d713c99c1e857b231.jpg'),
(31, 'Cadernos Rifle Paper Co.', 'Teste', 'Cadernos', 27.00, '676197.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acesso_restrito`
--
ALTER TABLE `acesso_restrito`
  ADD PRIMARY KEY (`pk_restrito`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codcliente`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`codcontato`);

--
-- Indexes for table `emailcli`
--
ALTER TABLE `emailcli`
  ADD PRIMARY KEY (`codemail`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`codpedido`),
  ADD KEY `codcliente` (`codcliente`),
  ADD KEY `codproduto` (`codproduto`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codproduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acesso_restrito`
--
ALTER TABLE `acesso_restrito`
  MODIFY `pk_restrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `codcontato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `emailcli`
--
ALTER TABLE `emailcli`
  MODIFY `codemail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `codpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `codproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`codcliente`) REFERENCES `emailcli` (`codemail`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`codcliente`) REFERENCES `cliente` (`codcliente`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`codproduto`) REFERENCES `produto` (`codproduto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

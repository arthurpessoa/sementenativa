-- phpMyAdmin SQL Dump
-- version 4.0.3
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 09-Nov-2013 às 21:10
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.5.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sementeseviveiros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `especie`
--

CREATE TABLE IF NOT EXISTS `especie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cientifico` varchar(50) DEFAULT NULL,
  `popular` varchar(1000) DEFAULT NULL,
  `familia` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Extraindo dados da tabela `especie`
--

INSERT INTO `especie` (`id`, `cientifico`, `popular`, `familia`) VALUES
(1, 'huzeira lolsitius ', 'GIBE MONEY#I REPORT U', 'huehuebrbrbr'),
(3, 'huera', 'hue', 'kkk'),
(4, 'Hymenaea stigonocarpa (Hayne) Mart ', 'jatobá-do-cerrado#jutaí#jatobá-capo#jatobá-de-cascafina#jitaí #jutaicica', 'Fabaceae'),
(5, 'a ', '', ''),
(6, ' ', '', ''),
(7, 'asd ', 'asd', 'asd'),
(8, 'peupeu ', 'asdasd', 'piupiu'),
(9, 'lol ', '', 'lol'),
(10, 'asf ', '', 'sdg'),
(11, 'gfddsdf ', '', 'asdasd'),
(12, 'asdfsdf ', '', 'fsdadf'),
(13, 'qwert ', '', 'qwt'),
(14, 'Adenanthera pavonina L. ', 'Olho-de-dragão', 'Fabaceae'),
(15, 'algae vita ', 'alga#planta', 'algae'),
(16, 'alfacis verdis ', 'cenoura#batata', 'alfacis'),
(17, 'kjhkhkh ', 'hyt', 'poipoi'),
(18, 'batatinha ', 'batata', 'tuberculos'),
(19, '0 ', 'qwe#rrty', 'lkj'),
(20, 'Batatas Docis ', 'batata#gato', 'Tuberculos'),
(21, 'Aspidosperma pyrifolium Mart.', 'pereiro#pau- do- coaru#pequiá- da- mata#pereiro#pau- do- coaru#pequiá- da- mata#pereiro#pau- do- coaru#pequiá- da- mata', 'Apocynaceae'),
(22, 'Attalea maripa (Aubl.) Mart.', 'inajá#anajá#anajá#anajás#anajax#anajaz#butua-do-corvo#butua-do-curvo#coqueiro-anauyá#coqueiro-enayá#inajá#inajaí#inajazeiro#inayá#najá-coqueiro#nayá (Mato Grosso). Mapia (Waimiri-Atroari)#okolaxi (Xiriana Teri)#rikre (Kayapó).#inajá#anajá', 'Palmae'),
(23, 'Bowdichia virgilioides H.B.K.', 'sucupira- preta#sucupira- preta#sucupira- preta', 'Papilionoideae'),
(24, 'Caesalpinea ferrea Mart. ex Tul. var. leiostachya ', 'Pau- ferro#Pau- ferro# Giúna#no Espírito Santo#ibirá-obi#imirá-obi#imirá-itá#jucá e pau-ferro-da-mata#em Pernambuco#muirá-itá#muirá-obi#muirapixuma#mururé#pau-ferro-do-norte#no Rio Grande do Sul#pau-ferro-verdadeiro#na Bahia#peroba-sobro#no Espírito Santo#quebra-foice#no Rio de Janeiro#quiriripiranga.', 'Fabaceae '),
(25, 'Caesalpinia pyramidalis TUL.', 'Catingueira#Catingueira', 'Caesalpinaceae'),
(26, 'Cassia grandis L.', 'cássia grande#acácia#marimari#canafístula#cássia-grande#cana-fístula#fedegoso#marizeiro#mata-pasto#cássia-rosa#cássia.', 'Mimosoideae'),
(27, 'Ceiba pentandra (L.) Gaertn.', 'sumaúma#sumaúma#sumaúma#sumaúma', 'Bombacaceae'),
(28, 'Citharexylum montevidense (Spreng.) Moldenke', 'tarumã- de- espinho#tarumã- de- espinho', 'Verbenaceae'),
(29, 'Cybistax antisyphilitica Mart.', 'pé- de- anta#pé- de- anta#ipê-verde', 'Bignoniaceae'),
(30, 'Dalbergia nigra (Vell.) Fr.All. ex Benth.', 'Jacarandá- da- Bahia#Jacarandá- da- Bahia#Jacarandá- da- Bahia', 'Fabaceae'),
(31, 'Eugenia involucrata DC.', 'cerejeira#cerejeira- do- mato#cerejeira- da- terra ou cerejeira- do- rio- grande#cerejeira#cerejeira- do- mato#cerejeira- da- terra ou cerejeira- do- rio- grande#cerejeira#cerejeira- do- mato#cerejeira- da- terra ou cerejeira- do- rio- grande', 'Myrtaceae'),
(32, 'Eugenia pyriformis Camb.', 'uvaia#uvaieira#uvalha#uvalheira#uvaia#uvaieira#uvalha#uvalheira#Jaboticaba-do-campo#uvaia.#eucalipto-do-campo#uvaia#uvalha-do-campo.', 'Myrtaceae'),
(33, 'Genipa americana L.', 'jenipapeiro#jenipapeiro#jenipapeiro#jenipapeiro#jenipapo#jenipá#jenipaba', 'Rubiacea'),
(34, 'Hymenaea stigonocarpa (Hayne) Mart.', 'jatobá- do- cerrado#jatobá-do-cerrado#jutaí#jatobá-capo#jatobá-de-cascafina#jitaí ou jutaicica#jatobá-do-cerrado#jutaí#jatobá-capo#jatobá-de-cascafina#jitaí ou jutaicica', ''),
(35, 'Inga uruguensis Hook. et Arn.', 'Ingá#ingá#ingá-banana#ingá-do-brejo e ingá-de-quatro-quinas.#ingá#ingá-ferradura#ingá-graúdo#ingá-banana#ingá-de-beira-de-rio#ingá-do-brejo#angá#ingá-de-quatro-quinas e ingazeiro#ingá-mulambo.#ingá#angá#ingá-do-brejo#ingá-banana#ingá-de-quatro-quinas#ingazeiro.#Ingazeira#ingá e angá.#Ingazeira#ingá e angá.', 'Mimosaceae'),
(36, 'Lophantera lactescens Ducke', 'lofantera-da-amazônia#chuva- de- ouro', 'Malpighiaceae'),
(37, 'Luehea grandiflora Mart. & Zucc.', 'açoita-cavalo-graúdo#açoita-cavalo-graúdo', 'Tiliaceae'),
(38, 'Machaerium stipitatum (DC.) Vog.', 'sapuva#sapuva#sapuva#supuvinha', 'Fabaceae'),
(39, 'Maytenus ilicifolia Mart.ex Reiss', 'espinheira- santa#espinheira- santa', 'Celastraceae'),
(40, 'Oenocarpus bacaba Mart.', 'Bacaba#bacaba#bacaba-açu#bacaba-verdadeira#ungurahui#manoco#milpesos#punam.#bacaba#bacaba-açu#bacaba-verdadeira#ungurahui#manoco#milpesos#punam.#Bacaba', 'Arecaceae'),
(41, 'Parkia multijuga Benth.', 'pinho- cuiabano#paricá-de-terra-firme#bajão#faveira-arara-tucupi e pinho-cuiabano.', 'Fabaceae'),
(42, 'Peltophorum dubium (Spreng) Taub.', 'canafístula#canafístula#Acácia–amarela#amendoim#amendoim– falso#angico–bravo#camurça#curucaia#ibirá#monjoleiro#amendoim–bravo#angico#angico–amarelo#angico–cangalha#angico–vermelho#pororoca#barbatimão#cabeça–de–negro#cabelo–de–negro#cambuí#canafiste#canafrista–branca#canafrístula#cancença#favinha#canela–de–veado#caobi#cássia–amarela#faveira# faveiro#guarucaia#guazu#ibira–puitá#jacarandá–de–flor–amarela#madeira–nova#pau–vermelho#quebra–serra#sobrasil#tamboril#tamboril–branco#tamboril–bravO.', 'Fabaceae'),
(43, 'Platonia insignis Mart.', 'Bacuri#Bacuri#Bacuri', 'Clusiaceae'),
(44, 'Pterodon pubescens Benth.', 'sucupira- branca#sucupira- branca#quina-genciana#amendoim-falso#chapadinha#sucupira-branca.', 'Fabaceae'),
(45, 'Qualea grandiflora Mart.', 'pau-terra#pau-terra-do-campo#pau-terra-do-cerrado#pau-terra#pau-terra-do-campo#pau-terra-do-cerrado#pau-terra#pau-terra-do-campo#pau-terra-do-cerrado', 'Vochysiaceae'),
(46, 'Samanea saman Merril', 'samãn', 'Caesalpinoideae'),
(47, 'Sapindus saponaria', 'saboneteira#saboeiro#sabão- de- macaco#sabonete#fruta de sabão#saboneteira#saboeiro#sabão- de- macaco#sabonete#fruta de sabão', 'Sapindaceae'),
(48, 'Stryphnodendron adstringens (Mart.) Cov.', 'barbatimão#barbatimão', ''),
(49, 'Stryphonodendron pulcherrimum (Willd.) Hochr ', 'faveira camuzê', 'Leguminosae'),
(50, 'Tabebuia caraiba (Mart.)Bur.', 'craibeira#caraiba#paratudo- do- campo#carobeira#craiba#craibeira#caraiba#paratudo- do- campo#carobeira#craiba#craibeira#caraiba#paratudo- do- campo#carobeira#craiba', 'Bignoniaceae'),
(51, 'Tephrosia candida DC.', 'tefrósia', 'Papilionoideae'),
(52, 'Terminalia argentea', 'Capitão do mato#capitão#Capitão#capitão-do-cerrado#Capitão-da-mata#capitão#capitão-do-campo.', 'Combretaceae'),
(53, 'Zanthoxylum rhoifolium Lam.', 'Mamica- de- porca#tembetaria#mamiqueira#mamica- de- cadela#juva#juvevê#teta- de- cadela#espinho- de- vimtém#tembetaru#tambatarão#tinguaciba#guarita#tamanqueira#Mamica- de- porca#tembetaria#mamiqueira#mamica- de- cadela#juva#juvevê#teta- de- cadela#espinho- de- vimtém#tembetaru#tambatarão#tinguaciba#guarita#tamanqueira#Mamica- de- porca#tembetaria#mamiqueira#mamica- de- cadela#juva#juvevê#teta- de- cadela#espinho- de- vimtém#tembetaru#tambatarão#tinguaciba#guarita#tamanqueira#Mamica-de-porca#Limãozinho#tamanqueira#carne-de-anta', 'Rutaceae'),
(54, 'Zizyphus joazeiro MART.', 'Juazeiro#Juazeiro', 'Rhamnanaceae'),
(55, 'laranjas amarelas ', 'laranja#lima#bolacha', 'Frutas Cítricas'),
(56, 'Peixe Boi ', 'Panda', 'Peixes'),
(57, 'feijonis ', 'feijoada', 'feijão');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

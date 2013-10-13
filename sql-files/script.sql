DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
`email` varchar(40) NOT NULL default '',
`nome` varchar(40) NOT NULL default '',
`senha` varchar(12) NOT NULL default '',
`sexo` varchar(1) NOT NULL,
`CEP` varchar(8) NOT NULL,
`endereco` varchar(40) NOT NULL,
`numero` varchar(8) NOT NULL,
`bairro` varchar(40) NOT NULL,
`cidade` varchar(40) NOT NULL,
`estado` varchar(2) NOT NULL,
PRIMARY KEY (`email`)
) ENGINE=MyISAM;

CREATE TABLE ESPECIE(
	id INT AUTO_INCREMENT,
	cientifico varchar(30),
	popular varchar(1000),
	familia varchar(30),
	PRIMARY KEY(id)
);

CREATE TABLE COLHEITA(
	id INT AUTO_INCREMENT,
	nRevista INT,
	tituloArtigo varchar(500),
	autores varchar(1000),
	revista varchar(50),
	ano INT,
	volume INT,
	pagIni INT,
	pagEnd INT,
	idEspecie INT,
	classificador varchar(200),
	localColheita varchar(200),
	floracao varchar(200),
	periodoColheita varchar(200),
	metodoColheita varchar(500),
	equipamentosColheitaUsados varchar(500),
	tempoColheita varchar(100),
	tempoSecagemFrutos varchar(100),
	condicoesSecagem varchar(200),
	metodoExtracaoSementes varchar(200),
	quebraDormencia varchar(500),
	tempoBeneficiamento varchar(200),
	armazenamento varchar(200),
	substrato varchar(200),
	temperatura varchar(100),
	fotoperiodo varchar(100),
	tratamentos varchar(500),
	melhorGerminacao float,
	testesRealizados varchar(200),
	metodologia varchar(500),
	recomendacoes varchar(500),
	observacoes varchar(1000),
	fontes varchar(500),
	PRIMARY KEY(id),
	FOREIGN KEY(idEspecie) REFERENCES ESPECIE(id) ON DELETE CASCADE
);

CREATE TABLE GERMINACAO(
	id INT AUTO_INCREMENT,
	idEspecie INT,
	temperatura varchar(100),
	substrato varchar(200),
	descricaoSemente varchar(200),
	nSementesKg INT,
	pesoMilSementes FLOAT,
	sementesPorRepeticao INT,
	repeticoes INT,
	quebraDormencia varchar(500),
	periodoTeste varchar(100),
	tempoIniGerminacao varchar(100),
	tempoFimGerminacao varchar(100),
	tipoLuz varchar(50),
	umidadeSubstrato varchar(100),
	testeGemrinacaoSementes varchar(500),
	fontes varchar(500),
	PRIMARY KEY(id),
	FOREIGN KEY(idEspecie) REFERENCES ESPECIE(id) ON DELETE CASCADE
);

CREATE TABLE CARACTERIZACAO(
	id INT AUTO_INCREMENT,
	idEspecie INT,
	dataColheita varchar(50),
	localOrigemSemente varchar(500),
	indicadorMaturacao varchar(100),
	dispersao varchar(200),
	frutosKilo INT,
	pesoMilFrutos float,
	sementesPorFruto INT,
	sementesPorKilo INT,
	pesoMilSementes float,
	relacaoFrutoSemente varchar(100),
	tamanhoSemente varchar(200),
	tamanhoFruto varchar(200),
	tipoFruto varchar(100),
	pureza float,
	observacoes varchar(1000),
	fontes varchar(500),
	PRIMARY KEY(id),
	FOREIGN KEY(idEspecie) REFERENCES ESPECIE(id) ON DELETE CASCADE
);


DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
`email` varchar(40) NOT NULL default '',
`nome` varchar(40) NOT NULL default '',
`senha` varchar(12) NOT NULL default '',
`CEP` varchar(8) NOT NULL,
`endereco` varchar(40) NOT NULL,
`numero` varchar(8) NOT NULL,
`bairro` varchar(40) NOT NULL,
`cidade` varchar(40) NOT NULL,
`estado` varchar(2) NOT NULL,
`cpf-cnpj` varchar(10),
`renasem` varchar(10),
`admin` varchar(1) default 0,
`produtor` varchar(1) default 0,
`tecnico` varchar(1) default 0,
PRIMARY KEY (`email`)
) ENGINE=MyISAM;


DROP TABLE IF EXISTS `ESPECIE`;
CREATE TABLE ESPECIE(
	id INT AUTO_INCREMENT,
	cientifico varchar(30),
	popular varchar(1000) default 'Não Especificado',
	familia varchar(30),
	PRIMARY KEY(id)
);

CREATE TABLE COLHEITA(
	id INT AUTO_INCREMENT,
	email varchar(40) NOT NULL default '',
	nRevista INT,
	tituloArtigo varchar(500) default 'Não Especificado',
	autores varchar(1000) default 'Não Especificado',
	revista varchar(50) default 'Não Especificado',
	ano INT,
	volume INT,
	pagIni INT,
	pagEnd INT,
	idEspecie INT,
	classificador varchar(200) default 'Não Especificado',
	localColheita varchar(200) default 'Não Especificado',
	floracao varchar(200) default 'Não Especificado',
	periodoColheita varchar(200) default 'Não Especificado',
	metodoColheita varchar(500) default 'Não Especificado',
	equipamentosColheitaUsados varchar(500) default 'Não Especificado',
	tempoColheita varchar(100) default 'Não Especificado',
	tempoSecagemFrutos varchar(100) default 'Não Especificado',
	condicoesSecagem varchar(200) default 'Não Especificado',
	metodoExtracaoSementes varchar(200) default 'Não Especificado',
	quebraDormencia varchar(500) default 'Não Especificado',
	tempoBeneficiamento varchar(200) default 'Não Especificado',
	armazenamento varchar(200) default 'Não Especificado',
	substrato varchar(200) default 'Não Especificado',
	temperatura varchar(100) default 'Não Especificado',
	fotoperiodo varchar(100) default 'Não Especificado',
	tratamentos varchar(500) default 'Não Especificado',
	melhorGerminacao float,
	testesRealizados varchar(200) default 'Não Especificado',
	metodologia varchar(500) default 'Não Especificado',
	recomendacoes varchar(500) default 'Não Especificado',
	observacoes varchar(1000) default 'Não Especificado',
	fontes varchar(500) default 'Não Especificado',
	PRIMARY KEY(id),
	FOREIGN KEY(idEspecie) REFERENCES ESPECIE(id) ON DELETE CASCADE
);
DROP TABLE IF EXISTS `GERMINACAO`;
CREATE TABLE GERMINACAO(
	id INT AUTO_INCREMENT,
	idEspecie INT,
	temperatura varchar(100) default 'Não Especificado',
	substrato varchar(200) default 'Não Especificado',
	descricaoSemente varchar(200) default 'Não Especificado',
	nSementesKg INT default 0,
	pesoMilSementes FLOAT default 0,
	sementesPorRepeticao INT default 0,
	repeticoes INT default 0,
	quebraDormencia varchar(500) default 'Não Especificado',
	periodoTeste varchar(100) default 'Não Especificado',
	tempoIniGerminacao varchar(100) default 'Não Especificado',
	tempoFimGerminacao varchar(100) default 'Não Especificado',
	tipoLuz varchar(50) default 'Não Especificado',
	umidadeSubstrato varchar(100) default 'Não Especificado',
	testeGerminacaoSementes varchar(500) default 'Não Especificado',
	fontes varchar(500) default 'Não Especificado',
	PRIMARY KEY(id),
	FOREIGN KEY(idEspecie) REFERENCES ESPECIE(id) ON DELETE CASCADE
);

CREATE TABLE CARACTERIZACAO(
	id INT AUTO_INCREMENT,
	idEspecie INT,
	dataColheita varchar(50) default 'Não Especificado',
	localOrigemSemente varchar(500) default 'Não Especificado',
	indicadorMaturacao varchar(100) default 'Não Especificado',
	dispersao varchar(200) default 'Não Especificado',
	frutosKilo INT,
	pesoMilFrutos float,
	sementesPorFruto INT,
	sementesPorKilo INT,
	pesoMilSementes float,
	relacaoFrutoSemente varchar(100) default 'Não Especificado',
	tamanhoSemente varchar(200) default 'Não Especificado',
	tamanhoFruto varchar(200) default 'Não Especificado',
	tipoFruto varchar(100) default 'Não Especificado',
	pureza float,
	observacoes varchar(1000) default 'Não Especificado',
	fontes varchar(500) default 'Não Especificado',
	PRIMARY KEY(id),
	FOREIGN KEY(idEspecie) REFERENCES ESPECIE(id) ON DELETE CASCADE
);


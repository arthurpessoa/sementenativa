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



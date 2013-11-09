<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelGerminacao extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function addGerminacao($id, $temperatura, $substrato, $descricaoSemente, $nSementesKg, $pesoMilSementes, $sementesPorRepeticao, $repeticoes, $quebraDormencia, $periodoTeste, $tempoIniGerminacao, $tempoFimGerminacao, $tipoLuz, $umidadeSubstrato, $testeGerminacaoSementes, $fontes)
	{
		$query = $this->db->query('INSERT INTO `sementeseviveiros`.`germinacao` (`idEspecie`, `temperatura`, `substrato`, `descricaoSemente`, `nSementesKg`, `pesoMilSementes`, `sementesPorRepeticao`, `repeticoes`, `quebraDormencia`, `periodoTeste`, `tempoIniGerminacao`, `tempoFimGerminacao`, `tipoLuz`, `umidadeSubstrato`, `testeGerminacaoSementes`, `fontes`) VALUES (\''.$id.' \', \''.$temperatura.' \', \''.$substrato.' \', \''.$descricaoSemente.' \', \''.$nSementesKg.' \', \''.$pesoMilSementes.' \', \''.$sementesPorRepeticao.' \', \''.$repeticoes.' \', \''.$quebraDormencia.' \', \''.$periodoTeste.' \', \''.$tempoIniGerminacao.' \', \''.$tempoFimGerminacao.' \', \''.$tipoLuz.' \', \''.$umidadeSubstrato.' \', \''.$testeGerminacaoSementes.' \', \''.$fontes.'\');');
	}
	function dadosgerminacao($id)
	{
		$query = $this->db->query('SELECT * FROM germinacao where germinacao.idEspecie = '.$id);
		return $query->result();
	}
}

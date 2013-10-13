<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelGerminacao extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function cadastrar($id, $temperatura, $substrato, $descricaoSemente, $nSementesKg, $pesoMilSementes, $sementesPorRepeticao, $repeticoes, $quebraDormencia, $periodoTeste, $tempoIniGerminacao, $tempoFimGerminacao, $tipoLuz, $umidadeSubstrato, $testeGemrinacaoSementes, $fontes)
	{
		$query = $this->db->query('INSERT INTO `sementeseviveiros`.`germinacao` (`cientifico`, `popular`, `familia`) VALUES (\''.$id.' \', \''.$temperatura.' \', \''.$substrato.' \', \''.$descricaoSemente.' \', \''.$nSementesKg.' \', \''.$pesoMilSementes.' \', \''.$sementesPorRepeticao.' \', \''.$repeticoes.' \', \''.$quebraDormencia.' \', \''.$periodoTeste.' \', \''.$tempoIniGerminacao.' \', \''.$tempoFimGerminacao.' \', \''.$tipoLuz.' \', \''.$umidadeSubstrato.' \', \''.$testeGemrinacaoSementes.' \', \''.$fontes.'\');');
	}
	function dadosgerminacao($id)
	{
		$query = $this->db->query('SELECT * FROM germinacao where germicanao.idEspecie = '.$id);
		return $query->result();
	}
}

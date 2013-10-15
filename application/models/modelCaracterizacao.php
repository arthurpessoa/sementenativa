<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelCaracterizacao extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function addCaracterizacao($id, $dataColheita, $localOrigemSemente, $indicadorMaturacao, $dispersao, $frutosKilo, $pesoMilFrutos, $sementesPorFruto, $sementesPorKilo, $pesoMilSementes, $relacaoFrutoSemente, $tamanhoSemente, $tamanhoFruto, $tipoFruto, $pureza, $observacoes, $fontes)
	{
		$query = $this->db->query('INSERT INTO `sementeseviveiros`.`caracterizacao` (`idEspecie`,`dataColheita`,`localOrigemSemente`,`indicadorMaturacao`,`dispersao`,`frutosKilo`,`pesoMilFrutos`,`sementesPorFruto`,`sementesPorKilo`,`pesoMilSementes`,`relacaoFrutoSemente`,`tamanhoSemente`,`tamanhoFruto`,`tipoFruto`,`pureza`,`observacoes`,`fonres` ) VALUES (\''.$id.' \', \''.$dataColheita.' \', \''.$localOrigemSemente.' \', \''.$indicadorMaturacao.' \', \''.$dispersao.' \', \''.$frutosKilo.' \', \''.$pesoMilFrutos.' \', \''.$sementesPorFruto.' \', \''.$sementesPorKilo.' \', \''.$pesoMilSementes.' \', \''.$relacaoFrutoSemente.' \', \''.$tamanhoSemente.' \', \''.$tamanhoSemente.' \', \''.$tamanhoFruto.' \', \''.$tipoFruto.' \', \''.$pureza.' \', \''.$observacoes.' \', \''.$fontes.' \');');
	}
	//A que está sendo chamada não é essa, é em modelEspecie
	function dadoscaracterizacao($id)
	{
		$query = $this->db->query('SELECT * FROM caracterizacao caracterizacao.idEspecie = '.$id);
		return $query->result();
	}
}

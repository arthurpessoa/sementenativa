<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelColheita extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function addColheita($id, $email, $nRevista, $tituloArtigo, $autores, $revista, $ano, $volume, $pagIni, $pagEnd, $classificador, $localColheita, $floracao, $periodoColheita, $metodoColheita, $equipamentosColheitaUsados, $tempoColheita, $tempoSecagemFrutos, $condicoesSecagem, $metodoExtracaoSementes, $quebraDormencia, $tempoBeneficiamento, $armazenamento, $substrato, $temperatura, $fotoperiodo, $tratamentos, $melhorGerminacao, $testesRealizados, $metodologia, $recomendacoes, $observacoes, $fontes)
	{
		$query = $this->db->query('INSERT INTO `sementeseviveiros`.`colheita` (`idEspecie`, `email`, `nRevista`, `tituloArtigo`, `autores`, `revista`, `ano`, `volume`, `pagIni`, `pagEnd`, `classificador`, `localColheita`, `floracao`, `periodoColheita`, `metodoColheita`, `equipamentosColheitaUsados`, `tempoColheita`, `tempoSecagemFrutos`, `condicoesSecagem`, `metodoExtracaoSementes`, `quebraDormencia`, `tempoBeneficiamento`, `armazenamento`, `substrato`, `temperatura`, `fotoperiodo`, `tratamentos`, `melhorGerminacao`, `testesRealizados`, `metodologia`, `recomendacoes`, `observacoes`, `fontes`) VALUES ('.$id.', \''.$email.' \','.$nRevista.', \''.$tituloArtigo.' \', \''.$autores.' \', \''.$revista.' \', '.$ano.', '.$volume.','.$pagIni.','.$pagEnd.', \''.$classificador.' \', \''.$localColheita.' \', \''.$floracao.' \', \''.$periodoColheita.' \', \''.$metodoColheita.' \', \''.$equipamentosColheitaUsados.' \', \''.$tempoColheita.' \', \''.$tempoSecagemFrutos.' \', \''.$condicoesSecagem.' \', \''.$metodoExtracaoSementes.' \', \''.$quebraDormencia.' \', \''.$tempoBeneficiamento.' \', \''.$armazenamento.' \', \''.$substrato.' \', \''.$temperatura.' \', \''.$fotoperiodo.' \', \''.$tratamentos.' \', \''.$melhorGerminacao.' \', \''.$testesRealizados.' \', \''.$metodologia.' \', \''.$recomendacoes.' \', \''.$observacoes.' \', \''.$fontes.'\');');
	}
	function dadoscolheita($id)
	{
		$query = $this->db->query('SELECT * FROM colheita where colheita.idEspecie = '.$id);
		return $query->result();
	}
}

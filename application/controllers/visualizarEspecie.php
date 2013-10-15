<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VisualizarEspecie extends CI_Controller {
	public function index()
	{
		$this->load->model('ModelEspecie');
		$nome = $_GET['nome'];
		
		$id = $this->ModelEspecie->getID($nome);
		
		$dadosEsp = $this->ModelEspecie->dadosespecie($id);
		$dadosCol = $this->ModelEspecie->dadoscolheita($id);
		$dadosCar = $this->ModelEspecie->dadoscaracterizacao($id);
		$dadosGer = $this->ModelEspecie->dadosgerminacao($id);
		
		$data['cientifico'][0] = $dadosEsp[0]->cientifico;
		$data['familia'][0] = $dadosEsp[0]->familia;
		$data['popular'][0] = explode("#", $dadosEsp[0]->popular);
		
		$espCo = count($dadosCol);
		
		$data['espCo'] = $espCo;
		for($i=0; $i < $espCo; $i++)
		{
			$data['nrevista'][$i] = $dadosCol[$i]->nRevista;
			$data['tituloArtigo'][$i] = $dadosCol[$i]->tituloArtigo;
			$data['autores'][$i] = explode("#", $dadosCol[$i]->autores);
			$data['revista'][$i] = $dadosCol[$i]->revista;
			$data['ano'][$i] = $dadosCol[$i]->ano;
			$data['volume'][$i] = $dadosCol[$i]->volume;
			$data['pagini'][$i] = $dadosCol[$i]->pagIni;
			$data['pagend'][$i] = $dadosCol[$i]->pagEnd;
			$data['classificador'][$i] = $dadosCol[$i]->classificador;
			$data['localcolheita'][$i] = $dadosCol[$i]->localColheita;
			$data['floracao'][$i] = $dadosCol[$i]->floracao;
			$data['periodocolheita'][$i] = $dadosCol[$i]->periodoColheita;
			$data['metodocolheita'][$i] = $dadosCol[$i]->metodoColheita;
			$data['equipusados'][$i] = $dadosCol[$i]->equipamentosColheitaUsados;
			$data['tempocolheita'][$i] = $dadosCol[$i]->tempoColheita;
			$data['tsecagemfrutos'][$i] = $dadosCol[$i]->tempoSecagemFrutos;
			$data['condsecagem'][$i] = $dadosCol[$i]->condicoesSecagem;
			$data['metodoextracaosementes'][$i] = $dadosCol[$i]->metodoExtracaoSementes;
			$data['colquebradorm'][$i] = $dadosCol[$i]->quebraDormencia;
			$data['tempobenef'][$i] = $dadosCol[$i]->tempoBeneficiamento;
			$data['armazenamento'][$i] = $dadosCol[$i]->armazenamento;
			$data['colsubstrato'][$i] = $dadosCol[$i]->substrato;
			$data['coltemperatura'][$i] = $dadosCol[$i]->temperatura;
			$data['fotoperiodo'][$i] = $dadosCol[$i]->fotoperiodo;
			$data['tratamentos'][$i] = $dadosCol[$i]->tratamentos;
			$data['melhorgerm'][$i] = $dadosCol[$i]->melhorGerminacao;
			$data['testesrealiz'][$i] = $dadosCol[$i]->testesRealizados;
			$data['metodologia'][$i] = $dadosCol[$i]->testesRealizados;
			$data['recomendacoes'] = $dadosCol[$i]->recomendacoes;
			$data['observacoes'] = $dadosCol[$i]->observacoes;
			$data['colfontes'] = $dadosCol[$i]->fontes;
		}
		
		$espGe = count($dadosGer);
		
		$data['espGe'] = $espGe;
		
		for($i=0; $i < $espGe; $i++)
		{
			//$data['gertemperatura'] = array();
			$data['gertemperatura'][$i] = $dadosGer[$i]->temperatura;
			$data['gersubstrato'][$i] = $dadosGer[$i]->substrato;
			$data['descricaosem'][$i] = $dadosGer[$i]->descricaoSemente;
			$data['nsemkg'][$i] = $dadosGer[$i]->nSementesKg;
			$data['gerpesosksem'][$i] = $dadosGer[$i]->pesoMilSementes;
			$data['semporrep'][$i] = $dadosGer[$i]->sementesPorRepeticao;
			$data['repet'][$i] = $dadosGer[$i]->repeticoes;
			$data['gerquebradorm'][$i] = $dadosGer[$i]->quebraDormencia;
			$data['periodoteste'][$i] = $dadosGer[$i]->periodoTeste;
			$data['tiniger'][$i] = $dadosGer[$i]->tempoIniGerminacao;
			$data['ifimger'][$i] = $dadosGer[$i]->tempoFimGerminacao;
			$data['tipoluz'][$i] = $dadosGer[$i]->tipoLuz;
			$data['umidadesubs'][$i] = $dadosGer[$i]->umidadeSubstrato;
			$data['testeger'][$i] = $dadosGer[$i]->testeGerminacaoSementes;
			$data['gerfontes'][$i] = $dadosGer[$i]->fontes;
		}
		
		$espCa = count($dadosCar);
		
		$data['espCa'] = $espCa;
		for($i = 0; $i < $espCa; $i++)
		{
			$data['datacol'][$i] = $dadosCar[$i]->dataColheita;
			$data['locorigem'][$i] = $dadosCar[$i]->localOrigemSemente;
			$data['indicmatur'][$i] = $dadosCar[$i]->indicadorMaturacao;
			$data['dispers'][$i] = $dadosCar[$i]->dispersao;
			$data['frutoskg'][$i] = $dadosCar[$i]->frutosKilo;
			$data['pesokfrutos'][$i] = $dadosCar[$i]->pesoMilFrutos;
			$data['semsfruto'][$i] = $dadosCar[$i]->sementesPorFruto;
			$data['semskilo'][$i] = $dadosCar[$i]->sementesPorKilo;
			$data['carpesoksem'][$i] = $dadosCar[$i]->pesoMilSementes;
			$data['relfrutsem'][$i] = $dadosCar[$i]->relacaoFrutoSemente;
			$data['tamsemente'][$i] = $dadosCar[$i]->tamanhoSemente;
			$data['tamfruto'][$i] = $dadosCar[$i]->tamanhoFruto;
			$data['tipofruto'][$i] = $dadosCar[$i]->tipoFruto;
			$data['pureza'][$i] = $dadosCar[$i]->pureza;
			$data['obs'][$i] = $dadosCar[$i]->observacoes;
			$data['carfontes'][$i] = $dadosCar[$i]->fontes;
		}
		
		
		$this->load->view('especie', $data);
	}
}
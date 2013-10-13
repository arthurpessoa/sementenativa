<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VisualizarEspecie extends CI_Controller {
	public function index()
	{
		$this->load->model('ModelEspecie');
		
		$id = $_GET['id'];
		
		$dadosEsp = $this->ModelEspecie->dadosespecie($id);
		$dadosCol = $this->ModelEspecie->dadoscolheita($id);
		$dadosCar = $this->ModelEspecie->dadoscaracterizacao($id);
		$dadosGer = $this->ModelEspecie->dadosgerminacao($id);
		
		$data['cientifico'][0] = dadosEsp->cientifico;
		$data['familia'][0] = dadosEsp->familia;
		$data['popular'][0] = explode("#", dadosEsp->popular);
		
		$espCo = count($dadosCol);
		
		for($i=0; $i < $espCo; $i++)
		{
			$data['nrevista'][$i] = dadosEsp[$i]->nRevista;
			$data['tituloArtigo'][$i] = dadosEsp[$i]->tituloArtigo;
			$data['autores'][$i] = explode("#", dadosEsp[$i]->autores);
			$data['revista'][$i] = dadosEsp[$i]->revista;
			$data['ano'][$i] = dadosEsp[$i]->ano;
			$data['volume'][$i] = dadosEsp[$i]->volume;
			$data['pagini'][$i] = dadosEsp[$i]->pagIni;
			$data['pagend'][$i] = dadosEsp[$i]->pagEnd;
			$data['classificador'][$i] = dadosEsp[$i]->classificador;
			$data['localcolheita'][$i] = dadosEsp[$i]->localColheita;
			$data['floracao'][$i] = dadosEsp[$i]->floracao;
			$data['periodocolheita'][$i] = dadosEsp[$i]->periodoColheita;
			$data['metodocolheita'][$i] = dadosEsp[$i]->metodoColheita;
			$data['equipusados'][$i] = dadosEsp[$i]->equipamentosColheitaUsados;
			$data['tempocolheita'][$i] = dadosEsp[$i]->tempoColheita;
			$data['tsecagemfrutos'][$i] = dadosEsp[$i]->tempoSecagemFrutos;
			$data['condsecagem'][$i] = dadosEsp[$i]->condicoesSecagem;
			$data['metodoextracaosementes'][$i] = dadosEsp[$i]->metodoExtracaoSementes;
			$data['colquebradorm'][$i] = dadosEsp[$i]->quebraDormencia;
			$data['tempobenef'][$i] = dadosEsp[$i]->tempoBeneficiamento;
			$data['armazenamento'][$i] = dadosEsp[$i]->armazenamento;
			$data['colsubstrato'][$i] = dadosEsp[$i]->substrato;
			$data['coltemperatura'][$i] = dadosEsp[$i]->temperatura;
			$data['fotoperiodo'][$i] = dadosEsp[$i]->fotoperiodo;
			$data['tratamentos'][$i] = dadosEsp[$i]->tratamentos;
			$data['melhorgerm'][$i] = dadosEsp[$i]->melhorGerminacao;
			$data['testesrealiz'][$i] = dadosEsp[$i]->testesRealizados;
			$data['metodologia'][$i] = dadosEsp[$i]->testesRealizados;
			$data['recomendacoes'] = dadosEsp[$i]->recomendacoes;
			$data['observacoes'] = dadosEsp[$i]->observacoes;
			$data['colfontes'] = dadosEsp[$i]->fontes;
		}
		
		$espGe = count($dadosGer);
		
		for($i=0; $i < $espGe; $i++)
		{
			$data['gertemperatura'] = dadosGer[$i]->temperatura;
			$data['gersubstrato'] = dadosGer[$i]->substrato;
			$data['descricaosem'] = dadosGer[$i]->descricaoSemente;
			$data['nsemkg'] = dadosGer[$i]->nSementesKg;
			$data['gerpesosksem'] = dadosGer[$i]->pesoMilSementes;
			$data['semporrep'] = dadosGer[$i]->sementesPorRepeticao;
			$data['repet'] = dadosGer[$i]->repeticoes;
			$data['gerquebradorm'] = dadosGer[$i]->quebraDormencia;
			$data['periodoteste'] = dadosGer[$i]->periodoTeste;
			$data['tiniger'] = dadosGer[$i]->tempoIniGerminacao;
			$data['ifimger'] = dadosGer[$i]->tempoFimGerminacao;
			$data['tipoluz'] = dadosGer[$i]->tipoLuz;
			$data['umidadesubs'] = dadosGer[$i]->umidadeSubstrato;
			$data['testeger'] = dadosGer[$i]->testeGerminacaoSementes;
			$data['gerfontes'] = dadosGer[$i]->fontes;
		}
		
		$espCa = count($dadosCar);
		
		for($i = 0; $i < $espCa; $i++)
		{
			$data['datacol'] = dadosCar[$i]->dataColheita;
			$data['locorigem'] = dadosCar[$i]->localOrigemSemente;
			$data['indicmatur'] = dadosCar[$i]->indicadorMaturacao;
			$data['dispers'] = dadosCar[$i]->dispersao;
			$data['frutoskg'] = dadosCar[$i]->frutosKilo;
			$data['pesokfrutos'] = dadosCar[$i]->pesoMilFrutos;
			$data['semsfruto'] = dadosCar[$i]->sementesPorFruto;
			$data['semskilo'] = dadosCar[$i]->sementesPorKilo;
			$data['carpesoksem'] = dadosCar[$i]->pesoMilSementes;
			$data['relfrutsem'] = dadosCar[$i]->relacaoFrutoSemente;
			$data['tamsemente'] = dadosCar[$i]->tamanhoSemente;
			$data['tamfruto'] = dadosCar[$i]->tamanhoFruto;
			$data['tipofruto'] = dadosCar[$i]->tipoFruto;
			$data['pureza'] = dadosCar[$i]->pureza;
			$data['obs'] = dadosCar[$i]->observacoes;
			$data['carfontes'] = dadosCar[$i]->fontes;
		}
		
		
		$this->load->view('especie', $data);
	}
}
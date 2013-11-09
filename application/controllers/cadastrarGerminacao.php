<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CadastrarGerminacao extends CI_Controller {
	public function checkGerminacao()
	{
		$this->load->model('ModelGerminacao');
		$this->load->model('ModelEspecie');

		$especie = $_POST['especie']; //nome da espécie, descobrir numero
		$temp = $this->checar($_POST['temp']);
		//$temp = $this->checar($);
		$subs = $this->checar($_POST['subs']);
		
		$descs = $this->checar($_POST['descs']);
		
		$semkg = $this->checar($_POST['semkg']);
		$peso = $this->checar($_POST['peso']);
		$repet = $this->checar($_POST['repet']);
		$nrepet = $this->checar($_POST['nrepet']);
		$qd = $this->checar($_POST['qd']);
		
		$dataini = $this->checar($_POST['dataini']);
		$tempger = $this->checar($_POST['tempger']);
		
		$datafim = $this->checar($_POST['datafim']);
		
		$tipoluz = $this->checar($_POST['tipoluz']);
		
		$umisub = $this->checar($_POST['umisub']);
		
		$testegerm = $this->checar($_POST['testegerm']);
		
		$fontes = $this->checar($_POST['fontes']);
		

		$id = $this->ModelEspecie->getID($especie);
		
		$this->ModelGerminacao->addGerminacao($id, $temp, $subs, $descs, $semkg, $peso, $repet, $nrepet, $qd, $tempger, $dataini, $datafim, $tipoluz, $umisub, $testegerm, $fontes);
		
		$data['erro'] = '';
		$data['ok'] = 'Germinação cadastrada com uscesso!';
		$data['especies'] = $this->ModelEspecie->getAllSpecies();
		$this->load->view('CadastrarGerminacao', $data);
		
	}
	public function index()
	{
		$this->load->model('ModelEspecie');
		
		//CONECTAR NO BANCO E RECUPERAR LISTA DE ESPÉCIES
		$data['erro'] = '';
		$data['ok'] = '';
		$data['especies'] = $this->ModelEspecie->getAllSpecies();
		$this->load->view('CadastrarGerminacao', $data);
	}

	public function checar($var){
		if(empty(trim($var))){
			$var = "Não Especificado";
		}
		return $var;
	}

}


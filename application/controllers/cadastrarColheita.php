<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CadastrarColheita extends CI_Controller {
	public function checkColheita()
	{
		$especie = $_POST['especie'];
		$nRev = $_POST['nRev'];
		$titu = $_POST['titu'];
		$autores = '';
		$revi = $_POST['revi'];
		$ano = $_POST['ano'];
		$volu = $_POST['volu'];
		$pagI = $_POST['pagI'];
		$pagE = $_POST['pagE'];
		$clas = $_POST['clas'];
		$loca = $_POST['loca'];
		$flor = $_POST['flor'];
		$peri = $_POST['peri'];
		$metoc = $_POST['metoc'];
		$equi = $_POST['equi'];
		$tempc = $_POST['tempc'];
		$tempsf = $_POST['tempsf'];
		$cond = $_POST['cond'];
		$metoe = $_POST['metoe'];
		$queb = $_POST['queb'];
		$tempob = $_POST['tempob'];
		$arma = $_POST['arma'];
		$subs = $_POST['subs'];
		$temper = $_POST['temper'];
		$foto = $_POST['foto'];
		$trat = $_POST['trat'];
		$melh = $_POST['melh'];
		$test = $_POST['test'];
		$metod = $_POST['metod'];
		$reco = $_POST['reco'];
		$obse = $_POST['obse'];
		$font = $_POST['font'];
		
		if($nRev == '')
		{
			$nRev = 0;
		}
		if($ano == '')
		{
			$ano = 0;
		}
		if($volu == '')
		{
			$volu = 0;
		}
		if($pagI == '')
		{
			$pagI = 0;
		}
		if($pagE == '')
		{
			$pagE = 0;
		}
		
		$autores = "a";
		/*
		$i = 1;

		while(isset($_POST['auto'.$i]))
		{
			$autores = $autores.$_POST['auto'.$i]."#";
		}
		*/
		
		$this->load->model('ModelEspecie');
		$id = $this->ModelEspecie->getID($especie);

		$this->load->model('ModelColheita');
		$this->ModelColheita->addColheita($id, $nRev, $titu, $autores, $revi, $ano, $volu, $pagI, $pagE, $clas, $loca, $flor, $peri, $metoc, $equi, $tempc, $tempsf, $cond, $metoe, $queb, $tempob, $arma, $subs, $temper, $foto, $trat, $melh, $test, $metod, $reco, $obse, $font);
		
		$data['erro'] = '';
		$data['ok'] = 'Colheita cadastrada com sucesso!';
		$data['especies'] = $this->ModelEspecie->getAllSpecies();
		$this->load->view('CadastrarColheita', $data);
	}
	public function index()
	{
		$this->load->model('ModelEspecie');
		//CONECTAR NO BANCO E RECUPERAR LISTA DE ESPÉCIES
		$data['erro'] = '';
		$data['ok'] = '';
		$data['especies'] = $this->ModelEspecie->getAllSpecies();
		$this->load->view('CadastrarColheita', $data);
	}
}
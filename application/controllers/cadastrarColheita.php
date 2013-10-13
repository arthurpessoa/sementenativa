<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CadastrarColheita extends CI_Controller {
	public function checkColheita()
	{
		$especie = $_POST['especie'];
		$nRev = $_POST['nRev'];
		$titu = $_POST['titu'];
		$auto1***********************
		$revi = $_POST['revi'];
		$ano = $_POST['ano'];
		$volu = $_POST['volu'];
		$pagI = $_POST['pagI'];
		$pagE = $_POST['pagE'];
		$clas = $_POST['clas'];
		$loca = $_POST['loca'];
		$flor = $_POST['flor'];
		$peri = $_POST['peri'];
		***$meto
		$equi = $_POST['equi'];
		$tempc = $_POST['tempc'];
		$tempsf = $_POST['tempsf'];
		$cond = $_POST['cond'];
		***$meto
		$queb = $_POST['queb'];
		***$temp
		$arma = $_POST['arma'];
		$subs = $_POST['subs'];
		***$temp
		$foto = $_POST['foto'];
		$trat = $_POST['trat'];
		$melh = $_POST['melh'];
		$test = $_POST['test'];
		***$meto
		$reco = $_POST['reco'];
		$obse = $_POST['obse'];
		$font = $_POST['font'];
		
	}
	public function index()
	{
		//CONECTAR NO BANCO E RECUPERAR LISTA DE ESPÉCIES
		$data['erro'] = '';
		$data['especies'] = array('esp1', 'esp2', 'esp3');
		$this->load->view('CadastrarColheita', $data);
	}
}
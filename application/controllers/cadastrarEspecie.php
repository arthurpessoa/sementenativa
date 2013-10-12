<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CadastrarEspecie extends CI_Controller {
	public function checkEspecie()
	{

		 $this->load->model('ModelEspecie');

		 //recebo os dados do form
		 $cientifico = $_POST['cientifico'];
		 $familia = $_POST['familia'];
		 $popular = array();
		 $popCount = 1;
		 while(isset($_POST['popular'.$popCount])){
		 	$popular[$popCount-1] =  $_POST['popular'.$popCount];
		 	$popCount = $popCout + 1;
		 }
		 
		 $especieCheck = $this->ModelEspecie->checkEspecie($cientifico);
		 
		 if($especieCheck)
		 {
		 	$data['erro'] = '*Espécie já cadastrada!';
		 	$this->load->view('CadastrarEspecie', $data);
		 }
		 else
		 {
			 $this->ModelUsuario->cadastrar($cientifico,$familia,$popular);
		 }


	}
	public function index()
	{
		$data['erro'] = '';
		$this->load->view('CadastrarEspecie', $data);
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Especies extends CI_Controller {
	public function index()
	{
		$this->load->model('ModelEspecie');
		$data['result'] = FALSE;
		$this->load->view('especies', $data);
	}
	public function buscar(){
		$this->load->model('ModelEspecie');

		$especie = $_POST['especie'];	

		if($especie!=""){
			$data['especies'] = $this->ModelEspecie->BuscaEspecies($especie);
			$data['result'] = TRUE;
			$this->load->view('especies', $data);
		}else{
			redirect(base_url()."especies",'refresh');
		}	
	}
}
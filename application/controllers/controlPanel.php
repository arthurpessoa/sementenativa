<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ControlPanel extends CI_Controller {
	public function index()
	{

		$email = $this->session->userdata('email');

		$this->load->model('ModelUsuario');

		$data['admin'] = $this->ModelUsuario->checkAdmin($email);
		$data['tecnico'] =  $this->ModelUsuario->checkTecnico($email);
		$data['produtor'] = $this->ModelUsuario->checkProdutor($email);
		$this->load->view('controlPanel', $data);
	}
}
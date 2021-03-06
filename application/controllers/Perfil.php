<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller {
	public function index()
	{
		$this->load->model('ModelLogin');
		$email = $this->session->userdata('email');
		$profile = $this->ModelLogin->getAllinfo($email);
		
		$data['nome'] = $profile->nome;
		$data['email'] = $profile->email;
		//$data['sexo'] = $profile->sexo;
		$data['renasem'] = $profile->renasem;
		$data['cpf-cnpj'] = $profile->cpfcnpj;
		$data['cep'] = $profile->CEP;
		$data['endereco'] = $profile->endereco;
		$data['numero'] = $profile->numero;
		$data['bairro'] = $profile->bairro;
		$data['cidade'] = $profile->cidade;
		$data['estado'] = $profile->estado;
		//$data['telefone'] = $profile->telefone;
		$this->load->view('perfil', $data);
	}
}
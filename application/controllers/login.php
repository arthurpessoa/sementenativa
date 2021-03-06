<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url()."login",'refresh');
	}

	public function checklogin()
	{
	
		$this->load->model('ModelLogin');

		$email = $_POST['email']; 
		$senha = $_POST['senha']; 

		
		$loginCheck = $this->ModelLogin->checkLogin($email,$senha);
		if($loginCheck)
		 {
		 	

		 	$info = $this->ModelLogin->getAllinfo($email);

		 	$session = array(
                'nome' => $this->ModelLogin->getNome($email),
				'email' => $email,
                'logged' => true,
                'cpfcnpj' => $info ->cpfcnpj,
                'renasem' => $info ->renasem,
                'endereco' =>  $info ->endereco,
                'CEP' => $info->CEP,
                'municipio' => $info->cidade,
                'UF' => $info->estado,
                'telefone' => $info->telefone,
                'numero' => $info->numero
            );



		 	$this->session->set_userdata($session);


			$redirect =  base_url()."controlPanel"; //redireciona
			header("location:$redirect"); 
		 }
		 else
		{
			$data['erro'] = 'Email ou senha incorreta!';
			$data['ok'] = '';
			$this->load->view('login',$data);	
		}
	}
	public function index()
	{		
		if($this->session->userdata('logged')){
			redirect(base_url()."controlPanel",'refresh');
		}else{
			$data['erro'] = '';
			$data['ok'] = '';
			$this->load->view('login',$data);
		}
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function logout()
	{
		session_start();
		session_destroy();
		$this->load->view('home');
	}

	public function checklogin()
	{
	
		$this->load->model('ModelLogin');

		$email = $_POST['email']; 
		$senha = $_POST['senha']; 

		$loginCheck = $this->ModelLogin->checkLogin($email,$senha);
		if($loginCheck)
		 {
		 	session_register("email");
			session_register("senha");

			//TODO: Redirecionar pra area do usuário
		 	echo "logado"; 
		 }
		 else
		{
			$data['erro'] = 'Email ou senha incorreta!';
			$this->load->view('login',$data);	
		}
	}
	public function index()
	{		
		$data['erro'] = '';
		$this->load->view('login',$data);
	}
}
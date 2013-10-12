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
		 	
		 	$session = array(
                'nome' => $this->ModelLogin->getNome($email),
                'logged' => true
            );
		 	$this->session->set_userdata($session);


			$redirect =  base_url()."controlPanel"; //redireciona
			header("location:$redirect"); 
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
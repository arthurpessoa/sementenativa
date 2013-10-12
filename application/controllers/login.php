<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function checklogin()
	{
		echo $_POST['email']; 
		echo $_POST['senha']; 
		$this->load->view('login');
	}
	public function index()
	{		
		$this->load->view('login');
	}
	public function logout()
	{
		echo "check;";
		$this->load->view('login');
	}
}
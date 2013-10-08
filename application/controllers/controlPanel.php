<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ControlPanel extends CI_Controller {
	public function index()
	{
		$this->load->view('controlPanel');
	}
}
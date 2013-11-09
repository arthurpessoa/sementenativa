<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Version extends CI_Controller {
	public function index()
	{
		echo 'PHP version: '.phpversion();
	}
}
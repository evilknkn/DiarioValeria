<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contacto extends CI_Controller
{	
	public function index()
	{
		$data['body'] = 'page/contacto';
		$this->load->view('app', $data);
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller
{	
	public function index()
	{
		$data['body'] = 'diario/indice';
		$this->load->view('app', $data);
		
	}
}
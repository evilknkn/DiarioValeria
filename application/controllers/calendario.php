<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Calendario extends CI_Controller
{	
	public function index()
	{
		$data['body'] = 'page/calendario';
		$this->load->view('app', $data);
	}
}
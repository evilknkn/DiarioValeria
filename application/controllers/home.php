<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{
	public function index()
	{	
		$this->load->model('Page_model');
		$this->load->helper('funciones_externas');

		$data['post_recent'] = $this->Page_model->recent_post();
		//print_r($data['post_recent']);exit;
		$data['body'] = 'page/home';
		$this->load->view('app', $data);
	}
}
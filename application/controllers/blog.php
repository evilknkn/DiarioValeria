<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller
{	
	public function index()
	{	
		$this->load->model('Page_model');
		$this->load->helper('funciones_externas');

		$data['five_recent'] = $this->Page_model->recent_post_five();
		$data['indice'] = $this->Page_model->indice_post();

		$data['body'] = 'diario/indice';
		$this->load->view('app', $data);
		
	}

	public function post($post = null)
	{
		$this->load->model('Page_model');
		$this->load->helper('funciones_externas');

		$params = array('short_title' => $post);
		$table 	= 'diario_blog';
		
		$data['five_recent'] = $this->Page_model->recent_post_five();
		$data['post'] = $this->Page_model->read_post($table, $params);

		$data['body'] = 'diario/post_diario';
		$this->load->view('app', $data);
	}

}
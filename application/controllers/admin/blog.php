<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller
{
	public function new_post()
	{	
		$data['body'] = 'admin/blog/form_post';
		$this->load->view('admin/app', $data);
	}
}
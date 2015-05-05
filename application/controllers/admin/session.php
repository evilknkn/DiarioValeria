<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session extends CI_controller
{
	public function index()
	{
		redirect('admin/blog/new_post');
	}
}
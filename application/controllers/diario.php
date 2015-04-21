<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Diario extends CI_Controller
{	
	public function erotico($id_blog = null)
	{
		$data['contenido'] = 'diario/lista_diario';
		$this->load->view('page/principal', $data);
		
	}
}
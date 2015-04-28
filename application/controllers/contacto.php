<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contacto extends CI_Controller
{	
	public function index()
	{	
		$this->form_validation->set_rules('nombre', ' nombre', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('telephone', 'teléfono', 'required');
        $this->form_validation->set_rules('message', 'mensaje', 'required');
        $this->form_validation->set_message('require', 'Este campo es obligatorio');
		if($this->form_validation->run()):
			$elements['name']       = $this->input->post('nombre');
	        $elements['correo']     = $this->input->post('email');
	        $elements['telefono']   = $this->input->post('telephone');
	        $elements['mensaje']    = $this->input->post('message');
	        
            $mail = $this->load->view('message_email', $elements, TRUE);
           // $this->load->view('message_email', $elements);
            $this->load->library('email');

            $this->email->from('midiarioerotico.com.mx', 'Contacto Mi diario erótico');
            $this->email->to( 'ing.omarkaballero@gmail.com' );
            //$this->email->to( 'valeria.martell@outlook.com');
            $this->email->bcc('contacto.valeriamartell@gmail.com' );
            $this->email->subject("Tienes un correo de " .$elements['name'] );
            $this->email->message($mail);
        

            if(! $this->email->send()) {
            //Se registra el error en el log de sistema
            }

            $this->session->set_flashdata('success', 'Tu información se ha enviado, pronto te contactare.');
            redirect(base_url('contacto'));	
		else:
			$data['body'] = 'page/contacto';
			$this->load->view('app', $data);
		endif;
	}	

}
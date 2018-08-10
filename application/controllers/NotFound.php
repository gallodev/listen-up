<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotFound extends CI_Controller {

	public function index()
	{	        
		$data['heading'] = "Página não encontrada !";
		$data['message'] = "A página solicitada não existe.";
		$this->load->view('errors/html/error_404',$data);
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taller extends CI_Controller {

	public function index()
	{
		$this->load->view('Taller/index_view');
	}

	public function primer_vista(){
		//llamar un metodo que carge la vista
		$this->load->view('primer_vista_view');
	}
}
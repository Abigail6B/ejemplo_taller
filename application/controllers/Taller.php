<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taller extends CI_Controller {

	//creacion de un construtor
	public function __construct(){
		//Hereda los metodos de la super clase CI_Controles
		parent:: __construct();
		//Agregar Helpers y Librerias adicionales al controlador
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('Taller/index_view');
	}

	public function primer_vista(){
		//llamar un metodo que carge la vista
		$this->load->view('primer_vista_view');
	}

    public function agregar_taller(){
		//llamar un metodo que carge la vista
		$this->load->view('Taller/agregar_taller_view');
	}

	public function blank_view(){
		//llamar un metodo que carge la vista
		$this->load->view('Taller/blank_view');
	}
}
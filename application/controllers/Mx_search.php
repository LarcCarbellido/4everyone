<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mx_search extends CI_Controller {
	
	public function index()
	{
		$data['msg'] = "No autorizado.";
		$data['status'] = false;
		echo json_encode($data);
	}

	public function estado(){
		$this->load->model('codigos_cp');
		$result = $this->codigos_cp->get_estados();
		echo json_encode($result);
	}
	public function municipio($idEstado){
		$this->load->model('codigos_cp');
		$result = $this->codigos_cp->get_municipios_by_estado($idEstado);
		echo json_encode($result);
	}
	public function ciudad($idEstado, $idMunicipio){
		$this->load->model('codigos_cp');
		$result = $this->codigos_cp->get_ciudad_by_municipio($idEstado, $idMunicipio);
		echo json_encode($result);
	}

	public function colonia($idEstado, $idMunicipio){
		$this->load->model('codigos_cp');
		$result = $this->codigos_cp->get_colonias_by_ciudad($idEstado, $idMunicipio);
		echo json_encode($result);
	}

	public function data_by_cp($cp = null){	
		$this->load->model('codigos_cp');
		$result = $this->codigos_cp->all_by_codigo($cp);
		echo json_encode($result);
	}

}

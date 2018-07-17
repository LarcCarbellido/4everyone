<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigos_cp extends CI_Model
{	
    public function get_estados(){        
        $query = $this->db->query("SELECT idEstado, estado, idMunicipio, municipio FROM location GROUP BY idEstado");
        $result = $query->result_array();
        return $result;         
    }   
    
    public function get_municipios_by_estado($idEstado){
         $query = $this->db->query("SELECT idMunicipio, municipio FROM location where idEstado = $idEstado GROUP BY idMunicipio");
        $result = $query->result_array();
        return $result;         
    }

    public function get_ciudad_by_municipio($idEstado, $idMunicipio){
        $query = $this->db->query("SELECT ciudad from location where idEstado = $idEstado  and idMunicipio = $idMunicipio  and CHAR_LENGTH(ciudad) > 1 GROUP BY ciudad");
        $result = $query->result_array();
        return $result;         
    }
    
    public function get_colonias_by_ciudad($idEstado, $idMunicipio){
        $query = $this->db->query("SELECT asentamiento, cp from location where idEstado = $idEstado  and idMunicipio = $idMunicipio");
        $result = $query->result_array();
        return $result;         
    }
    
 	public function  all_by_codigo($cp){
        $query = $this->db->query("SELECT * from location where cp = '$cp' ");
        $result = $query->result_array();
        return $result;
    }
    
    public function  get_id($idEstado, $idMunicipio, $cp, $asentamiento){
        $query = $this->db->query("SELECT id from location where idEstado = $idEstado  and idMunicipio = $idMunicipio and cp = $cp and asentamiento = '$asentamiento' LIMIT 1");
        $result = $query->result_array();
        return $result;
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autorizaciones_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function autorizaciones($usuario, $submodulo){
       // $this->db->select("*");
        $this->db->from("autorizaciones");
        $this->db->where("id_submodulo", $submodulo);
        $this->db->where("id_usuario", $usuario);
        $query= $this->db->count_all_results();
        return $query;
    }

    public function usuarios_rol(){
        $this->db->select("*");
        $this->db->from("usuarios");
        $this->db->join("usuarios_roles","usuarios_roles.ID = usuarios.id_rol");
        $query = $this->db->get();
        return $query->result();
    }

    public function submodulos(){
        $this->db->select("*, submodulos.id as id_sub ");
        $this->db->from("submodulos");
        $this->db->join("modulos","modulos.id = submodulos.id_modulo");
        $query = $this->db->get();
        return $query->result();
    }

    public function submodulosChecked(){
        $this->db->select("*, submodulos.id as id_sub ");
        $this->db->from("submodulos");
        $this->db->join("modulos","modulos.id = submodulos.id_modulo");
        $query = $this->db->get();
        return $query->result();
    }

    public function leer(){
        return "Hola";
    }


}
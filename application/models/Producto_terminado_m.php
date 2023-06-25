<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Producto_terminado_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_producto_terminado($where = NULL)//datos para datatable
    {
        $this->db->select("*");
        $this->db->from("producto_terminado_view");
        if ($where != null) {
            $this->db->like($where);
        }else {
            //$this->db->where("fecha_entrega BETWEEN CURDATE() - INTERVAL 31 DAY AND CURDATE()");
            //consulta donde trae los ultimos 30 dias, comentado por cuestiones de optimizacion
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function get_contenido_producto_terminado($id_producto) //obtenemos los datos mostrados en el modal
    {
        $this->db->select("*,username,contenido_producto_terminado.id AS id ");
        $this->db->from("contenido_producto_terminado");
        $this->db->join("producto_terminado", "producto_terminado.id = contenido_producto_terminado.id_producto ");
        $this->db->where("id_producto", $id_producto);
        $query = $this->db->get();
        return $query->result();
    }
    public function update_producto_terminado($data,$where)
    {
        $this->db->update("producto_terminado", $data, $where);
        return $this->db->insert_id();
    }
    
    public function update_contenido($data,$where)
    {
        $this->db->update("contenido_producto_terminado", $data, $where);
        return $this->db->insert_id();
    }
    public function update_detalle($data,$where)
    {
        $this->db->update("detalle_producto_terminado", $data, $where);
        return $this->db->insert_id();
    }
   

}

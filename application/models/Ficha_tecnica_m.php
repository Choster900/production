<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ficha_tecnica_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function mostrar_ficha($todos = NULL, $id = NULL, $tipo = NULL)
    {
        $this->db->select("*");
        $this->db->from("ficha_tecnica");
        $this->db->order_by("fecha_creacion", "DESC");
        if ($todos == 1) {
            $this->db->limit(20);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function get_ficha_reporte($type, $id)
    {
        if ($type == "impresoras") {
            $this->db->select("*");
            $this->db->from("ficha_impresoras");
            $this->db->where("id", $id);
            $query = $this->db->get();
            return $query->result();
        } else if ($type == "pegadoras") {
            $this->db->select("*");
            $this->db->from("ficha_pegadoras");
            $this->db->where("id", $id);
            $query = $this->db->get();
            return $query->result();
        } else if ($type == "troqueladoras") {
            $this->db->select("*");
            $this->db->from("ficha_troqueladoras");
            $this->db->where("id", $id);
            $query = $this->db->get();
            return $query->result();
        }
    }
    public function get_formulacion_tinta($id)
    {
        $this->db->select("*");
        $this->db->from("formulacion_tintas");
        $this->db->where("id_ficha", $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function update_form_tinta($data, $where)
    {
        $this->db->update("formulacion_tintas", $data, $where);
        return $this->db->insert_id();
    }
    public function get_formulacion_imprim($id)
    {
        $this->db->select("*");
        $this->db->from("formulacion_imprims");
        $this->db->where("id_ficha", $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_documento_impresora($id)
    {
        $this->db->select("*");
        $this->db->from("documentos_ficha_impresora");
        $this->db->where("fk_ficha_tecnica", $id); 
        $query = $this->db->get();
        return $query->result();
    }

    public function get_documento_pegadora($id)
    {
        $this->db->select("*");
        $this->db->from("documentos_ficha_pegadora");
        $this->db->where("fk_ficha_tecnica", $id); 
        $query = $this->db->get();
        return $query->result();
    }

    public function get_documento_troqueladora($id)
    {
        $this->db->select("*");
        $this->db->from("documentos_ficha_troqueladora");
        $this->db->where("fk_ficha_tecnica", $id); 
        $query = $this->db->get();
        return $query->result();
    }

    public function update_form_imprim($data, $where)
    {
        $this->db->update("formulacion_imprims", $data, $where);
        return $this->db->insert_id();
    }
    public function resumen()
    {
        $this->db->select("COUNT(*) AS CONTAR_IMPRESORAS,
        ( SELECT COUNT(*) FROM ficha_pegadoras ) AS CONTAR_PEGADORAS,
        ( SELECT COUNT(*) FROM ficha_troqueladoras ) AS CONTAR_TROQUELADORAS,
        (( SELECT COUNT(*) FROM ficha_impresoras ) + ( SELECT COUNT(*) FROM ficha_pegadoras ) + ( SELECT COUNT(*) FROM ficha_troqueladoras ) ) AS TOTAL,
        ( SELECT fecha_ingreso FROM ficha_impresoras UNION SELECT fecha_ingreso FROM ficha_pegadoras UNION SELECT fecha_ingreso FROM ficha_troqueladoras ORDER BY fecha_ingreso DESC LIMIT 1 ) AS FECHA_MAYOR ");
        $this->db->from("ficha_impresoras");

        $query = $this->db->get();
        return $query->result();
    }
    public function mostrar_ficha_filtrado($filtro)
    {
        $query = $this->db->query("select * from ficha_tecnica $filtro");
        return $query->result();
    }
    public function insertar_nueva_ficha($data, $tipo)
    {
        if ($tipo == "impresoras") 
        {
            $this->db->insert('ficha_impresoras', $data);
            $id_ficha = $this->db->insert_id();
            
            // Crear registro en la tabla B
            $data_b = array(
                'fk_ficha_tecnica' => $id_ficha,
                'nombre' => '',
                'fecha' => '',
                'url' => '',
                'pdf' => ''
            );
            $this->db->insert('documentos_ficha_impresora', $data_b);
            
            return $id_ficha;
        } 
        else if ($tipo == "pegadoras") 
        {
            $this->db->insert('ficha_pegadoras', $data);
            $id_ficha = $this->db->insert_id();
            
            // Crear registro en la tabla B
            $data_b = array(
                'fk_ficha_tecnica' => $id_ficha,
                'nombre' => '',
                'fecha' => '',
                'url' => '',
                'pdf' => ''
            );
            $this->db->insert('documentos_ficha_pegadora', $data_b);
            
            return $id_ficha;
        } 
        else if ($tipo == "troqueladoras") 
        {
            $this->db->insert('ficha_troqueladoras', $data);
            $id_ficha = $this->db->insert_id();
            
            // Crear registro en la tabla B
            $data_b = array(
                'fk_ficha_tecnica' => $id_ficha,
                'nombre' => '',
                'fecha' => '',
                'url' => '',
                'pdf' => ''
            );
            $this->db->insert('documentos_ficha_troqueladora', $data_b);
            
            return $id_ficha;
        }
    }
    public function insertar_formulacion_tinta($data)
    {
        $this->db->insert("formulacion_tintas", $data);
        return $this->db->insert_id();
    }
    public function insertar_formulacion_imprim($data)
    {
        $this->db->insert("formulacion_imprims", $data);
        return $this->db->insert_id();
    }
    public function modificar_ficha($tipo, $data, $where)
    {
        if ($tipo == "impresora") {
            $this->db->update("ficha_impresoras", $data, $where);
            return $this->db->insert_id();
        } else if ($tipo == "pegadora") {
            $this->db->update("ficha_pegadoras", $data, $where);
            return $this->db->insert_id();
        } else if ($tipo == "troqueladora") {
            $this->db->update("ficha_troqueladoras", $data, $where);
            return $this->db->insert_id();
        }
    }

    public function update_version_ficha($data, $where)
    {
        $this->db->update("ficha_impresoras", $data, $where);
        return $this->db->insert_id();
    }

    public function eliminar($where, $tipo)
    {
        if ($tipo == "impresoras") {
            $this->db->delete("ficha_impresoras", $where);
            return $this->db->insert_id();
        } else if ($tipo == "pegadoras") {
            $this->db->delete("ficha_pegadoras", $where);
            return $this->db->insert_id();
        } else if ($tipo == "troqueladoras") {
            $this->db->delete("ficha_troqueladoras", $where);
            return $this->db->insert_id();
        }
    }

    /*public function upload($tipo, $data, $where)
    {
        if ($tipo == "impresora") {
            $this->db->update("ficha_impresoras", $data, $where);
            return $this->db->insert_id();
        }
    }*/
}

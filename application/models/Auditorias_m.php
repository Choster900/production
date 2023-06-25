<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auditorias_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_auditoria($codigo = null)
    {

        $this->db->select("r.id as codigo,r.fecha_reporte,s.nombre,turno,tipo")
                    ->from('fcc_auditoria r')
            ->join('usuarios s','s.id = r.auditor');
            if ($codigo != null) {
                $this->db->where('r.id', $codigo);
            }
        $query = $this->db->get();
        return $query->result();

    }

    public function get_info_header_detalle_documento($codigo = null)
    {
        $this->db->select("*")
            ->from('fcc_auditoria r')
            ->join('usuarios s','s.id = r.auditor')
            ->where('r.id', $codigo);
        $query = $this->db->get();
        return $query->result();
    }
}

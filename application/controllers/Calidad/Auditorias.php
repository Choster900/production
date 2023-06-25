<?php
defined('BASEPATH') or exit('No direct script access allowed');
include(APPPATH . "controllers/Padre.php");

class Auditorias extends Padre
{
    /**
     * Auditoria Page for this controller made by Sergio Lopez 09/28/2022
     * 
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("General_model");
        $this->load->model("Navbar_m");
        $this->load->model("Auditorias_m");
    }

    public function index()
    {
        $data["namepage"]   = "Calidad - Auditoria";
        $data["title"]      = "Auditoria de proceso";
        $data["modulos"]    = $this->Navbar_m->getModulos();
        $data["maquinas"]   = $this->General_model->getTable("maquinas", array("tipo" => "imprentas"));

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('Calidad/Auditorias/index_auditoria', $data);
        $this->load->view('layout/footer');
    }

    public function detalle_auditoria($tipo = null, $codigo = null)
    {
        $data["namepage"]   = "Calidad - Detalle auditoria";
        $data["title"]      = "Auditorias - " . $tipo . "";
        $data["modulos"]    = $this->Navbar_m->getModulos();

        $data['auditoria_info_general']  = $this->Auditorias_m->get_info_header_detalle_documento($codigo);//Informacin del header
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);

        if ($tipo == "Imprenta") {//Dependiendo el tipo de maquina que se nos pase en el parametro del metodo mostramos las pantallas
            $data["maquinas"]               = $this->General_model->getTable("maquinas", array("tipo" => "imprentas"));
            $data["operadores"]             = $this->General_model->getTable("operadores", array("zona" => "imprentas", "tipo" => "operador"));
            $data["detalle_auditoria"]      = $this->General_model->getTable("detalle_fcc011", array("id_reporte_aud_fcc011" => $codigo));
            $this->load->view('Calidad/Auditorias/Imprenta/index_detalle_imprenta', $data);

        } else if ($tipo == "Troqueladora") {
            $data["maquinas"]               = $this->General_model->getTable("maquinas", array("tipo" => "troqueladoras"));
            $data["operadores"]             = $this->General_model->getTable("operadores", array("zona" => "troqueladoras", "tipo" => "operador"));
            $data["detalle_auditoria"]      = $this->General_model->getTable("detalle_fcc012", array("id_reporte_aud_fcc012" => $codigo));
            $this->load->view('Calidad/Auditorias/Troqueladora/index_detalle_troqueladora', $data);

        } else if ($tipo == "Pegadora") {
            $data["maquinas"]               = $this->General_model->getTable("maquinas", array("tipo" => "pegadoras"));
            $data["operadores"]             = $this->General_model->getTable("operadores", array("zona" => "pegadoras", "tipo" => "operador"));
            $data["detalle_auditoria"]      = $this->General_model->getTable("detalle_fcc012", array("id_reporte_aud_fcc012" => $codigo));
            $this->load->view('Calidad/Auditorias/Pegadora/index_detalle_pegadora', $data);

        }

        $this->load->view('layout/footer');
    }

    public function mostrar_tabla_index()
    {
        $data['data'] = $this->Auditorias_m->get_auditoria();
        echo json_encode($data);
    }

    public function get_reportes()
    {
        $codigo_detalle = $this->input->post("id");

        if (isset($codigo_detalle)) {//Mostramos el registro por id
            if ($_POST["tipo"] == "Imprenta") {
                $data = $this->General_model->getTable("detalle_fcc011", array("id" => $_POST["id"]));
                echo json_encode($data);

            } else if ($_POST["tipo"] == "Troqueladora") {
                $data = $this->General_model->getTable("detalle_fcc012", array("id" => $_POST["id"]));
                echo json_encode($data);

            } else if ($_POST["tipo"] == "Pegadora") {
                $data = $this->General_model->getTable("detalle_fcc013", array("id" => $_POST["id"]));
                echo json_encode($data);
            }
        } else {//mostramos todos los registros que pertenecen al registro
            if ($_POST["tipo"] == "Imprenta") {
                $data["data"] = $this->General_model->getTable("detalle_fcc011", array("id_reporte_aud_fcc011" => $this->input->post("id_reporte_aud_fcc011")));
                echo json_encode($data);
            } else if ($_POST["tipo"] == "Troqueladora") {
                $data["data"] = $this->General_model->getTable("detalle_fcc012", array("id_reporte_aud_fcc012" => $this->input->post("id_reporte_aud_fcc012")));
                echo json_encode($data);
            } else if ($_POST["tipo"] == "Pegadora") {
                $data["data"] = $this->General_model->getTable("detalle_fcc013", array("id_reporte_aud_fcc013" => $this->input->post("id_reporte_aud_fcc013")));
                echo json_encode($data);
            }
        }
    }

    public function Get_valores_agua() //traer valores de agua para tabla variables
    {
        $data = $this->General_model->getTable(
            "detalle_fcc011",
            array(
                "maquinas"              => $this->input->post("maquinas"),
                "id_reporte_aud_fcc011" => $this->input->post("id_reporte_aud_fcc011")
            )
        );
        echo json_encode($data);
    }

    public function crear_reporte()
    {
        $now        = new DateTime();
        $date       = $now->format('Y-m-d');
        $date_time  = $now->format('Y-m-d H:i:s');
        $datos = array(
            "fecha_reporte"     => $date,
            "auditor"           => $this->session->userdata("id"),
            "turno"             => $this->input->post("turno"),
            "fecha_creacion"    => $date_time,
            "tipo"              => $this->input->post("tipo")
        );
        $data = $this->General_model->setTable("fcc_auditoria", $datos);
        echo $this->input->post("tipo") . "/" . $data;//Imprimimos una string para una ruta
    }
    public function crear_detalle_reporte()
    {
        date_default_timezone_set('America/El_Salvador');
        $now        = new DateTime();
        $date       = $now->format('Y-m-d');
        $date_time  = $now->format('Y-m-d H:i:s');
        $time       = date('h:i:s');

        if ($this->input->post("tipo") == "Imprenta") {
            $datos = array(
                "hora"                  => $time,
                "id_reporte_aud_fcc011" => $this->input->post("id_reporte_aud_fcc011"),
            );
            $data = $this->General_model->setTable("detalle_fcc011", $datos);
            echo $data;
        } else if ($this->input->post("tipo") == "Troqueladora") {
            $datos = array(
                "hora"                  => $time,
                "id_reporte_aud_fcc012" => $this->input->post("id_reporte_aud_fcc012"),
            );
            $data = $this->General_model->setTable("detalle_fcc012", $datos);
            echo $data;
        } else if ($this->input->post("tipo") == "Pegadora") {
            $datos = array(
                "hora"                  => $time,
                "id_reporte_aud_fcc013" => $this->input->post("id_reporte_aud_fcc013"),
            );
            $data = $this->General_model->setTable("detalle_fcc013", $datos);
            echo $data;
        }
    }

    public function update_detalle_reporte()
    { //ACTUALIZAR DETALLE DEL REPORTE uno por uno
        $res = $this->General_model->updateTable(
            $this->input->post("tabla"), //NOMBRE DE LA TABLA
            array($this->input->post("campo")   => $this->input->post("value")), //CAMPO Y VALOR QUE SE ENVIA AL CAMPO
            array("id"                          => $this->input->post("id")) //CUAL REGISTRO MODIFICAR
        );
        echo $res;
    }
    public function update_detalle() //METODO PARA ACTUALIZAR (ID_TRELLO,PRODUCTO,MAQUINA)
    {
        $codigo = $_POST["id"];
        $tabla = $_POST["tabla"];
        unset($_POST["id"]);
        unset($_POST["tabla"]);
        $res = $this->General_model->updateTable($tabla, $_POST, array("id" => $codigo));
        echo $res;
    }

    public function show_contenido()
    {
        $data["troquelado_proceso"] = $this->General_model->getTable("detalle_fcc012", array("id" => $this->input->post("codigo")));
        $this->load->view('Calidad/Auditorias/Troqueladora/Adicionales/contenido_modal', $data);
    }
    //TODO: SE PUEDE OPTIMIZAR ESTE CODIGO PARA ABAJO
    public function show_proceso()
    {
        if ($this->input->post("tipo") == "Imprenta") {
            $data["impresion_proceso"] = $this->General_model->getTable("detalle_fcc011", array("id" => $this->input->post("codigo")));
            $this->load->view('Calidad/Auditorias/Imprenta/Adicionales/Impresion_proceso', $data);
        } else if ($this->input->post("tipo") == "Pegadora") {
            $data["pegadora_proceso"] = $this->General_model->getTable("detalle_fcc013", array("id" => $this->input->post("codigo")));
            $this->load->view('Calidad/Auditorias/Pegadora/Adicionales/proceso_pegadora', $data);
        }
    }

    public function show_producto()
    {
        if ($this->input->post("tipo") == "Imprenta") {
            $data["impresion_proceso"] = $this->General_model->getTable("detalle_fcc011", array("id" => $this->input->post("codigo")));
            $this->load->view('Calidad/Auditorias/Imprenta/Adicionales/Impresion_producto', $data);
        } else if ($this->input->post("tipo") == "Pegadora") {
            $data["pegadora_proceso"] = $this->General_model->getTable("detalle_fcc013", array("id" => $this->input->post("codigo")));
            $this->load->view('Calidad/Auditorias/Pegadora/Adicionales/producto_pegadora', $data);
        }
    }

    public function show_valores_agua()
    {
        $data["impresion_proceso"] = $this->General_model->getTable("detalle_fcc011", array("id" => $this->input->post("codigo")));
        $this->load->view('Calidad/Auditorias/Imprenta/Adicionales/Tabla', $data);
    }
    public function show_proceso_segunda_seccion()
    {
        if ($this->input->post("tipo") == "Imprenta") {
            $data["impresion_proceso"] = $this->General_model->getTable("detalle_fcc011", array("id" => $this->input->post("codigo")));
            $this->load->view('Calidad/Auditorias/Imprenta/Adicionales/barniz_proceso', $data);
        } else if ($this->input->post("tipo") == "Pegadora") {
            $data["pegadora_proceso"] = $this->General_model->getTable("detalle_fcc013", array("id" => $this->input->post("codigo")));
            $this->load->view('Calidad/Auditorias/Pegadora/Adicionales/proceso_convertidora', $data);
        }
    }
    public function show_producto_segunda_seccion()
    {
        if ($this->input->post("tipo") == "Imprenta") {
            $data["impresion_proceso"] = $this->General_model->getTable("detalle_fcc011", array("id" => $this->input->post("codigo")));
            $this->load->view('Calidad/Auditorias/Imprenta/Adicionales/barniz_producto', $data);
        } else if ($this->input->post("tipo") == "Pegadora") {
            $data["pegadora_proceso"] = $this->General_model->getTable("detalle_fcc013", array("id" => $this->input->post("codigo")));
            $this->load->view('Calidad/Auditorias/Pegadora/Adicionales/producto_convertidora', $data);
        }
    }
    public function show_tipos()
    {
        if ($this->input->post("tipo") == "Imprenta") {
            $data["impresion_proceso"] = $this->General_model->getTable("detalle_fcc011", array("id" => $this->input->post("codigo")));
            $this->load->view('Calidad/Auditorias/Imprenta/Adicionales/tipo_impresion', $data);
        } else if ($this->input->post("tipo") == "Pegadora") {
            $data["pegadora_proceso"] = $this->General_model->getTable("detalle_fcc013", array("id" => $this->input->post("codigo")));
            $this->load->view('Calidad/Auditorias/Pegadora/Adicionales/tipo_pegado', $data);
        }
    }
    public function eliminar_auditoria()
    {
        $res = $this->General_model->deleteTable("fcc_auditoria", array("id" => $this->input->post("id_auditoria")));
        echo $res;
    }
    public function eliminar_detalle_auditoria()
    {
        $res = $this->General_model->deleteTable($this->input->post("tabla"), array("id" => $this->input->post("codigo_detalle")));
        echo $res;
    }
}

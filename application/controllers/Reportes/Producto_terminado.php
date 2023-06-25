<?php

use Dompdf\Dompdf;
use Dompdf\Options;
use \Datetime as BA;


defined('BASEPATH') or exit('No direct script access allowed');
include(APPPATH . "controllers/Padre.php");

class Producto_terminado extends Padre
{
    /**
     * Producto_terminado Page for this controller made by Sergio Lopez 16/06/22.
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
        $this->load->model("Producto_terminado_m");
    }
    public function index()
    {
        $data["namepage"]   = "Reportes - Producto Terminado";
        $data["title"]      = "Producto Terminado";
        $data["modulos"]    = $this->Navbar_m->getModulos();
        $data["maquinas"]   = $this->General_model->getTable("maquinas");
        $data["areas"]      = $this->General_model->getTable("areas_empresa");

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('Reportes/Producto_terminado/index_producto_terminado', $data);

        $this->load->view('layout/footer');
    }
    public function get_producto_terminado() //FILTRADO CON CONSULTA SQL DESDE JAVASCRIPT (TODO: DESABILITADO POR MOTIVOS DE RENDIMIENTO DATATABLE)
    { //SI EL DICHO FILTRO QUE PROPORCIONA DATATABLE LLEGA A DAR PROBLEMAS DE RENDIIENTO AL MOMENTO DE FILTRAR POR FAVOR REACTIVAR ESTA FUNCION PARA TENER UN FILTRADO Y UNA CARGA OPTIMA 
        if (!empty($_POST)) {
            $arrayDetalle = [];
            foreach ($_POST as $key => $value) {
                if ($value != "") {
                    $arrayDetalle[$key] = $value;
                }
            }
            $data["data"] = $this->Producto_terminado_m->get_producto_terminado($arrayDetalle);
        } else {
            $data["data"] = $this->Producto_terminado_m->get_producto_terminado();
        }
        echo json_encode($data);
    }
    public function mostrar_tabla() //muestra la tabla en el modal
    {
        $data["maquinas"]                       = $this->General_model->getTable("maquinas");
        $data["areas"]                          = $this->General_model->getTable("areas_empresa");
        $data["contenido_producto_terminado"]   = $this->Producto_terminado_m->get_contenido_producto_terminado($this->input->post("id_producto"));
        $data["producto_terminado"]             = $this->General_model->getTable("producto_terminado", array("id" => $this->input->post("id_producto")));
        $data["detalle_producto_terminado"]     = $this->General_model->getTable("detalle_producto_terminado", array("id_producto" => $this->input->post("id_producto")));

        $this->load->view('Reportes/Producto_terminado/detalles/tabla_central', $data);
    }
    public function actualizar_producto_terminado_all()
    {
        $res = $this->Producto_terminado_m->update_producto_terminado(
            array($this->input->post("campo") => $this->input->post("value")),
            array("id" => $this->input->post("id"))
        );

        if ($this->input->post("value") == "Aprobado") {
            date_default_timezone_set('America/El_Salvador');
            $time = date('h:i:s');
            $this->Producto_terminado_m->update_producto_terminado(
                array("hora" => $time),
                array("id"   => $this->input->post("id"))
            );
        }
        echo $res;
    }

    public function actualizar_producto_terminado_only_3_things()
    {
        $codigo = $_POST["id"];
        unset($_POST["id"]);
        $res = $this->Producto_terminado_m->update_producto_terminado($_POST, array("id" => $codigo));
        echo $res;
    }
    public function llenar_datos()
    {
        $producto_terminado = $this->General_model->getTable("producto_terminado", array("id" => $this->input->post("id_producto")));
        echo json_encode($producto_terminado);
    }
    public function append_to() //cambiar nombres xD
    {
        $data["ultimo_insert_contenido"] = $this->General_model->setTable("contenido_producto_terminado", array("id_producto" => $this->input->post("codigo")));
        $data["maquinas"] = $this->General_model->getTable("maquinas");
        $this->load->view('Reportes/Producto_terminado/detalles/contenido_tabla', $data);
    }
    public function appent_to_2()
    {
        $data["ultimo_insert_detalle"] = $this->General_model->setTable("detalle_producto_terminado", array("id_producto" => $this->input->post("codigo")));
        $data["maquinas"] = $this->General_model->getTable("maquinas");
        $this->load->view('Reportes/Producto_terminado/detalles/detalle_tabla', $data);
    }
    public function get_trello()
    {
        $trello = $this->General_model->getTable("trello", array("codigo_maquina" => $this->input->post("maquina")));
        echo json_encode($trello);
    }
    public function insertar_producto_terminado()
    {
        $now = new DateTime();
        $date = $now->format('Y-m-d');
        $data["maquinas"] = $this->General_model->getTable("maquinas");
        $data["areas"] = $this->General_model->getTable("areas_empresa");
        $set_producto_terminado = $this->General_model->setTable(
            "producto_terminado",
            array(
                "fecha_entrega"     => $date,
                "fecha_sistema"     => $date,
                "nombre_produccion" => $this->session->userdata("nombre"),
                "username"          => $this->session->userdata("username"),
                "estado"            => "Abierto"
            )
        );
        $data["ultimo_insert_contenido"]        = $this->General_model->setTable("contenido_producto_terminado", array("id_producto" => $set_producto_terminado));
        $data["ultimo_insert_detalle"]          = $this->General_model->setTable("detalle_producto_terminado", array("id_producto" =>  $set_producto_terminado));
        $data["producto_terminado"]             = $this->General_model->getTable("producto_terminado", array("id" => $set_producto_terminado));
        $data["contenido_producto_terminado"]   = $this->Producto_terminado_m->get_contenido_producto_terminado($set_producto_terminado);
        $data["detalle_producto_terminado"]     = $this->General_model->getTable("detalle_producto_terminado", array("id_producto" => $set_producto_terminado));

        $this->load->view('Reportes/Producto_terminado/detalles/tabla_central', $data);
    }
    public function update_contenido()
    {
        $codigo = $_POST["id"];
        unset($_POST["id"]);
        $res = $this->Producto_terminado_m->update_contenido($_POST, array("id" => $codigo));
        echo $res;
    }
    function update_detalle()
    {
        $res = $this->Producto_terminado_m->update_detalle(array($this->input->post("campo") => $this->input->post("value")), array("id" => $this->input->post("id")));
        echo $res;
    }
    public function eliminar_documento()
    {
        $res = $this->General_model->deleteTable("producto_terminado", array("id" => $this->input->post("id")));
        echo $res;
    }

    public function print($codigo)
    {

        $options = new Options(); //ignorar
        $options->setIsRemoteEnabled('isRemoteEnable', true);
        $dompdf = new Dompdf($options); //aunque de error funciona
        $data["contenido_producto_terminado"] = $this->Producto_terminado_m->get_contenido_producto_terminado($codigo);
        $data["producto_terminado"] = $this->General_model->getTable("producto_terminado", array("id" => $codigo));
        $data["detalle_producto_terminado"] = $this->General_model->getTable("detalle_producto_terminado", array("id_producto" => $codigo));


        $html = $this->load->view("reportes/Producto_terminado/pdf/producto_terminado", $data, true);
        $dompdf->loadHTML($html);
        $dompdf->setPaper("letter", 'landscape');
        $dompdf->render();
        /* dar formato al nombre de la descarga */
        $n = 0;
        $numero = intval($codigo);
        do {
            $numero = floor($numero / 10);
            $n = $n + 1;
        } while ($numero > 0);

        $ceros = abs(7 - $n);
        $codigo_new = "";
        for ($i = 0; $i < $ceros; $i++) {
            $codigo_new .= "0";
        }
        $id_ficha = $codigo_new . $codigo;
        /* FIN */
        // 000000+CODIGOFICHA
        $dompdf->stream($id_ficha . '.pdf');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');
include(APPPATH . "controllers/Padre.php");

class Catalogo extends Padre
{
    /**
     * Auditoria Page for this controller made by Erick Campos 18/11/2022
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
        $this->load->model("Autorizaciones_m");
    }

    public function index()
    {
    }

    public function cierres()
    {
        $data["namepage"] = "Cierres";
        $data["title"] = "Cierres";
        $data["boton"] = "Cierre";
        $data["modulos"] = $this->Navbar_m->getModulos();

        //$data["data2"] = json_encode( $this->General_model->getTable("cierres"));
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('catalogo/cierres', $data); //VISTA PRINCIPAL
        $this->load->view('layout/footer');
    }

    public function operadores()
    {
        $data["namepage"] = "Operadores";
        $data["title"] = "Operadores";
        $data["boton"] = "Operador";
        $data["modulos"] = $this->Navbar_m->getModulos();
        $data["usuarios"] = $this->General_model->getTable("usuarios");
        $data["zonas"] = $this->General_model->getTable("tipos_maquinas");

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('catalogo/operadores', $data); //VISTA PRINCIPAL
        $this->load->view('layout/footer');
    }



    public function usuarios()
    {
        $data["namepage"] = "Usuarios";
        $data["title"] = "Usuarios";
        $data["modulos"] = $this->Navbar_m->getModulos();
        $data["boton"] = "Usuario";
        $data["rol"] = $this->General_model->getTable("usuarios_roles");

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('catalogo/usuarios', $data); //VISTA PRINCIPAL
        $this->load->view('layout/footer');
    }

    //Listado
    /**Cierres */
    public function getTable()
    {
        if (!empty($_POST)) {
            $data = $this->General_model->getTable("cierres", array("codigo" => $this->input->post("id")));
            echo json_encode($data);
        } else {
            $data["data"] = $this->General_model->getTable("cierres");
            echo json_encode($data);
        }
    }

    public function agregarCierre()
    {
        $res = $this->General_model->setTable("cierres", $_POST);
        echo $res;
    }

    public function eliminarCierre()
    {
        $res = $this->General_model->deleteTable("cierres", array("codigo" => $this->input->post("id")));
        echo $res;
    }

    public function updateCierre()
    {
        $codigo = $_POST["codigo"];
        unset($_POST["codigo"]);
        $res = $this->General_model->updateTable("cierres", $_POST, array("codigo" => $codigo));
        echo $res;
    }

    /**Fin de cierres */
    /**Inicio de Operadores */
    public function getTable2()
    {
        if (!empty($_POST)) {
            $data = $this->General_model->getTable("operadores", array("codigo_operador" => $this->input->post("id")));
            echo json_encode($data);
        } else {
            $data["data"] = $this->General_model->getTable("operadores");
            echo json_encode($data);
        }
    }

    public function agregarOperador()
    {
        $res = $this->General_model->setTable("operadores", $_POST);
        echo $res;
    }

    public function eliminarOperador()
    {
        $res = $this->General_model->deleteTable("operadores", array("codigo_operador" => $this->input->post("id")));
        echo $res;
    }

    public function updateOperador()
    {
        $codigo = $_POST["codigo_operador"];
        unset($_POST["codigo_operador"]);
        $res = $this->General_model->updateTable("operadores", $_POST, array("codigo_operador" => $codigo));
        echo $res;
    }


    /**Fin de Operadores */
    /**Inicio usuarios de Usuarios */
    /**Tener en cuenta que si se desea utilizar de forma directa la tabla de usuairo
     * tiene que darle formato previo al campo de contra1, para la versión 1 de producción
     * dado que esta nen formato Blob, binario, 
     * Version 1 de produccion  -> campo contra  -> Tipo Blob
     * Version 2 de produccion  -> campo contra2 -> Tipo varchar(100)
     * 
     * Vista Utilizada: view_usuarios
     * Tablas:
     *       usuarios
     *       usuarios_roles
     * 
     */

    public function getTableUsuarios()
    {
        if (!empty($_POST)) {
            $datas = $this->General_model->getTable("view_usuarios", array("id" => $this->input->post("id")));
            echo json_encode($datas);
            //print_r( $datas);
            //echo $datas;  
            //print_r( json_encode($datas));  
        } else {
            $data["data"] = $this->General_model->getTable("view_usuarios");
            echo json_encode($data);
        }
    }


    /**No funciona porque en la base de datos se extrae un tipo de campo de tipo BLOB cuando se transforma en JSON no permite hacer dicha conversión */
    public function getTableUsuariosOne()
    {
        $codigo = $_POST["id"];
        unset($_POST["id"]);
        $datas = $this->General_model->getTable("usuarios", array("id" => $codigo));
        echo json_encode($datas);
        // echo $datas;
        //print_r( $datas);
        //print_r( json_encode($datas));        
    }


    public function agregarUsuario()
    {
        $datos = array("username" => ($_POST["username"]), "nombre" => ($_POST["nombre"]), "contra2" => sha1($_POST["contra2"]), "id_rol" => ($_POST["id_rol"]));
        $res = $this->General_model->setTable("usuarios", $datos);
        //$res = $this->General_model->setTable("usuarios",$_POST);
        //$res = $this->General_model->setTable("usuarios",array("id" => ($_POST["id"])));
        echo $res;
    }

    public function updatePassword()
    {
        $codigo = $_POST["id"];
        unset($_POST["id"]);
        $datos = array("contra2" => sha1($_POST["contra2"]));
        $res = $this->General_model->updateTable("usuarios", $datos, array("id" => $codigo));
        echo $res;
    }

    public function eliminarUsuario()
    {

        $res = $this->General_model->deleteTable("usuarios", array("id" => $this->input->post("id")));
        echo $res;
    }

    public function updateUsuario()
    {
        $codigo = $_POST["id"];
        unset($_POST["id"]);
        $res = $this->General_model->updateTable("usuarios", $_POST, array("id" => $codigo));
        echo $res;
    }
    /**Fin de Usuarios */
    /**Inicio usuarios de Maquinas */
    public function maquinas()
    {
        $data["namepage"] = "Maquinas";
        $data["title"] = "Maquinas";
        $data["modulos"] = $this->Navbar_m->getModulos();
        $data["boton"] = "Maquina";
        $data["rol"] = $this->General_model->getTable("usuarios_roles");
        $data["maquinas"] = $this->General_model->getTable("Maquinas"); //consulta a la tabla maquinas

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('catalogo/maquinas', $data); //VISTA PRINCIPAL
        $this->load->view('layout/footer');
    }

    public function getMaquinas()
    {
        if (!empty($_POST)) {
            $data = $this->General_model->getTable("maquinas", array("ID" => $this->input->post("ID")));
            echo json_encode($data);
        } else {
            $data["data"] = $this->General_model->getTable("maquinas");
            echo json_encode($data);
        }
    }
    public function setMaquinas()
    {
        $res = $this->General_model->setTable("maquinas", $_POST);
        echo $res;
    }
    public function updateMaquinas()
    {
        $codigo = $_POST["ID"];
        unset($_POST["ID"]);
        $res = $this->General_model->updateTable("maquinas", $_POST, array("ID" => $codigo));
        echo $res;
    }

    public function deleteMaquinas()
    {
        $res = $this->General_model->deleteTable("maquinas", array("ID" => $this->input->post("ID")));
        echo $res;
    }
    /**Fin de Maquinas */

    /**Inicio usuarios de Trabajo */
    public function Trabajo()
    {
        $data["namepage"] = "Trabajo";
        $data["title"] = "Trabajo";
        $data["modulos"] = $this->Navbar_m->getModulos();


        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('Catalogo/trabajo', $data);
        $this->load->view('layout/footer');
    }


    public function getTrabajo()
    {
        if (!empty($_POST)) {
            $res = $this->General_model->getTable("trabajo", array("id" => $this->input->post("id")));
            echo json_encode($res);
        } else {
            $res["data"] = $this->General_model->getTable("trabajo");
            echo json_encode($res);
        }
    }
    public function setTrabajo()
    {
        $res = $this->General_model->setTable("trabajo", $_POST);
        echo $res;
    }
    public function updateTrabajo()
    {
        $codigo = $_POST["id"];
        unset($_POST["id"]);
        $res = $this->General_model->updateTable("trabajo", $_POST, array("id" => $codigo));
        echo $res;
    }

    public function deleteTrabajo()
    {
        $res = $this->General_model->deleteTable("trabajo", array("id" => $this->input->post("id")));
        echo $res;
    }
    /**Trabajo */

    /** INICIO hules */
    public function hules()
    {
        $data["namepage"] = "Hules";
        $data["title"] = "Hules";
        $data["modulos"] = $this->Navbar_m->getModulos();


        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('Catalogo/hules', $data);
        $this->load->view('layout/footer');
    }
    public function getHules()
    {
        if (!empty($_POST)) {
            $res = $this->General_model->getTable("hule", array("id" => $this->input->post("id")));
            echo json_encode($res);
        } else {
            $res["data"] = $this->General_model->getTable("hule");
            echo json_encode($res);
        }
    }
    public function setHules()
    {
        $res = $this->General_model->setTable("hule", $_POST);
        echo $res;
    }
    public function updateHules()
    {
        $codigo = $_POST["id"];
        unset($_POST["id"]);
        $res = $this->General_model->updateTable("hule", $_POST, array("id" => $codigo));
        echo $res;
    }

    public function deleteHules()
    {
        $res = $this->General_model->deleteTable("hule", array("id" => $this->input->post("id")));
        echo $res;
    }
    /** FIN hules */

    /**Inicio catalogo de Trello */
    public function trello()
    {
        $data["namepage"] = "Trello";
        $data["title"] = "Trello";
        $data["modulos"] = $this->Navbar_m->getModulos();
        $data["boton"] = "Tablero";
        $data["maquinas"] = $this->General_model->getTable("maquinas");

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('catalogo/trello', $data); //VISTA PRINCIPAL
        $this->load->view('layout/footer');
    }

    public function getTrello()
    {
        if (!empty($_POST)) {
            $res = $this->General_model->getTable("trello", array("ID" => $this->input->post("id")));
            echo json_encode($res);
        } else {
            $res["data"] = $this->General_model->getTable("trello");
            echo json_encode($res);
        }
    }

    public function setTrello()
    {
        $res = $this->General_model->setTable("trello", $_POST);
        echo $res;
    }
    public function updateTrello()
    {
        $codigo = $_POST["ID"];
        unset($_POST["ID"]);
        $res = $this->General_model->updateTable("trello", $_POST, array("ID" => $codigo));
        echo $res;
    }

    public function deleteTrello()
    {
        $res = $this->General_model->deleteTable("trello", array("ID" => $this->input->post("ID")));
        echo $res;
    }


    /**Fin de Trello */
    /**Inicio de catalogo de Operaciones */
    public function operaciones(){
        $data["namepage"] = "Operaciones";
        $data["title"] = "Operaciones";
        $data["modulos"] = $this->Navbar_m->getModulos();
        $data["boton"] = "Operacion";

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('catalogo/operaciones', $data); //VISTA PRINCIPAL
        $this->load->view('layout/footer');
    }

    public function getOperaciones(){
        $tabla_db = $_POST["tabla_db"];
        unset($_POST["tabla_db"]);
        if (!empty($_POST)) {
            $res = $this->General_model->getTable($tabla_db, array("codigo_operaciones" => $this->input->post("id")));
            echo json_encode($res);
        } else {

            $res["data"] = $this->General_model->getTable($tabla_db);
            echo json_encode($res);
        }
    }

    public function setOperaciones()
    {
        $tabla_db = $_POST["tabla_db2"];
        unset($_POST["tabla_db2"]);
        $res = $this->General_model->setTable($tabla_db, $_POST);
        echo $res;
    }

    public function deleteOperaciones()
    {
        $tabla_db = $_POST["tabla_db2"];
        unset($_POST["tabla_db2"]);
        $res = $this->General_model->deleteTable($tabla_db, array("codigo_operaciones" => $this->input->post("id")));
        echo $res;
    }

    /**Fin de Operaciones */
    /**Inicio de catalogo Modulos */
    public function modulos(){
        $data["namepage"] = "Modulos";
        $data["title"] = "Modulos";
        $data["modulos"] = $this->Navbar_m->getModulos();
        $data["boton"] = "";
        $data["list_modulos"] = $this->General_model->getTable("modulos");

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('catalogo/modulos', $data); //VISTA PRINCIPAL
        $this->load->view('layout/footer');
    }

    public function getModulos(){
        if (!empty($_POST)) {
            $res = $this->General_model->getTable("modulos", array("id" => $this->input->post("id")));
            echo json_encode($res);
        } else {
            $res["data"] = $this->General_model->getTable("modulos");
            echo json_encode($res);
        }
    }

    public function setModulo()
    {
        $res = $this->General_model->setTable("modulos", $_POST);
        echo $res;
    }
    public function updateModulo()
    {
        $codigo = $_POST["id"];
        unset($_POST["id"]);
        $res = $this->General_model->updateTable("modulos", $_POST, array("id" => $codigo));
        echo $res;
    }

    public function deleteModulo()
    {
        $res = $this->General_model->deleteTable("modulos", array("id" => $this->input->post("id")));
        echo $res;
    }


    public function getSubModulos(){
        if (!empty($_POST)) {
            $res = $this->General_model->getTable("view_submodulo", array("id" => $this->input->post("id")));
            echo json_encode($res);
        } else {
            $res["data"] = $this->General_model->getTable("view_submodulo");
            echo json_encode($res);
        }
    }

    public function setSubModulo()
    {
        $res = $this->General_model->setTable("submodulos", $_POST);
        echo $res;
    }

    public function updateSubModulo()
    {
        $codigo = $_POST["id"];
        unset($_POST["id"]);
        $res = $this->General_model->updateTable("submodulos", $_POST, array("id" => $codigo));
        echo $res;
    }

    public function deleteSubModulo()
    {
        $res = $this->General_model->deleteTable("submodulos", array("id" => $this->input->post("id")));
        echo $res;
    }

    /**Fin de catalogo Modulos */
    /********************************************** */
    /**Inicio de catalogo Autorizaciones */
    public function autorizaciones(){
        $data["namepage"] = "Autorizaciones";
        $data["title"] = "Autorizaciones";
        $data["modulos"] = $this->Navbar_m->getModulos();
        $data["boton"] = "Autorizacion";
        $data["modulos_autorizaciones"] = $this->Autorizaciones_m->submodulos();
        $data["usuarios"] = $this->Autorizaciones_m->usuarios_rol();
        

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('catalogo/autorizaciones', $data); //VISTA PRINCIPAL
        $this->load->view('layout/footer');
    }


    public function setAutorizaciones()
    {
        $res = $this->General_model->setTable("autorizaciones", $_POST);
        echo $res;
    }

    public function deleteAutorizaciones()
    {

        $res = $this->General_model->deleteTable("autorizaciones", $_POST);
        echo $res;
    }

    /**Fin de Autorizaciones */



}

<?php

use Dompdf\Dompdf;
use Dompdf\Options;

defined('BASEPATH') or exit('No direct script access allowed');
include(APPPATH . "controllers/Padre.php");

class Ficha_tecnica extends Padre
{
	/**
	 * Ficha_tecnica Page for this controller made by Sergio Lopez 16/06/22.
	 * Modificado: Erick Campos 22/12/2022
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
		$this->load->model("Ficha_tecnica_m");
	}
	public function index()
	{
		$data["namepage"] = "Producción - Ficha Técnica";
		$data["title"] = "Ficha Técnica";
		$data["modulos"] = $this->Navbar_m->getModulos();
		$data["ficha_tecnica"] = $this->Ficha_tecnica_m->mostrar_ficha();
		//$data["resumen"] = $this->Ficha_tecnica_m->resumen();
		//La vista view_resumen_ficha_tecnica realiza un conteo de los registros de las tablas
		//ficha_pegadoras
		//ficha_troqueladoras
		//ficha_impresoras
		//Verificar porque se utiliza el campo de fecha_creacion y no fecha_ingreso  
		$data["resumen"] = $this->General_model->getTable("view_resumen_ficha_tecnica");

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Calidad/ficha_tecnica/index_ficha_tecnica', $data);
		$this->load->view('layout/footer');
		
	}
	public function get_all_fichas()
	{
		if (!empty($_POST)) {
			$consulta = "";
			$bandera = 0;
			$existe = false;
			$consulta .= " where ";
			foreach ($_POST as $key => $value) {
				if (!empty($value)) {
					if ($bandera >= 0 and $bandera <= 10) {
						if ($existe == true) {
							$consulta .= " AND ";
							$existe = false;
						}
						$consulta .= $key . " like '%" . $value . "%' ";
						$existe = true;
					}
				}
				$bandera++;
			}
			if ($existe == false) {
				$data['data'] = $this->Ficha_tecnica_m->mostrar_ficha();
				echo json_encode($data);
			} else {
				$data['data'] = $this->Ficha_tecnica_m->mostrar_ficha_filtrado($consulta);
				echo json_encode($data);
			}
		} else {
			$data['data'] = $this->Ficha_tecnica_m->mostrar_ficha(1);
			echo json_encode($data);
		}
	}
	public function insertar_ficha($tipo)
	{
		$date = date('m-d-Y', time());
		if ($tipo == "impresoras") 
		{
			$data = array(
				"version" => 0,
				"fecha_ingreso" => $date
			);
			$id_ficha = $this->Ficha_tecnica_m->insertar_nueva_ficha($data, $tipo);
			header("Location: " . site_url("Calidad/ficha_tecnica/fichas/$tipo/$id_ficha"));
		} 
		else if ($tipo == "pegadoras") 
		{
			echo "se inserta";
			$data = array(
				"version" => 0,
				"fecha_ingreso" => $date
			);
			$res = $this->Ficha_tecnica_m->insertar_nueva_ficha($data, $tipo);
			header("Location: " . site_url("Calidad/ficha_tecnica/fichas/$tipo/$res"));
		} 
		else if ($tipo == "troqueladoras") 
		{
			echo "se inserta";
			$data = array(
				"version" => 0,
				"fecha_ingreso" => $date
			);
			$res = $this->Ficha_tecnica_m->insertar_nueva_ficha($data, $tipo);
			header("Location: " . site_url("Calidad/ficha_tecnica/fichas/$tipo/$res"));
		}
	}
	public function update_ficha()
	{
		if ($_POST["tipo_ficha"] == "impresora") {
			$res = $this->Ficha_tecnica_m->modificar_ficha(
				$this->input->post("tipo_ficha"),
				array($this->input->post("campos_a_modificar") => $this->input->post("valor_a_enviar")),
				array("ID" => $this->input->post("id_ficha_tecnica"))
			);
			echo $res;
		} else if ($_POST["tipo_ficha"] == "pegadora") {
			$res = $this->Ficha_tecnica_m->modificar_ficha(
				$this->input->post("tipo_ficha"),
				array($this->input->post("campos_a_modificar") => $this->input->post("valor_a_enviar")),
				array("ID" => $this->input->post("id_ficha_tecnica"))
			);
			echo $res;
		}
		  elseif ($_POST["tipo_ficha"] == "troqueladora") {
			$res = $this->Ficha_tecnica_m->modificar_ficha(
				$this->input->post("tipo_ficha"),
				array($this->input->post("campos_a_modificar") => $this->input->post("valor_a_enviar")),
				array("ID" => $this->input->post("id_ficha_tecnica"))
			);
			echo $res;
		}
	}
	public function update_version()
	{
		if ($_POST["tipo_ficha"] == "impresora") {
			$res = $this->Ficha_tecnica_m->modificar_ficha(
				$this->input->post("tipo_ficha"),
				array("version" => $this->input->post("version") + 1),
				array("ID" => $this->input->post("ID"))
			);
			print_r($_POST);
			echo ($this->input->post("version") + 1);
		} else if ($_POST["tipo_ficha"] == "pegadora") {
			$res = $this->Ficha_tecnica_m->modificar_ficha(
				$this->input->post("tipo_ficha"),
				array("version" => $this->input->post("version") + 1),
				array("ID" => $this->input->post("ID"))
			);
			print_r($_POST);
			echo ($this->input->post("version") + 1);
		} else if ($_POST["tipo_ficha"] == "troqueladora") {
			$res = $this->Ficha_tecnica_m->modificar_ficha(
				$this->input->post("tipo_ficha"),
				array("version" => $this->input->post("version") + 1),
				array("ID" => $this->input->post("ID"))
			);
			print_r($_POST);
			echo ($this->input->post("version") + 1);
		}
	}
	public function update_form_tinta()
	{
		$res = $this->Ficha_tecnica_m->update_form_tinta(array($this->input->post("campos") => $this->input->post("value")), array("id_tinta" => $_POST["id_tinta"]));
		echo $res;
	}
	public function update_form_imprim()
	{
		$res = $this->Ficha_tecnica_m->update_form_imprim(array($this->input->post("campos") => $this->input->post("value")), array("id_imprim" => $_POST["id_imprim"]));
		echo $res;
	}
	public function insertar_formulaciones_imprims()
	{
		$res = $this->Ficha_tecnica_m->insertar_formulacion_imprim($_POST);
		echo $res;
	}
	public function insertar_formulaciones_tintas()
	{
		$res = $this->Ficha_tecnica_m->insertar_formulacion_tinta($_POST);
		echo $res;
	}
	public function cerrar_ficha()
	{
		if ($_POST["tipo"] == "impresora") {
			$res = $this->Ficha_tecnica_m->modificar_ficha(
				$this->input->post("tipo"),
				array("estado" => "Cerrado"),
				array("ID" => $this->input->post("ID"))
			);
			echo $res;
		} else if ($_POST["tipo"] == "pegadora") {
			$res = $this->Ficha_tecnica_m->modificar_ficha(
				$this->input->post("tipo"),
				array("estado" => "Cerrado"),
				array("ID" => $this->input->post("ID"))
			);
			echo $res;
		} else if ($_POST["tipo"] == "troqueladora") {
			$res = $this->Ficha_tecnica_m->modificar_ficha(
				$this->input->post("tipo"),
				array("estado" => "Cerrado"),
				array("ID" => $this->input->post("ID"))
			);
		}
		
	}
	public function eliminar_ficha()
	{
		$res = $this->Ficha_tecnica_m->eliminar(array("ID" => $this->input->post("ID")), $_POST["tipo"]);
		echo $res;
	}
	public function fichas($tipo, $id = null)
	{
		$data["namepage"] = "Ficha - " . ($tipo == "impresoras" ? 'Impresora' : ($tipo == "pegadoras" ? 'Pegadora' : ($tipo == "troqueladoras" ? 'Troqueladora' : "no se xd"))) . "";
		$data["title"] = "Ficha " . ($tipo == "impresoras" ? 'Impresora' : ($tipo == "pegadoras" ? 'Pegadora' : ($tipo == "troqueladoras" ? 'Troqueladora' : "no se xd"))) . "";
		$data["type"] = ($tipo == "impresoras" ? 'impresoras' : ($tipo == "pegadoras" ? 'pegadoras' : ($tipo == "troqueladoras" ? 'troqueladoras' : "no se xd"))) . "";
		$data["modulos"] = $this->Navbar_m->getModulos();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);

		if ($tipo == 'impresoras') {
			$data['data'] = $this->Ficha_tecnica_m->get_ficha_reporte($tipo, $id);
			$data['formulacion_tinta'] = $this->Ficha_tecnica_m->get_formulacion_tinta($id);
			$data['formulacion_imprim'] = $this->Ficha_tecnica_m->get_formulacion_imprim($id);
			$data['documentos_ficha_impresora'] = $this->Ficha_tecnica_m->get_documento_impresora($id);
			$this->load->view('Calidad/ficha_tecnica/fichas/adicionales/header_ficha', $data);
			$this->load->view('Calidad/ficha_tecnica/fichas/adicionales/botones_superiores_fichas', $data);
			$this->load->view('Calidad/ficha_tecnica/fichas/ficha_impresora', $data);
			$this->load->view('Calidad/ficha_tecnica/fichas/adicionales/footer_ficha', $data);	
		} else if ($tipo == 'pegadoras') {
			$data['data'] = $this->Ficha_tecnica_m->get_ficha_reporte($tipo, $id);
			$data['documentos_ficha_pegadora'] = $this->Ficha_tecnica_m->get_documento_pegadora($id);
			$this->load->view('Calidad/ficha_tecnica/fichas/adicionales/header_ficha', $data);
			$this->load->view('Calidad/ficha_tecnica/fichas/adicionales/botones_superiores_fichas', $data);
			$this->load->view('Calidad/ficha_tecnica/fichas/ficha_pegadora', $data);
			$this->load->view('Calidad/ficha_tecnica/fichas/adicionales/footer_ficha', $data);
		} else if ($tipo == 'troqueladoras') {
			$data['data'] = $this->Ficha_tecnica_m->get_ficha_reporte($tipo, $id);
			$data['documentos_ficha_troqueladora'] = $this->Ficha_tecnica_m->get_documento_troqueladora($id);
			$this->load->view('Calidad/ficha_tecnica/fichas/adicionales/header_ficha', $data);
			$this->load->view('Calidad/ficha_tecnica/fichas/adicionales/botones_superiores_fichas', $data);
			$this->load->view('Calidad/ficha_tecnica/fichas/ficha_troqueladora', $data);
			$this->load->view('Calidad/ficha_tecnica/fichas/adicionales/footer_ficha', $data);
		}
		$this->load->view('layout/footer');
	}


	public function print($type, $codigo)
	{
		$options = new Options(); //ignorar
		$options->setIsRemoteEnabled('isRemoteEnable', true);
		$dompdf = new Dompdf($options); //aunque de error funciona
		$html = "";

		if ($type == "impresoras") {
			$data['data'] = $this->Ficha_tecnica_m->get_ficha_reporte($type, $codigo);
			$data['formulacion_tinta'] = $this->Ficha_tecnica_m->get_formulacion_tinta($codigo);
			$data['formulacion_imprim'] = $this->Ficha_tecnica_m->get_formulacion_imprim($codigo);
			$html = $this->load->view('Calidad/ficha_tecnica/pdf/ficha_impresora_pdf', $data, true);
		} else if ($type == "pegadoras") {
			$data['data'] = $this->Ficha_tecnica_m->get_ficha_reporte($type, $codigo);
			$html = $this->load->view('Calidad/ficha_tecnica/pdf/ficha_pegadora_pdf', $data, true);
		} else {
			$html = "Se esta trabajando el reporte de troqueladoras";
		}

		$dompdf->loadHTML($html);
		$dompdf->setPaper("letter", 'portrait');
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
		$dompdf->stream('' . $id_ficha . '.pdf');
	}

	/* //////////// Funciones para subir archivos - IMPRESORA /////////////////////////////////////// */

	// IMAGEN //
	public function guardar_archivo_impresora() 
	{
		$where = $_POST["id_archivo"];

		// Configurar la carga de archivos
		$ruta_archivos = 'uploads/';
		$config['upload_path'] = './'.$ruta_archivos;
		$config['allowed_types'] = 'gif|jpg|png'; // Tipos de archivo permitidos
		$this->load->library('upload', $config);
	
		// Procesar el archivo cargado
		if ($this->upload->do_upload('url')) {
			$url = $this->upload->data();
			$url = base_url($ruta_archivos . $url['file_name']);
	
			// Guardar el nombre del archivo en la base de datos
			$data = array(
				'url' => $url
			);
			$this->db->update('documentos_ficha_impresora', $data, array('ID' => $where));
					
		} else {
			// Si no se pudo cargar el archivo, mostrar un mensaje de error
			$error = $this->upload->display_errors();
			echo $error;
		}
	}

	// PDF //
	public function guardar_archivoPDF_impresora() 
	{
		$where = $_POST["id_archivo"];

		// Configurar la carga de archivos
		$ruta_archivos = 'uploads/';
		$config['upload_path'] = './'.$ruta_archivos;
		$config['allowed_types'] = 'pdf'; // Tipos de archivo permitidos
		$this->load->library('upload', $config);
	
		// Procesar el archivo cargado
		if ($this->upload->do_upload('pdf')) {
			$pdf = $this->upload->data();
			$pdf = base_url($ruta_archivos . $pdf['file_name']);
	
			// Guardar el nombre del archivo en la base de datos
			$data = array(
				'pdf' => $pdf
			);
			$this->db->update('documentos_ficha_impresora', $data, array('ID' => $where));
					
		} else {
			// Si no se pudo cargar el archivo, mostrar un mensaje de error
			$error = $this->upload->display_errors();
			echo $error;
		}
	}

	// NOMBRE Y FECHA //
	public function guardar_nombre_archivo_impresora() 
	{
		$data = array($this->input->post("campos_a_modificar") => $this->input->post("valor_a_enviar"));
		$where = array('id' => $_POST['id_archivo']);

		$this->db->where($where);
    	$this->db->update('documentos_ficha_impresora', $data);

		return $this->db->insert_id();
	}

	/* /////////////////////////////////////////////////////////////////////////////////////// */

	/* //////////// Funciones para subir archivos - PEGADORA /////////////////////////////////////// */

	// IMAGEN //
	public function guardar_archivo_pegadora() 
	{
		$where = $_POST["id_archivo"];

		// Configurar la carga de archivos
		$ruta_archivos = 'uploads/';
		$config['upload_path'] = './'.$ruta_archivos;
		$config['allowed_types'] = 'gif|jpg|png'; // Tipos de archivo permitidos
		$this->load->library('upload', $config);
	
		// Procesar el archivo cargado
		if ($this->upload->do_upload('url')) {
			$url = $this->upload->data();
			$url = base_url($ruta_archivos . $url['file_name']);
	
			// Guardar el nombre del archivo en la base de datos
			$data = array(
				'url' => $url
			);
			$this->db->update('documentos_ficha_pegadora', $data, array('ID' => $where));
					
		} else {
			// Si no se pudo cargar el archivo, mostrar un mensaje de error
			$error = $this->upload->display_errors();
			echo $error;
		}
	}

	// PDF //
	public function guardar_archivoPDF_pegadora() 
	{
		$where = $_POST["id_archivo"];

		// Configurar la carga de archivos
		$ruta_archivos = 'uploads/';
		$config['upload_path'] = './'.$ruta_archivos;
		$config['allowed_types'] = 'pdf'; // Tipos de archivo permitidos
		$this->load->library('upload', $config);
	
		// Procesar el archivo cargado
		if ($this->upload->do_upload('pdf')) {
			$pdf = $this->upload->data();
			$pdf = base_url($ruta_archivos . $pdf['file_name']);
	
			// Guardar el nombre del archivo en la base de datos
			$data = array(
				'pdf' => $pdf
			);
			$this->db->update('documentos_ficha_pegadora', $data, array('ID' => $where));
					
		} else {
			// Si no se pudo cargar el archivo, mostrar un mensaje de error
			$error = $this->upload->display_errors();
			echo $error;
		}
	}

	// NOMBRE Y FECHA //
	public function guardar_nombre_archivo_pegadora() 
	{
		$data = array($this->input->post("campos_a_modificar") => $this->input->post("valor_a_enviar"));
		$where = array('id' => $_POST['id_archivo']);

		$this->db->where($where);
    	$this->db->update('documentos_ficha_pegadora', $data);

		return $this->db->insert_id();
	}

	/* /////////////////////////////////////////////////////////////////////////////////////// */

	/* //////////// Funciones para subir archivos - Troqueladoras /////////////////////////////////////// */

	// IMAGEN //
	public function guardar_archivo_troqueladora() 
	{
		$where = $_POST["id_archivo"];

		// Configurar la carga de archivos
		$ruta_archivos = 'uploads/';
		$config['upload_path'] = './'.$ruta_archivos;
		$config['allowed_types'] = 'gif|jpg|png'; // Tipos de archivo permitidos
		$this->load->library('upload', $config);
	
		// Procesar el archivo cargado
		if ($this->upload->do_upload('url')) {
			$url = $this->upload->data();
			$url = base_url($ruta_archivos . $url['file_name']);
	
			// Guardar el nombre del archivo en la base de datos
			$data = array(
				'url' => $url
			);
			$this->db->update('documentos_ficha_troqueladora', $data, array('ID' => $where));
					
		} else {
			// Si no se pudo cargar el archivo, mostrar un mensaje de error
			$error = $this->upload->display_errors();
			echo $error;
		}
	}

	// PDF //
	public function guardar_archivoPDF_troqueladora() 
	{
		$where = $_POST["id_archivo"];

		// Configurar la carga de archivos
		$ruta_archivos = 'uploads/';
		$config['upload_path'] = './'.$ruta_archivos;
		$config['allowed_types'] = 'pdf'; // Tipos de archivo permitidos
		$this->load->library('upload', $config);
	
		// Procesar el archivo cargado
		if ($this->upload->do_upload('pdf')) {
			$pdf = $this->upload->data();
			$pdf = base_url($ruta_archivos . $pdf['file_name']);
	
			// Guardar el nombre del archivo en la base de datos
			$data = array(
				'pdf' => $pdf
			);
			$this->db->update('documentos_ficha_troqueladora', $data, array('ID' => $where));
					
		} else {
			// Si no se pudo cargar el archivo, mostrar un mensaje de error
			$error = $this->upload->display_errors();
			echo $error;
		}
	}

	// NOMBRE Y FECHA //
	public function guardar_nombre_archivo_troqueladora() 
	{
		$data = array($this->input->post("campos_a_modificar") => $this->input->post("valor_a_enviar"));
		$where = array('id' => $_POST['id_archivo']);

		$this->db->where($where);
    	$this->db->update('documentos_ficha_troqueladora', $data);

		return $this->db->insert_id();
	}

	/* /////////////////////////////////////////////////////////////////////////////////////// */
}
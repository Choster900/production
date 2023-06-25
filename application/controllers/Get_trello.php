<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Get_trello extends CI_Controller
{
    /**
     * Get_trello Page for this controller made by Sergio Lopez 14/10/2022
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
        $this->load->model("General_model");

    }
    public function index()
    {
        $trello = $this->General_model->getTable("trello", array("codigo_maquina" => $this->input->post("maquina")));
        echo json_encode($trello);
    }
}

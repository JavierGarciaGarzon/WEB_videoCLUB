<?php

class peliculas extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->model('modelo_producto');
        $data['title'] = "Mas Informacion";
        $data['peliculas'] = $this->modelo_producto->return_peliculas();
        $this->load->view("/guest/peliculas",$data);
        $data = array('titulo' => 'Home');
        $this->load->view("guest/head");
        $data1 = array('app' => 'Blog');
        $this->load->view("guest/navegacion", $data1);
       

        $this->load->view("/guest/footer");
    }

}
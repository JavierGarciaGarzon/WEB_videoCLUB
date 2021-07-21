<?php

class masinfo extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
     
        $this->load->view("/guest/masinfo");
        $data = array('titulo' => 'Home');
        $this->load->view("guest/head");
        $data1 = array('app' => 'Blog');
        $this->load->view("guest/navegacion", $data1);
       

        $this->load->view("/guest/footer");
    }

}

//      $data=array('titulo' => 'Home');
//        
//        $this->load->view("guest/head",$data);
//        
//        $data1 = array('app' => 'Blog');
//        $this->load->view("guest/navegacion",$data1);
//       
//       // $data2= array('post' => 'Blog', 'descripcion' =>'Bienvenido a mi pagina');
//        //$this->load->view("/guest/header", $data2);
//       $this->load->view("/guest/masinfo"); 
//        
//        $this->load->view("/guest/footer");
//       // $this->load->view("home",$data);

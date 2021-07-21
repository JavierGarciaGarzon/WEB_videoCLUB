<?php

class Home extends CI_Controller{
    public function index(){
       $data=array('titulo' => 'Home');
        
        $this->load->view("guest/head",$data);
        
        $data1 = array('app' => 'Blog');
        $this->load->view("guest/navegacion",$data1);
       
       // $data2= array('post' => 'Blog', 'descripcion' =>'Bienvenido a mi pagina');
        //$this->load->view("/guest/header", $data2);
        $this->load->view("/guest/content");
        
        $this->load->view("/guest/footer");
       // $this->load->view("home",$data);
        
    }
    	public function inSesion(){
		 $data=array('titulo' => 'Home');
        
        $this->load->view("guest/head",$data);
        
        $data1 = array('app' => 'Blog');
        $this->load->view("guest/navegacion",$data1);
		
		$this->load->view("/templates/iniSesion");
        
    }
}   

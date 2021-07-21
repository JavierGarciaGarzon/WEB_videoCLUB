<?php

class User extends CI_Controller{
    public function __construct(){
       parent::__construct();
        
    }
    	public function index(){
		 redirect('auth/login');
        
    }
	
	public function list_users() {
		$this->load->model('modelo_usuarios');
		$data['users'] = $this->modelo_usuarios->get_usuarios();
		$this->load->view('list_users', array(
			'title'=> 'List of users' ,
			'content' => $this->load->view('list_users', $data, TRUE),
			));
	}
}
   

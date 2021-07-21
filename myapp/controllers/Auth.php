<?php

class Auth extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
    public function index(){
       redirect('auth/login');
        
    }
    public function login(){

		if(!$this->input->post()){
			$this->load->view('templates/iniSesion',array(
			'title'=>'Login',
			'content' => $this->load->view('templates/iniSesion',null,TRUE)
			));
			$this->form_validation->set_message('user_auth', 'Campos vacios');
			return;
		}
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_valida');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/iniSesion',array(
			'title'=>'Login erroneo',
			'content' => $this->load->view('templates/iniSesion',null,TRUE)
			));  
		}else{
			redirect('user/list_users');
		}
	}
	
	
	public function valida($password) {
		$username = $this->input->post('username');
		$user = $this->modelo_usuarios->validarUsuario($username,$password);
		if($user){
			$this->session->logged_in = array(
			'id'=>$user->id,
			'username'=> $user->name
			);
			return TRUE;
		}
		$this->form_validation->set_message('valida', 'Usuario o contraseña incorrecta');
		return FALSE;

	}
	public function logout(){
		unset($_SESSION['logged_in']);
		redirect('auth/login/');
	
	}
}
	
	
	
	
	

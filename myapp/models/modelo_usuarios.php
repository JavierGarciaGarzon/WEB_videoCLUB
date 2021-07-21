<?php

class modelo_usuarios extends CI_Model{
    var $id;
	var $name;
	
    public function __construct() {
        parent::__construct();
    }
    function  validarUsuario($nick,$password){
		$this->db->select('nick','password');
		$this->db->from('usuario');
		$this->db->where('nick',$nick);
		//hash('sha256', $password) habría que cambiar la base de datos
		$this->db->select('password',$password);
		$this->db->limit(1);
		$query = $this->db->get();
		
   		if($query->num_rows() == 1)
   		{
			$rows = $query->result();
			$this->nombre = $rows[0]->nombre;
			$this->nick = $rows[0]->nick;
			return $this;
   		}
        return FALSE;
    }
     	function get_usuarios(){
		$query = $this->db->get('usuario');
		return $query->result();
	}
	
	function return_usuario($id){
		$query = $this->db->query("SELECT * FROM usuario WHERE id=$id");
		return $query->result();
	}


	function modificarPermisos($id, $nuevoPermiso){
		$this->db->query("UPDATE usuario SET rol='$nuevoPermiso' WHERE id=$id");
	}
	
	function modificarUsuario($id, $campo, $modificacion){
		$this->db->query("UPDATE usuario SET $campo='$modificacion' WHERE id=$id");
	} 
        
        function compraspelis($id){
                $this->db->query("SELECT pr.titulo
                                  FROM usuario-producto up,producto pr,usuario u,pelicula p
                                  WHERE pr.id=p.id AND u.nick=up.nick AND up.id=p.id AND u.id=up.id");
        }
           function comprasseries($id){
                $this->db->query("SELECT pr.titulo,pr.fecha
                                  FROM usuario-producto up,producto pr,usuario u,serie s
                                  WHERE pr.id=s.id AND u.nick=up.nick AND up.nick=s.nick AND u.id=up.id");
        }
    }


?>
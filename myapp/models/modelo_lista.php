<?php 

class modelo_lista extends CI_Model{
    //
public function __construct(){
		parent::__construct();
	}
        function return_listapelis_usuario($id){
           $query= $this->db->query("SELECT up.*,u.nombre AS 'nombre_usuario', p.nick AS 'nombre_pelicula'
                                        FROM usuario u,pelicula p,usuario-producto up 
                                        WHERE u.id=up.id AND p.nick=up.nick");
           return $query->result();
        }
           function return_listaseries_usuario($id){
           $query= $this->db->query("SELECT up.*,u.nombre AS 'nombre_usuario', s.nick AS 'nombre_serie'
                                        FROM usuario u,serie s,usuario-producto up 
                                        WHERE u.id=up.id AND s.nick=up.nick");
           return $query->result();
        }

}

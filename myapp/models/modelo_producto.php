<?php

class modelo_producto extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	function return_peliculas(){
	$query = $this->db->query("SELECT `pelicula`.*FROM `pelicula`");
		return $query->result();
	}
        function return_series(){
		$query = $this->db->query("SELECT * FROM serie");
		return $query->result();
	}
	function return_producto_pelicula($id){
		$query = $this->db->query("SELECT * FROM pelicula WHERE id=$id");
		return $query->result();
	}
        function return_producto_serie($id){
		$query = $this->db->query("SELECT * FROM serie WHERE id=$id");
		return $query->result();
	}
        function comprar_producto($id,$nick){
            $query= $this->db->insert('carrito',$id,$nick);
        }
        function elminiar_producto($id,$nick){
            $query= $this->db->query("DELETE FROM carrito WHERE id=$id AND nick=$nick");
        }
         function return_precio_carrito(){
            $query= $this->db->query("SELECT Sum(precio) FROM carrito");
            return $query->result();
        }
}

?>

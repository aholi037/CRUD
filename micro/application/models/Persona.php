<?php 

class Persona  extends CI_model{


	public function __construct()
	{
		parent::__construct();
		$this->load->database('microeco');
	}
//muestra una fila de datos por código
	 function find($id){
		$this->db->select();
		$this->db->from('concepto');
		$this->db->where('id_concepto', $id);

		$query=$this->db->get();
		return $query->row();
	}
//muestra todos los datos
	 function findAll(){
		$this->db->select();
		$this->db->from('concepto');

$query=$this->db->get();
return $query;
		
	}
//insertar una fila de datos en la BD
	 function insert($data){
		$this->db->insert('concepto',$data);
		return $this->db->insert_id();
	}

	//acuatualiza datos de una tabla en base al código
	 function update($id,$data){
	 	$this->db->where('id_concepto', $id);
		$this->db->update('concepto',$data);
	}

	//elimina un registro de una tabla
	function delete($data){
		
	}



}//llave que cierra la clase Persona

?>
<?php 

class personas extends CI_controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->database('microeco');
		$this->load->model('Persona');

	}

	public function index(){
	
}

	public function listado(){

}
	public function guardar( $id = null){

		

//creamos la varibale para guardar la hora y fecha del registro del concepto
			date_default_timezone_set("America/Guatemala"); 
			$fecha_registro=date("d-m-Y H:i:s");

$Vdata["titulo_concepto"]=$Vdata["descripcion_concepto"]="";

if(isset($id)){

	$datos=$this->Persona->find($id);
if(isset($datos)){
				$Vdata["titulo_concepto"]=$datos->titulo_concepto;
				$Vdata["descripcion_concepto"]=$datos->descripcion_concepto;

}
}
			
			//condicional para revisar si el método es el post
			if($this->input->server("REQUEST_METHOD")=="POST"){
				$data["titulo_concepto"]=$this->input->post("titulo");
				$data["descripcion_concepto"]=$this->input->post("concepto");
				$data["fecha_concepto"]=$fecha_registro;
				$data["estado_concepto"]="1";

				$Vdata["titulo_concepto"]=$this->input->post("titulo");
				$Vdata["descripcion_concepto"]=$this->input->post("concepto");


		if(isset($id)){

			$this->Persona->update($id,$data);
		}
		else
		{
			$this->Persona->insert($data);
		}

				
}

	//carga la vista guardar con parametros de mostrar para actualizar
			$this->load->view('Personas/guardar',$Vdata);


}
	public function borrar(){
	
}


}

 ?>
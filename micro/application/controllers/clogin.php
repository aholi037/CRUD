<?php

class clogin extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database('microeco');
	}

	
	public function test(){
		$sql=$this->db->query("
		select * from concepto 
			")->result();

		echo json_encode($sql);
	}


	


}

?>
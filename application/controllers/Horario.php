<?php

class Horario  extends OWN_Controller{	

	public function __construct() {
		parent::__construct();
		$this->load->model('Horario_model');
	}
/*
    public function Agregar()
    {
         $insert_data = array('nombre'=>'Analisis 2');
        $Horario->insert($insert_data);
    }

    public function Leer()
    {
         $data = $Horario->with_dicta('fields:nombre')->get();
         var_dump($data);
        
    }*/

}
?>
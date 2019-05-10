<?php

Class Nuevo extends CI_Controller{
    
    function __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');
		$this->load->helper('form');
    }
    
	function index(){
	
		$this->load->view('vista1');
	}

	function suma()
	{
		$entero1 = $_POST['num1'];
		$entero2 = $_POST['num2'];
		if ($entero1 == null && $entero2 == null) {
			$datos['var'] = "INGRESE VALORES NUMÉRICOS PARA CONTINUAR...";
		}
		else
		{
			if (is_numeric($entero1) && is_numeric($entero2)) {
				$entero3 = $entero1 + $entero2;
			    $datos['var']="El resultado es: " . $entero3;
			}
			else
			{
				$datos['var'] = "INGRESE VALORES NUMÉRICOS PARA CONTINUAR...";
			}
		}
		$this->load->view('vista2', $datos);
	}

	function hola()
	{
		echo "hola mundo";
	}
}


?>
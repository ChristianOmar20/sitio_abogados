<?php
require("funciones.trait.seguridad.php");
require("funciones.trait.conexion.php");
require("funciones.trait.constructor.php");
require("funciones.trait.consultas.php");
require("funciones.trait.formularios.php");
require("funciones.trait.reportes.php");

class Project
{

	use seguridad,
		connection,
		constructor,
		consultas,
		formularios,
		reportes;
	
	function __construct()
	{
		
	}
	
	function __destruct()
	{
		
	}
}
?>
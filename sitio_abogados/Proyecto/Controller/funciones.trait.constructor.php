<?php 
trait constructor
{
	function titulo()
	{
		$archivo_actual = basename($_SERVER["PHP_SELF"]);
	    $archivo_actual = preg_replace("/\.php$/", "" ,array_pop(explode("/", $archivo_actual)));
		if($archivo_actual=="index")
		{
			echo"Inicio";
		}
		else
		{
			echo $archivo_actual;
		}
	}
	
	function crear_css($archivo)
	{
		$ruta	=	"/Scripts/CSS/".$archivo."";
		echo $ruta;
	}
	
	function crear_vista($archivo)
	{
		$ruta	=	"/Proyecto/Views/".$archivo."";
		echo $ruta;
	}
	
	function footer()
	{
		echo"Jason Smith &copy; 2011<br> Website Template by <a class=\"link\" rel=\"nofollow\"  href=\"/\">Página de footer</a><br>";
	}
}
?>
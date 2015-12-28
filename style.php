<?php

require 'php/lessc.inc.php';

function compress($buffer) {
  /* remove comments */
  $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
  /* remove tabs, spaces, newlines, etc. */
  $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
  return $buffer;
}
$carpeta_entrada="less/";
$carpeta_salida="css/";
$stylesheets=array("style");

// poner un array de less y css
$archivos_less =  array("./less/style.less");
ob_start("compress");
foreach ($archivos_less as $archivo) {
	$archivo_arr = explode(".", $archivo);
	if(file_exists($archivo)){
		$extension = $archivo_arr[count($archivo_arr) - 1];
		if($extension == "less") { 
			try {
				lessc::ccompile($archivo, $archivo[0].'.css');
			}catch (exception $ex) {
			    //exit('lessc fatal error:<br />'.$ex->getMessage());
			    echo "";
			}
		}elseif($extension == "css"){
			$file = fopen($archivo, "r");
			while(!feof($file)) {
				echo fgets($file);
			}
			fclose($file);
		}
	}
}
header('Content-Type: text/css');
// print out your php-driven css...

ob_end_flush();
?>

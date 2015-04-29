<?php
function genera_slug($str)
{
	$slug			= strtolower($str);

	$restriccion	=	array('&nbsp;','á','é','í','ó','ú','ñ',' ',';',':','¿','?','%','$','!', '&','/','(',')','*','#',',','"','¡',"'",'=','.',"”","“", "Á", "É", "Í", "Ó", "Ú", "Ñ" );
	$cambio			=	array('-','a','e','i','o','u','n',"-","","","","","","","","","","","","","","","","","","","","","", "a", "e", "i", "o", "u", "ñ");

	$slug 			=	str_replace($restriccion,$cambio,$slug);
	
	return $slug;
}

function formato_fecha_ddmmaaaa($fecha)
{	
	$data = separateDate($fecha);
	//print_r($data[0]);exit;
	$fecha = $data[0];

	if(strpos($fecha, '-') === FALSE)
		$array = explode('-', $fecha);
	else
		$array = explode('-', $fecha);
	if(count($array) == 3)
		return $array[2] . "/" . $array[1] . "/" . $array[0];
	else
		return '';
}

function separateDate($date)
{
	$dateSeparate = explode(' ', $date);
	return $dateSeparate;
}
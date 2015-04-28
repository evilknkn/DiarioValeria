<?php
function genera_slug($str){

		$slug			= strtolower($str);

		$restriccion	=	array('&nbsp;','á','é','í','ó','ú','ñ',' ',';',':','¿','?','%','$','!', '&','/','(',')','*','#',',','"','¡',"'",'=','.', "Ñ");
		$cambio			=	array('-','a','e','i','o','u','n',"_","","","","","","","","","","","","","","","","","","","", "n");

		$slug 			=	str_replace($restriccion,$cambio,$slug);
		
		return $slug;

	}
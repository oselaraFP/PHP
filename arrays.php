<?php
	$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
	echo $semana[1] . '<br/>';
	$semana[7] = 'Jose';
	echo $semana[7] . '<br/>';
	$otro = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];
	$otromas = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo', array('Mes','Año'));
	echo $otromas[7][0];
?>




<?php
	$meses = array(
		'Enero','Febrero','Marzo','Abril',
		'Mayo','Junio','Julio','Agosto',
		'Septiembre','Octubre','Noviembre','Diciembre'
	);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Meses del año</title>
</head>
<body>
	<h1>Meses del año</h1>
	<ul>
		<?php
			foreach ($meses as $mes) {
				echo '<li>' . $mes . '</li>';
			}
		?>
	</ul>
</body>
</html>
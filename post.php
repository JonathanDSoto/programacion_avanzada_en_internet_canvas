<?php 

if ( isset($_POST) && $_POST['token'] == 'asd1902jads') {
	$info = array(
		"code" => 200,
		"mensaje" => "Datos consultados",
		"data" => array(
			"nombre" => "jonathan",
			"edad" => 15
			)
		
	);
	echo json_encode($info);
}else{
	$info = array(
		"code" => 400,
		"mensaje" => "Sin autorización",
		"data" => array()
	);
	echo json_encode($info);
}


?>
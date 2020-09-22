<?php 
	if (isset($_POST['annio']) && $_POST['annio']!="") {
		echo $edad = date('Y') - $_POST['annio']; 
	}
	
?>


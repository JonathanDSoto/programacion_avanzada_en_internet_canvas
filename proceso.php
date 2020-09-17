<?php 
	if (isset($_POST['code']) && $_POST['code']=='XW9S78F') {

		$data = array(
			"info" => 50,
			"value" => 12,
			"code" => "XW9S78F"
		);
		echo json_encode($data);
	}elseif(isset($_GET['edad'])){
		echo $_GET['edad']+6;
	}
?>


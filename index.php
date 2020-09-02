<!DOCTYPE html>
<html>
<head>
	<title>Clase</title>
	<style type="text/css">
		.super_div{
			width: 100%;
			height: 500px;
			background-color: #D5D8DC;
		}
		.mini_div{
			width: 30%;
			margin: 1%;
			border-radius: 5px;
			border-width: 1px;
			border-style: solid;
			border-color: black;
			height: 300px;
			float: left;
		}
		.patito{
			border-color: lightcoral;
		}
	</style>
</head>
<body>

	<div class="super_div">
		<div  id="primer_div" class=" otra_clase mini_div" style="background-color: #2ECC71;"></div>
		<div class="mini_div" style="background-color: #D98880;"></div>
		<div  class="otra_clase mini_div" style="background-color: #F9E79F;"></div>
	</div>

 	<script type="text/javascript" src="assets/js/jquery.js"></script>
 	<script type="text/javascript">
 		$(document).ready(function(){
 			console.log($("#primer_div"))
 			$("#primer_div").addClass('patito')
 			$("#primer_div").css('background-color','yellow')
 		})
 	</script>
</body>
</html>
<?php
	//$info = file_get_contents("https://jsonplaceholder.typicode.com/todos/"); 
	$info = 0;
?>
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
		.otra_clase{
			background-color: purple !important;
		}
	</style>
</head>
<body>

	<div class="super_div">
		<div  id="primer_div" class=" otra_clase mini_div" style="background-color: #2ECC71;"></div>
		<div class="mini_div" style="background-color: #D98880;">
			
			<input type="" value="10" id="edad" placeholder="edad" name="">
			<button onclick="accion()">
				Acción
			</button>

		</div>
		<div  class="otra_clase mini_div" style="background-color: #F9E79F;">
			<p id="parrafo_12">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. <b>Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b>
			</p>
		</div>
	</div>

 	<script type="text/javascript" src="assets/js/jquery.js"></script>
 	<script type="text/javascript">
 		$(document).ready(function(){ 

 			// $("button").click(function(){
 			// 	alert("hola")
 			// })

 			$("#edad").on('focus',function(){
 				console.log("focus")
 			})

 			$("#edad").on('blur',function(){
 				console.log("blur")
 			})

 			$("button").on('click',function(){
 				// var edad = $("#edad").val()
 				// alert("hola, tu edad es: "+edad)
 				$("#parrafo_12").remove()
 			})

 			$(".mini_div").hover(function(){
 				$(this).toggleClass('otra_clase')
 			})

 		})
 		function accion()
 		{
 			console.log("X")
 		}
 	</script>
</body>
</html>
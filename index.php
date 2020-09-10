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
		<div  id="primer_div" class=" otra_clase mini_div" style="background-color: #2ECC71;">
			
			<p class="parrafo_1">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>

			<button class="btn_1">
				Click me 
			</button>

		</div>
		<div class="mini_div" style="background-color: #D98880;">
			
			<p class="parrafo_2" style="display: none">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>

			<button id="button_2" >
				Click me 
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

			<button>
				Click me 
			</button>
		</div>
	</div>

 	<script type="text/javascript" src="assets/js/jquery.js"></script>
 	<script type="text/javascript">
 		$(document).ready(function(){ 

 			$(".btn_1").click(function(){

 				$('p.parrafo_1').animate(
				    {
				        fontSize : "+=2px",
				        opacity : "-=0.10"
				    },
				    3000, // duration
				 
				    // función de devolución de llamada
				    function() { console.log('realizado');
				});

 			})
 			$("#button_2").click(function(){
 				//$(".parrafo_2").show(2000);
 				//$(".parrafo_2").fadeIn(5000);
 				$(".parrafo_2").slideDown(3000);
 			})

 			$("button").last().click(function(){
 				//$("#parrafo_12").hide();
 				//$("#parrafo_12").fadeOut(5000);
 				$("#parrafo_12").slideToggle(3000);
 			})

 			// $("button").click(function(){
 			// 	alert("hola")
 			// })

 			// $("#edad").on('focus',function(){
 			// 	console.log("focus")
 			// })

 			// $("#edad").on('blur',function(){
 			// 	console.log("blur")
 			// })

 			// $("button").on('click',function(){
 			// 	// var edad = $("#edad").val()
 			// 	// alert("hola, tu edad es: "+edad)
 			// 	$("#parrafo_12").remove()
 			// })

 			// $(".mini_div").hover(function(){
 			// 	$(this).toggleClass('otra_clase')
 			// })

 		})
 		function accion()
 		{
 			console.log("X")
 		}
 	</script>
</body>
</html>
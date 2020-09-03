<!DOCTYPE html>
<html>
<head>
	<title>
		Canvas
	</title>
	<style type="text/css">
		.container{
			width: 80%;
			background-color: gray;
			margin: auto;
			min-height: 200px;
		} 
		canvas{
			background-color: #F7D358;
		} 
		.table{
			width: 30%;
			margin: auto;
			background-color: #ff000094;
			border-radius: 5px;
			display: inline-block;
		}
		p{
			text-align: center;
		}
		.amarilloso{
			color:yellow !important;
		}
	</style>
</head>
<body>
	<div class="container">  

		<div class="table">
			<h1>
				Encabezado
			</h1>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>

				<a href="">
					Leer más
				</a>
			</p>
		</div> 

		<div class="table">
			<h1 id="title_2" style="color:red;">
				Encabezado
			</h1>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>

				<a href="">
					Leer más
				</a>
			</p>
		</div> 

		<div class="table">
			<h1>
				Encabezado
			</h1>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>

				<a href="">
					Leer más
				</a>
			</p>
		</div> 

	</div> 


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			//selección por ID
			$("#title_2").css({'font-size':'22px'});

			$("#title_2").addClass('amarilloso')

			var enlaces = $("a");
			console.log(enlaces)
			
			$.each(enlaces,function(k,enlace){
				$(enlace).attr({'href':'https://api.jquery.com/addClass/','target':'_blank'})
			})


			//selección por CLASS
			var seleccion2 = $(".table");

			$("p:last").html('<p>Sin contenido</p>')

		})
	</script>
</body>
</html>
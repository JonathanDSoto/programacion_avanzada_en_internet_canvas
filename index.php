<?php 
	$info = "";
 	#$info = file_get_contents('https://jsonplaceholder.typicode.com/todos/');
	
?>
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
			<h1 id="title_2" style="">
				Encabezado
			</h1>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>

				<label for="email">
					Suscribirse
				</label>

				<input type="email"  name="email" id="email">
				<br>
				<button data-info='<?= $info ?>' >
					Guardar 
				</button>

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


				<select id="combo">
					<option>
						1
					</option>
					<option>
						2
					</option>
				</select> 

				<a href="">
					Leer más
				</a>
			</p>
		</div> 

	</div> 


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 

			$("#combo").change(function(){
				console.log(this)
			})

			$("div.table").hover(function(){
				$(this).css('background-color','purple')
			})

			// $("button").one('click',function(){
			// 	console.log('one')
			// })

			$("button").on('click',function(){
				console.log('on')

				var email = $("#email").val()
				console.log(email)

				var label = $("label").html('<h1>'+email+'</h1>')
				console.log(label)
			})

			// $("button").bind('click',function(){
			// 	console.log("bind")
			// })
			
			$("button").click(function(){
				// console.log(this)
				// var info = $(this).data('info')
			
				// $.each(info,function(k,user){
				// 	console.log( user )
				// })
			})

		})
		function saludo(target)
		{	
			
			
		}
	</script> 
</body>
</html>
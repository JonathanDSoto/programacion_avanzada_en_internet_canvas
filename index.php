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

			<p class="parrafo_1">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br> 
			</p>

			<button class="uno">
				Presioname
			</button>
		</div> 

		<div class="table">
			<h1 id="title_2" style="">
				Encabezado
			</h1>

			<p class="parrafo_2" style="display: none;">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>  
			</p>

			<button class="dos">
				Presioname
			</button>
		</div> 

		<div class="table">
			<h1>
				Encabezado
			</h1>

			<p id="parrafo">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
				
			</p>

			<button class="tres">
				Presioname
			</button>
		</div> 

		<hr>

		<button id="get">
			Get
		</button>

		<button id="ajax">
			Ajax
		</button>

		<button id="script">
			Script
		</button>

		<button id="json">
			Json
		</button>

	</div> 


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 

			$("#get").click(function(){
				// console
				$.get('https://jsonplaceholder.typicode.com/todos/',
					function(r){
						console.log(r)
						//$(".container").append(r)
					})
			})

			$("#ajax").click(function(){
				$.ajax({ 
    				url : './post.php', 
    				data:{ token:'asd1902jads',otro:1 },
    				type : 'POST', 
    				dataType : 'json',
    				success:function(r){
    					console.log(r)
    				},
    				error:function(xhr,status)
    				{
    					console.log(xhr)
    					console.log(status)
    				},
    				complete:function(xhr,status)
    				{
    					
    				}
				})
				// axios.post('post.php', {
				//     token: 'asd1902jads'
				//   })
				//   .then(function (response) {
				//     console.log(response);
				//   })
				//   .catch(function (error) {
				//     console.log(error);
				//   });
			})

			$("#script").click(function(){
				$.getScript('assets/js/jquery-3.5.1.min.js', function() {
				    console.log("hola")
				});
			})

			$("#json").click(function(){
				$.getJSON('https://jsonplaceholder.typicode.com/todos/', function(resp) {
				    $.each(resp, function(k, v) {
				        console.log(k + ' : ' + v);
					}); 
				});
			})

			$('button.uno').click(function(){

				$('.parrafo_1').animate(
				    { 
				        opacity : '-=0.25',
				        fontSize: '+=5px'
				    },
				    900, // duration
				 
				    // función de devolución de llamada
				    function() { console.log('realizado');
				});

			}) 

			$(".dos").click(function(){
				$(".parrafo_2").slideDown()
			})
			
			$(".tres").click(function(){
				$("#parrafo").slideUp(4000)
			})

		}) 
	</script> 
</body>
</html>
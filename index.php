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
			background-color: #D5D8DC;
		}
		.mini_div{
			width: 30%;
			margin: 1%;
			border-radius: 5px;
			border-width: 1px;
			border-style: solid;
			border-color: black; 
			float: left;
		}
		.patito{
			border-color: lightcoral;
		}
		.otra_clase{
			background-color: purple !important;
		}
		.line{
			width: 100%;
			min-height: 20px;
		}
		.mega_div{
			width: 100%;
			min-height: 200px;

		}
		.old_content{
			width: 100%;
			height: auto;
		}
	</style>
</head>
<body>

	<div class="super_div">

		<!-- <div class="old_content"> 

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

		</div> -->


		<div class="line">
			<hr>
		</div>

		<div class="mega_div">
			<div id="app">
				<label>
					Nombre: {{ nombre }}
				</label>
			</div>

			<div id="app-2">
			  <span v-bind:title="message">
			    Hover your mouse over me for a few seconds
			    to see my dynamically bound title!
			  </span>

			  	<p v-if="on">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>

				<ul> 
					<li v-for="menu in menus" >
						{{ menu.title }}
					</li> 
				</ul>


				<button v-on:click="toggle">
					Click
				</button>

				<input type="text" v-model="numUno" value="" name="name">
				<input type="text" v-model="numDos" value="" name="name">
				<button v-on:click="suma">
					Suma
				</button>
			</div>
 

			
		</div>

	</div>

 	<script type="text/javascript" src="assets/js/jquery.js"></script>
 	<script type="text/javascript">
 		$(document).ready(function(){

 			// $.get('footer.html',function(r){
 			// 	$(".super_div").append(r);
 			// }) 

 			$("#button_2").click(function(){

 				var response;
	 			$.ajax({ 
				    url : 'proceso.php', 
				    data : { year:var_year }, 
				    type : 'POST', 
				    dataType : 'text', 
				    success : function(r) {
				        console.log(r)  
				    }, 
				    error : function(xhr, status) {
				        console.log(xhr)
				        console.log(status)
				    }, 
				    complete : function(xhr, status) {
				        // console.log(xhr)
				        // console.log(status)
				    }
				});
	 			

 			})
 			

 		}) 
 	</script>
 	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
 	<script type="text/javascript">
 		var app = new Vue({
 			el: "#app",
 			data:{
 				nombre:'Jonathan'
 			}
 		})
 		var app2 = new Vue({
		  el: '#app-2',
		  data: {
		    message: 'You loaded this page on ' + new Date().toLocaleString(),
		    on:false,
		    menus:[ { title:'Desayunos' },{ title:'Comidas' },{ title: 'Cenas'} ],
		    numUno: 0,
		    numDos: 0
		  },
		  methods:{
		  	toggle: function(){
		  		this.on = (this.on)?false:true;
		  	},
		  	suma:function(){
		  		console.log( parseInt(this.numUno) + parseInt(this.numDos));
		  	}
		  }
		})
 	</script>
</body>
</html>
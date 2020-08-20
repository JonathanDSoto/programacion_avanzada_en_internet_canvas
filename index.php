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
			min-height: 500px;
		} 
		canvas{
			background-color: #F7D358;
		}
		/*img{
			visibility: hidden;
		}*/
	</style>
</head>
<body>
	<div class="container">
		<canvas id="canvas" width="400" height="300">
			Opps tu navegador no soporta CANVAS
		</canvas>
		<!-- <img id="pingu" src="burbujas.png"> -->
	</div>
	<script type="text/javascript">
		window.onload = function(){
			var canvas = document.getElementById('canvas');
			var color = "rgb(255,0,0)";
			var isPressed = false;
			if (canvas.getContext) {
				var ctx = canvas.getContext('2d');

				// canvas.addEventListener('click',function(evt){ 

				// 	ctx.fillStyle = "rgb(255,0,0)"; 
				// 	ctx.beginPath();
				// 	ctx.arc(evt.offsetX, evt.offsetY,10,0,2*Math.PI)
				// 	ctx.fill()
				// })

				// canvas.addEventListener('mouseover',function(evt){
				// 	ctx.fillStyle = color; 
				// 	ctx.beginPath();
				// 	ctx.arc(evt.offsetX, evt.offsetY,5,0,2*Math.PI)
				// 	ctx.fill() 
				// });

				canvas.addEventListener('mouseout',function(evt){
					color = getRandomColor();
				});

				canvas.addEventListener('mousemove',function(evt){
					if(isPressed)
					{
						ctx.fillStyle = color; 
						ctx.beginPath();
						ctx.arc(evt.offsetX, evt.offsetY,5,0,2*Math.PI)
						ctx.fill();
					}
					
				});

				canvas.addEventListener('mousedown',function(evt){
					isPressed = true;
				});

				canvas.addEventListener('mouseup',function(evt){
					isPressed = false;
				});

				// document.addEventListener('keydown',function(evt){
				// 	console.log(evt)
				// })

				// document.addEventListener('keyup',function(evt){
				// 	console.log(evt)
				// })

				// document.addEventListener('keypress',function(evt){
				// 	console.log(evt)
				// })
				
			}
		}

		function getRandomColor() {
			var letters = '0123456789ABCDEF';
			var color = '#';
			for (var i = 0; i < 6; i++) {
				color += letters[Math.floor(Math.random() * 16)];
		  	}
		  	return color;
		}
		 
	</script>
</body>
</html>
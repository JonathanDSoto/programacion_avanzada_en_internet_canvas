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
		var canvas = null, ctx = null,x=0,y=0;

		window.requestAnimationFrame = (function(){
			return window.requestAnimationFrame || 
				window.mozRequestAnimationFrame ||
				window.webkitRequestAnimationFrame ||
				function (callback){
					window.setTimeout(callback,17);
				}
		}());

		function paint(ctx)
		{
			ctx.fillStyle = "#fff";
			ctx.fillRect(0,0,canvas.width,canvas.height);

			ctx.fillStyle="red";
			ctx.fillRect(x,y,10,10);
		}

		function upt(){
			// x += 2;
			// if(x>canvas.width){
			// 	x = -10;
			// }

			x -= 2;
			if (x<0) {
				x = canvas.width;
			}

			// y += 2;
			// if(y>=canvas.height){
			// 	y = -10;
			// }

			// y -=2;
			// if(y<0){
			// 	y = canvas.height;
			// }
		}

		//se repite mucho
		function run(){
			window.requestAnimationFrame(run)
			upt();
			paint(ctx);
		}

		function init(){
			canvas = document.getElementById('canvas');
			ctx = canvas.getContext('2d');
			run();
		}

		window.addEventListener('load',init,false);  

		document.addEventListener('keydown',function(e){
			
		})
		 
	</script>
</body>
</html>
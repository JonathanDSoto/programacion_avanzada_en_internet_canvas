<!DOCTYPE html>
<html>
<head>
	<title>Canvas</title>
	<style type="text/css">
		.content{
			width: 80%;
			min-height: 600px;
			background-color: gray;
			margin: auto;
		}
		canvas{
			background-color: white;
			margin:auto;
		}
		.otherClass{

		}
	</style>
</head>
<body>  
	<div class='content otherClass' data-id='1'>
		<canvas id="canvas" width="500" height="250" ></canvas>

	</div>
	<script type="text/javascript">
		var canvas = null, ctx = null, x = 0, y = 0;

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
			ctx.fillStyle = "black";
			ctx.fillRect(0,0,canvas.width,canvas.height)

			ctx.fillStyle = "#0f0";
			ctx.fillRect(x,y,10,10);
		}

		function act(){

			x += 2;
			if(x > canvas.width){
				x = -10;
			}
		}

		function run(){
			window.requestAnimationFrame(run);
			act();
			paint(ctx);
		}

		function init(){
			canvas = document.getElementById('canvas');
			ctx = canvas.getContext('2d');
			run();
		} 
		
		window.addEventListener('load',init,false);
		
	</script>
</body>
</html>








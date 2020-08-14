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
	</style>
</head>
<body>
	<div class="content">
		<canvas id="canvas" width="500" height="250" ></canvas>
		<img id="imagen" style="visibility: hidden;" src="burbujas.png">
	</div>
	<script type="text/javascript">
		var canvas = document.getElementById('canvas');
		if( canvas.getContext )
		{
			var ctx = canvas.getContext('2d');

			// ctx.fillStyle = 'rgb(0,0,200)';
			// ctx.fillRect(0,0,100,50);

			// ctx.fillStyle = 'rgba(200,0,0,0.5)';
			// ctx.fillRect(20,20,100,50);

			//linea
			// ctx.moveTo(0,0);
			// ctx.lineTo(100,100); 
			// ctx.stroke();

			//circulo
			// ctx.beginPath();
			// ctx.arc(150, 150, 40, 0, 2 * Math.PI);
			// ctx.stroke();
			// ctx.closePath();

			//Texto
			// ctx.font = "30px Arial";
			// ctx.strokeStyle = "#FFBF00";
			// ctx.strokeText("Hola mundo",10,30);

			//grandiante
			// var grd = ctx.createLinearGradient(0, 0, 200, 0);
			// grd.addColorStop(0,"blue");
			// grd.addColorStop(1,"white");

			// ctx.fillStyle = grd;
			// ctx.fillRect(10,10,150,80);

			//grandiante circular
			// var grd = ctx.createRadialGradient(75, 75, 1, 120, 90, 100)
			// grd.addColorStop(0,"blue");
			// grd.addColorStop(1,"white"); 

			// ctx.fillStyle = grd;
			// ctx.fillRect(10,10,150,150);

			//imagen
			var img = document.getElementById('imagen');
			ctx.drawImage(img,10,10);
		}
		
	</script>
</body>
</html>








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
		img{
			visibility: hidden;
		}
	</style>
</head>
<body>
	<div class="container">
		<canvas id="canvas" width="400" height="300">
			Opps tu navegador no soporta CANVAS
		</canvas>
		<img id="pingu" src="bubujas.png">
	</div>
	<script type="text/javascript">
		window.onload = function(){
			var canvas = document.getElementById('canvas');
			if (canvas.getContext) {
				var ctx = canvas.getContext('2d');

				//cuadrado
				// ctx.fillStyle = "rgb(255,0,0)";
				// ctx.fillRect (10, 10, 55, 50);

				// ctx.fillStyle = "rgba(0,0,200,0.5)";
				// ctx.fillRect(30,30,55,50);

				// ctx.strokeStyle = "green";
				// ctx.strokeRect(70,70,55,50);

				//linea
				// ctx.moveTo(0,0);
				// ctx.lineTo(200,100);
				// ctx.lineTo(50,70);
				// ctx.lineTo(100,20);
				// ctx.lineTo(0,0)
				// ctx.fill();

				//circulo
				// ctx.beginPath();
				// ctx.fillStyle = "green";
				// ctx.arc(95, 50, 40, 0, 2 * Math.PI);
				// ctx.fill();
				// ctx.closePath();

				//texto
				// ctx.font = "30px Arial";
				// ctx.strokeText("Hola mundo",10,50);

				//linear Gradiant
				// var grd = ctx.createLinearGradient(0,0,200,0);
				// grd.addColorStop(0,"red");
				// grd.addColorStop(1,"white");

				// ctx.fillStyle = grd;
				// ctx.fillRect (10, 10, 150, 80);

				//radial Gradiant
				// var grd = ctx.createRadialGradient(75, 50, 5, 90, 60, 100);
				// grd.addColorStop(0,"red");
				// grd.addColorStop(1,"white");

				// ctx.fillStyle = grd;
				// ctx.fillRect(10, 10, 150, 80);


				//imagen
				var img = document.getElementById('pingu');
				ctx.drawImage(img,0,0);
			}
		}

		 
	</script>
</body>
</html>
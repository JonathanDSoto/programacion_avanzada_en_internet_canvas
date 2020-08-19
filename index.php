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
		var canvas = document.getElementById('canvas');
		var color = "blue";
		var isPreseed = false;
		if( canvas.getContext )
		{
			var ctx = canvas.getContext('2d'); 

			/*canvas.addEventListener("click",function(evt){ 

				ctx.fillStyle = 'rgb(0,0,200)';
				ctx.beginPath();
				ctx.arc(evt.layerX,evt.layerY,5,0,2*Math.PI) 
				ctx.fill();
			});*/

			canvas.addEventListener('mouseover',function(evt){
				ctx.fillStyle = color;
				ctx.beginPath();
				ctx.arc(evt.layerX,evt.layerY,5,0,2*Math.PI) 
				ctx.fill();
			});

			canvas.addEventListener('mouseout',function(evt){
				color = getRandomColor();
			});

			canvas.addEventListener('mousemove',function(evt){
				if (isPreseed) {
					ctx.fillStyle = color;
					ctx.beginPath();
					ctx.arc(evt.layerX,evt.layerY,5,0,2*Math.PI) 
					ctx.fill();
				}
				
			});

			canvas.addEventListener('mousedown',function(evt){
				isPreseed = true;
			});

			canvas.addEventListener('mouseup',function(evt){
				isPreseed = false;
			});
			 
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








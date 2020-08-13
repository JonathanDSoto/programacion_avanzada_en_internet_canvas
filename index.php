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
	</div>
	<script type="text/javascript">
		var canvas = document.getElementById('canvas');
		if( canvas.getContext )
		{
			var ctx = canvas.getContext('2d');

			ctx.fillStyle = 'rgb(0,0,200)';
			ctx.fillRect(0,0,100,50);

			ctx.fillStyle = 'rgba(200,0,0,0.5)';
			ctx.fillRect(20,20,100,50);
		}
		
	</script>
</body>
</html>








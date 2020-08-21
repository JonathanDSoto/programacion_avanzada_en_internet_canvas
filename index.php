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
		var LEFT = 1,UP = 0, RIGHT = 2, DOWN = 3;
		var lastPress = RIGHT, speed = 5;
		var player = null, food = null;

		window.requestAnimationFrame = (function(){
			return window.requestAnimationFrame || 
				window.mozRequestAnimationFrame ||
				window.webkitRequestAnimationFrame ||
				function (callback){
					window.setTimeout(callback,17);
				}
		}());

		function Rectangle(x,y,w,h,c){
			this.x=x;
			this.y=y;
			this.w=w;
			this.h=h;
			this.c=c;

			this.paint =function(ctx){
				ctx.fillStyle=this.c;
				ctx.fillRect(this.x,this.y,this.w,this.h);
			}

			this.intersects = function(target){
				if( this.x < target.x + target.w  && 
					this.x + this.w > target.x    &&
					this.y < target.y + target.h  &&
					this.y + this.h > target.y){
					return true;
				}
			}
		}

		function paint(ctx)
		{
			ctx.fillStyle = "#000";
			ctx.fillRect(0,0,canvas.width,canvas.height);

			player.paint(ctx); 

			food.paint(ctx);
		}

		function upt(){

			if (lastPress==UP) {
				player.y -=speed;
				if(player.y<0){
					player.y = canvas.height;
				}
			}
			if (lastPress==DOWN) {
				player.y += speed;
				if(player.y>=canvas.height){
					player.y = -10;
				}
			}
			if (lastPress==LEFT) {
				player.x -= speed;
				if (player.x<0) {
					player.x = canvas.width;
				}
			}
			if (lastPress==RIGHT) {
				player.x += speed;
				if(player.x>canvas.width){
					player.x = -10;
				}
			}  
			
			if (player.intersects(food)) {
				food.x = random(canvas.width-10);
				food.y = random(canvas.height-10);
			}
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

			player = new Rectangle(x,y,10,10,"#00FF00")
			food = new Rectangle((canvas.width/2-10),(canvas.height/2-10),10,10,"red")

			run();
		}

		window.addEventListener('load',init,false);  

		document.addEventListener('keydown',function(e){
			if(e.keyCode== 87 || e.keyCode == 38){
				lastPress = UP;
			}
			if(e.keyCode== 83 || e.keyCode == 40){
				lastPress = DOWN;
			}
			if(e.keyCode== 65 || e.keyCode == 37){
				lastPress = LEFT;
			}
			if(e.keyCode== 68 || e.keyCode == 39){
				lastPress = RIGHT;
			}
		})
		 
		function random(x){
			return Math.floor(Math.random()*x)
		}
	</script>
</body>
</html>
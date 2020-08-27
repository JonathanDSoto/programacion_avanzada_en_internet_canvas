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
		var lastPress = RIGHT, speed = 2;
		var player = null, food = null, score = 0;
		var pause = false, walls = Array(), gameOver = false;

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

			for (var i = walls.length - 1; i >= 0; i--) {
				walls[i].paint(ctx)
			} 

			ctx.fillStyle="white";
			ctx.textAlign = "left";
			ctx.fillText('SCORE: '+score+" SPEED: "+speed,2,10);

			if(pause && !gameOver){
				ctx.fillStyle="white";
				ctx.textAlign = "center";
				ctx.fillText('P A U S E',195,150);
			}

			if(gameOver){
				ctx.fillStyle="white";
				ctx.textAlign = "center";
				ctx.fillText('G A M E O V E R',195,150);
			}

		}

		function upt(){

			if(!pause)
			{
				if(!gameOver){ 

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
						score += 10;
						speed += 0.3;
					}

					for (var i = walls.length - 1; i >= 0; i--) {
						if(player.intersects(walls[i])){
							gameOver = true;
							setTimeout('reset()',3000);
						}
					}
				
				}
			}
		}

		//se repite mucho
		function run(){
			window.requestAnimationFrame(run)
			upt();
			paint(ctx);
		}

		function reset(){
			gameOver = false;
			lastPress = RIGHT;
			spped = null;
			speed = 2;
			score = 0;

			player.x = 10;
			player.y = 10;
		}

		function init(){
			canvas = document.getElementById('canvas');
			ctx = canvas.getContext('2d');
			ctx.clearRect(0,0, canvas.width, canvas.height);

			player = new Rectangle(x,y,10,10,"#00FF00")
			food = new Rectangle((canvas.width/2-10),(canvas.height/2-10),10,10,"red")

			walls.push(new Rectangle(80,80,10,10,"gray")) 
			walls.push(new Rectangle(80,210,10,10,"gray")) 
			walls.push(new Rectangle(290,80,10,10,"gray")) 
			walls.push(new Rectangle(290,210,10,10,"gray"))  
			
			run();
		}

		window.addEventListener('load',init,false);  

		document.addEventListener('keydown',function(e){
			if(e.keyCode== 87 || e.keyCode == 38 && !pause){
				lastPress = UP;
			}
			if(e.keyCode== 83 || e.keyCode == 40 && !pause){
				lastPress = DOWN;
			}
			if(e.keyCode== 65 || e.keyCode == 37 && !pause){
				lastPress = LEFT;
			}
			if(e.keyCode== 68 || e.keyCode == 39 && !pause){
				lastPress = RIGHT;
			}
			if(e.keyCode==32){
				pause = (pause)?false:true;
			}
		})
		 
		function random(x){
			return Math.floor(Math.random()*x)
		}
	</script>
</body>
</html>
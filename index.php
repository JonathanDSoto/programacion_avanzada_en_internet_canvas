<!DOCTYPE html>
<html>
<head>
	<title>Canvas</title>
	<style type="text/css">
		.content{
			width: 80%;
			min-height: 200px;
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
		var lastPress = 65, speed = 2, player = null, food =null;
		var score = 0, pause = false, walls = new Array();
		var gameOver = false;
		var body = new Image(), apple = new Image();
		var eat = new Audio(), end = new Audio(), ps = new Audio();
		var lastUpdate = 0, FPS, frames, acumDelta=0;

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
			player.paint(ctx);
			//ctx.drawImage(body,player.x,player.y);

			ctx.fillStyle = "red";
			food.paint(ctx);
			//ctx.drawImage(apple,food.x,food.y);

			ctx.fillStyle = "white";
			ctx.textAlign = "left";
			ctx.fillText("SCORE: "+score+" SPEED: "+speed+" FPS: "+FPS,10,10);

			ctx.fillStyle = "#9E9A99";
			for (var i = walls.length - 1; i >= 0; i--) {
				walls[i].paint(ctx);
			}

			if(pause && !gameOver){
				ctx.fillStyle = "white";
				ctx.textAlign = "center"; 
				ctx.fillText(" P A U S E ",240,120);
			} 
			if(gameOver){
				ctx.fillStyle = "white";
				ctx.textAlign = "center";
				ctx.fillText(" G A M E O V E R ",230,120);
			} 
		}

		function act(){ 

			if(!pause){ 

				if(!gameOver){ 

					if(lastPress==65 || lastPress == 37){ //izquierda
						player.x -= speed;
						if (player.x < 0 ) {
							player.x = canvas.width;
						}
					}

					if(lastPress==68 || lastPress == 39){ //derecha
						player.x += speed;
						if(player.x > canvas.width){
							player.x = -10;
						}
					}

					if(lastPress==87 || lastPress == 38){ //arriba
						player.y -= speed;
						if (player.y < 0) {
							player.y = canvas.height;
						}
					}

					if(lastPress==83 || lastPress == 40){ //abajo
						player.y += speed;
						if (player.y > canvas.height) {
							player.y = -10;
						}
					} 

					if(player.intersects(food)){
						food.x = random(canvas.width);
						food.y = random(canvas.height);
						score += 10;
						speed += 0.2; 
						eat.play();
					}

					for (var i = walls.length - 1; i >= 0; i--) {
						if(walls[i].intersects(player)){
							gameOver = true;
							lastPress = null; 
							setTimeout('reset()',3000);
							end.play();
						}
					}

				}
			}
		}

		function run(){
			window.requestAnimationFrame(run);
			act();
			paint(ctx);

			var now = Date.now(); 
				deltaTime = (now - lastUpdate) / 1000;
			if(deltaTime > 1){
				deltaTime = 0;
			}
			lastUpdate = now;

			frames += 1;
			acumDelta += deltaTime;
			if(acumDelta>1){
				FPS = frames;
				frames = 0;
				acumDelta -=1;
			}
		}

		function reset()
		{
			gameOver = false;
			lastPress = 65;
			speed = 2;
			score = 0;

			player.x = 0;
			player.y = 0;

			food.x = 70;
			food.y = 50;
		}

		function init(){
			canvas = document.getElementById('canvas');
			ctx = canvas.getContext('2d');

			body.src = "assets/head.png";
			apple.src = "assets/apple.png";

			player = new Rectangle(0,0,10,10,body);
			food = new Rectangle(70,50,10,10,apple);

			walls.push(new Rectangle(100,50,10,10,null));
			walls.push(new Rectangle(100,200,10,10,null));

			walls.push(new Rectangle(400,50,10,10,null));
			walls.push(new Rectangle(400,200,10,10,null)); 

			eat.src = "assets/crunch.mp3"; 
			end.src = "assets/game_over.mp3";
			ps.src = "assets/pause.mp3";
			

			run();
		} 
		
		window.addEventListener('load',init,false);
		
		document.addEventListener('keydown',function(e){ 
			if(e.keyCode==65 || e.keyCode ==  37 || e.keyCode ==  68 || e.keyCode ==  39 || e.keyCode ==  87 || e.keyCode ==  38 || e.keyCode ==  83 || e.keyCode ==  40 )
				lastPress = e.keyCode; 
			else if(e.keyCode==32){

				pause = (pause)?false:true; 
				ps.play();
			}
		})

		function test(){
			console.log("Test")
		}

		function Rectangle(x,y,w,h,image){
			this.x = x;
			this.y = y;
			this.w = w;
			this.h = h;
			this.image = image;

			this.paint = function(ctx){
				if(image!=null){
					try{
						ctx.drawImage(this.image,this.x,this.y);
					}catch(e){
						ctx.fillRect(this.x,this.y,this.w,this.h);
					}
					
				}else
					ctx.fillRect(this.x,this.y,this.w,this.h);
			}

			this.intersects = function(rect){
				if (this.x < rect.x + rect.w && this.x + this.w > rect.x && 
					this.y < rect.y + rect.h && this.y + this.h > rect.y){
					return true;
				}
			}
		}

		function random(m){
			return Math.floor(Math.random()*m);
		}
	</script>
</body>
</html>








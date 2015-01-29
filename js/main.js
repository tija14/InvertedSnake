var pixelSize = 15;
var canvas = $("#canvas");
var score = document.getElementById("score");
var points;
var count = 0;

function SnakePiece(canvas, part, count){

	this.x = 0; 
	this.y = 0;
	this.velX = 1; 
	this.velY = 0;
	this.part = part;
	this.canvas = canvas;
	this.count = count;

	if(this.count == 0){
	this.snake =  $("<div id='snake'></div>");
	
	}
	else if(this.count == 5){
	this.snake =  $("<div id='snake2'></div>");
	
	}
	else if(this.count == 10){
	this.snake =  $("<div id='snake3'></div>");
	
	}
	else if(this.count == 15){
	this.snake =  $("<div id='snake4'></div>");
	
	}
	else if(this.count == 20){
	this.snake =  $("<div id='snake5'></div>");
	
	}
	else if(this.count == 25){
	this.snake =  $("<div id='snake6'></div>");
	
	}
	else if(this.count == 30){
	this.snake =  $("<div id='snake7'></div>");
	
	}
	else if(this.count == 35){
	this.snake =  $("<div id='snake8'></div>");
	
	}
	else if(this.count == 40){
	this.snake =  $("<div id='snake9'></div>");
	
	}
	else if(this.count == 45){
	this.snake =  $("<div id='snake10'></div>");
	
	}
	
	else{
		this.snake = $("<div id='snake1'></div>");
		
	}
	
	this.snake.appendTo(canvas); 
	
}

SnakePiece.prototype = {
	update: function(){
		

			var x = this.x + this.velX;
			var y = this.y + this.velY;
			  if(y * pixelSize >= this.canvas.innerHeight()) y = 0;
			  if(y * pixelSize < 0)  y = 25;
			  if(x * pixelSize +10 >= this.canvas.innerWidth()) x = 0;
 			  if(x * pixelSize < 0) x = 65;

		this.move(x, y);

		
		},
		direction: function(vx, vy){
			this.velX = vx;
			this.velY = vy;
		},

		move: function(x, y){
			
			if(this.part) this.part.move(this.x, this.y);
			this.x = x;
			this.y = y;
	
			this.snake.css({
				left: this.x * pixelSize ,
				top: this.y * pixelSize,

			})
			
		},
		addPart: function(){
			var lastPart = this.part;
			
			this.part = new SnakePiece(this.canvas, lastPart, count);
			count++;
		},
	};




function setFood(){
	

		this.food = $("<div class='food'></div>");
		this.food.appendTo(canvas);
		this.x = 0;
		this.y = 0;
		
		}

setFood.prototype = {
	update: function (){
		this.x = random(0, canvas.innerWidth() / pixelSize);
		this.y = random(0, canvas.innerHeight() / pixelSize);
	
		this.food.css({
				left: this.x* pixelSize,
				top: this.y* pixelSize,

		});
	},
}
	

function random (min, max) {
		return Math.floor(Math.random()*(max-min)+min);
	}



$(function (){



	var canvas = $("#canvas");
	head = new SnakePiece(canvas);
	
	points = 0;
	score.innerHTML = "Poäng: " + points;
	var food = new setFood();
	food.update();
	$("#mute").click(function() {
		if(audio.paused === false){
			
 			audio.pause(); 
 			$(this).attr('src', 'style/speaker.png');

 		}
 		else{
 			
 			audio.play(); 
 			$(this).attr('src', 'style/mute.png');
 			
 		}
		
	});
	
	var snake = $("#snake1");	
	var audio = $("audio")[0];
	audio.play();
	var scoreSound = $("#audio2")[0];  
  
	 var interval = setInterval(function (){
		head.update();

		if(head.x == food.x && head.y == food.y){

			food.update();
			head.addPart();
			points++;
			score.innerHTML = "Poäng: ";
			score.innerHTML += points;
			scoreSound.play();

		}
	var snake1 = $("#snake");	
	var snake2 = $("#snake2");
	var snake3 = $("#snake3");
	var snake4 = $("#snake4");
	var snake5 = $("#snake5");
	var snake6 = $("#snake6");
	var snake7 = $("#snake7");
	var snake8 = $("#snake8");
	var snake9 = $("#snake9");
	var snake10 = $("#snake10");
	
		if(snake.offset().left == snake1.offset().left && snake.offset().top == snake1.offset().top
			|| snake.offset().left == snake2.offset().left && snake.offset().top == snake2.offset().top
			|| snake.offset().left == snake3.offset().left && snake.offset().top == snake3.offset().top
			|| snake.offset().left == snake4.offset().left && snake.offset().top == snake4.offset().top
			|| snake.offset().left == snake5.offset().left && snake.offset().top == snake5.offset().top
			|| snake.offset().left == snake6.offset().left && snake.offset().top == snake6.offset().top
			|| snake.offset().left == snake7.offset().left && snake.offset().top == snake7.offset().top
			|| snake.offset().left == snake8.offset().left && snake.offset().top == snake8.offset().top
			|| snake.offset().left == snake9.offset().left && snake.offset().top == snake9.offset().top
			|| snake.offset().left == snake10.offset().left && snake.offset().top == snake10.offset().top)
			{
			
			alert("Du dog..ditt slutresultat blev: " + points + 
				" tryck på f5 för att spela igen");
			window.clearInterval(hej);
		}
			
		
		}, 50);

	

 $(document.body).on("keydown", function(e){
 	switch(e.which){
 		case 37: //right(inverted)
 		if(head.velX != -1) head.direction(1, 0); //(-1, 0)
 		break;
 		case 38: //down
 		if(head.velY != -1) head.direction(0, 1); //0, -1
 		break;
 		case 39: // left
 		if(head.velX != 1)head.direction(-1, 0); // 1, 0
 		break;
 		case 40: //up
 		if(head.velY != 1)head.direction(0, -1); // 0, 1
 		break;
 		case 80:
 		window.clearInterval(interval);
 		break;
 		case 77: 
 		if(audio.paused == false){
 			audio.pause(); 
 		}
 		else{
 			audio.play(); 
 		}
 		break;

 	}


 	// Prevent key-press scrolling
window.addEventListener("keydown", function(e) {
    // space and arrow keys
    if([32, 37, 38, 39, 40].indexOf(e.keyCode) > -1) {
        e.preventDefault();
    }
}, false);


	
 	
 	
 });
});

var canvas = require("canvas");
var udoc = require("udoc");

function move_anim(number, left, top){
	var current_anim = 'anim_' + number;
  	canvas.set(current_anim, {"show-when":'true', "left": left, "top": top});
  	setTimeout(function(){canvas.set(current_anim, {"show-when":'false'}); }, 1000); 
}

function move_anim_1(){
    	move_anim(1_1, 576, 190);
    	move_anim(1_2, 294, 0);
}

function move_anim_2(){
    move_anim(2, 568, 282);
}

function move_anim_3(){
  	move_anim(3, 290, 202);
}

function move_anim_4(){
  	move_anim(4, 376, 292);
}

function move_anim_5(){
  move_anim(5, 138, 247); 
}
function move_anim_6(){
  move_anim(6, 0, 128);
}

function move_anim_7(){
  move_anim(7_1, 426, 133);
  move_anim(7_2, 469, 99);
}

function move_anim_8(){
  move_anim(8_1, 699, 196);
  move_anim(8_2, 136, 0);
}

function move_anim_9(){
  move_anim(9, 161, 227); 
}

function move()
{
  	setTimeout(function(){ move_anim_1(); }, 100);
 	setTimeout(function(){ move_anim_2(); }, 1000);
   	setTimeout(function(){ move_anim_3(); }, 2000);
   	setTimeout(function(){ move_anim_4(); }, 3000);
   	setTimeout(function(){ move_anim_5(); }, 4000);
   	setTimeout(function(){ move_anim_6(); }, 5000);
   	setTimeout(function(){ move_anim_7(); }, 6000);
    setTimeout(function(){ move_anim_8(); }, 7000);
   	setTimeout(function(){ move_anim_9(); }, 8000);
}
exports = {
	main: function (){
		move()
	}
}
var canvas = require("canvas");
var udoc = require("udoc");
function move_anim_1(){
  	canvas.set('anim_1_1', {"show-when":'true', "left": 576, "top": 190});
  	canvas.set('anim_1_2', {"show-when":'true', "left": 294, "top": 0});
  	setTimeout(function(){canvas.set('anim_1_1', {"show-when":'false'}); }, 1000); 
  	setTimeout(function(){canvas.set('anim_1_2', {"show-when":'false'}); }, 1000); 
}

function move_anim_2(){
  	canvas.set('anim_2', {"show-when":'true', "left": 568, "top": 282});
  	setTimeout(function(){canvas.set('anim_2', {"show-when":'false'}); }, 1000); 
}

function move_anim_3(){
  	canvas.set('anim_3', {"show-when":'true', "left": 290, "top": 202});
  	setTimeout(function(){canvas.set('anim_3', {"show-when":'false'}); }, 1000); 
}

function move_anim_4(){
  	canvas.set('anim_4', {"show-when":'true', "left": 376, "top": 292});
  	setTimeout(function(){canvas.set('anim_4', {"show-when":'false'}); }, 1000); 
}

function move_anim_5(){
  	canvas.set('anim_5', {"show-when":'true', "left": 138, "top": 247});
  	setTimeout(function(){canvas.set('anim_5', {"show-when":'false'}); }, 1000); 
}
function move_anim_6(){
  	canvas.set('anim_6', {"show-when":'true', "left": 0, "top": 128});
  	setTimeout(function(){canvas.set('anim_4', {"show-when":'false'}); }, 1000); 
}

function move_anim_7(){
  	canvas.set('anim_7_1', {"show-when":'true', "left": 426, "top": 133});
  	setTimeout(function(){canvas.set('anim_7_1', {"show-when":'false'}); }, 1000); 
  	canvas.set('anim_7_2', {"show-when":'true', "left": 469, "top": 99});
  	setTimeout(function(){canvas.set('anim_7_2', {"show-when":'false'}); }, 1000); 
}

function move_anim_8(){
  	canvas.set('anim_8_1', {"show-when":'true', "left": 699, "top": 196});
  	setTimeout(function(){canvas.set('anim_8_1', {"show-when":'false'}); }, 1000); 
    canvas.set('anim_8_2', {"show-when":'true', "left": 136, "top": 0});
  	setTimeout(function(){canvas.set('anim_8_2', {"show-when":'false'}); }, 1000); 
}

function move_anim_9(){
  	canvas.set('anim_9', {"show-when":'true', "left": 161, "top": 227});
  	setTimeout(function(){canvas.set('anim_9', {"show-when":'false'}); }, 1000); 
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
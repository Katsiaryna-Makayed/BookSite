var canvas = require("canvas");
var udoc = require("udoc");


function move1(){
  	canvas.set('move1', {"show-when":'true', "left": 100});
  	setTimeout(function(){canvas.set('anim_2', {"show-when":'false'}); }, 1000); 
}


function move()
{
  var h = udoc.get('h2'); 
  while(h != 10){
   		setTimeout(function(){ 
          move1();
          canvas.set('move1', {"show-when":'true', "left": 20});
        }, 0+(1000*h));
          h++;
      }
}
exports = {
	main: function (){
		move();
	}
}

var canvas = require("canvas");
var udoc = require("udoc");


function move1(){
    canvas.set('move1', {"show-when":'true', "left": 100});
    setTimeout(function(){canvas.set('anim_2', {"show-when":'false'}); }, 1000); 
}


function move()
{
  var h = 0;
  while(h != 5){
      setTimeout(function(){ 
          move1();
          canvas.set('move1', {"show-when":'true', "left": 20});
        }, 0+(1000*h));
          h++;
      }
}
exports = {
  main: function (){
    move();
  }
}
var canvas = require("canvas");
var udoc = require("udoc");

function move_anim_1(){
    canvas.set('move1', {"show-when":'true', "left": 520, "top": 10});
    setTimeout(function(){
      canvas.set('move1', {"show-when":'true', "left": 20, "top": 20});
       }, 1000); 

}

function move()
{
  var h = 0;
  while(h != 5)
  {
    setTimeout(function(){ move_anim_1();}, 0+(1000*h));
          h++;
      }

}
exports = {
  main: function (){
    move()
  }
}
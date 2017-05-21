for(var i = 1; i<121;i++) {
          var top = Math.floor(Math.random()*382);
          var left = Math.floor(Math.random()*795);
          var elp = 'or_point_';
          var current_elp = elp +i;
          canvas.set(current_elp, {
              top: top,
              left: left
          }); 
      } 

      ,


function move_anim(number, left, top){
	var current_anim = 'anim_' + number;
  	canvas.set(current_anim, {"show-when":'true', "left": left, "top": top});
  	setTimeout(function(){canvas.set(current_anim, {"show-when":'false'}); }, 1000); 
}

for(var i = 1; i<9;i++) {
	var move = 'move_anim_' + i;
	setTimeout(function(){ move(); }, i*1000);
}


exports = {
	main: function (){
      while(1){	
      	move()
      }
	}
}
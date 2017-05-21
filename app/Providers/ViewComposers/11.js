var canvas = require("canvas");
var udoc = require("udoc");

function move_anim(number, left, top, left_1, top_1){
  var current_anim = 'anim_' + number;
    canvas.set(current_anim, {"show-when":'true', "left": left, "top": top});
    setTimeout(function(){canvas.set(current_anim, {"show-when":'false', "left": left_1, "top": top_1}); }, 1000); 
}

function move_anim_1(){
    move_anim('1_1', 576, 190, 519, 349);
    move_anim('1_2', 294, 0, 660, 179);
}

function move_anim_2(){
    move_anim(2, 568, 282, 549, 202);
}

function move_anim_3(){
    move_anim(3, 290, 202, 290, 342);
}

function move_anim_4(){
    move_anim(4, 376, 292, 290, 142);
}

function move_anim_5(){
    move_anim(5, 138, 247, 194, 344); 
}
function move_anim_6(){
    move_anim(6, 0, 128, 104, 188);
}

function move_anim_7(){
    move_anim('7_1', 426, 133, 383, 337);
    move_anim('7_2', 469, 99, 469, 290);
}

function move_anim_8(){
    move_anim('8_1', 699, 196, 787, 349);
    move_anim('8_2', 136, 0, 487, 126);
}

function move_anim_9(){
    move_anim('9_1', 161, 227, 295, 340); 
    move_anim('9_2', 657, 291, 677, 212); 
}
function move_anim_10(){
    move_anim(10, 250, 0, 117, 169);
}

function move_anim_11(){
    move_anim(11, 417, 0, 84, 356);
}

function move_anim_12(){
    move_anim(12, 513, 167, 515, 349); 
}
function move_anim_13(){
    move_anim(13, 371, 351, 515, 136);
}
function move_anim_14(){
    move_anim(14, 674, 320, 674, 354);
}

function move_anim_15(){
    move_anim(15, 799, 201, 674, 238);
}

function move_anim_16(){
    move_anim(16, 98, 231, 327, 348); 
}
function move_anim_17(){
    move_anim(17, 592, 353, 106, 221);
}
function move_anim_18(){
    move_anim(18, 636, 0, 754, 362);
}
function move()
{
    setTimeout(function(){ move_anim_1(); }, 0);
  setTimeout(function(){ move_anim_2(); }, 1000);
    setTimeout(function(){ move_anim_3(); }, 2000);
    setTimeout(function(){ move_anim_4(); }, 3000);
    setTimeout(function(){ move_anim_5(); }, 4000);
    setTimeout(function(){ move_anim_6(); }, 5000);
    setTimeout(function(){ move_anim_7(); }, 6000);
    setTimeout(function(){ move_anim_8(); }, 7000);
    setTimeout(function(){ move_anim_9(); }, 8000);
    setTimeout(function(){ move_anim_10(); }, 9000);
    setTimeout(function(){ move_anim_11(); }, 10000);
    setTimeout(function(){ move_anim_12(); }, 11000);
    setTimeout(function(){ move_anim_13(); }, 12000);
    setTimeout(function(){ move_anim_14(); }, 13000);
    setTimeout(function(){ move_anim_15(); }, 14000);
    setTimeout(function(){ move_anim_16(); }, 15000);
    setTimeout(function(){ move_anim_17(); }, 16000);
    setTimeout(function(){ move_anim_18(); }, 17000);
}

exports = {
  main: function (){
    move();
  }
}
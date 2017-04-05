@extends('layouts.app')

@section('content')
<link href="{{asset('public/css/carousel.css')}}" type="text/css" rel="stylesheet">
<div class="container">
      
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
 
        <div class="carousel-inner">
            <div class="item active">
                <img src = "public/img/car1.jpg" alt = "Картинка" >
                    <div class="carousel-caption">
                        <h3>Лучшие книги</h3>
                        <p>Текст про книги</p>
                    </div>
                </div>
                     
                <div class="item">
                    <img src = "public/img/car2.jpg" alt = "Картинка" >
                    <div class="carousel-caption">
                        <h3>Лучшие книги</h3>
                        <p>Текст про книги</p>
                    </div>
                </div>
                     
                <div class="item">
                    <img src = "public/img/car3.jpg" alt = "Картинка" >
                    <div class="carousel-caption">
                        <<h3>Лучшие книги</h3>
                        <p>Текст про книги</p>
                    </div>
                </div>
            </div>
 
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
		<p>Вывод картинок со скидками</p>
		<p>Новые поступления</p>
		<p>Популярные товары</p>
		
		
		
		
		
		  <img src = "public/img/book1.jpg" alt = "Картинка" width="200"  height="150" >
		  
		  
		
	  
	  
	  
	  
</div>
@endsection

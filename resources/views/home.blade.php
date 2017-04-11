@extends('layouts.app')
<link rel="stylesheet" href="{{asset('public/css/carousel.css')}}">
@section('content')

<div class="container">
      
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
 
        <div class="carousel-inner">
            <div class="item active">
                <img src = "public/img/car1.jpg" alt = "Картинка">
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
	<div class="row">
		<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Total sales</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<img src = "public/img/sale1.png" alt = "Картинка" height="150" width="150">
					<img src = "public/img/sale1.png" alt = "Картинка" height="150" width="150">
					<img src = "public/img/sale1.png" alt = "Картинка" height="150" width="150">
					<img src = "public/img/sale1.png" alt = "Картинка" height="150" width="150">
				</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Новые поступления</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<img src = "public/img/book2.png" alt = "Картинка" height="150" width="150">
					<img src = "public/img/book2.png" alt = "Картинка" height="150" width="150">
					<img src = "public/img/book2.png" alt = "Картинка" height="150" width="150">
					<img src = "public/img/book2.png" alt = "Картинка" height="150" width="150">
				</div>
			</div>
		</div>
		</div>
		<div class="col-md-4 ">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Популярные товары</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<img src = "public/img/book1.png" alt = "Картинка" height="150" width="150">
					<img src = "public/img/book1.png" alt = "Картинка" height="150" width="150">
					<img src = "public/img/book1.png" alt = "Картинка" height="150" width="150">
					<img src = "public/img/book1.png" alt = "Картинка" height="150" width="150">
				</div>
			</div>
		</div>
	</div>
		
		
		
		
		
		
		  
		  
		
	  
	  
	  
	  
</div>
@endsection